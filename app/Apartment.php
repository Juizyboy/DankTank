<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Apartment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'apartment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * the attribute is guarded
     * @var array
     */
    protected $guarded = array('id');

    /**
     * The primary key for this table used by the model.
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * We dont't want to use created_at and updated_at
     */
    public $timestamps = false;


    /**
     * @var array the roles for this model
     */
    public static $rules = array(
    );
}
