<div class="business-activities-section">
    <h3>D. Business Activities Involved</h3>
    @for($i = 1; $i <= 3; $i++)
    <label for="NameOfActivity{{ $i }}">Name of Activity {{ $i }}:</label>
    <input type="text" id="NameOfActivity{{ $i }}" name="NameOfActivity{{ $i }}">
    <br>
    <label for ="EstimatedMonthNetInc{{ $i }}">Estimated Monthly Net Income {{ $i }}:</label>
    <input type="number" id="EstimatedMonthNetInc{{ $i }}" name="EstimatedMonthNetInc{{ $i }}">
    <br>
    <label for="PeriodOfExistInYears{{ $i }}">Period of Existence in Years {{ $i }}:</label>
    <input type="number" id="PeriodOfExistInYears{{ $i }}" name="PeriodOfExistInYears{{ $i }}">
    <br>
    <label for="LocationOfBus{{ $i }}">Location of Business {{ $i }}:</label>
    <input type="text" id="LocationOfBus{{ $i }}" name="LocationOfBus{{ $i }}">
    <br>
    @endfor
</div>
