{{-- resources/views/admin/reports.blade.php --}}

@extends('layouts.master')

@section('title', 'Beneficiary Reports')

@section('content')
<head>
  <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">CHUDD-SEP Livelihood Beneficiaries Report</h1>

    {{-- I. Personal Information --}}
    <section class="personal-information">
        <h2>Personal Information of Beneficiaries</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Resettlement Name</th>
                    <th>Barangay</th>
                    <th>No. of Beneficiaries</th>
                    <th>Sex</th>
                    <th>Civil Status</th>
                    <th>Employment Status</th>
                    <th>Employable Skills</th>
                </tr>
            </thead>
            <tbody>
                @foreach($beneficiaries as $beneficiary)
                <tr>
                    <td>{{ $beneficiary->resettlement_name }}</td>
                    <td>{{ $beneficiary->barangay }}</td>
                    <td>{{ $beneficiary->number_of_beneficiaries }}</td>
                    <td>{{ $beneficiary->sex }}</td>
                    <td>{{ $beneficiary->civil_status }}</td>
                    <td>{{ $beneficiary->employment_status }}</td>
                    <td>{{ $beneficiary->employable_skills }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    {{-- II. Economic Sufficiency --}}
    <section class="economic-sufficiency">
        <h2>Economic Sufficiency</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Employable Skills</th>
                    <th>Employment Status</th>
                    <th>Estimated Monthly Income</th>
                    <th>Business Activities Involvement</th>
                </tr>
            </thead>
            <tbody>
                @foreach($economic_sufficiencies as $economic)
                <tr>
                    <td>{{ $economic->employable_skills }}</td>
                    <td>{{ $economic->employment_status }}</td>
                    <td>{{ $economic->estimated_monthly_income }}</td>
                    <td>{{ $economic->business_activities_involvement }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    {{-- III. Educational Attainment --}}
    <section class="educational-attainment">
        <h2>Educational Attainment</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Highest Grade Completed</th>
                    <th>Acquired Skills</th>
                </tr>
            </thead>
            <tbody>
                @foreach($educational_attainments as $education)
                <tr>
                    <td>{{ $education->highest_grade_completed }}</td>
                    <td>{{ $education->acquired_skills }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    {{-- IV. Desired Courses/Training Program --}}
    <section class="training-program">
        <h2>Desired Course/Training Program</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Training Program</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($training_programs as $program)
                <tr>
                    <td>{{ $program->training_program }}</td>
                    <td>{{ $program->number }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</div>
@endsection
