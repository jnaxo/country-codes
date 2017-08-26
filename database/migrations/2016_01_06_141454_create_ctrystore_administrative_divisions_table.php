<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrystoreAdministrativeDivisionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'ctrystore_administrative_divisions',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('level');
                $table->string('name');
                $table->integer('country_id')->unsigned()->index();
                $table->foreign('country_id')
                    ->references('id')
                    ->on('ctrystore_countries')
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
        Schema::dropIfExists('ctrystore_administrative_divisions');
    }
}
