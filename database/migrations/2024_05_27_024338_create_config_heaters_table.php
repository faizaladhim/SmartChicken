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
        Schema::create('config_heaters', function (Blueprint $table) {
            $table->string('device_id');
            $table->foreign('device_id')->references('id')->on('devices');
            $table->enum('mode', ['manual', 'automatic'])->default('manual');
            $table->boolean('status')->default(0);
            $table->float('max_temp')->nullable();
            $table->float('min_temp')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('config_heaters');
    }
};
