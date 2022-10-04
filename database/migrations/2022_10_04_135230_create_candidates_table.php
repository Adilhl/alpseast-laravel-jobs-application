<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('first_name');
            $table->string('seconde_name');
            $table->string('thirty_name');
            $table->string('address');
            $table->string('phone');
            $table->string('job_title');
            $table->string('job_locations');
            $table->string('desired_salary_value');
            $table->string('desired_salary_period');
            $table->enum('work-type', ['full-time', 'part_time','freelance'])->default('full_time');
            $table->string();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};