<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyList extends Model
{
    /** @use HasFactory<\Database\Factories\ApplyListFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s';
    const CREATED_AT = 'ctime';
    const UPDATED_AT = 'utime';
    protected $table = 'applyList';
}
