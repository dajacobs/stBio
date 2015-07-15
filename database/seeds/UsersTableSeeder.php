<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
      DB::table('users')->delete();
      User::create([
        'name'     => 'Dr. Jekyll',
        'email'    => 'jekyll@stjude.org',
        'password' => \Hash::make('mrhyde'),
        'settings' => '{"subjectId":"1","subjectName":"1","subjectBirthDate":"1","subjectBirthYear":"1","subjectEthnicity":"1","subjectRace":"1","subjectGender":null}'
      ]);

    }

}
