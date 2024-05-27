<?php

namespace App\Http\Controllers;

use App\Models\BeneficiaryProfile;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $beneficiaries = BeneficiaryProfile::all();


        return view('admin.beneficiaryprofile.reports', [
            'beneficiaries' => $beneficiaries,
        ]);
    }
}
