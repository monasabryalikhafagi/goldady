<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {

	public function up()
	{
		Schema::create('weights', function(Blueprint $table) {
			$table->id('id');
			$table->string('name')->unique();
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('weights');
	}
};