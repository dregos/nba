<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post_team', function (Blueprint $table) {
          $table->unsignedInteger('post_id');
          $table->unsignedInteger('team_id');

          $table->primary(['post_id', 'team_id']);
          $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
          $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

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
        Schema::dropIfExists('post_team');
    }
}
