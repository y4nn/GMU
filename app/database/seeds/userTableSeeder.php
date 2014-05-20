<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userTableSeeder
 *
 * @author Y4nn
 */
class userTableSeeder extends Seeder{
    
    public function run()
    {
        DB::table('user')->insert(
 
            array(
                array(
                    'nom' => 'Maillard',
                    'prenom' => 'Yann',
                    'password' => 'test',
                    'email' => 'yann.maillard@gmu.ch'
                ),
 
                array(
                    'nom' => 'Buache',
                    'prenom' => 'Nathan',
                    'password' => 'test',
                    'email' => 'test@gmu.ch'
                )
            )
 
        );
    }
}
