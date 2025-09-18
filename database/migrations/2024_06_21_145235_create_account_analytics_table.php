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
        Schema::create('account_analytics', function (Blueprint $table) {
            $table->id();
            $table->string('account_id', 255)->nullable();
            $table->string('account_name', 255)->nullable();
            $table->string('tmz_city', 255)->nullable();
            $table->string('platform', 255)->nullable();
            $table->longText('json_data')->nullable();
            $table->timestamp('last_updated_ts')->nullable();
            $table->timestamp('ts_created')->nullable()->useCurrent();
            $table->timestamps();

            $table->primary('id');
            $table->index('account_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_analytics');
    }
};
