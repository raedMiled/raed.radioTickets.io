<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_deals', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('deal_id');
            $table->string('email');
            $table->timestamps();

            $table->foreign('deal_id')
                ->references('id')
                ->on('deals')
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
        Schema::dropIfExists('reservation_deals');
    }
}
