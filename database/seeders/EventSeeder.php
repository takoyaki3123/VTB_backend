<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $model = new Event;
        $model->name = "VSPO FES!";
        $model->img = "ichinose.jpg";
        $model->link = "https://prj.gamer.com.tw/29y/";
        $model->desc = "test desc";
        $model->stime = "2025-12-02 00:00:00";
        $model->etime = "2025-12-03 00:00:00";
        $model->type = "jp";
        $model->gid = 1;
        $model->save();
    }
}
