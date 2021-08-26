<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UploadController extends Controller
{
    public function index()
    {
        return Inertia::render('Upload');
    }

    public function upload(Request $request)
    {
        dd($request);
//        $request->validate([
//                'avatar'=>'mimes:pdf'
//            ]
//        );

    }
}
