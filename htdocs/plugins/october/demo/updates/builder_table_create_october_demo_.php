<?php namespace October\Demo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOctoberDemo extends Migration
{
    public function up()
    {
        Schema::create('october_demo_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('october_demo_');
    }
}
