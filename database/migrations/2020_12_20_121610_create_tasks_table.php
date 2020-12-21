<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // adding two more column,description and user id
        //The new column named “description” will store the task description and column named “user_id” will store the id of the user who created the task. We added “ ->unsigned()->index()” after the user_if because it is a foreign key from users table.
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('description');
	        $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('tasks');
    }
}
