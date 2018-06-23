<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DownloadsController extends Controller
{
    public function download($file_name) {
        $file_path = public_path('download/'.$file_name.'.pdf');
        return response()->download($file_path);
    }
}
