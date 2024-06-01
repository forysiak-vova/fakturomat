<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicrosrviceApi extends Controller
{
    public function listProduct(Request $request)
    {
        if (config('services.external_api.api_token') == $request->input('api_token')) {
            return response()->json(['a' => 1, 'b' => 2], 200);
        } else {
            return response()->json(['error' => 'Niepoprawny token'], 401);
        }
    }

    public function options()
    {
        return response()->json('OK', 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization');
    }
}
