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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_client_id');
            $table->foreign('package_client_id')->references('id')->on('admins');
            $table->string('p_name');
            $table->string('p_description');
            $table->double('p_price',15,2);
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
        Schema::dropIfExists('packages');
    }
};
