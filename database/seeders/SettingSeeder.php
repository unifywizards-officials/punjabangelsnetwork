<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Settings::count() === 0){

            $setting = Settings::create([
                'website_logo'=> 'assets/img/logo-3.png',
                'website_logo_alt' =>  'website-logo',
                'about_us_detail'=>  'A comprehensive medical billing and payment management solution for your modern healthcare practice.',
                'location'=>  '[{"location":"Ohio- USA"}]',
                'email'=>  'info@unifymedicraft.com',
                'contact_no'=>  '1(205) 974-4573',
                'facebook_link'=>  'https://www.facebook.com/people/Unify-Medicraft/100086688134755/',
                'x_link'=>  'https://twitter.com/Unifymedicraft',
                'youtube_link'=>  'https://www.youtube.com/@UnifyMedicraft/about',
                'linkedin_link'=> 'https://www.linkedin.com/company/unify-medicraft/',
            ]);
        }
        else
        {
            echo "Settings table record already exists";
        }
    }
}
