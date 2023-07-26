<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $query = Job::query();
        $jobs = $query->paginate(10);
        $categories = Category::take(4)->inRandomOrder()->get(['name', 'slug']);

        return view('welcome', compact('jobs', 'categories'));
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $categories = Category::take(4)->inRandomOrder()->get(['name', 'slug']);

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
        return view('welcome', compact('jobs', 'categories'));
    }
}
