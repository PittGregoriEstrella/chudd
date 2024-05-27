<label for="education">Highest Grade Completed:</label>
<select name="grade" id="education">
    <option value="noGradeCompleted">No Grade Completed</option>
    <option value="preschool">Preschool Nursery/Kinder/Prep</option>
    <option value="elementaryUndergrad">Elementary Undergraduate</option>
    <option value="elementaryGraduate">Elementary Graduate</option>
    <option value="highSchoolUndergrad">High School Undergraduate</option>
    <option value="highSchoolGraduate">High School Graduate</option>
    <option value="postSecondaryUndergrad">Post Secondary Undergraduate</option>
    <option value="postSecondaryGraduate">Post Secondary Graduate</option>
    <option value="juniorHighGraduate">Junior High Graduate</option>
    <option value="seniorHighGraduate">Senior High Graduate</option>
    <option value="collegeUndergrad">College Undergraduate</option>
    <option value="collegeGraduate">College Graduate or Higher</option>
</select>
<label for="skillsAcDev">Skills Acquired and Developed:</label>
<table>
    <thead>
        <tr>
            <th rowspan="3">List of Skills</th>
            <th rowspan="1" colspan="4">Check the boxes that is applicable to you</th>
            <th rowspan="3">No. of Years of Experience</th>
            <th rowspan="3">Remarks</th>
        </tr>
        <tr>
            <th rowspan="2">Vocational Graduate</th>
            <th rowspan="2">Vocational Undergrad</th>
            <th colspan="2">NC PASSER</th>
        </tr>
        <tr>
            <th>I</th>
            <th>II</th>
        </tr>
    </thead>
    <tbody>
        @for($i = 1; $i <= 4; $i++)
        <tr>
            <td><input type="text" name="personalSkill{{ $i }}"></td>
            <td><input type="checkbox" name="skillTypevocGraduate{{ $i }}" value="1"></td>
            <td><input type="checkbox" name="skillTypevocUnderGraduate{{ $i }}" value="1"></td>
            <td><input type="checkbox" name="skillTypencPasserI{{ $i }}" value="1"></td>
            <td><input type="checkbox" name="skillTypencPasserII{{ $i }}" value="1"></td>
            <td><input type="number" name="yearsExperience{{ $i }}"></td>
            <td><input type="text" name="remarks{{ $i }}"></td>
        </tr>
        @endfor
    </tbody>
</table>
