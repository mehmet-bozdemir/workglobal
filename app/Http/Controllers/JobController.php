<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
  /**
   * Display the job listing page.
   *
   * @return \Illuminate\View\View
   */
  public function index()
  {
    // This method will return the view for the job listings.
    // You can also pass data to the view if needed.
    // For example, you might want to fetch job listings from the database.
    $jobs = Job::all(); // Assuming you have a Job model set up.
    return view('jobs.index', compact('jobs'));
  }

  public function show(Job $job): View
  {
    // This method will return the view for a specific job listing using route model binding.
    return view('jobs.show', compact('job'));
  }

  // @desc    Show create job form
    // @route   GET /jobs/create
    public function create()
    {
      // return 'klkjljljlj';
        return view('jobs.create');
    }

  public function store(Request $request)
  {
    // This method will handle the creation of a new job listing.
    // You can validate the request and save the job to the database.
    $validatedData = $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      // Add other validation rules as needed
    ]);

    $job = Job::create($validatedData);

    return redirect()->route('jobs.show', $job)->with('success', 'Job created successfully.');
  }
}
