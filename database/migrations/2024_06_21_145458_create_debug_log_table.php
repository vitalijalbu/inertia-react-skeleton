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
        Schema::create('debug_log', function (Blueprint $table) {
            $table->id();
            $table->string('entity_id', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('tw_account', 255)->nullable();
            $table->dateTime('ae_start_date')->nullable();
            $table->dateTime('ae_end_date')->nullable();
            $table->dateTime('activity_start')->nullable();
            $table->dateTime('activity_end')->nullable();
            $table->boolean('in_active_entities')->default(false)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->decimal('spent', 10, 2)->default(0.00)->nullable();
            $table->timestamp('ts_created')->nullable()->useCurrent();
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debug_log');
    }
};
