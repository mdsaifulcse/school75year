<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id',false);
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('total',false,8)->default(0);
            $table->integer('consider',false,8)->default(0);
            $table->integer('payable',false,8)->default(0);
            $table->integer('paid',false,8)->default(0);
            $table->integer('dues',false,8)->default(0);

            $table->string('father_name')->nullable();
            $table->string('guest_no')->nullable();
            $table->string('ticket_no')->nullable();
            $table->tinyInteger('student_category',false,1)->nullable()->comment('1=Ex-Student, 2=Running Student, 3=Teacher');

            $table->unsignedInteger('batch_id',false);
            $table->foreign('batch_id')->references('id')->on('batch');

            $table->unsignedInteger('district_id',false)->nullable();
            $table->foreign('district_id')->references('id')->on('districts');

            $table->unsignedInteger('thana_upazila_id',false)->nullable();
            $table->foreign('thana_upazila_id')->references('id')->on('thana_upazilas');

            $table->unsignedInteger('union_id',false)->nullable();
            $table->foreign('union_id')->references('id')->on('unions');

            $table->unsignedInteger('village_id',false)->nullable();
            $table->foreign('village_id')->references('id')->on('villages');

            $table->tinyInteger('status',false,1)->default(0)->comment('0=Pending, 1=Approved, 2=unpaid,3=Paid');
            $table->tinyInteger('serial_num',false,4)->default(0);
            $table->author();
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
        Schema::dropIfExists('user_infos');
    }
}
