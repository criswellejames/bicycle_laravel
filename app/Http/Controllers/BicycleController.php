<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BicycleController extends Controller
{


	public function index(Request $request){
		print $this->handlePedals($request);
		print $this->adjustSeat($request);
		print $this->checkBrakes($request);
		print $this->inflateTires($request);


		return "this is index";
	}

	public function handlePedals(Request $request)
    {
        try {
            // Logic for handling pedals
            return "Pedals handled successfully<br />";
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function adjustSeat(Request $request)
    {
        try {
            // Logic for adjusting the seat
            return 'Seat adjusted successfully<br />';
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function checkBrakes(Request $request)
    {
        try {
            // Logic for checking brakes
            return 'Brakes checked successfully<br />';
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function inflateTires(Request $request)
    {
        try {
            // Logic for inflating tires
            return 'Tires inflated successfully<br />';
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}