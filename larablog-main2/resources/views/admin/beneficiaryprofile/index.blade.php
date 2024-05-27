@extends('layouts.master')

@section('title', 'Reports')

@section('content')
    <h1>Reports</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Civil Status</th>
                <th>Employment Status</th>
                <th>Birth Date</th>
                <th>Birth Place</th>
                <th>Age</th>
                <th>Skills</th>
                <th>Family Monthly Income</th>
                <th>Employed or Connected</th>
                <th>Disabilities</th>
                <th>Course(s)</th>
                <th>Forum Last Attended</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beneficiaries as $beneficiary)
                <tr>
                    <td>{{ $beneficiary->last_name }}, {{ $beneficiary->first_name }} {{ $beneficiary->middle_name }}</td>
                    <td>{{ $beneficiary->address }}</td>
                    <td>{{ $beneficiary->sex }}</td>
                    <td>{{ $beneficiary->civil_status }}</td>
                    <td>{{ $beneficiary->employment_status }}</td>
                    <td>{{ $beneficiary->birth_date }}</td>
                    <td>{{ $beneficiary->birth_place }}</td>
                    <td>{{ $beneficiary->age }}</td>
                    <td>
                        {{ $beneficiary->skill1 }}, 
                        {{ $beneficiary->skill2 }}, 
                        {{ $beneficiary->skill3 }}, 
                        {{ $beneficiary->skill4 }}, 
                        {{ $beneficiary->skill5 }}
                    </td>
                    <td>{{ $beneficiary->FamilyMonthlyIncome }}</td>
                    <td>{{ $beneficiary->employed_or_connected }}</td>
                    <td>
                        @if ($beneficiary->mental) Mental @endif
                        @if ($beneficiary->visual) Visual @endif
                        @if ($beneficiary->orthopedic) Orthopedic @endif
                        @if ($beneficiary->hearing) Hearing @endif
                        @if ($beneficiary->speech) Speech @endif
                        @if ($beneficiary->psychological) Psychological @endif
                        @if ($beneficiary->chronic) Chronic @endif
                        @if ($beneficiary->learning) Learning @endif
                    </td>
                    <td>
                        {{ $beneficiary->course1 }}, 
                        {{ $beneficiary->course2 }}, 
                        {{ $beneficiary->course3 }}
                    </td>
                    <td>{{ $beneficiary->forum_last }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
