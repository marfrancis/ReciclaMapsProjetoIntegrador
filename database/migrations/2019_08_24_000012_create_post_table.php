<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'post';

    /**
     * Run the migrations.
     * @table post
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo')->nullable()->default(null);
            $table->text('texto')->nullable()->default(null);
            $table->dateTime('data')->nullable()->default(null);
            $table->string('imagem', 128)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
