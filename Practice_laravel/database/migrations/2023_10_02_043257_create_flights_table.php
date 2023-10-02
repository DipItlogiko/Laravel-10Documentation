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
        Schema::create('flights', function (Blueprint $table) { /////// akhane flights hocche amar table ar nam ai name aamader database aaaa table create hobe
            $table->id();
            $table->comment('this is flights table');
            $table->string('name',20);////akhane ami bolechi amar flights table ar moddhe name name akta column hobe jar datatype hobe string mane varchar and ai name column ar maximum length hobe 20
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
