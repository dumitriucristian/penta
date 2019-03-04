<?php namespace Webdev\Skillvalue\Models;

use Model;

/**
 * Model
 */
class Freelancer extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'webdev_skillvalue_freelancers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
