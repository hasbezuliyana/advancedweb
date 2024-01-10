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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('system_pic');
            $table->string('system_owner');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('duration');
            $table->string('methodology');
            $table->string('platform');
            $table->string('deployment_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
