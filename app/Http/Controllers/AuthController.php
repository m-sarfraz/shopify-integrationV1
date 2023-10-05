<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseController;
use App\Mail\ForgotPassMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use Str;
use Facebook\Facebook;
use Validator;

class AuthController extends Controller
{
    protected $responseController;
    public function __construct(ResponseController $responseController)
    {
        $this->responseController = $responseController;
    }
    //function for registering the user after validations
    public function register(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed|min:1',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $this->responseController->sendError($error, 'There is an Issue!', 422);

        }
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(30);
        // Get all the request data
        $data = $request->all();
        // Remove the 'password_confirmation' field from the data array
        unset($data['password_confirmation']);

        // Create the user without 'password_confirmation' field
        $user = new User();
        $user->email = $request['email'];
        $user->password =  $request['password'] ;
        $user->save();

        $token = $user->createToken('Token')->accessToken;
        $response = ['token' => $token];
        return $this->responseController->sendResponse($response, 'User has been Created Successfully', 200);
    }

    //function for logging in the user after validations
    public function login(Request $request)
    {
     
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->all(); 
            return $this->responseController->sendError($error, 'There is an Issue!', 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Token')->accessToken;
                $response = ['token' => $token];
                return $this->responseController->sendResponse($response, 'User has been Logind in Successfully', 200);

            } else {
                return $this->responseController->sendError('Given Credentials do not match our record', 'There is an Issue!', 404);

            }
        } else {
            $response = ["message" => 'User does not exist'];
            return $this->responseController->sendError('No Record Exist of Current User', 'There is an Issue!', 400);

        }
    }

    // function for logging out the user
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string', 
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->all(); 
            return $this->responseController->sendError($error, 'There is an Issue!', 422);
        }
        $exitingMails = User::where('email', $request->email)->exists();
        // Check if the provided email matches the authenticated user's email
        if ($exitingMails) {
            // Generate a random password

            $randomPassword = Str::random(8);
            $mailData = [
                'title' => 'Mail from ItSolutionStuff.com',
                'body' => 'This is for testing email using smtp.',
                'randomPassword' => $randomPassword,
            ];
            // Send the random password via email
            $mail = Mail::to($request['email'])->send(new ForgotPassMail($mailData));
            if ($mail) {
                $user = User::where('email', $request->email)->firstOrFail();
                // Update the user's password
                $user->password = bcrypt($randomPassword);
                $user->save();
                return response()->json(['success' => true, 'result' => 'The email with a random password has been sent.','code'=> 200]);

            } else {
                return response()->json(['success' => false, 'result' => 'Email sending is failed.']);

            }
        } else {
            return response()->json(['result' => 'The provided email does not exist in database'], 403);
        }
    }

    public function test()
    {
        return 'API Test is Working';

    }
 
}
