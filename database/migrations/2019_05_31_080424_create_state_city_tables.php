<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateStateCityTables extends Migration
{
   public function up()
   {
       Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });


        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id');
            $table->string('name');
            $table->string('mp');
            $table->Integer('attendance');
            $table->Integer('petitionapproved');



            $table->timestamps();
        });
   }
   public function down()
   {
       Schema::drop('cities');
       Schema::drop('state');
   }
}