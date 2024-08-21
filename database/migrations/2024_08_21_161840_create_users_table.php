<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name of the user
            $table->string('email')->unique(); // Unique email field
            $table->string('cpf', 11)->unique(); // Unique CPF field
            $table->timestamp('email_verified_at')->nullable(); // Optional email verification timestamp
            $table->string('password', 60); // Password field
            $table->rememberToken(); // For "Remember Me" functionality
            $table->timestamps(); // Created at and updated at timestamps
            $table->integer('admin')->default(0); // Admin flag, default is 0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
