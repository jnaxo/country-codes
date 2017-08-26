<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrystoreAdministrativeAreasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctrystore_administrative_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',3);
            $table->string('tag', 10)->nullable;
            $table->string('name');
            $table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')
                ->references('id')
                ->on('ctrystore_countries')
                ->onDelete('cascade');
            $table->integer('admin_division_id')->unsigned();
            $table->foreign('admin_division_id')
                ->references('id')
                ->on('ctrystore_administrative_divisions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('ctrystore_administrative_areas');
    }
}
