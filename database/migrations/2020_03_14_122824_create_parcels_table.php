<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id');
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone');
            $table->string('parcel_name');
            $table->string('pickup_location');
            $table->string('track_no',20)->unique();
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('receiver_address');
            $table->string('receiver_email');
            $table->string('origin');
            $table->string('package');
            $table->string('carrier');
            $table->string('shipment');
            $table->string('weight');
            $table->string('product');
            $table->string('quantity');
            $table->string('pickup_date');
            $table->string('pickup_time');
            $table->string('fee');
            $table->string('status');
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
        Schema::dropIfExists('parcels');
    }
}
