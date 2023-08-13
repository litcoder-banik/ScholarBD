<?php

use App\Models\Institute;
use App\Models\StudentClass;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('school_madrasa');
            $table->string('student_type');
            $table->string('area');
            $table->string('name_bn');
            $table->string('name_en');
            $table->string('school_name');//new
            $table->string('class')->nullable();//new
            $table->string('class_roll')->nullable();
            $table->string('class_division')->nullable();
            $table->string('class_section')->nullable();
            $table->string('father_name_bn')->nullable();
            $table->string('father_name_en')->nullable();
            $table->string('father_occupation')->nullable();//new
            $table->string('mother_name_bn')->nullable();
            $table->string('mother_name_en')->nullable();
            $table->string('mother_occupation')->nullable();//new
            $table->foreignIdFor(Institute::class)->nullable();
            $table->foreignIdFor(StudentClass::class)->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_address_village')->nullable();
            $table->string('permanent_address_post_office')->nullable();
            $table->string('permanent_address_thana')->nullable();
            $table->string('permanent_address_district')->nullable();
            $table->string('mobile')->nullable();
            $table->string('facebook')->nullable();
            $table->string('dob')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('email')->nullable();
            $table->string('absent_of_parent_name')->nullable();
            $table->string('absent_of_parent_relation')->nullable();
            $table->string('absent_of_parent_occupation')->nullable();
            $table->string('absent_of_parent_annual_earning')->nullable();
            $table->string('previous_scholarship_name_group')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
