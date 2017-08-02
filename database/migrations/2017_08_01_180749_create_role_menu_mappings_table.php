<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleMenuMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_menu_mappings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id');
            $table->integer('menu_id');
            $table->enum('add', ['0', '1'])->default('1');
            $table->enum('view', ['0', '1'])->default('1');
            $table->enum('edit', ['0', '1'])->default('1');
            $table->enum('delete', ['0', '1'])->default('1');
            $table->enum('search', ['0', '1'])->default('1');
            $table->enum('copy', ['0', '1'])->default('1');
            $table->enum('csv', ['0', '1'])->default('1');
            $table->enum('excel', ['0', '1'])->default('1');
            $table->enum('pdf', ['0','1'])->default('1');
            $table->enum('print', ['0','1'])->default('1');
            $table->timestamps();
            $table->ipAddress('visitor');
            $table->macAddress('device');
            $table->enum('record_status', ['0', '1'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_menu_mappings');
    }
}
