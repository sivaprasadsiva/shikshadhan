<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bookings_userid');
            $table->foreign('bookings_userid')->references('id')->on('users');
            $table->unsignedBigInteger('bookings_clientid');
            $table->foreign('bookings_clientid')->references('id')->on('admins');
            $table->unsignedBigInteger('bookings_packageid');
            $table->foreign('bookings_packageid')->references('id')->on('packages');
            $table->rememberToken();
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted');
            $table->string('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
