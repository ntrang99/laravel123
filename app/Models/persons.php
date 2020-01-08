<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class persons extends Model
{
    protected $table = 'contacts';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
