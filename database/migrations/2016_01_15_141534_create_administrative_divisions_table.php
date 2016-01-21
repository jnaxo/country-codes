<?php

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
      Schema::create('aministrative_divisions', function (Blueprint $table)
      {
          $table->increments('id');
          $table->integer('country_id')->unsigned();
          $table->integer('administrative_division_id')->unsigned();
          $table->string('code',3);
          $table->string('name');

          $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('cascade');
          $table->foreign('administrative_division_id')
                ->references('id')->on('administrative_divisions')
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
      Schema::drop('aministrative_divisions');
  }
}
