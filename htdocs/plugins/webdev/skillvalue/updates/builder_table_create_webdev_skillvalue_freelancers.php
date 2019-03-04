<?php namespace Webdev\Skillvalue\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebdevSkillvalueFreelancers extends Migration
{
    public function up()
    {
        Schema::create('webdev_skillvalue_freelancers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webdev_skillvalue_freelancers');
    }
}
