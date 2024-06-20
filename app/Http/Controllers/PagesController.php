<?php

namespace App\Http\Controllers;
use App\Models\Documentation;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('guest.landing.index');
    }

    public function about(){
        return view('guest.about.about-index');
    }

    public function profile() {
        return view('profile.dashboard.profile-index');
    }

    public function addNew() {
        return view('profile.addnew.addnew-index');
    }

}
