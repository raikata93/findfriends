<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('friends', function (Blueprint $table) {
            $table->integer('fr1')->unsigned()->change();
            $table->foreign('fr1')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fr2')->unsigned()->change();
            $table->foreign('fr2')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
