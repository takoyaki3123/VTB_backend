<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //

    protected $fillable = [
        'img',
        'name',
        'desc',
        'link',
        'ctime',
        'utime',
        'logo',
        'activeDate',
    ];
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s';
    const CREATED_AT = 'ctime';
    const UPDATED_AT = 'utime';
    protected $table = 'Group';
}
