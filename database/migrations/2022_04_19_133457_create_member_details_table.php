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
        Schema::create('member_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->double('total_deposits', 10, 2);
            $table->double('referral_income', 10, 2);
            $table->double('total_earnings', 10, 2);
            $table->double('withdraws', 10, 2);
            $table->double('reward_income', 10, 2);
            $table->boolean('is_permanent');
            $table->tinyInteger('phase_number');
            $table->timestamps();
        });
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
