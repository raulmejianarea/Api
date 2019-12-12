<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class LoginController extends Controller
{

    public function checkLogin(Request $request)
    {
        $content = $request->getContent();

        $key = env("JWT_KEY");
        $decoded = JWT::decode($content, $key, array('HS256'));
        return json_encode($decoded);

        print_r($decoded);

        $decoded_array = (array) $decoded;
    }

}
