<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchFieldsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_fields', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('display_name');
            $table->string('text_id');
            $table->string('field_type');
            $table->string('filters');
            $table->string('select_values');
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
        Schema::drop('search_fields');
    }

}
