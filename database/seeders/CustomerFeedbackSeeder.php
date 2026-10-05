<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePageCoustomerFeedback;
class CustomerFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (HomePageCoustomerFeedback::count() === 0){

            $feedback = HomePageCoustomerFeedback::create([
                'faster_order_fulfillment'=> '76',
                'Real_time_inventory_control' =>  '92',
                'Clean_claim_rate'=>  '98',
                'Reduction_in_paper'=>  '99',
            ]);
        }
        else
        {
            echo "Customer Feedback table record already exists";
        }
    }
}
