<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            //$table->timestamp('completed_at')->nullable();
            $table->boolean('completed')->default(false);
            $table->timestamps();
            $table->timestamp('due_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignements');
    }
}
