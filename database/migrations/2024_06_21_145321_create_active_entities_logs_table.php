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
        Schema::create('active_entities_logs', function (Blueprint $table) {
            $table->id();
            $table->string('tw_account', 255)->nullable();
            $table->date('date')->nullable()->useCurrent();
            $table->timestamp('last_successful_request')->nullable();
            $table->timestamps();
            
            $table->primary('id');
            $table->unique(['tw_account', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('active_entities_logs');
    }
};
