<?php

namespace Database\Seeders;

use App\Models\MyClass;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();

        $this->createSubjects();
    }

    protected function createSubjects()
    {
        $subjects = ['English Language', 'Mathematics','Physics','Chemistry','Biology','Geography','History','CRE','Literature','Kiswahili','Computer Studies','Agriculture','Business Studies','French','German','Music','Art','Physical Education','Home Science','Wood Work','Metal Work','Arabic','Chinese','Spanish','Swahili'];
        $sub_slug = ['Eng', 'Math','Phy','Chem','Bio','Geo','Hist','CRE','Lit','Kisw','Comp','Agric','Bus','French','German','Music','Art','PE','Home Sci','Wood Work','Metal Work','Arabic','Chinese','Spanish','Swahili',];
        $teacher_id = User::where(['user_type' => 'teacher'])->first()->id;
        $my_classes = MyClass::all();

        foreach ($my_classes as $my_class) {

            $data = [

                [
                    'name' => $subjects[0],
                    'slug' => $sub_slug[0],
                    'my_class_id' => $my_class->id,
                    'teacher_id' => $teacher_id
                ],

                [
                    'name' => $subjects[1],
                    'slug' => $sub_slug[1],
                    'my_class_id' => $my_class->id,
                    'teacher_id' => $teacher_id
                ],

            ];

            DB::table('subjects')->insert($data);
        }

    }

}
