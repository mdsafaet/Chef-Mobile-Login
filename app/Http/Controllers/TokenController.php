<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index(){
        $JWT_IDENTIFIER = env('JWT_IDENTIFIER');
        $JWT_REFRESH_TTL = env('JWT_REFRESH_TTL');
        $JWT_TTL = env('JWT_TTL');
        return response()->json([
            'message' => 'Token is valid',
            'status' => true,
            'JWT_IDENTIFIER' => $JWT_IDENTIFIER,
            'JWT_REFRESH_TTL' => $JWT_REFRESH_TTL,
            'JWT_TTL' => $JWT_TTL,
        ]);
    }
}
