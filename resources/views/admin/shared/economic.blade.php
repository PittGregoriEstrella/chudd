<fieldset>
    <legend>Economic Sufficiency</legend>
    <div class="skills-section">
        <h3>A. Employable Skills</h3>
        <p>Occupational skills of family members aged 18 years or over</p>
        @for($i = 1; $i <= 5; $i++)
        <label for="skill{{ $i }}">A.{{ $i }}.</label>
        <input type="text" id="skill{{ $i }}" name="skill{{ $i }}">
        <br>
        @endfor
    </div>
    