<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\Country;
use App\Repositories\CustomerRepositories\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // dependency injeciton for Respositories Design Pattern
    protected $CustomerRepository;
    private $responseController;

    // constructor and injecting Respositories
    public function __construct(CustomerRepositoryInterface $CustomerRepository, ResponseController $responseController)
    {
        $this->CustomerRepository = $CustomerRepository;
        $this->responseController = $responseController;
    }
    // dummy static IDS: product id = 4772854497463 & order id = 4341443952823 
    public function bringShopifyCustomerDetails(Request $request)
    {
        $data = $request->all();
        // $response = $this->orderRepository->verifyZipCode($data);
        $response = $this->CustomerRepository->bringCustomeDetails($data);
        return $response;
    }

    public function bringCountriesStatesData()
    {
        $countries = Country::with('states')->get();

        return response()->json($countries);
        //     // Start the database transaction
        //     DB::beginTransaction();

        //     try {
        //         // Read the JSON file from the 'public/assets' directory
        //         $jsonData = Storage::disk('public')->get('countries.json');
        //         $countries = json_decode($jsonData, true); // decode the JSON into an associative array
        //         // Iterate through the country data
        //         foreach ($countries as $countryData) {
        //             // Create a new country instance and save it
        //             $country = Country::create([
        //                 'name' => $countryData['name'],
        //                 'iso' => $countryData['iso2'], // or 'iso3' depending on what you need
        //             ]);

        //             // Check if states are available for the country
        //             if (isset($countryData['states']) && is_array($countryData['states'])) {
        //                 // Prepare states' data associated with the country
        //                 $states = array_map(function ($state) use ($country) {
        //                     return [
        //                         'country_id' => $country->id,
        //                         'name' => $state['name'],
        //                         'state_code' => $state['state_code'],
        //                     ];
        //                 }, $countryData['states']);

        //                 // Insert states for the current country
        //                 State::insert($states);
        //             }
        //         }

        //         DB::commit();
        //         return response()->json(['message' => 'Data imported successfully'], 200);
        //     } catch (\Exception $e) {
        //         DB::rollBack();
        //         return response()->json(['message' => 'Data import failed', 'error' => $e->getMessage()], 500);
        //     }
    }

}
