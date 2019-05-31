<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LikeProposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeproposals', function (Blueprint $table) {
                                    $table->Increments('id');

                        $table->integer('user_id')->unsigned();
                                                $table->integer('proposal_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('proposal_id')->references('id')->on('proposals');
            $table->rememberToken();
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
                Schema::dropIfExists('likeproposals');
    }
}
