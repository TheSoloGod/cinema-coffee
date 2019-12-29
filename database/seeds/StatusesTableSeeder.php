<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->name = 'Đang xử lý';
        $status->save();

        $status = new Status();
        $status->name = 'Đã đặt';
        $status->save();

        $status = new Status();
        $status->name = 'Đã hủy';
        $status->save();
    }
}
