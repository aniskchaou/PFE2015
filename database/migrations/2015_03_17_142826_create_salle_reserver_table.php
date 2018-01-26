<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalleReserverTable extends Migration {

	public function up()
	{
		Schema::create('salle_reserver', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('salle_id')->unsigned();
			$table->timestamp('date_debut');
			$table->timestamp('date_fin');
		});
	}

	public function down()
	{
		Schema::drop('salle_reserver');
	}
}