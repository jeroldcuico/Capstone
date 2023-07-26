<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $query = Job::query();
        $query->where('user_id', auth()->id())->with('categories')->get();
        $jobs = $query->paginate(10);
        $title = "Add A Job Post";
        return view('jobs.index', compact('jobs', 'title'));
    }
    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $query = Job::query();

        if ($keywords) {
            $keywords = explode(' ', $keywords);
            foreach ($keywords as $keyword) {
                $query->orWhere('title', 'like', '%' . $keyword . '%')
                    ->orWhere('body', 'like', '%' . $keyword . '%');
            }
        }
        $jobs = $query->paginate(10);
        $title = "Search Results";

        return view('jobs.index', compact('jobs', 'title'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('jobs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'budget' => 'required',
            'position_type' => 'required',
            'project_duration' => 'required',
        ]);

        $job = new Job($validatedData);
        $job->user_id = auth()->id();
        $job->slug = Str::slug($request->title);
        $job->category_id = $request->categories; //Subject to change
        $job->save();

        return redirect()->route('jobs.index')->with('success', 'Job created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        // Add authorization logic to ensure the job belongs to the client
        $client = $job->user()->first();
        return view('jobs.show', compact('job', 'client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $categories = Category::all();
        // Check if the user is authorized to edit the item
        if (auth()->user()->id !== $job->user_id) {
            abort(403, 'You are not allowed to edit this product');
        }
        return view('jobs.edit', compact('job', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        // Add authorization logic to ensure the job belongs to the client

        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'budget' => 'required',
            'position_type' => 'required',
            'project_duration' => 'required',
        ]);

        $job->update($validatedData);

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.index', compact('job'));
    }

    public function deleteConfirmed($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully');
    }
}
