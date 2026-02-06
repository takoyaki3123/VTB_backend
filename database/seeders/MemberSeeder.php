<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                'name' => '一ノ瀬うるは',
                'enName' => 'ichinose uruha',
                'desc' => 'うるぱんち！！',
                'live' => ['youtube'=> 'https://www.youtube.com/@uruhaichinose'],
                'sns' => ['X' => 'https://x.com/uruha_ichinose'],
                'gid' => 3,
                'img' => 'ichinose.jpg',
            ]
        ];
        foreach ($data as $imgCollectData) {
            $model = new Member;
            $model->name = $imgCollectData['name'];
            $model->enName = $imgCollectData['enName'];
            $model->desc = $imgCollectData['desc'];
            $model->live = json_encode($imgCollectData['live']);
            $model->gid = $imgCollectData['gid'];
            $model->sns = json_encode($imgCollectData['sns']);
            $model->img = $imgCollectData['img'];
            $model->save();
        }
    }
}
