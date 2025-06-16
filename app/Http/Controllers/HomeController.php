<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  // @desc Show home index view
  // @route GET /
  public function index(): View
  {
    $jobs = Job::latest()->limit(6)->get();
    // If you want to paginate the jobs, you can use:
    // $jobs = Job::latest()->paginate(6);
    // If you want to use a specific query, you can modify the query like this:
    // $jobs = Job::where('status', 'active')->latest()->paginate(6);
    // If you want to filter jobs by a specific category, you can do:
    // $jobs = Job::where('category_id', $categoryId)->latest()->paginate(6);
    // If you want to filter jobs by a specific user, you can do:
    // $jobs = Job::where('user_id', $userId)->latest()->paginate(6);
    // If you want to filter jobs by a specific status, you can do:
    // $jobs = Job::where('status', 'active')->latest()->paginate(6);
    // If you want to filter jobs by a specific date range, you can do:
    // $jobs = Job::whereBetween('created_at', [$startDate, $endDate])->latest()->paginate(6);
    // If you want to filter jobs by a specific keyword, you can do:
    // $jobs = Job::where('title', 'like', '%'.$keyword.'%')->latest()->paginate(6);
    // If you want to filter jobs by a specific location, you can do:
    // $jobs = Job::where('location', 'like', '%'.$location.'%')->latest()->paginate(6);
    // If you want to filter jobs by a specific salary range, you can do:
    // $jobs = Job::whereBetween('salary', [$minSalary, $maxSalary])->latest()->paginate(6);
    // If you want to filter jobs by a specific type, you can do:
    // $jobs = Job::where('type', $type)->latest()->paginate(6);
    // If you want to filter jobs by a specific company, you can do:
    // $jobs = Job::where('company_id', $companyId)->latest()->paginate(6);
    // If you want to filter jobs by a specific tag, you can do:
    // $jobs = Job::whereHas('tags', function($query) use ($tag) {
    //   $query->where('name', $tag);
    // })->latest()->paginate(6);
    // If you want to filter jobs by a specific skill, you can do:
    // $jobs = Job::whereHas('skills', function($query) use ($skill) {
    //   $query->where('name', $skill);
    // })->latest()->paginate(6);
    // If you want to filter jobs by a specific experience level, you can do:
    // $jobs = Job::where('experience_level', $experienceLevel)->latest()->paginate(6);
    // If you want to filter jobs by a specific education level, you can do:
    // $jobs = Job::where('education_level', $educationLevel)->latest()->paginate(6);
    // If you want to filter jobs by a specific language, you can do:
    // $jobs = Job::whereHas('languages', function($query) use ($language) {
    //   $query->where('name', $language);
    // })->latest()->paginate(6);
    return view('pages.index', compact('jobs'));
  }
}
