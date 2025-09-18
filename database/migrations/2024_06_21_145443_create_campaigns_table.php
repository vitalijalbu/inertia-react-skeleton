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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('entity_id', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('tw_account', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->integer('clicks')->default(0)->nullable();
            $table->decimal('spent', 10, 2)->default(0.00)->nullable();
            $table->boolean('need_update')->default(false)->nullable();
            $table->boolean('updated_names')->default(false)->nullable();
            $table->text('activity_log')->nullable();
            $table->timestamp('last_update_metrics')->nullable();
            $table->string('Ad_set_ID', 255)->nullable()->comment('created for FB');
            $table->string('Ad_set_name', 255)->nullable()->comment('created for FB');
            $table->string('Campaign_ID', 255)->nullable()->comment('created for FB');
            $table->string('Account_ID', 255)->nullable()->comment('created for FB');
            $table->string('Account', 255)->nullable()->comment('created for FB');
            $table->decimal('cpc', 10, 2)->default(0.00)->nullable()->comment('created for FB');
            $table->double('ctr')->default(0.00)->nullable()->comment('created for FB');
            $table->unsignedInteger('FB_impressions')->default(0)->nullable()->comment('created for FB');
            $table->integer('results')->default(0)->nullable()->comment('created for FB');
            $table->string('source', 255)->nullable()->comment('created for FB');
            $table->integer('ay_impressions')->default(0)->nullable();
            $table->integer('ay_prebid_won_revenue')->default(0)->nullable();
            $table->integer('ay_dynamicAllocation_revenue_with_forecast')->default(0)->nullable();
            $table->integer('ay_direct_revenue')->default(0)->nullable();
            $table->integer('ay_pageViews')->default(0)->nullable();
            $table->integer('ay_sessions')->default(0)->nullable();
            $table->timestamp('ay_last_update')->nullable();
            $table->timestamp('ts_created')->nullable()->useCurrent();
            $table->boolean('updated_tw')->nullable();
            $table->boolean('updated_ay')->nullable();
            $table->timestamps();

            $table->unique(['entity_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
