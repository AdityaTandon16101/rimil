<?php

namespace Database\Seeders;

use App\Models\MemberDetail;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into roles (name, status) values (?, ?)', ['Admin', 1]);
        DB::insert('insert into roles (name, status) values (?, ?)', ['Customer', 1]);

        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['WINNERS', 5000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 01', 5000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 02', 5000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 03', 5000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 04', 5000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 05', 5000]);

        DB::insert('insert into users (role_id, name, email, phone, password, status, banned) values (?, ?, ?, ?, ?, ?, ?)', [
            Role::ADMIN,
            'Admin',
            'admin@admin.com',
            '1234567890',
            Hash::make('123456789'),
            false,
            false
        ]);

        DB::insert('insert into member_details (user_id, total_deposit, referral_income, total_withdraw, reward_income, total_earning, is_permanent, phase_id) values (?, ?, ?, ?, ?, ?, ?, ?)', [
            1, 0, 0, 0, 0, 0, false, NULL
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

        DB::insert('insert into member_details (user_id, total_deposit, referral_income, total_withdraw, reward_income, total_earning, is_permanent, phase_id) values (?, ?, ?, ?, ?, ?, ?, ?)', [
            2, 0, 0, 0, 0, 0, false, NULL
        ]);

        \App\Models\User::factory(497)
            ->has(\App\Models\MemberDetail::factory()->count(1))
            ->create();
    }
}
