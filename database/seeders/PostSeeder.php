<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('firstproject')->insert([
            'title'->'Guy Arthur - Runaway [NCS Release]',
            'link'->'https://www.youtube.com/watch?v=TH6jeGrmoVs',
            'description'->'NCS/NoCopyrightSounds: Empowering Creators through No Copyright & Royalty Free Music
            Follow on Spotify: https://ncs.lnk.to/ncsreleasesid Free Download/Stream: http://ncs.io/GA_Runaway'
            ]);

        DB::table('firstproject')->insert([
            'title'->'Part Native & Oly - Artificial Love [NCS Release]',
            'link'->'https://www.youtube.com/watch?v=4H3rtnagu2o',
            'description'->'NCS/NoCopyrightSounds: Empowering Creators through No Copyright & Royalty Free Music
            Follow on Spotify: https://ncs.lnk.to/ncsreleasesid'
            ]);
        

        DB::table('firstproject')->insert([
            'title'->'Dryskill & Max Brhon - War Machine [NCS Release]',
            'link'->'https://www.youtube.com/watch?v=DKw4rBedrRA',
            'description'->'NCS/NoCopyrightSounds: Empowering Creators through No Copyright & Royalty Free Music
            Follow on Spotify: https://ncs.lnk.to/ncsreleasesid'
            ]);
        
    }
}
