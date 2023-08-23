<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'S1', 'class_type_id' => $ct[0]],
            ['name' => 'S2', 'class_type_id' => $ct[0]],
            ['name' => 'S3', 'class_type_id' => $ct[0]],
            ['name' => 'S4', 'class_type_id' => $ct[0]],
            ['name' => 'S5', 'class_type_id' => $ct[0]],
            ['name' => 'S6', 'class_type_id' => $ct[0]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
