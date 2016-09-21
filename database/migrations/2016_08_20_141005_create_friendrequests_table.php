<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_requests', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('sender_id')->unsigned()->index();
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('receiver_id')->unsigned()->index();
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

            $table->primary(['sender_id', 'receiver_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('friend_requests');
    }
}
