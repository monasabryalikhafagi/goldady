<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {

	public function up()
	{
		Schema::create('safe', function(Blueprint $table) {
			$table->id('id');
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->enum('type', array('internal', 'external'));
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users')
			->onDelete('set null')
			->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('safe');
	}
};