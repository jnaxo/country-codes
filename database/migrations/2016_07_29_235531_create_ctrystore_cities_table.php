<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrystoreCitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctrystore_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('admin_area_id')->unsigned()->index();
            $table->foreign('admin_area_id')
                ->references('id')
                ->on('ctrystore_administrative_areas')
                ->onDelete('cascade')
                ->nullable();
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
        Schema::dropIfExists('ctrystore_cities');
    }
}
