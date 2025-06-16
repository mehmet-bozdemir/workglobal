<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;

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

  // @desc    Show edit job form
  // @route   GET /jobs/{$id}/edit
  public function edit(Job $job): View
  {
    // Check if user is authorized
    // $this->authorize('update', $job);

    return view('jobs.edit')->with('job', $job);
  }

  // @desc    Update job listing
  // @route   PUT /jobs/{$id}
  public function update(Request $request, Job $job): string
  {
    // Check if user is authorized
    // $this->authorize('update', $job);

    $validatedData = $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'salary' => 'required|integer',
      'tags' => 'nullable|string',
      'job_type' => 'required|string',
      'remote' => 'required|boolean',
      'requirements' => 'nullable|string',
      'benefits' => 'nullable|string',
      'address' => 'nullable|string',
      'city' => 'required|string',
      'state' => 'required|string',
      'zipcode' => 'nullable|string',
      'contact_email' => 'required|string',
      'contact_phone' => 'nullable|string',
      'company_name' => 'required|string',
      'company_description' => 'nullable|string',
      'company_logo' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
      'company_website' => 'nullable|url'
    ]);

    // Check for image
    if ($request->hasFile('company_logo')) {
      // Delete old logo
      Storage::delete('public/logos/' . basename($job->company_logo));

      // Store the file and get path
      $path = $request->file('company_logo')->store('logos', 'public');

      // Add path to validated data
      $validatedData['company_logo'] = $path;
    }

    // Submit to database
    $job->update($validatedData);

    return redirect()->route('jobs.index')->with('success', 'Job listing updated successfully!');
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
      'salary' => 'required|integer',
      'tags' => 'nullable|string',
      'job_type' => 'required|string',
      'remote' => 'required|boolean',
      'requirements' => 'nullable|string',
      'benefits' => 'nullable|string',
      'address' => 'nullable|string',
      'city' => 'required|string',
      'state' => 'required|string',
      'zipcode' => 'nullable|string',
      'contact_email' => 'required|string',
      'contact_phone' => 'nullable|string',
      'company_name' => 'required|string',
      'company_description' => 'nullable|string',
      'company_logo' => 'nullable|image|mimes:jpeg,jpg,png,gif',
      'company_website' => 'nullable|url'
      // Add other validation rules as needed
    ]);

    // Hardcoded user ID
    $validatedData['user_id'] = 1; // Replace with the actual user ID if needed

    // Check for image
    if ($request->hasFile('company_logo')) {
      // Store the file and get path
      $path = $request->file('company_logo')->store('logos', 'public');

      // Add path to validated data
      $validatedData['company_logo'] = $path;
    }

    // Submit to database
    $job = Job::create($validatedData);

    return redirect()->route('jobs.index')->with('success', 'Job listing created successfully!');
  }

  // @desc    Delete a job listing
  // @route   DELETE /jobs/{$id}
  public function destroy(Job $job): RedirectResponse
  {
    // Check if user is authorized
    // $this->authorize('delete', $job);

    // If logo, then delete it
    if ($job->company_logo) {
      Storage::delete('public/logos/' . $job->company_logo);
    }

    $job->delete();

    // Check if request came from the dashboard
    if (request()->query('from') == 'dashboard') {
      return redirect()->route('dashboard')->with('success', 'Job listing deleted successfully!');
    }

    return redirect()->route('jobs.index')->with('success', 'Job listing deleted successfully!');
  }
}
