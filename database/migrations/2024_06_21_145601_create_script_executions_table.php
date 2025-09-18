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
        Schema::create('script_executions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('file', 255)->nullable();
            $table->integer('execution_time')->nullable();
            $table->integer('time_slept')->nullable();
            $table->longText('execution_messages')->nullable();
            $table->longText('api_errors')->nullable();
            $table->longText('analytics')->nullable();
            $table->integer('api_calls')->nullable();
            $table->integer('facebook_calls')->nullable();
            $table->longText('debug_logs')->nullable();
            $table->timestamp('ts_created')->nullable()->useCurrent();
            $table->timestamps();

            $table->index('name');
            $table->index('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('script_executions');
    }
};
