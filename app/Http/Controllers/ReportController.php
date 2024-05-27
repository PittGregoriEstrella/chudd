<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\EconomicSufficiency;
use App\Models\EducationalAttainment;
use App\Models\TrainingProgram;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $beneficiaries = Beneficiary::all();
        $economic_sufficiencies = EconomicSufficiency::all();
        $educational_attainments = EducationalAttainment::all();
        $training_programs = TrainingProgram::all();

        return view('admin.reports', [
            'beneficiaries' => $beneficiaries,
            'economic_sufficiencies' => $economic_sufficiencies,
            'educational_attainments' => $educational_attainments,
            'training_programs' => $training_programs
        ]);
    }
}
