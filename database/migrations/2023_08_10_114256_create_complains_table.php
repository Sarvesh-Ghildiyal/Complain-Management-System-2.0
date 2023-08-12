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
        Schema::create('complains', function (Blueprint $table) {
            //  Creating a new complain
            $table->id('cid');
            $table->unsignedBigInteger('uid');
            $table->string('title');
            $table->string('body');
            $table->string('status');
            
            //  Assingin complain to some user
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->timestamp('assigned_at')->nullable();
            $table->timestamp('due_date')->nullable();
            
            //  Getting user feedbac and admin feedback
            $table->string('feedback')->nullable();
            $table->string('resolution_notes')->nullable();
            $table->timestamps();

            // for Foriegn key
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
