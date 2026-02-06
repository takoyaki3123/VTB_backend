<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s';
    const CREATED_AT = 'ctime';
    const UPDATED_AT = 'utime';
    protected $table = 'event';
}
