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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('shirt_name');
            $table->string('shirt_number');
            $table->timestamps();
            $table->foreign('item_id')->on('items')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('employee_id')->on('employees')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('category_id')->on('categories')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
