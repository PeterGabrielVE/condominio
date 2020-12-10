<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('building_id')->nullable();
            $table->unsignedBigInteger('meta_type_id')->nullable();
            $table->string('value');

            $table->foreign('building_id')
                ->references('id')
                ->on('buildings')->onDelete('cascade');

            $table->foreign('meta_type_id')
                ->references('dataTypeID')
                ->on('meta_type')->onDelete('cascade');
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
        Schema::dropIfExists('buildings_meta');
    }
}
