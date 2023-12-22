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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  /// akhane amader user_id column ar datatype ta unsignedBigInteger dewar karon hocche amader ai user_id column ta foreign_key hobe tai and amader users table ar id take amader ai posts table ar foreign_key hishebe define korechi and amader amader users table ar id ar datatype hocche unsignedBigInteger tai amra aikhane oo amader ai foreign_key ar datatype ta unsignedBigInteger diyechi
            $table->foreign('user_id')->references('id')->on('users');  // akhane amader posts table ar moddhe user_id nam aa akta column create korbe jeita hobe amader foreign key and ai foreign key ar reference diyechi amader users table ar id column take mane amader users table ar id ta hobe amader posts table ar user_id column ar value and posts table ar ai user_id column ta hobe amader posts table ar foreign key and ai foreign key
            $table->string('title');
            $table->text('content');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
