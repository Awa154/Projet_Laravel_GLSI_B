<?php

namespace App\Http\Controllers;

use App\Models\Universite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            $universites = Universite::all();

            if($usertype=='user')
            {
                return view('dashboard', ['universites' => $universites]);
            }
            else if($usertype=='admin')
            {
                return view('admin.adminPage');
            }
            else{
                return redirect()->back();
            }
        }

    }

}
