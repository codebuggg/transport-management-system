<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->text('phone');
            $table->date('dob');
            $table->string('licenseNumber', 10)->unique();
            $table->string('issueState');
            $table->string('homeAddress');
            $table->string('motherName');
            $table->string('fatherName');
            $table->string('parentAddress');
            $table->string('emergencyContact');
            $table->string('carMake');
            $table->string('carModel');
            $table->string('seatingCapacity');
            $table->string('licensePlate');
            $table->string('salesAmount');
            $table->enum('status', ['daily','weekly','bi-weekly','monthly' ])->default('weekly');
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
        Schema::dropIfExists('drivers');
    }
}
