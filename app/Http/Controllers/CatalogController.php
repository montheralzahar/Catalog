<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function index() {
        return view('index');
    }

    function about() {
        return view('about');
    }

    function contact() {
        return view('contact');
    }

    function photo_detail() {
        return view('photo_detail');
    }

    function video_detail() {
        return view('video_detail');
    }

    function videos() {
        return view('videos');
    }

    function contact_search() {
        return view('contact');
    }

    function contact_data() {
        return view('contact');
    }





}
