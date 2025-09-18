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
        Schema::create('airtable_queue', function (Blueprint $table) {
            $table->id();
            $table->string('script_name', 255)->nullable();
            $table->string('base', 255)->nullable();
            $table->string('table', 255)->nullable();
            $table->string('action', 255)->nullable();
            $table->longText('data')->nullable();
            $table->longText('errors')->nullable();
            $table->boolean('removable')->default(true);
            $table->string('next_script', 255)->nullable();
            $table->boolean('lock')->nullable()->default(false);
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
        Schema::dropIfExists('airtable_queue');
    }
};
