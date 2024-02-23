<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class HomePageController
{
    public function home()
    {
        return view('index');
    }

    public function package() {

        $courses = Package::select('packages.id AS pid', 'packages.p_name', 'packages.p_description', 'packages.p_price')->get();
        // dd($courses);
        return view('packages', compact('courses'));

    }

    public function addons(){
        return view('addons');
    }
}
