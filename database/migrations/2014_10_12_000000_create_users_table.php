<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $table->id();
            $table->foreignId('role_id')->constrained();
            $table->mediumText('photo')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('status');
            $table->boolean('banned');
            $table->timestamps();
        });

        DB::insert('insert into users (role_id, name, email, phone, password, status, banned) values (?, ?, ?, ?, ?, ?, ?)', [
            Role::ADMIN,
            'Admin',
            'admin@admin.com',
            '1234567890',
            Hash::make('123456789'),
            false,
            false
        ]);

        DB::insert('insert into users (role_id, name, email, phone, password, status, banned) values (?, ?, ?, ?, ?, ?, ?)', [
            Role::CUSTOMER,
            'DEE Panday',
            'iantdwipayan@gmail.com',
            '8435201588',
            Hash::make('123456789'),
            false,
            false
        ]);
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
