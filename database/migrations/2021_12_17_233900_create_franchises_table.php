<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->string('address_id');
            $table->string('user_id');
            $table->string('name');
            $table->string('description');
            $table->string('logo')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->enum('status', ['active', 'inactive']);
            $table->string('whatsapp');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('linkedin');
            $table->string('telegram');
            $table->timestamps();

            $table
                ->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchises');
    }
}