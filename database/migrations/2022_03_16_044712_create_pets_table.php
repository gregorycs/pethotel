<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->tinyInteger('age');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('sex_id')->nullable();
            $table->unsignedBigInteger('type_pet_id')->nullable();

            $table->foreign('customer_id')
                    ->references('id')->on('customers')
                    ->onDelete('set null');

            $table->foreign('sex_id')
                    ->references('id')->on('sexes')
                    ->onDelete('set null');

            $table->foreign('type_pet_id')
                    ->references('id')->on('type_pets')
                    ->onDelete('set null');                  
            
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
        Schema::dropIfExists('pets');
    }
}
