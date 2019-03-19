<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{

    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('teacher_id');
            
            $table->string('day_1_time_1')->nullable();
            $table->string('day_1_time_2')->nullable();
            $table->string('day_1_time_3')->nullable();
            $table->string('day_1_time_4')->nullable();
            $table->string('day_1_time_5')->nullable();
            $table->string('day_1_time_6')->nullable();            
            
            $table->string('day_2_time_1')->nullable();
            $table->string('day_2_time_2')->nullable();
            $table->string('day_2_time_3')->nullable();
            $table->string('day_2_time_4')->nullable();
            $table->string('day_2_time_5')->nullable();
            $table->string('day_2_time_6')->nullable();

            $table->string('day_3_time_1')->nullable();
            $table->string('day_3_time_2')->nullable();
            $table->string('day_3_time_3')->nullable();
            $table->string('day_3_time_4')->nullable();
            $table->string('day_3_time_5')->nullable();
            $table->string('day_3_time_6')->nullable();

            $table->string('day_4_time_1')->nullable();
            $table->string('day_4_time_2')->nullable();
            $table->string('day_4_time_3')->nullable();
            $table->string('day_4_time_4')->nullable();
            $table->string('day_4_time_5')->nullable();
            $table->string('day_4_time_6')->nullable();

            $table->string('day_5_time_1')->nullable();
            $table->string('day_5_time_2')->nullable();
            $table->string('day_5_time_3')->nullable();
            $table->string('day_5_time_4')->nullable();
            $table->string('day_5_time_5')->nullable();
            $table->string('day_5_time_6')->nullable();

            $table->string('day_6_time_1')->nullable();
            $table->string('day_6_time_2')->nullable();
            $table->string('day_6_time_3')->nullable();
            $table->string('day_6_time_4')->nullable();
            $table->string('day_6_time_5')->nullable();
            $table->string('day_6_time_6')->nullable();

            $table->string('day_7_time_1')->nullable();
            $table->string('day_7_time_2')->nullable();
            $table->string('day_7_time_3')->nullable();
            $table->string('day_7_time_4')->nullable();
            $table->string('day_7_time_5')->nullable();
            $table->string('day_7_time_6')->nullable();
            

            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
