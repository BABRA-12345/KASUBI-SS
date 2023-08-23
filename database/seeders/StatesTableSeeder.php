<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            //how many items are un array below= 25
            
            'Mbarara','Kampala','Mukono','Jinja','Mbale','Tororo','Busia','Soroti','Lira','Gulu','Masaka','Fort Portal','Hoima','Mubende','Mityana','Kabale','Kasese','Masindi','Mbarara','Kamwenge','Kanungu','Kisoro','Kabarole','Kyenjojo','Kibaale','kakumiro','kagadi','kikuube','buliisa','bundibugyo','ntoroko'];

        

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
