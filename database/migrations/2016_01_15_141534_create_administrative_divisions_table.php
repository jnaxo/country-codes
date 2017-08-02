<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativeDivisionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',3);
            $table->string('tag', 10)->nullable;
            $table->string('name');
            $table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
            $table->integer('administrative_division_kind_id')->unsigned();
            $table->foreign('administrative_division_kind_id')
                ->references('id')
                ->on('administrative_division_kinds')
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
        Schema::dropIfExists('administrative_divisions');
    }
}
