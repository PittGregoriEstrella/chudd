@extends('layouts.master')

@section('title', 'CHUDD ECONOMIC PROFILING SYSTEM')

@section('content')

<head>
  <meta charset="UTF-8">
  <title>Beneficiary Profile</title>
  <link href="{{ asset('assets/css/styles2.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

  <div class="wrapper">

    <section class="main_content">
        <h1 class="header">Beneficiary Profile</h1>  
        <div class="info">
          <main>
            <form action="{{ route('beneficiary.create')}}" method="POST">
              @csrf
              @method('POST')
                <fieldset>
                    <legend>Personal Information</legend>
                    <div class="name-section">
                      <label for="lastName">Last Name:</label>
                      <input type="text" id="lastName" name="last_name" placeholder="Last Name" required>
                      <label for="firstName">First Name:</label>
                      <input type="text" id="firstName" name="first_name" placeholder="First Name" required>
                      <label for="middleName">Middle Name:</label>
                      <input type="text" id="middleName" name="middle_name" placeholder="Middle Name" required>
                  </div>
                  <div class="address-section">
                      <label for="address">Address:</label>
                      <input type="text" id="address" name="address" placeholder="Address" required>
                  </div>
                  <div class="demographic-section">
                      <label>Sex:</label>

                      <label for="male">Male</label>
                      <input type="radio" id="male" name="sex" value="male">

                      <label for="female">Female</label>
                      <input type="radio" id="female" name="sex" value="female">
                      
                      <br>
                      <label for="civilStatus">Civil Status:</label>
                      <select name="civil_status" id="civilStatus">
                          <option value="single">Single</option>
                          <option value="married">Married</option>
                          <option value="separated">Separated</option>
                          <option value="solo parent">Solo Parent</option>
                          <option value="widow">Widow</option>
                          <option value="commonLaw">Common Law</option>
                      </select>
                      <br>
                      <label for="employmentStatus">Employment Status:</label>
                      <select name="employment_status" id="employmentStatus">
                          <option value="employed">Employed</option>
                          <option value="unemployed">Unemployed</option>
                      </select>
                  </div>
                  <div class="personal-info-section">
                      <label for="birthday">Birthday:</label>
                      <input type="date" id="birthday" name="birth_date" required>
                      <label for="birthplace">Birthplace:</label>
                      <input type="text" id="birthplace" name="birth_place" placeholder="Birthplace" required>
                  </div>
              </fieldset>
                
  @include('admin.shared.economic')

    @include('admin.shared.employment')

      @include('admin.shared.income')

        @include('admin.shared.business')

           @include('admin.shared.educational')
           
              @include('admin.shared.status')

              <section class="remarks_content">
                <div class="remarks-last">
                    <label for="last">Remarks:</label>
                    <input type="text" id="last" name="forum_last" placeholder="Add remarks" required>
                </div>
                <button type="submit">Submit</button>
            </form>
          </main>
        </div>
      </div>
  </div>
</body>

@endsection