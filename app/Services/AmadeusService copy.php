<?php

namespace App\Services;

use GuzzleHttp\Client;

class AmadeusService
{
    protected $client;
    protected $accessToken;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://test.api.amadeus.com/v1/',
        ]);
    }

    public function getAccessToken($clientId, $clientSecret)
    {
        $response = $this->client->post('security/oauth2/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true)['access_token'];
    }

    public function searchFlights($accessToken, $origin, $destination, $departureDate,$returnDate,$adults,$currencyCode,$excludedAirlineCodes)
    {

        $this->client = new Client([
            'base_uri' => 'https://test.api.amadeus.com/v2/',
        ]);

        $response = $this->client->get('shopping/flight-offers', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
            'query' => [
                'originLocationCode' => $origin,
                'destinationLocationCode' => $destination,
                'departureDate' => $departureDate,
                'returnDate' => $returnDate,
                'adults' => $adults,
                'currencyCode'=>$currencyCode,
                'excludedAirlineCodes'=>$excludedAirlineCodes
                
            ],
        ]);

           $responseData = json_decode($response->getBody()->getContents(), true);

        // return gettype($responseData['data']);
        // $collection = collect($responseData['data']);

        //     $modifiedCollection = $collection->map(function ($flight) {
        //     // Manipulate each item as needed
        //      return [
        //         'id' => $flight['id'],
        //         'source' => $flight['source'],
        //         'numberOfBookableSeats' => $flight['numberOfBookableSeats'],
        //         // Add more fields as needed
        //     ];
        //     });
        // return $modifiedCollection;


        $flights = collect([]);

        foreach ($responseData['data'] as $flightData) {
            $flight = [
                'id' => $flightData['id'],
                'source' => $flightData['source'],
                'numberOfBookableSeats' => $flightData['numberOfBookableSeats'],
                'price' => $flightData['price']['total'],
                'itineraries' => collect([]), // Initialize as a collection
            ];

            foreach ($flightData['itineraries'] as $itinerary) {
                $segments = collect([]);

                foreach ($itinerary['segments'] as $segment) {
                    $segments->push([
                        'departure' => [
                            'iataCode' => $segment['departure']['iataCode'],
                            'at' => $segment['departure']['at'],
                        ],
                        'arrival' => [
                            'iataCode' => $segment['arrival']['iataCode'],
                            'at' => $segment['arrival']['at'],
                        ],
                        'duration' => $segment['duration'],
                    ]);
                }

                $flight['itineraries']->push([
                    'duration' => $itinerary['duration'],
                    'segments' => $segments,
                ]);
            }

            $flights->push($flight);
        }

        return $flights;
        // $this->processFlightData($responseData);
        

        // // $responseData = json_decode($response, true);
        // // $flightOffers = $responseData['data'];

        // return json_decode($response->getBody()->getContents(), true);
    }

    public function processFlightData($response)
    {

        // return $response['data'];
        $flights = collect($response['data'])->map(function ($flight) {
            return [
                'id' => $flight['id'],
                'source' => $flight['source'],
                'numberOfBookableSeats' => $flight['numberOfBookableSeats'],
                // Add more fields as needed
            ];
        });

        return $flights;
        // return $flights->json();
        // return json_decode($flights, true);
        
    }
       
}
