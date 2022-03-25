<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_forms', function (Blueprint $table) {
            $table->id();
            $table->date('entry_date');
            $table->date('release_date');
            $table->enum('mobility', ['si','no']);
            $table->text('observation');
            $table->unsignedBigInteger('customer_id')->nullable();

            $table->foreign('customer_id')
                    ->references('id')->on('customers')
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
        Schema::dropIfExists('reservation_forms');
    }
}
