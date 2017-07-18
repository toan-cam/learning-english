<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Phrases;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    
    public function index()
    {
        $phrases = Phrases::paginate(15);
        return view('frontend.home', compact('phrases'));
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        return view('frontend.profile', compact('user'));
    }

    public function update_profile(Request $request) 
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        
        $user = Auth::user();
        $user->name = $request->get('name');
        if($request->get('new_password') && $request->get('new_password') == $request->get('confirm_password')) {
            $user->password = Hash::make($request->get('new_password'));
        }

        $user->save();

        Session::flash('success', 'User saved successfully!');

        return redirect('/profile');
    }
}