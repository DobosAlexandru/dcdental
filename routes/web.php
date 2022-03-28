<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\Setting;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear_routes', function () {

    \Artisan::call('route:clear');

    dd("Cache is cleared");

});

Route::get('/', HomeController::class)->name('home');

Route::get('/despre-noi', function(){

    return view('despre-noi',[
        'page' => [
            'title' => 'Despre noi',
            'description' => 'Asist. Univ. Dr. Drochioi Cristian coordoneaza clinica DC dental unde efectueaza consultatii si o gama variata de interventii chirurgicale in sfera oro-maxilo-faciala'
        ]
    ]);
})->name('despre-noi');

Route::get('/galerie', function(){

    return view('galerie',[
        'page' => [
            'title' => 'Galerie',
            'top_title' => 'Galerie',
            'description' => 'Galerie imagini Clinica de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian in Iasi si Botosani.'
        ]
    ]);
})->name('galerie');

Route::get('/programari', function(){

    return view('programari',[
        'page' => [
            'title' => 'Programari Clinica Iasi si Botosani',
            'top_title' => 'Programari',
            'description' => 'Programeaza-te la doctorii clinicilor DC dental.'
        ]
    ]);
})->name('programari');

Route::get('/contact', function(){

    return view('contact',[
        'page' => [
            'title' => 'Contact Clinica Iasi si Botosani',
            'description' => 'Afla unde ne gasesti in locatiile clinicilor DC dental din Iasi si Botosani.'
        ]
    ]);
})->name('contact');

Route::get('/cariere', function(){

    return view('cariere',[
        'page' => [
            'title' => 'Cariere',
            'description' => 'Centrul de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian ofera tratamente la cele mai inalte standarde in Iasi si Botosani.'
        ]
    ]);
})->name('cariere');

Route::get('/implant-dentar-rapid-o-zi', function(){

    return view('implant-dentar-rapid-o-zi',[
        'page' => [
            'title' => 'Implant dentar rapid, fara durere, intr-o zi',
            'top_title' => 'Implant dentar rapid',
            'description' => 'Dinti ficsi in mai putin de o zi cu Implant Dentar SKY Fast and Fixed Bredent, tehnologie de ultima generatie. Programeaza-te acum pentru implant dentar.'
        ]
    ]);
})->name('implant-dentar-rapid-o-zi');

Route::get('/locatii', function(){

    return view('locatii',[
        'page' => [
            'title' => 'Afla unde ne gasesti in locatiile clinicilor DC dental din Iasi si Botosani.',
            'description' => 'Afla unde ne gasesti in locatiile clinicilor DC dental din Iasi si Botosani.'
        ]
    ]);
})->name('locatii');

Route::get('/locatii/iasi', function(){

    return view('_locations.iasi',[
        'page' => [
            'title' => 'Locatie Clinica Iasi',
            'description' => 'Clinica implantologie DC dental TG Cucu - Strada Sararie nr. 6, bloc UJCM, parter, Iasi. Programari la telefon 0754 242 241.',
            'locatie' => 'Iasi',
            'tagline' => 'Clinica DC dental Iași oferă tratamente la cele mai înalte standarde, într-un ambient placut, steril, dotat cu echipamente de ultimă generație.'
        ]
    ]);
})->name('locatii.iasi');

Route::get('/locatii/botosani', function(){

    return view('_locations.botosani',[
        'page' => [
            'title' => 'Locatie Clinica Botosani',
            'description' => 'Clinica implantologie DC dental Str. Primaverii nr.5, bloc P11, sc. A, ap.1, Botosani. Programari la telefon 0787 695 411.',
            'locatie' => 'Botosani',
            'tagline' => 'Clinica DC dental Botoșani oferă tratamente la cele mai înalte standarde, într-un ambient placut, steril, dotat cu echipamente de ultimă generație.'
        ]
    ]);
})->name('locatii.botosani');

Route::get('/tarife', function(){

    return view('tarife',[
        'page' => [
            'title' => 'Tarife',
            'description' => 'Gama de preturi stomatologie, implantologie, chirurgie, protetica, estetica dentara, ortodontie, stomatologie copii.',
        ]
    ]);
})->name('tarife');

Route::get('/raspuns-programare', function(){

    return view('raspuns-programare',[
        'page' => [
            'title' => 'Programari Clinica Iasi si Botosani',
            'description' => 'Programeaza-te la doctorii clinicilor DC dental.',
        ]
    ]);
})->name('raspuns-programare');

Route::get('/termeni-si-conditii', function(){

    return view('termeni-si-conditii',[
        'page' => [
            'title' => 'Termeni si Conditii',
            'top_title' => 'Termeni si Conditii',
            'description' => 'Termeni si conditii - DC dental',
        ]
    ]);
})->name('termeni-si-conditii');


