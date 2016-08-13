<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('applications', function (Blueprint $table) {
			$table->increments('id');
			$table->string('folio');

			$table->integer('apple_boss_id')->unsigned();
			$table->foreign('apple_boss_id')->references('id')->on('apple_bosses');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('applications');
	}
}
