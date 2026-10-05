<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Page;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        if (User::count() === 0){

            $user = User::create([
                'name'     => 'Admin',
                'email'         =>  'admin@gmail.com',
                'password'      =>  Hash::make('123456'),
            ]);
        }
        else
        {
            echo "User table record already exists";
        }

        if (Page::count() === 0){

            $user = Page::create([
                'page_name'     => 'Home',
                'slug'         =>  'home',
                'page_type'      => '1',
                'top_heading'      => 'Software Crafted for excellence by billing experts',
                'top_detail'      => 'Unify Medicraft is one such smart and reliable software solution to keep things easy for you while taking your business to new & improved heights',
                'top_label_name'      => 'Get Started',
                'top_label_link'      => 'https://www.unifymedicraft.com/contact',
                'top_image'      => 'Page_Images/2023-09-20-105206000000_home-software.png',
                'top_image_alt'      => 'home-software',
                'section1_is_active'      => '0',
                'section1_heading'      => 'Medicraft - A Cutting-Edge, Unified Cloud-Based RCM Software – The Heartbeat of healthcare',
                'section2_image'      => 'Page_Images/2023-09-20-120932000000_design-layout.png',
                'section2_image_alt'      => 'design-layout',
                'section2_heading'      => 'Practice Management & Medical Billing Software',
                'section2_detail'      => 'A unified practice management and medical billing software that serves any aspect of private practice or billing service.',
                'section3_heading'      => 'Managed Revenue Cycle Management',
                'section3_specialization'      => '[]',
                'section3_detail'      => 'The progressive billing paradigm consists of simplified billing processes and obvious reporting tools for better claims acceptance, quicker reimbursements and increased revenue.',
                'section3_label_name'      => 'Learn More',
                'section3_label_link'      => 'about.php',
                'section3_image1'      => 'Page_Images/2023-09-20-122907000000_sof-analysis-01.jpg',
                'section3_image1_alt'      => 'sof-analysis-01',
                'section3_image2'      => 'Page_Images/2023-09-20-122907000000_sof-analysis-02.jpg',
                'section3_image2_alt'      => 'sof-analysis-02',
                'section3_image3'      => 'Page_Images/2023-09-20-122907000000_sof-analysis-03.jpg',
                'section3_image3_alt'      => 'sof-analysis-03',
                'section3_aboutus_stats'      => '[]',
                'section4_services'      => '[]',
                'section5_heading'      => 'Start Your Journey from Better to Best with Unify',
                'section6_image'      => 'Page_Images/2023-10-10-121432000000_16956489958.png',
                'section6_image_alt'      => 'design-layout (1)',
                'section6_heading'      => 'Medical Billing Reporting & Analytics',
                'section6_detail'      => 'The reporting tools provide real-time information of your financial health, helping you measure your success & maximize your revenue.',
                'section7_heading'      => 'Patient Engagement',
                'section7_detail'      => 'Engage patients by delivering all the self-service features patients need while capturing feedback in real-time.',
                'section7_label_name'      => 'Learn More',
                'section7_label_link'      => 'sdsabout.php',
                'section7_image1'      => 'Page_Images/2023-10-10-121450000000_16956489959.png',
                'section7_image1_alt'      => 'sof-analysis-01',
                'section7_image2'      => 'Page_Images/2023-09-21-055307000000_sof-analysis-02.jpg',
                'section7_image2_alt'      => 'sof-analysis-02',
                'section7_image3'      => 'Page_Images/2023-09-21-055307000000_sof-analysis-03.jpg',
                'section7_image3_alt'      => 'sof-analysis-03',
                'section8_heading'      => 'Better Smart Solutions For Your Better Software',
                'meta_title'      => 'Meta Title',
                'meta_description'      => 'Meta Title',
                'meta_keyword'      => 'Meta Title',
                
            ]);
        }
        else
        {
            echo "Page table record already exists";
        }
    }
}
