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
        Schema::create('phons', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->unsignedBigInteger('user_id');  //// akhane amader phons  table ar moddhe user_id column ta hobe foreign key.. foreign key hocche kono akta table ar primary key ke jokhon amra onno akta table ar  moddhe rakhbo tokhon oi ta ke bole foreign key..amader users table ar id column ar value gulo amader phons table ar moddhe user_id column ar moddhe thakbe and amader users table ar id column ar datatype ta hocche unsignedBigInteger tai aikhane ooo amra unsignedBigInteger datatype ta use korechi amader ai column ar datatype hishebe...
            $table->foreign('user_id')->references('id')->on('users');  // akhane amader phons table ar moddhe user_id nam aa akta column create korbe jeita hobe amader foreign key and ai foreign key ar reference diyechi amader users table ar id column take mane amader users table ar id ta hobe amader phons table ar user_id column ar value and phons table ar ai user_id column ta hobe amader phons table ar foreign key 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phons');
    }
};
