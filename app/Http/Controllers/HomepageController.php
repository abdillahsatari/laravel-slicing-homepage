<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $content 	= 'public/__features/index';
        $data 		= array('isi'               => $content);

        return view('public.__layouts.public_wrapper', $data);
    }
}
