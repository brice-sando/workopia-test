<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $jobs = [
            'Web Developer',
            'Database Admissn',
            'Software Engineer',
            'System Analyst',
        ];
        return view('jobs.index', compact('jobs', 'title'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(string $id)
    {
        return "Showing Job  #$id";
    }

    public function store(Request $request)
    {
        $title = $request->input("title");
        $description = $request->input("description");
        return "Title: $title, Description: $description";
    }
}
