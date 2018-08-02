<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
     public function index()
    {
        return view('sites.booking');
    }
    public function index1(){
        return view('sites.booking1');
    }
    public function index2(){
        return view('sites.booking2');
    }
}
