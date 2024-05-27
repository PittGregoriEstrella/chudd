<?php

namespace App\Http\Controllers;

use App\Models\BeneficiaryProfile;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function store(Request $request)
    {

        

        $beneficiary = BeneficiaryProfile::create($request->all());
        return redirect()->route("page")->with("success","");
        //return redirect()->back()->with('success', 'Profile saved successfully!');
    }
}
