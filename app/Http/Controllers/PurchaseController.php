<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Package;
use Illuminate\Http\Request;

class PurchaseController
{
    //
    public function show($id) {
        $package = Package::findOrFail($id);
        $addons = Addon::select('addons.id AS aid', 'addons.ad_name', 'addons.ad_description', 'addons.ad_price')->get();
        return view('addons', compact('package' , 'addons'));
    }
}
