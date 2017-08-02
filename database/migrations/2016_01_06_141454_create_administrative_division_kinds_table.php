<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativeDivisionKindsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'administrative_division_kinds',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('level');
                $table->string('name');
                $table->integer('country_id')->unsigned()->index();
                $table->foreign('country_id')
                    ->references('id')
                    ->on('countries')
                    ->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrative_division_kinds');
    }
}
