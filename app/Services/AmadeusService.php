<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;
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

        return $responseData = json_decode($response->getBody()->getContents(), true);

        $flights = collect($responseData['data']);

// Get the total number of records
return $totalRecords = $responseData['meta']['count'];

// Create an empty array to store flight information
$flightInformation = [];

// Iterate over each flight entry
$flights->each(function ($flight) use (&$flightInformation) {
    $flightData = [
        'oneWay' => $flight['oneWay'],
        'lastTicketingDate' => $flight['lastTicketingDate'],
        'numberOfBookableSeats' => $flight['numberOfBookableSeats'],
        'price' => $flight['price'],
        'includedCheckedBagsOnly' => $flight['pricingOptions']['includedCheckedBagsOnly'],
        'segments' => []
    ];

    // Iterate over each itinerary segment
    foreach ($flight['itineraries'] as $itinerary) {
        foreach ($itinerary['segments'] as $segment) {
            $flightData['segments'][] = [
                'departure' => $segment['departure'],
                'arrival' => $segment['arrival'],
                'carrierCode' => $segment['carrierCode'],
                // Add more segment information as needed
            ];
        }
    }

    $flightInformation[] = $flightData;
});

return $flightInformation;


        // return $this->processFlightData($response); 
        
    }

    public function processFlightData($responseData)
    {

        $flights = collect([]);

        foreach ($responseData['data'] as $flightData) {
            $flight = [
                'id' => $flightData['id'],
                'source' => $flightData['source'],
                'numberOfBookableSeats' => $flightData['numberOfBookableSeats'],
                'price' => $flightData['price']['total'],
                'grandTotal' => $flightData['price']['grandTotal'],
                'base' => $flightData['price']['base'],
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
        // return [$flights,$responseData['meta']['count']];
        
    }


    public function searchCityCodes($accessToken, $origin, $searchTerm)
    {

        $this->client = new Client([
            'base_uri' => 'https://test.api.amadeus.com/v1/',
        ]);

        $response = $this->client->get('reference-data/locations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
            'query' => [
                'subType' => $origin,
                'keyword' => $searchTerm
                
            ],
        ]);

        return $responseData = json_decode($response->getBody()->getContents(), true);
        // if ($response->successful()) {
        //     $data = $response->json();
        //     $cityCode = $data['data'][0]['iataCode'] ?? null;
        //     return response()->json(['cityCode' => $cityCode]);
        // } else {
        //     return response()->json(['error' => 'Failed to fetch city code'], 500);
        // }

        //    return $responseData = json_decode($response->getBody()->getContents(), true);

            
        // return $this->processFlightData($responseData); 
        
    }
       
}
