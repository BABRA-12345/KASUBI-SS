<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [
            1,1,1,2,2,2,3,3,3,4,4,4,5,5,5,6,6,6,7,7,7,8,8,8,9,9,9,10,10,10,11,11,11,12,12,12,13,13,13,14,14,14,15,15,15,16,16,16,17,17,17,18,18,18,19,19,19,20,20,20,21,21,21,22,22,22,23,23,23,24,24,24,25,25,25,26,26,26,27,27,27,28,28,28,29,29,29,30,30,30,31,31,31,32,32,32
        ];

        $lgas = [
          // 'Mbarara','Kampala','Mukono','Jinja','Mbale','Tororo','Busia','Soroti','Lira','Gulu','Masaka','Fort Portal','Hoima','Mubende','Mityana','Kabale','Kasese','Masindi','Mbarara','Kamwenge','Kanungu','Kabale','Kisoro','Kabarole','Kyenjojo','Kibaale'
          //give all of them counties in form of north, south, east, west

          'Buhweju', 'Ibanda', 'Isingiro','Central', 'Kawempe', 'Makindye','Nakifuma', 'Goma', 'Nakisunga','Jinja East', 'Jinja West', 'Kagoma','Mbale Municipality', 'Bungokho', 'Bungokho North','West Budama North', 'West Budama South', 'Tororo Municipality','Busia Municipality', 'Butula', 'Nambale','Soroti Municipality', 'Soroti County', 'Soroti City East','Lira Municipality', 'Lira County', 'Lira City East','Gulu Municipality', 'Gulu County', 'Gulu City East','Masaka Municipality', 'Bukoto Central', 'Bukoto South','Fort Portal North', 'Fort Portal South', 'Fort Portal East','Hoima Municipality', 'Kiziranfumbi', 'Buhaguzi','Kassanda', 'Kakumiro', 'Mubende Municipality','Mityana Municipality', 'Busujju', 'Mityana County North',    'Kabale Municipality', 'Rukiga', 'Rubanda','Kasese Municipality', 'Kasese County North', 'Kasese County East','Masindi Municipality', 'Bwijanga', 'Kigorobya','Kamwenge Municipality', 'Kamwenge County South', 'Kamwenge County North','Kanungu Municipality', 'Kanungu County North', 'Kanungu County South','Kisoro Municipality', 'Kisoro County North', 'Kisoro County South','Kabarole County', 'Fort Portal Municipality', 'Bunyangabu','Kyenjojo Municipality', 'Kyenjojo County', 'Kyenjojo County South','Kibaale Municipality', 'Buyaga West', 'Buyaga East','Kakumiro County North', 'Kakumiro County South', 'Kakumiro Municipality','Kagadi County', 'Kagadi Municipality', 'Rwamucucu','Buhaguzi County', 'Kikuube County', 'Kikuube Municipality','Buliisa County', 'Buliisa County South', 'Buliisa Municipality','Bundibugyo Municipality', 'Bundibugyo County', 'Bundibugyo County South','Ntoroko County', 'Ntoroko Municipality', 'Ntoroko County South',
      //number= 99
        ];


        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
