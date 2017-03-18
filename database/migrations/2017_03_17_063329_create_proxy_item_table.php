<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProxyItemTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('proxy_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->int('count')->default(0);
            $table->text('target_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
}
