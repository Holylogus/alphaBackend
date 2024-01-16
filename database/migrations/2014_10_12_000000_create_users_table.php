<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //0:admin, 1:felhasználó
            $table->boolean('permission')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
        
        User::create([
            'name' => 'Patrik', 
            'email' => 'kripto.petrik@gmail.com', 
            'password' => 1234,
            'permission' => 0,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
