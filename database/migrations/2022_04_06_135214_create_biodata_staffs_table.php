<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_staffs', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('nik');
            $table->date('birth_date');
            $table->string('education');
            $table->string('major')->nullable();
            $table->string('institute_name')->nullable();
            $table->enum('gender', ['L', 'P']);

            $table->string('address')->nullable();
            $table->string('village')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            
            $table->string('phone_number');
            $table->string('photo');
            
            $table->softDeletes();
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
        Schema::dropIfExists('biodata_staffs');
    }
}
