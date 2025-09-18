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
        Schema::create('warnings', function (Blueprint $table) {
            $table->id();
            $table->string('script', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->longText('message')->nullable();
            $table->smallInteger('severity')->default(0);
            $table->timestamp('ts_created')->nullable()->useCurrent();
            $table->timestamps();

            $table->index('script');
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warnings');
    }
};
