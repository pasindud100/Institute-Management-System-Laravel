<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('stu_id'); //automaticcly set primary key as stu_id with id() method..if not provide para it take  is as primary key.. it not redable when conneeect with more table
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->date('dob');
            $table->string('gender', 45);
            $table->string('contact_number');
            $table->string('email', 45);
            $table->string('address', 50);
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
