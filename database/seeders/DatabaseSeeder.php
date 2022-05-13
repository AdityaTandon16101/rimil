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

        DB::insert('insert into users (role_id, name, email, phone, password, status, banned) values (?, ?, ?, ?, ?, ?, ?)', [
            Role::ADMIN,
            'Admin',
            'admin@admin.com',
            '1234567890',
            Hash::make('123456789'),
            false,
            false
        ]);

        DB::insert('insert into member_details (user_id, total_deposits, referral_income, total_earnings, withdraws, reward_income, is_permanent, phase_number) values (?, ?, ?, ?, ?, ?, ?, ?)', [
            1, 0, 0, 0, 0, 0, false, MemberDetail::PHASE_ZERO
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

        DB::insert('insert into member_details (user_id, total_deposits, referral_income, total_earnings, withdraws, reward_income, is_permanent, phase_number) values (?, ?, ?, ?, ?, ?, ?, ?)', [
            2, 0, 0, 0, 0, 0, false, MemberDetail::PHASE_ZERO
        ]);

        \App\Models\User::factory(498)
            ->has(\App\Models\MemberDetail::factory()->count(1))
            ->create();
    }
}
