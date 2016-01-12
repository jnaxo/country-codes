<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table)
        {            
            $table->integer('numeric_code')->unsigned();            
            $table->primary('numeric_code');         
            $table->integer('zone_id')->unsigned();
            $table->string('name');
            $table->string('alpha2',2);
            $table->string('alpha3',3);            
            $table->timestamps();
            
            $table->foreign('zone_id')
                  ->references('id')->on('zones')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
