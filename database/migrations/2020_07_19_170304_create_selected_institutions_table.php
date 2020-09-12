<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_institutions', function (Blueprint $table) {
            $table->id();
            $table->string('institution_name');
            $table->string('institution_image');
            $table->text('institution_detail');
            $table->unsignedBigInteger('region_id')->unsigned();
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
        Schema::dropIfExists('selected_institutions');
    }
}
