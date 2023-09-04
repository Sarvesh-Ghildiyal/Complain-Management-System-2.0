<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $role=Auth()->user()->role;
            
            // dd($role);
            if($role=='user'){
                return view('dashboard');
            }

            elseif($role=='admin'){
                return view('admin.adminDashboard');
            }
            
            elseif($role=='worker'){
                return view('worker.workerDashboard');
            }

            else{
                // Logout the user
                Auth::logout();
                // Clear the session
                session()->flush();
                return redirect()->back();
            }
        }
    }
}
