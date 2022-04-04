<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_biodatas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->string('name');
            $table->string('nik');
            $table->date('birth_date');
            $table->string('education');
            $table->string('major');
            $table->string('institute_name');
            $table->enum('gender', ['L', 'P']);

            $table->string('address');
            $table->string('village');
            $table->string('district');
            $table->string('indonesia_cities_id');
            $table->string('indonesia_provinces_id');
            
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
        Schema::dropIfExists('staff_biodatas');
    }
}
