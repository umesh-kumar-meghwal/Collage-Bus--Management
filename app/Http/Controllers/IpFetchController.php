<?php


namespace App\Http\Controllers;
use Illuminate\Http\Client\Request;
class IpFetchController extends Controller
{
    public function ip_fetch(Request $request)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        return response()->json($ip);
    }
}