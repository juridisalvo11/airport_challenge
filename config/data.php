<?php

return [

    'airport' => [
      [
        'name'=> "Roma",
        'code'=> "FCO",
        'lat'=> 41.7709300,
        'lon' => 12.2366200
      ],

      [ 'name'=> "Milano",
        'code'=> "MXP",
        'lat'=> 45.633333,
        'lon' => 8.733333
      ],
      [
        'name'=> "Torino",
        'code'=> "TRN",
        'lat'=> 41.7709300,
        'lon' => 12.2366200
      ],
      [
        'name'=> "Bari",
        'code'=> "BRI",
        'lat'=> 45.633333,
        'lon' => 8.733333
      ],
      [
        'name'=> "Napoli",
        'code'=> "NAP",
        'lat'=> 40.8858,
        'lon' => 14.2906
      ],
      [
        'name'=> "Parigi",
        'code'=> "PAR",
        'lat'=> 65.8858,
        'lon' => 15.2906
      ],
      [
        'name'=> "New York",
        'code'=> "NY",
        'lat'=> 78.5125,
        'lon' => 65.2906
      ]
      
    ],
    'flight' => [
      [
        'code_departure'=> 'FCO',
        'code_arrival' => 'PAR',
        'stopover' => 0,
        'price'=> 75
      ],
      [
        'code_departure'=> 'FCO',
        'code_arrival' => 'PAR',
        'stopover' => 0,
        'price'=> 150
      ],
      [
        'code_departure'=> 'MXP',
        'code_arrival' => 'PAR',
        'stopover' => 1,
        'price'=> 56
      ],
      [
        'code_departure'=> 'TRI',
        'code_arrival' => 'NY',
        'stopover' => 1,
        'price'=> 453
      ],
      [
        'code_departure'=> 'TRI',
        'code_arrival' => 'NY',
        'stopover' => 1,
        'price'=> 350
      ],
      [
        'code_departure'=> 'BRI',
        'code_arrival' => 'NY',
        'stopover' => 0,
        'price'=> 659
      ],
      [
        'code_departure'=> 'NAP',
        'code_arrival' => 'NY',
        'stopover' => 2,
        'price'=> 399
      ]
      
    ]
];