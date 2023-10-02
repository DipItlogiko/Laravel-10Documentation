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
        Schema::rename('flights', 'fligh'); ////akhane amar flights name je table ta chilo amader database ar moddhe ami oi table ar name take rename korediyeci fligh ai name
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
