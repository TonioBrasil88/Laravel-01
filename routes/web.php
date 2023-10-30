<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function (){                                    
    return view('homepage');                                                                                     
});                                                             


Route::get('/about-us',function (){                                    
    return view('about-us');                                                                                     
});                         


Route::get('/where',function (){                                    
    return view('where');                                                                                     
});                         

Route::get('/movies',function (){ 
    $movies = [

        [   
            'title' => 'Pirati dei Caraibi', 
            'year' => '2023', 
            'description' => 'La figlia del governatore viene rapita da un pirata malvagio. Will Turner, amico d infanzia della ragazza segretamente innamorato di lei, si unisce a Jack Sparrow, un pirata vagabondo, per portare in salvo la fanciulla.',
            'img' => '/img/maledizione.jpg',
        ],

        [   
            'title' => 'The Matrix', 
            'year' => '1999', 
            'description' => 'Il mondo nel quale Neo è vissuto fin dalla nascita è in realtà Matrix, una neuro-simulazione interattiva costruita sul modello del mondo del 1999 per tenere calmi gli umani coltivati, immobilizzati fin dalla nascita e nutriti con i cadaveri dei defunti.',
            'img' => '/img/matrix.jpg',
        ],

        [   
            'title' => 'Intestellar',
            'year' => '2014', 
            'description' => 'Un gruppo di scienziati è intenzionato a trovare un nuovo pianeta per permettere agli essere umani di sopravvivere. Fra questi, l ingegnere ed ex pilota della NASA Joseph Cooper e la biologa Amelia Brand. Per farlo, Cooper dovrà lasciare la figlia e imbarcarsi in una missione estrema, addentrandosi in un buco nero.',
            'img' => '/img/interstellar.jpg',
        ]


    ];
    

    return view('movies',[
        'films' => $movies
    ]);                                                                                     
});                         



Route::get('/shows',function (){ 
    $shows = [ 
        [   
            'title' => 'The Big Bang Theory', 
            'year' => '2007', 
            'description' => 'Ideata da Chuck Lorre e Bill Prady, e interpretata principalmente da Johnny Galecki, Jim Parsons e Kaley Cuoco, la serie racconta in maniera ironica le vicende quotidiane di un gruppo di giovani scienziati e di come la loro condizione di nerd e geek ne influenzi i rapporti con il mondo circostante.',
            'img' => '/img/BBT.jpg',
        ],

        [   
            'title' => 'Finge', 
            'year' => '1999', 
            'description' => 'Ideata da J.J. Abrams, Alex Kurtzman e Roberto Orci, è una serie di fantascienza che segue le vicende della divisione Fringe dell FBI di Boston, in Massachusetts, e che opera sotto la supervisione del Dipartimento della Sicurezza Interna degli Stati Uniti.',
            'img' => '/img/fringe.jpg',
        ],

        [   
            'title' => 'Shameless',
            'year' => '2011', 
            'description' => 'Un gruppo di scienziati è intenzionato a trovare un nuovo pianeta per permettere agli essere umani di sopravvivere. Fra questi, l ingegnere ed ex pilota della NASA Joseph Cooper e la biologa Amelia Brand. Per farlo, Cooper dovrà lasciare la figlia e imbarcarsi in una missione estrema, addentrandosi in un buco nero.',
            'img' => '/img/shameless.jpg',
        ]


    ];

    return view('shows',[
        'series' => $shows
    ]);  
                                                               
});       


         