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
        Schema::create('adsets_analytics', function (Blueprint $table) {
            $table->id();
            $table->string('adset_id', 255)->nullable();
            $table->string('adset_name', 255)->nullable();
            $table->string('adset_status', 255)->nullable();
            $table->string('campaign_id', 255)->nullable();
            $table->string('campaign_name', 255)->nullable();
            $table->string('account_id', 255)->nullable();
            $table->string('account_name', 255)->nullable();
            $table->string('fb_ad_status', 255)->nullable();
            $table->longText('json_data')->nullable();
            $table->longText('daily_json_data')->nullable();
            $table->timestamp('last_updated_ts')->nullable();
            $table->timestamp('ts_created')->nullable()->useCurrent();
            $table->timestamps();

            $table->primary('id');
            $table->index('adset_id', 'account_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adsets_analytics');
    }
};
