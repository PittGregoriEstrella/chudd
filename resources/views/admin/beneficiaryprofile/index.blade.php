@extends('layouts.master')

@section('title', 'Reports')

@section('content')
    <h1>Reports</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <!-- Add more table headers for other data -->
            </tr>
        </thead>
        <tbody>
            @foreach($beneficiaries as $beneficiary)
                <tr>
                    <td>{{ $beneficiary->lastName }}, {{ $beneficiary->firstName }} {{ $beneficiary->middleName }}</td>
                    <td>{{ $beneficiary->lotNo_Address }}, {{ $beneficiary->blockNo_Address }}, {{ $beneficiary->ResettlementName_Address }}, {{ $beneficiary->Barangay_Address }}</td>
                    <!-- Add more table cells for other data -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
