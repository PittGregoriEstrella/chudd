<div class="employment-section">
    <h3>B. Employment</h3>
    <p>Working status of family members ages 18 years or over</p>
    <div class="family-member-names" id="family_member_names">
        <table>
            <thead>
                <tr>
                    <th>Names of Family Members</th>
                    <th>Regular</th>
                    <th>Contractual (More than 6 months)</th>
                    <th>Contractual (Less than 6 months)</th>
                    <th>Estimated Contribution to the Family Monthly Income</th>
                </tr>
            </thead>
@for($i = 1; $i <= 5; $i++)
<tbody>
<tr>
    

    <td>
        <label for="NameFamilyMember{{ $i }}">B.{{ $i }}.</label>
        <input type="text" id="NameFamilyMember{{ $i }}" name="familyMember{{ $i }}">
        
    </td>  

    <td>
        <label for="familyMemberRegular{{ $i }}"></label>
        <input type="radio" id="familyMemberRegular{{ $i }}" name="familyMemberType{{ $i }}" value="Regular">
        
    </td>

    <td>
        <label for="familyMemberContractM{{ $i }}"></label>
        <input type="radio" id="familyMemberContractM{{ $i }}" name="familyMemberType{{ $i }}" value="Contractual (More than 6 months)">
        
    </td>

    <td>
        <label for="familyMemberContractL{{ $i }}"></label>
        <input type="radio" id="familyMemberContractL{{ $i }}" name="familyMemberType{{ $i }}" value="Contractual (Less than 6 months)">
        
    </td>

    <td>
        <label for="familyMemberEstimate{{ $i }}"></label>
        <input type="number" id="familyMemberEstimate{{ $i }}" name="Estimate{{ $i }}">
        
    </td>
</tr>
@endfor
</tbody>
        </table>
    </div>
</div>
