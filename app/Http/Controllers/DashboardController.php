<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        //CLIENT
        $role = Auth::user()->role;
        $jobCount = Job::where('user_id', Auth::id())->count();

        // //JOBSEEKER
        // $applicationsByClient = Auth::user()->applications()
        // ->select('user_id', DB::raw('COUNT(*) as count'))
        //     ->groupBy('client_id')
        //     ->get();
        return view('dashboard', compact('role', 'jobCount'));
    }
}
