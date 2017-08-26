<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrystoreCountriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctrystore_countries', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id'); // equivalent to numeric code
            $table->integer('zone_id')->unsigned();
            $table->string('name');
            $table->string('alpha2',2);
            $table->string('alpha3',3);
            $table->foreign('zone_id')
                ->references('id')
                ->on('ctrystore_zones')
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
        Schema::dropIfExists('ctrystore_countries');
    }
}
