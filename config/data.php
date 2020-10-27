<?php

return [

    'airport' => [
      [
        'name'=> "Roma - Parigi",
        'stopover' => 0,
        'code'=> "FCO",
        'lat'=> 41.7709300,
        'lon' => 12.2366200
      ],

      [ 'name'=> "Milano - Parigi",
      'stopover' => 0,
        'code'=> "MXP",
        'lat'=> 45.633333,
        'lon' => 8.733333
      ],
      [
        'name'=> "Roma - New York",
        'stopover' => 1,
        'code'=> "FCO",
        'lat'=> 41.7709300,
        'lon' => 12.2366200
      ],
      [
        'name'=> "Milano - New York",
        'stopover' => 0,
        'code'=> "MXP",
        'lat'=> 45.633333,
        'lon' => 8.733333
      ],
      [
        'name'=> "Napoli - New York",
        'stopover' => 2,
        'code'=> "NAP",
        'lat'=> 40.8858,
        'lon' => 14.2906
      ]
      
    ],
    'flight' => [
      [
        'code_departure'=> 'ATC7564235',
        'code_arrival' => 'ATC9626632',
        'price'=> 75
      ],
      [
        'code_departure'=> 'BKD5648235',
        'code_arrival' => 'BKD3265489',
        'price'=> 56
      ],
      [
        'code_departure'=> 'LDN3652462',
        'code_arrival' => 'LDN5698548',
        'price'=> 453
      ],
      [
        'code_departure'=> 'YKC9654823',
        'code_arrival' => 'YKC9658745',
        'price'=> 659
      ],
      [
        'code_departure'=> 'PHL5698563',
        'code_arrival' => 'PHL3652658',
        'price'=> 399
      ]
      
    ]
];