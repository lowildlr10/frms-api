<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_feedbacks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('request_id');
            $table->uuid('respondent_id');
            $table->text('message');
            $table->timestamps();

            $table->foreign('request_id')
                ->references('id')
                ->on('requests')
                ->onDelete('cascade');
            $table->foreign('respondent_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('request_feedback');
    }
};
