<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicServantsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('public_servants', function (Blueprint $table) {
			$table->increments('id');

			$table->string('user')->unique();
			$table->string('pass');

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
		Schema::drop('public_servants');
	}
}
