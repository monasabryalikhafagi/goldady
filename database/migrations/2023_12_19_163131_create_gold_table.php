<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {

	public function up()
	{
		Schema::create('gold', function(Blueprint $table) {
			$table->id('id');
			$table->timestamps();
			$table->float('price', 15,2)->nullable();
			$table->bigInteger('standard_id')->unsigned()->nullable();
			$table->bigInteger('weight_id')->unsigned()->nullable();
			$table->string('name');
			$table->bigInteger('safe_id')->unsigned()->nullable();
			$table->foreign('standard_id')->references('id')->on('standards')
			->onDelete('set null')
			->onUpdate('cascade');
			$table->foreign('weight_id')->references('id')->on('standards')
			->onDelete('set null')
			->onUpdate('cascade');
			$table->foreign('safe_id')->references('id')->on('safe')
			->onDelete('set null')
			->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('gold');
	}
};