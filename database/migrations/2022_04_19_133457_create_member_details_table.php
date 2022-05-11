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
            $table->double('total_deposits', 10, 2);
            $table->double('referral_income', 10, 2);
            $table->double('total_earnings', 10, 2);
            $table->double('withdraws', 10, 2);
            $table->double('reward_income', 10, 2);
            $table->timestamps();
        });

        DB::insert('insert into member_details (user_id, total_deposits, referral_income, total_earnings, withdraws, reward_income) values (?, ?, ?, ?, ?, ?)', [
            1, 0, 0, 0, 0, 0
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
