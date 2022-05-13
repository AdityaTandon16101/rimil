<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('member_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('phase_id')->nullable()->constrained();
            $table->double('total_deposit', 10, 2);
            $table->double('referral_income', 10, 2);
            $table->double('total_withdraw', 10, 2);
            $table->double('reward_income', 10, 2);
            $table->double('total_earning', 10, 2);
            $table->boolean('is_permanent');
            $table->timestamps();
        });

        DB::insert('insert into member_details (user_id, total_deposit, referral_income, total_withdraw, reward_income, total_earning, is_permanent, phase_id) values (?, ?, ?, ?, ?, ?, ?, ?)', [
            1, 0, 0, 0, 0, 0, false, NULL
        ]);
        DB::insert('insert into member_details (user_id, total_deposit, referral_income, total_withdraw, reward_income, total_earning, is_permanent, phase_id) values (?, ?, ?, ?, ?, ?, ?, ?)', [
            2, 0, 0, 0, 0, 0, false, NULL
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_details');
    }
};
