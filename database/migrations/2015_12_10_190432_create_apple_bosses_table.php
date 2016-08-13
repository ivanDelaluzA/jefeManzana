<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppleBossesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('apple_bosses', function (Blueprint $table) {
			$table->increments('id');
			$table->string('ifeKey');
			$table->string('address');
			$table->integer('section');
			$table->integer('block');

			$table->integer('personal_information_id')->unsigned();
			$table->foreign('personal_information_id')->references('id')->on('personal_informations');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('apple_bosses');
	}
}
