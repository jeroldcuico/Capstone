<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $role = $user->role; // Retrieve the user's role

        if ($role == 'client') {
            $jobs = Job::where('user_id', $user->id)->pluck('id'); // Get the IDs of jobs owned by the user
            $applications = Application::whereIn('job_id', $jobs)->with('candidate')->get(); 
            $title = "Applications from Candidates";
        } else if ($role == 'candidate') {
            $applications = Application::where('candidate_id', $user->id)->with('job')->get(); 
            $title = "Jobs you Applied";
        }

        return view('applications.index', compact('applications', 'title'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function apply(Job $job)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'resume' => 'required|mimes:pdf,doc,docx',
            'cover_letter' => 'required',
        ]);

        $jobId = $request->input('job_id');
        $auth_id = Auth::id();

        // Check if the application already exists for the job and candidate
        $existingApplication = Application::where('job_id', $jobId)
            ->where('candidate_id', $auth_id)
            ->first();

        if ($existingApplication) {
            return redirect()->back()->withErrors('You have already applied for this job.');
        }

        // Upload and store the resume file
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Create a new application instance
        $application = new Application();
        $application->job_id = $jobId;
        $application->candidate_id = $auth_id;
        $application->resume = $resumePath;
        $application->cover_letter = $request->input('cover_letter');
        // Set other fields as needed

        // Save the application
        $application->save();

        return redirect()->back()->with('success', 'Job application submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('applications.view-candidate', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        return view('applications.index', compact('application'));
    }

    public function deleteConfirmed($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();
        return redirect()->route('applications.index')->with('success', 'Application deleted successfully');
    }
}
