<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('address');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('employment_status');
            $table->date('birthday');
            $table->string('birthplace');
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->string('skill5')->nullable();
            $table->string('family_member1_name')->nullable();
            $table->string('family_member1_status')->nullable();
            $table->decimal('family_member1_income', 8, 2)->nullable();
            $table->string('family_member2_name')->nullable();
            $table->string('family_member2_status')->nullable();
            $table->decimal('family_member2_income', 8, 2)->nullable();
            $table->string('family_member3_name')->nullable();
            $table->string('family_member3_status')->nullable();
            $table->decimal('family_member3_income', 8, 2)->nullable();
            $table->string('family_member4_name')->nullable();
            $table->string('family_member4_status')->nullable();
            $table->decimal('family_member4_income', 8, 2)->nullable();
            $table->string('family_member5_name')->nullable();
            $table->string('family_member5_status')->nullable();
            $table->decimal('family_member5_income', 8, 2)->nullable();
            $table->decimal('family_monthly_income', 8, 2)->nullable();
            $table->integer('num_family_members_18');
            $table->integer('num_family_members_below18');
            $table->string('business_activity1_name')->nullable();
            $table->decimal('business_activity1_income', 8, 2)->nullable();
            $table->integer('business_activity1_years')->nullable();
            $table->string('business_activity1_location')->nullable();
            $table->string('education');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
