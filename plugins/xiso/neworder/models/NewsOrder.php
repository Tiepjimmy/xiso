<?php namespace Xiso\Neworder\Models;

use Model;

/**
 * Model
 */
class NewsOrder extends Model
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
    public $table = 'xiso_neworder_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
