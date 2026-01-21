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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('contact_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('is_active');
            $table->string('preferred_contact')->nullable();
            $table->string('client_type')->nullable();
            $table->unsignedBigInteger('assigned_agent_id')->nullable();
            $table->text('customer_note')->nullable();
            $table->timestamps();
            $table->foreign('assigned_agent_id')
                ->references('representative_id')
                ->on('representative')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
