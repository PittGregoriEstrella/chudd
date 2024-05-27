<h3>Employment Status</h3>
<div class="inline-container">
    <label>Are you presently EMPLOYED or CONNECTED to an agency or company?</label>
    <div>
        <input type="radio" id="yes" name="employed_or_connected" value="yes" onclick="toggleEmploymentType(true)">
        <label for="employed_yes">Yes</label>
        <input type="radio" id="no" name="employed_or_connected" value="no" onclick="toggleEmploymentType(false)">
        <label for="employed_no">No</label>
    </div>
    </div>
    <div class="inline-container" id="employmentTypeContainer" style="display: none;">
        <label>If Yes, please specify your employment type:</label>
        <div>
            <input type="radio" id="regular" name="employment_status_detail" value="regular">
            <label for="regular">Regular</label>
            <input type="radio" id="contractual" name="employment_status_detail" value="contractual">
            <label for="contractual">Contractual</label>
            <input type="radio" id="others" name="employment_status_detail" value="others">
            <label for="others">Others</label>
        </div>
    </div>

    <script>
        function toggleEmploymentType(show) {
            document.getElementById('employmentTypeContainer').style.display = show ? 'block' : 'none';
        }
    </script>
</div>
                            <br>
                            <div class="inline-container">
                                <label>Type of Disability (for Persons with Disability only):</label>
                            </div>
                            <div class="checkbox-group">
                                <label for="mentalD">Mental/ Intellectual</label>
                                <input type="checkbox" id="mentalD" name="mental" value="1">
                               
                                <label for="visualD">Visual Disability</label>
                                <input type="checkbox" id="visualD" name="visual" value="1">
                                
                                <label for="orthopedicD">Orthopedic Musculoskeletal Disability</label>
                                <input type="checkbox" id="orthopedicD" name="orthopedic" value="1">
                                
                                <label for="hearingD">Hearing Disability</label>
                                <input type="checkbox" id="hearingD" name="hearing" value="1">
                                
                                <label for="speechD">Speech Impairment</label>
                                <input type="checkbox" id="speechD" name="speech" value="1">
                                
                                <label for="psychologicalD">Psychological Disability</label>
                                <input type="checkbox" id="psychologicalD" name="psychological" value="1">
                                
                                <label for="chronicD">Disability Due to Chronic Illness</label>
                                <input type="checkbox" id="chronicD" name="chronic" value="1">

                                <label for="learningD">Learning Disability</label>
                                <input type="checkbox" id="learningD" name="learning" value="1">
                            </div>
                            <br>
                            <div class="inline-container">
                                <label>Causes of Disability (for Persons with Disability only):</label>
                            </div>
                            <div class="radio-group" id="disabilityType">
                                <input type="radio" id="congential" name="disabilityCause" value="congential">
                                <label for="congential">Congenital/Inborn</label>
                                <input type="radio" id="illness" name="disabilityCause" value="illness">
                                <label for="illness">Illness</label>
                                <input type="radio" id="injury" name="disabilityCause" value="injury">
                                <label for="injury">Injury</label>
                            </div>
                            <p>COURSE/TRAINING PROGRAM</p>
                            <label for="training1">* 1st choice</label>
                            <select id="training1" name="course1">
                                <option value="">None Selected</option>
                                <option value="Carpentry NC II">Carpentry NC II</option>
                                <option value="Construction Painting">Construction Painting</option>
                                <option value="Electrical Installation and Maintenance NC II">Electrical Installation and Maintenance NC II</option>
                                <option value="Heavy Equipment Operator (Excavator)">Heavy Equipment Operator (Excavator)</option>
                                <option value="Heavy Equipment Operator (Forklift)">Heavy Equipment Operator (Forklift)</option>
                                <option value="Housekeeping NC II">Housekeeping NC II</option>
                                <option value="Plumbing NC I">Plumbing NC I</option>
                                <option value="Plumbing NC II">Plumbing NC II</option>
                                <option value="Shielded Metal Arc Welding NC I">Shielded Metal Arc Welding NC I</option>
                                <option value="Heavy Equipment Servicing Tvet with Monark Foundation In.">Heavy Equipment Servicing Tvet with Monark Foundation In.</option>
                                <option value="Heavy Equipment Servicing Senior High School with Monark Fdn. Inc">Heavy Equipment Servicing Senior High School with Monark Fdn. Inc</option>
                                <option value="General Sewing (City Improvement Division)">General Sewing (City Improvement Division)</option>
                                <option value="Cookery (City Improvement Division)">Cookery (City Improvement Division)</option>
                                <option value="Bread & Pastry (City Improvement Division)">Bread & Pastry (City Improvement Division)</option>
                                <option value="Cosmetology(City Improvement Division)">Cosmetology(City Improvement Division)</option>
                            </select><br>
                            <label for="training2">* 2nd choice</label>
                            <select id="training2" name="course2">
                                <option value="">None Selected</option>
                                <option value="Carpentry NC II">Carpentry NC II</option>
                                <option value="Construction Painting">Construction Painting</option>
                                <option value="Electrical Installation and Maintenance NC II">Electrical Installation and Maintenance NC II</option>
                                <option value="Heavy Equipment Operator (Excavator)">Heavy Equipment Operator (Excavator)</option>
                                <option value="Heavy Equipment Operator (Forklift)">Heavy Equipment Operator (Forklift)</option>
                                <option value="Housekeeping NC II">Housekeeping NC II</option>
                                <option value="Plumbing NC I">Plumbing NC I</option>
                                <option value="Plumbing NC II">Plumbing NC II</option>
                                <option value="Shielded Metal Arc Welding NC I">Shielded Metal Arc Welding NC I</option>
                                <option value="Heavy Equipment Servicing Tvet with Monark Foundation In.">Heavy Equipment Servicing Tvet with Monark Foundation In.</option>
                                <option value="Heavy Equipment Servicing Senior High School with Monark Fdn. Inc">Heavy Equipment Servicing Senior High School with Monark Fdn. Inc</option>
                                <option value="General Sewing (City Improvement Division)">General Sewing (City Improvement Division)</option>
                                <option value="Cookery (City Improvement Division)">Cookery (City Improvement Division)</option>
                                <option value="Bread & Pastry (City Improvement Division)">Bread & Pastry (City Improvement Division)</option>
                                <option value="Cosmetology(City Improvement Division)">Cosmetology(City Improvement Division)</option>
                            </select><br>
                            <label for="training3">* 3rd choice</label>
                            <select id="training3" name="course3">
                                <option value="">None Selected</option>
                                <option value="Carpentry NC II">Carpentry NC II</option>
                                <option value="Construction Painting">Construction Painting</option>
                                <option value="Electrical Installation and Maintenance NC II">Electrical Installation and Maintenance NC II</option>
                                <option value="Heavy Equipment Operator (Excavator)">Heavy Equipment Operator (Excavator)</option>
                                <option value="Heavy Equipment Operator (Forklift)">Heavy Equipment Operator (Forklift)</option>
                                <option value="Housekeeping NC II">Housekeeping NC II</option>
                                <option value="Plumbing NC I">Plumbing NC I</option>
                                <option value="Plumbing NC II">Plumbing NC II</option>
                                <option value="Shielded Metal Arc Welding NC I">Shielded Metal Arc Welding NC I</option>
                                <option value="Heavy Equipment Servicing Tvet with Monark Foundation In.">Heavy Equipment Servicing Tvet with Monark Foundation In.</option>
                                <option value="Heavy Equipment Servicing Senior High School with Monark Fdn. Inc">Heavy Equipment Servicing Senior High School with Monark Fdn. Inc</option>
                                <option value="General Sewing (City Improvement Division)">General Sewing (City Improvement Division)</option>
                                <option value="Cookery (City Improvement Division)">Cookery (City Improvement Division)</option>
                                <option value="Bread & Pastry (City Improvement Division)">Bread & Pastry (City Improvement Division)</option>
                                <option value="Cosmetology(City Improvement Division)">Cosmetology(City Improvement Division)</option>
                            </select><br>
                            