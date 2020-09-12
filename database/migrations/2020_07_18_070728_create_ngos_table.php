<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->id();
            $table->string('ngo_name');
            $table->string('ngo_image');
            $table->string('focal_person_name');
            $table->string('focal_person_phone')->unique();
            $table->string('focal_person_email')->nullable()->unique();
            $table->unsignedBigInteger('region_id')->unsigned();
            $table->text('ngo_detail');
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('ngos');
    }
}
