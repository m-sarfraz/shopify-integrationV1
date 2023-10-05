<?php

namespace App\Http\Controllers;

class ResponseController extends Controller
{
    // function for managing the success response
    public function successResponse($data)
    {
        return response()->json(['data' => $data]);
    }

    // function for managing the error response
    public function errorResponse($message)
    {
        return response()->json(['error' => $message]);
    }

}
