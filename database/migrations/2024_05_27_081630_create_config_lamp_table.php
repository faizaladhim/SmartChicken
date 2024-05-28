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
        Schema::create('config_lamp', function (Blueprint $table) {
            $table->foreignId('device_id')->constrained();
            $table->boolean('status')->default(0);
            $table->time('time_on')->nullable();
            $table->time('time_off')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('config_lamp');
    }
};
