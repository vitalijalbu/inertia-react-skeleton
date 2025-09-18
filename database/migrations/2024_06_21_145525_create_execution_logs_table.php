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
        Schema::create('execution_logs', function (Blueprint $table) {
            $table->id();
            $table->string('script', 255)->nullable();
            $table->longText('message')->nullable();
            $table->longText('api_errors')->nullable();
            $table->integer('execution_time')->nullable();
            $table->integer('tw_calls')->nullable();
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
        Schema::dropIfExists('execution_logs');
    }
};
