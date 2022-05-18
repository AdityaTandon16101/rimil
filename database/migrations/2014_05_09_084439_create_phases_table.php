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
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('package_amount', 10, 2);
            $table->timestamps();
        });
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['WINNERS', 5000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 01', 10000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 02', 20000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 03', 40000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 04', 80000]);
        DB::insert('insert into phases (name, package_amount) values (?, ?)', ['PHASE 05', 160000]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phases');
    }
};
