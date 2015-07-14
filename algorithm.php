<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Testevenement
// --------------
// Duur: 5 uur => 20 kwartieren
// Locaties: 3 (Luchtkussen, Draaimolen, Stormbaan)
// Vrijwilligers: 8 
// 

// === Gegevens inladen ===
// * Vrijwilligers
$vrijwilligers = array(
    array(
        'naam'              = 'Sanne',
        'v_id'              = 1,
        'beschikbaarheid'   = array(9, 10, 11, 12, 13, 14, 15, 16, 20),
        'max_tijd'          = 3,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(4, 5),
        ),
    
    array(
        'naam'              = 'Klaas',
        'v_id'              = 2,
        'beschikbaarheid'   = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    
    array(
        'naam'              = 'Janneke',
        'v_id'              = 3,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Simon',
        'v_id'              = 4,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Sterre',
        'v_id'              = 5,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Anne',
        'v_id'              = 6,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Bart',
        'v_id'              = 7,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Tim',
        'v_id'              = 8,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        )
    );

// * Locaties
$locaties = array(
    array(
        'naam'          = 'Luchtkussen',
        'l_id'          = 1,
        'coordinaten'   = array(
                            'OL'    =   '',
                            'WB'    =   ''
                            ),
        'momenten'      = array(
                            1   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            2   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            3   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            4   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            5   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            6   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            7   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            8   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            9   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            10  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            11  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            12  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            13  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            14  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            15  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            16  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            17  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            18  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            19  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            20  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            )
    ),
    
    array(
        'naam'          = 'Draaimolen',
        'l_id'          = 2,
        'coordinaten'   = array(
                            'OL'    =   '',
                            'WB'    =   ''
                            ),
        'momenten'      = array(
                            1   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            2   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            3   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            4   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            5   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            6   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            7   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            8   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            9   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            10  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            11  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            12  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            13  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            14  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            15  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            16  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            )
    ),
    
    array(
        'naam'          = 'Stormbaan',
        'l_id'          = 3,
        'coordinaten'   = array(
                            'OL'    =   '',
                            'WB'    =   ''
                            ),
        'momenten'      = array(
                            1   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            2   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            3   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            4   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            5   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            6   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            7   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            8   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            9   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            10  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            11  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            12  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            13  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            14  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            15  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            16  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            17  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            18  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            19  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            20  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            )
    )
    
);

// === Capaciteitscheck ===
for($)






?>