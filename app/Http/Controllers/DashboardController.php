<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            if (Auth::check()) {
                return view('dashboard');
            } else {
                return redirect()->route('login')->with('error', 'You need to log in first.');
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
