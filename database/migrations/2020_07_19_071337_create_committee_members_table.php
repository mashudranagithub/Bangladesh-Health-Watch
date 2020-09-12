<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->id();
            $table->string('committee_member_name');
            $table->string('committee_member_image');
            $table->string('committee_member_phone')->unique();
            $table->string('committee_member_email')->nullable()->unique();
            $table->text('committee_member_detail');
            $table->unsignedBigInteger('region_id')->unsigned();
            $table->integer('committee_member_position')->unsigned()->nullable();
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
        Schema::dropIfExists('committee_members');
    }
}
