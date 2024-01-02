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
        Schema::create('show_room_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('showRoom_id')->constrained('show_rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->string('sales_name');
            $table->integer('title')->default(0);
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_room_teams');
    }
};
