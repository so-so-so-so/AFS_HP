<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->primary('id')->autoIncrement();
            $table->srting('name',100);
            $table->string('password',255)->notnull();
            $table->string('mail')->nullable();
            $table->int('authority',1);
            $table->timestamp('created_at')->default();
            $table->timestamp('deleted_at')->default();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
