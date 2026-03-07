<?php
namespace App\Service;

use App\Models\Event;
use App\Models\Member;

class DiscoverService
{
    public function getRandomList(int $limit = 10)
    {
        // use scope function
        $member = Member::query()->getRandomList($limit)->get(['id', 'gid', 'name', 'img', 'activeDate', 'sns', 'live']);
        $event = Event::query()->getRandomList($limit)->get(['id', 'img', 'name', 'gid', 'stime', 'etime']);
        return ['member' => $member, 'event' => $event];
    }
}
