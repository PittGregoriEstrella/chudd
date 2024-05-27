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
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Civil Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($beneficiaries as $beneficiary)
                <tr>
                    <td>{{ $beneficiary->first_name }} {{ $beneficiary->last_name }}</td>
                    <td>{{ $beneficiary->address }}</td>
                    
                    <td>{{ $beneficiary->sex }}</td>
                    <td>{{ $beneficiary->civil_status }}</td>
                    
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
                @foreach($beneficiaries as $economic)
                <tr>
                    <td>{{ $beneficiary->skill1 }}, {{ $beneficiary->skill2 }} {{ $beneficiary->skill3 }}, {{ $beneficiary->skill4 }} {{ $beneficiary->skill5 }}</td>
                    <td>{{ $beneficiary->employment_status }}</td>
                    <td>{{ $economic->FamilyMonthlyIncome }}</td>
                    <td>{{ $economic->NameOfActivity1 }}, {{ $economic->NameOfActivity2 }}, {{ $economic->NameOfActivity3 }}</td>
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
                @foreach($beneficiaries as $education)
                <tr>
                    <td>{{ $education->grade }}</td>
                    <td>{{ $education->personalSkill1 }}, {{ $education->personalSkill2 }}, {{ $education->personalSkill3 }}, {{ $education->personalSkill4 }}</td>
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
                  
                </tr>
            </thead>
            <tbody>
                @foreach($beneficiaries as $program)
                <tr>
                    <td>{{ $program->course1 }}, {{ $program->course2 }}, {{ $program->course3 }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</div>
@endsection
