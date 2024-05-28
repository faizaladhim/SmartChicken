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
        Schema::create('device', function (Blueprint $table) {           
            $table->string('id'); // kolom id dengan tipe varchar
            $table->primary('id'); // define id menjadi primary key            
            $table->foreignId('user_id')->constrained();            
            $table->string('name');            
            $table->timestamps(); // created_at dan updated_at        
        });
    
    }
    
    public function down()
    {
        Schema::dropIfExists('device');
    }
    
};
