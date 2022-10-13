<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScamType;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ScamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        ScamType::factory()->count(4)
        ->state( new sequence (
            [
                'name' => "Chop and Run Scam", 
                'description' => 'This strategy of the scams convinces the victims to pay for a products or services, immediately he or she makes the payment, 
                the scammer ends every communication with the victim without delivering the item.'
            ],
            ['name' => "Steady Chopping Scam",
             'description' => 'This is a more calculated scam where the victim is being taking through a process that keeps demanding him/her to make payment at every stage promising the victim to receive an item after he makes the payment. Nevertheless, immediately the victim pays, the scam opens the next stage further convincing 
             the victim that it’s only this one stage that is left, and he should make payment to finally claim the promised item. This loop continuous in an endless manner until the victim is sucked dried. '
            ],
            ['name' => "Fake vs Original",
             'description' => 'Mainly common with tech products or with treasures such as gold and diamonds. In this situation, victim2wqs end up realizing they got a counterfeit of an item they paid. 
             For instance, a victim can pay to get an iPhone 13, and he or she will end receiving a cloned iPhone 13, which is usually worth 10 times less than what the victim actually paid for.  '
            ],
            ['name' => "Bad Agenda",
             'description' => 'This kind of E-commerce fraud starts online, but it do not end online, it pulls through to the physical and it is arguably the most dangerous kind of E-commerce fraud. Scammers pull off these treacherous acts by attracting the victim using an E-commerce platform, and after negotiation, 
             the scammer will offer to deliver the product to the victim, or they’ll ask the victim to come and pick up the item.'
            ]
            )
        )
        ->create();
    }
}
