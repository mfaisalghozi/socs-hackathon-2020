<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // HTR T_T

        for($i=0;$i<3;$i++){
            for($j=0;$j<7;$j++){
                for($k=0;$k<10;$k++){
                    $data[$i] = [
                        'userid' => $i+1, 
                        'categoryid' => $j+1, 
                        'ideaname' => 'Ini Idea ke '.($i+1), 
                        'ideaimg' => 'https://picsum.photos/288/163', 'ideadescription'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit!', 
                        'ideatarget'=>'1450000', 
                        'currentearning'=>'1000000', 
                        'donatorcount'=>200,
                        'tierAmount'=>3, 
                        'ideadeadline'=>'2020-12-12', 
                        'qa'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae !',
                        ];
                }
            }
        }
        DB::table('Idea')->insert($data);
    }
}
