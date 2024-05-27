<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryProfile extends Model
{
    use HasFactory;

    protected $table = 'beneficiary__profiles';

    protected $fillable = [
        // Name
        'last_name',
        'first_name',
        'middle_name',

        // Address
        'address',  
        
        // Sex
        'sex',
        
        // Civil Status
        'civil_status',
        
        // Employment Status
        'employment_status',

        // Personal Information
        'birth_date',
        'birth_place',
        'age',

        // Employable Skills
        'skill1',
        'skill2',
        'skill3',
        'skill4',
        'skill5',

        // Employment
        'familyMember1',
        'familyMember2',
        'familyMember3',
        'familyMember4',
        'familyMember5',
        'familyMemberType1',
        'familyMemberType2',
        'familyMemberType3',
        'familyMemberType4',
        'familyMemberType5',
        'Estimate1',
        'Estimate2',
        'Estimate3',
        'Estimate4',
        'Estimate5',
        
        
        // Income
        'FamilyMonthlyIncome',
        'FamilyMembers18',
        'FamilyMembersBelow18',

        // Business Activities Involved
        'NameOfActivity1',
        'NameOfActivity2',
        'NameOfActivity3',
   
        'EstimatedMonthNetInc1',
        'EstimatedMonthNetInc2',
        'EstimatedMonthNetInc3',
    
        'PeriodOfExistInYears1',
        'PeriodOfExistInYears2',
        'PeriodOfExistInYears3',

        'LocationOfBus1',
        'LocationOfBus2',
        'LocationOfBus3',

        // Highest Grade Completed
        'grade',

        // Skills Acquired and Developed
        'personalSkill1',
        'personalSkill2',
        'personalSkill3',
        'personalSkill4',
        'skillTypevocGraduate1',
        'skillTypevocGraduate2',
        'skillTypevocGraduate3',
        'skillTypevocGraduate4',
        'skillTypevocUnderGraduate1',
        'skillTypevocUnderGraduate2',
        'skillTypevocUnderGraduate3',
        'skillTypevocUnderGraduate4',
        'skillTypencPasserI1',
        'skillTypencPasserI2',
        'skillTypencPasserI3',
        'skillTypencPasserI4',
        'skillTypencPasserII1',
        'skillTypencPasserII2',
        'skillTypencPasserII3',
        'skillTypencPasserII4',
        'yearsExperience1',
        'yearsExperience2',
        'yearsExperience3',
        'yearsExperience4',
        'remarks1',
        'remarks2',
        'remarks3',
        'remarks4',

        // Employed or Connected to Agency or Company
        'employed_or_connected',
        'employment_status_detail',

        // Persons with Disability
        'mental',
        'visual',
        'orthopedic',
        'hearing',
        'speech',
        'psychological',
        'chronic',
        'learning',

        'disability_cause',

        'course1',
        'course2',
        'course3',

        'forum_last',
    ];
}
