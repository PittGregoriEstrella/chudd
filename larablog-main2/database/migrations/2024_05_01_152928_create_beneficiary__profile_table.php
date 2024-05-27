<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryProfileTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('beneficiary__profiles', function (Blueprint $table) {
            $table->id();
            
            // Fields for personal information
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('address')->nullable();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->enum('civil_status', ['single', 'married', 'separated', 'solo parent', 'widow', 'commonlaw'])->nullable();
            $table->enum('employment_status', ['employed', 'unemployed'])->nullable();
            $table->date('birth_date')->nullable();
            $table->text('birth_place')->nullable();
            $table->unsignedInteger('age')->nullable();

            // Fields for employable skills
            for ($i = 1; $i <= 5; $i++) {
                $table->string("skill{$i}")->nullable();
            }

            // Fields for employment
            for ($i = 1; $i <= 5; $i++) {
                $table->text("familyMember{$i}")->nullable();
                $table->enum("familyMemberType{$i}", ['Regular', 'Contractual (More than 6 months)', 'Contractual (Less than 6 months)'])->nullable();
                $table->integer("Estimate{$i}")->nullable();
            }

            // Fields for income
            $table->decimal('FamilyMonthlyIncome', 12, 2)->default(0.00);
            $table->integer('FamilyMembers18')->default(0.00);
            $table->integer('FamilyMembersBelow18')->default(0.00);
            
            // Fields for business activities
            for ($i = 1; $i <= 3; $i++) {
                $table->string("NameOfActivity{$i}")->nullable();
                $table->decimal("EstimatedMonthNetInc{$i}", 12, 2)->nullable();
                $table->unsignedInteger("PeriodOfExistInYears{$i}")->nullable();
                $table->string("LocationOfBus{$i}")->nullable();
            }

            // Fields for highest grade completed
            $table->enum('grade', ['noGradeCompleted', 'preschool', 'elementaryUndergrad', 'elementaryGraduate', 'highSchoolUndergrad', 'highSchoolGraduate', 'postSecondaryUndergrad', 'postSecondaryGraduate', 'juniorHighGraduate', 'seniorHighGraduate', 'collegeUndergrad', 'collegeGraduate'])->nullable();

            // Fields for skills acquired and developed
            for ($i = 1; $i <= 4; $i++) {
                $table->text("personalSkill{$i}")->nullable();
                $table->boolean("skillTypevocGraduate{$i}")->default(false);
                $table->boolean("skillTypevocUnderGraduate{$i}")->default(false);
                $table->boolean("skillTypencPasserI{$i}")->default(false);
                $table->boolean("skillTypencPasserII{$i}")->default(false);
                $table->unsignedInteger("yearsExperience{$i}")->nullable();
                $table->string("remarks{$i}")->nullable();
            }

            // Fields for employed or connected to agency or company
            $table->enum('employed_or_connected', ['yes', 'no'])->nullable();
            $table->enum('employment_status_detail', ['regular', 'contractual', 'others'])->nullable();

            // Fields for persons with disability
            $table->boolean('mental')->default(false);
            $table->boolean('visual')->default(false);
            $table->boolean('orthopedic')->default(false);
            $table->boolean('hearing')->default(false);
            $table->boolean('speech')->default(false);
            $table->boolean('psychological')->default(false);
            $table->boolean('chronic')->default(false);
            $table->boolean('learning')->default(false);
            $table->enum('disability_cause', ['congenital', 'illness', 'injury']);

            // Fields for course / training program
            $table->enum('course1', ["Carpentry NC II", "Construction Painting", "Electrical Installation and Maintenance NC II", "Heavy Equipment Operator (Excavator)", "Heavy Equipment Operator (Forklift)", "Housekeeping NC II", "Plumbing NC I", "Plumbing NC II", "Shielded Metal Arc Welding NC I", "Heavy Equipment Servicing Tvet with Monark Foundation In.", "Heavy Equipment Servicing Senior High School with Monark Fdn. Inc", "General Sewing (City Improvement Division)", "Cookery (City Improvement Division)", "Bread & Pastry (City Improvement Division)", "Cosmetology(City Improvement Division)",])->nullable();
            $table->enum('course2', ["Carpentry NC II", "Construction Painting", "Electrical Installation and Maintenance NC II", "Heavy Equipment Operator (Excavator)", "Heavy Equipment Operator (Forklift)", "Housekeeping NC II", "Plumbing NC I", "Plumbing NC II", "Shielded Metal Arc Welding NC I", "Heavy Equipment Servicing Tvet with Monark Foundation In.", "Heavy Equipment Servicing Senior High School with Monark Fdn. Inc", "General Sewing (City Improvement Division)", "Cookery (City Improvement Division)", "Bread & Pastry (City Improvement Division)", "Cosmetology(City Improvement Division)",])->nullable();
            $table->enum('course3', ["Carpentry NC II", "Construction Painting", "Electrical Installation and Maintenance NC II", "Heavy Equipment Operator (Excavator)", "Heavy Equipment Operator (Forklift)", "Housekeeping NC II", "Plumbing NC I", "Plumbing NC II", "Shielded Metal Arc Welding NC I", "Heavy Equipment Servicing Tvet with Monark Foundation In.", "Heavy Equipment Servicing Senior High School with Monark Fdn. Inc", "General Sewing (City Improvement Division)", "Cookery (City Improvement Division)", "Bread & Pastry (City Improvement Division)", "Cosmetology(City Improvement Division)",])->nullable();

            // Field for remarks
            $table->text('forum_last')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('beneficiary__profiles');
    }
}


