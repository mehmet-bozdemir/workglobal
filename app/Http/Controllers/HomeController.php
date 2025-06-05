<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  // @desc Show home index view
  // @route GET /
  public function index()
  {
    $jobs = Job::all(); // Assuming you have a Job model set up.
    return view('pages.index', compact('jobs'));
  }
}
