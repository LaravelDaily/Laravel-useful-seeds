<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'id' => 1,
                'code' => 'AL',
                'name' => 'Alabama'
            ],
            [
                'id' => 2,
                'code' => 'AK',
                'name' => 'Alaska'
            ],
            [
                'id' => 3,
                'code' => 'AZ',
                'name' => 'Arizona'
            ],
            [
                'id' => 4,
                'code' => 'AR',
                'name' => 'Arkansas'
            ],
            [
                'id' => 5,
                'code' => 'CA',
                'name' => 'California'
            ],
            [
                'id' => 6,
                'code' => 'CO',
                'name' => 'Colorado'
            ],
            [
                'id' => 7,
                'code' => 'CT',
                'name' => 'Connecticut'
            ],
            [
                'id' => 8,
                'code' => 'DE',
                'name' => 'Delaware'
            ],
            [
                'id' => 9,
                'code' => 'DC',
                'name' => 'District of Columbia'
            ],
            [
                'id' => 10,
                'code' => 'FL',
                'name' => 'Florida'
            ],
            [
                'id' => 11,
                'code' => 'GA',
                'name' => 'Georgia'
            ],
            [
                'id' => 12,
                'code' => 'HI',
                'name' => 'Hawaii'
            ],
            [
                'id' => 13,
                'code' => 'ID',
                'name' => 'Idaho'
            ],
            [
                'id' => 14,
                'code' => 'IL',
                'name' => 'Illinois'
            ],
            [
                'id' => 15,
                'code' => 'IN',
                'name' => 'Indiana'
            ],
            [
                'id' => 16,
                'code' => 'IA',
                'name' => 'Iowa'
            ],
            [
                'id' => 17,
                'code' => 'KS',
                'name' => 'Kansas'
            ],
            [
                'id' => 18,
                'code' => 'KY',
                'name' => 'Kentucky'
            ],
            [
                'id' => 19,
                'code' => 'LA',
                'name' => 'Louisiana'
            ],
            [
                'id' => 20,
                'code' => 'ME',
                'name' => 'Maine'
            ],
            [
                'id' => 21,
                'code' => 'MD',
                'name' => 'Maryland'
            ],
            [
                'id' => 22,
                'code' => 'MA',
                'name' => 'Massachusetts'
            ],
            [
                'id' => 23,
                'code' => 'MI',
                'name' => 'Michigan'
            ],
            [
                'id' => 24,
                'code' => 'MN',
                'name' => 'Minnesota'
            ],
            [
                'id' => 25,
                'code' => 'MS',
                'name' => 'Mississippi'
            ],
            [
                'id' => 26,
                'code' => 'MO',
                'name' => 'Missouri'
            ],
            [
                'id' => 27,
                'code' => 'MT',
                'name' => 'Montana'
            ],
            [
                'id' => 28,
                'code' => 'NE',
                'name' => 'Nebraska'
            ],
            [
                'id' => 29,
                'code' => 'NV',
                'name' => 'Nevada'
            ],
            [
                'id' => 30,
                'code' => 'NH',
                'name' => 'New Hampshire'
            ],
            [
                'id' => 31,
                'code' => 'NJ',
                'name' => 'New Jersey'
            ],
            [
                'id' => 32,
                'code' => 'NM',
                'name' => 'New Mexico'
            ],
            [
                'id' => 33,
                'code' => 'NY',
                'name' => 'New York'
            ],
            [
                'id' => 34,
                'code' => 'NC',
                'name' => 'North Carolina'
            ],
            [
                'id' => 35,
                'code' => 'ND',
                'name' => 'North Dakota'
            ],
            [
                'id' => 36,
                'code' => 'OH',
                'name' => 'Ohio'
            ],
            [
                'id' => 37,
                'code' => 'OK',
                'name' => 'Oklahoma'
            ],
            [
                'id' => 38,
                'code' => 'OR',
                'name' => 'Oregon'
            ],
            [
                'id' => 39,
                'code' => 'PA',
                'name' => 'Pennsylvania'
            ],
            [
                'id' => 40,
                'code' => 'PR',
                'name' => 'Puerto Rico'
            ],
            [
                'id' => 41,
                'code' => 'RI',
                'name' => 'Rhode Island'
            ],
            [
                'id' => 42,
                'code' => 'SC',
                'name' => 'South Carolina'
            ],
            [
                'id' => 43,
                'code' => 'SD',
                'name' => 'South Dakota'
            ],
            [
                'id' => 44,
                'code' => 'TN',
                'name' => 'Tennessee'
            ],
            [
                'id' => 45,
                'code' => 'TX',
                'name' => 'Texas'
            ],
            [
                'id' => 46,
                'code' => 'UT',
                'name' => 'Utah'
            ],
            [
                'id' => 47,
                'code' => 'VT',
                'name' => 'Vermont'
            ],
            [
                'id' => 48,
                'code' => 'VA',
                'name' => 'Virginia'
            ],
            [
                'id' => 49,
                'code' => 'WA',
                'name' => 'Washington'
            ],
            [
                'id' => 50,
                'code' => 'WV',
                'name' => 'West Virginia'
            ],
            [
                'id' => 51,
                'code' => 'WI',
                'name' => 'Wisconsin'
            ],
            [
                'id' => 52,
                'code' => 'WY',
                'name' => 'Wyoming'
            ]
        ];

        State::insert($states);
    }
}

