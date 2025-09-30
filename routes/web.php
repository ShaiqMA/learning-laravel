<?php
use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    // Zet de array om in een collection
    $collection = collect($planets);

    // Check of er een GET-parameter 'planeet' aanwezig is
    if (request()->has('planeet')) {
        $planeetNaam = request('planeet'); // haal de waarde op
        // filter de collection
        $collection = $collection->where('name', $planeetNaam);
    }

    // return de view met de (gefilterde) planeten
    return view('planets', ['planeten' => $collection->values()]);
});
