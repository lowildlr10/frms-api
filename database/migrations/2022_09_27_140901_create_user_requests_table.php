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
        Schema::create('requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('requestor_id');
            $table->uuid('application_id');
            $table->string('subject');
            $table->text('body');
            $table->enum('status', ['pending', 'ongoing', 'completed', 'canceled'])->default('pending');
            $table->timestamps();

            $table->foreign('requestor_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('application_id')
                ->references('id')
                ->on('applications')
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
        Schema::dropIfExists('requests');
    }
};
