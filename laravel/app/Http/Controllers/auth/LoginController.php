<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserLaravelNative;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function __invoke(Request $request){
        //dd($request);

        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Find the user by email
        $user = UserLaravelNative::where('email', $request->email)->first();
        // Verify the password and generate the token
        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('auth_token')->plainTextToken;

            // Return response with token
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }

        // Return error message if invalid credentials
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
