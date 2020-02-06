<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeUsedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeUsed', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeeId');
            $table->string('clockInValue')->default('');
            $table->string('startBreak')->default('');
            $table->string('endBreak')->default('');
            $table->string('clockOut')->default('');
            $table->string('totalTimeWorked')->default('');
            $table->string('Hoursleftbeforetimeout')->default('');
            $table->string('totalbreaksused')->default(0);
            $table->boolean('clockInBoolean')->default(0);
            $table->boolean('endBreakBoolean')->default(0);
            $table->boolean('startBreakBoolean')->default(0);
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
        Schema::dropIfExists('time_used');
    }
}
