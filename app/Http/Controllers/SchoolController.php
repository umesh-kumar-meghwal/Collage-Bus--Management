<?php

namespace App\Http\Controllers;

use App\Models\school;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function school_reg()
    {
        return view('school-reg');
    }
    public function school_regs(Request $request)
    {
        School::create([
            'school_name'=>$request->school_name,
            'school_email'=>$request->school_email,
            'phone'=>$request->phone,
            'address'=>$request->address

        ]);
        $data = "msg";
        return response()->$data;
    }
    

    
}
