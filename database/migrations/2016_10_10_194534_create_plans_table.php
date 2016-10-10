<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('customer_infos');
            $table->string('customer_address');
            $table->string('customer_email');
            $table->string('customer_phonenumber');
            $table->text('pitch');
            $table->text('cdc_fonctionnel');
            $table->text('goals');
            $table->text('team_project');
            $table->text('team_client');
            $table->text('process');
            $table->text('organisation');
            $table->text('information');
            $table->text('cr_client');
            $table->text('cr_interne');
            $table->text('base_mail');
            $table->text('thrends_msg');
            $table->text('risk');
            $table->integer('user_id')->unsigned();
            $table->string('signature')->default(0);
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
        Schema::dropIfExists('plans');
    }
}
