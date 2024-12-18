<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    function index() {
        $jobs = Job::all();
        return view("pages.index")->with("jobs", $jobs);
    }
}
