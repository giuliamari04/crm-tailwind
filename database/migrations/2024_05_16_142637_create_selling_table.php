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
        Schema::create('selling', function (Blueprint $table) {
            $table->id();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->decimal('amount', 10, 2);
            $table->date('creation_date');
            $table->foreign('stage_id')->references('id')->on('sales_stages')->onDelete('cascade');
            $table->unsignedBigInteger('stage_id');
            $table->boolean('lost')->default(false);
            $table->boolean('closed')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selling');
    }
};
