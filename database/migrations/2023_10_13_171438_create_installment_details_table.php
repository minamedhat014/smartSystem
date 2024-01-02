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
        Schema::create('installment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('installment_id')->constrained('installments')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('bank_name');
            $table->tinyInteger('max_months_installments');
            $table->tinyInteger('months_without_intrest');
            $table->tinyInteger('percentage_of_admin_fees');
            $table->tinyInteger('factory_intrest');
            $table->tinyInteger('branch_intrest');
            $table->tinyInteger('status')->default(1);
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('installment_details');
    }
};
