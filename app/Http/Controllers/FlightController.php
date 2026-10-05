<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AmadeusService;

class FlightController extends Controller
{
    protected $amadeusService;

    public function __construct(AmadeusService $amadeusService)
    {
        $this->amadeusService = $amadeusService;
    }

    public function flight(Request $request)
    {
        return view('booking.flight');
    }

    public function searchFlight(Request $request)
    {
        // return $request->all();
        $accessToken = $this->amadeusService->getAccessToken(env('AmadeusApiKey'), env('AmadeusSecretKey'));
        // dd($accessToken);

        // $flights = $this->amadeusService->searchFlights(
        //     $accessToken,
        //     $request->origin,
        //     $request->destination,
        //     $request->departure_date
        // );

        $flights = $this->amadeusService->searchFlights(
            // $accessToken,
            // 'IXC',
            // 'DEL',
            // '2024-03-29',
            // // '2024-03-01',
            // null,
            // '1',
            // 'INR',
            // null
            // $accessToken,
            // $request->leaving_search,
            // $request->goingto_search,
            // $request->choosedate_start,
            // $request->choosedate_end ,
            // $request->occupant,
            // 'INR',
            // null
            $accessToken,
            $request->leaving_search_hidden,
            $request->goingto_search_hidden,
            $request->choosedate_start,
            $request->choosedate_end ,
            $request->occupant,
            'INR',
            null
        );

        
        // return response()->json($flights);

        return view('booking.flight',compact('flights'));
    }

    public function searchCityCode(Request $request)
    {
        $accessToken = $this->amadeusService->getAccessToken(env('AmadeusApiKey'), env('AmadeusSecretKey'));
        // dd($accessToken);

        // $flights = $this->amadeusService->searchFlights(
        //     $accessToken,
        //     $request->origin,
        //     $request->destination,
        //     $request->departure_date
        // );

        $flights = $this->amadeusService->searchCityCodes(
            $accessToken,
            // 'CITY',
            'AIRPORT',
            $request->searchTerm
        );

        return response()->json($flights);
    }
}

