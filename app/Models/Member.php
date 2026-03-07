<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s';
    const CREATED_AT = 'ctime';
    const UPDATED_AT = 'utime';
    protected $table = 'member';
    protected function casts(): array
    {
        return [
            'sns' => 'array',
            'live' => 'array',
        ];
    }

    /**
     * Scope a query to only include records limited by $limit.
     *
     * @param Builder $query
     * @param int $limit
     * @return void
     */
    #[Scope]
    protected function getRandomList(Builder $query, int $limit): void
    {
        $query->inRandomOrder()->limit($limit);
    }
}
