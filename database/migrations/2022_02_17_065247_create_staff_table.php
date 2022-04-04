<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();

            $table->string('id_staff')->unique();
            $table->string('name');
            $table->foreignId('user_id');
            $table->foreignId('position_id');
            $table->foreignId('sector_id');
            $table->foreignId('shift_id')->default(0);
            $table->foreignId('work_plan_id')->nullable();
            $table->string('phone_number');
            
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
        Schema::dropIfExists('staff');
    }
}
