<?php

namespace App\Http\Controllers;

use File;

class SopController extends Controller
{
    //
    public function anz()
    {
        // Get the path to the JSON file
        $filePath = public_path('data.json'); 
        // Check if the file exists
        if (File::exists($filePath)) {
            // Read the JSON file
            $jsonData = File::get($filePath);

            // Parse the JSON data into an array
            $data = json_decode($jsonData, true);
            return $data;
            // Pass the data to the Blade view
            return view('sop.anz', ['application' => $data]);
        } else {
            // Handle the case where the file doesn't exist
            return 'view can not be found';
        }
    }
    public function anzHL()
    {
        return view('sop.anz-hl');
    }
    public function asb()
    {
        return view('sop.asb');
    }
    public function bnz()
    {
        return view('sop.bnz');
    }
    public function default()
    {
         // Get the path to the JSON file
         $filePath = public_path('data.json'); 
         // Check if the file exists
         if (File::exists($filePath)) {
             // Read the JSON file
             $jsonData = File::get($filePath);
 
             // Parse the JSON data into an array
             $application = json_decode($jsonData, true);
             // Pass the data to the Blade view
             $data = [
                'data' => $application
             ];
             return view('sop.default', ['data' => $data]);
         } else {
             // Handle the case where the file doesn't exist
             return 'view can not be found';
         }
   
    }
}
