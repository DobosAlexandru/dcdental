<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $settings = Setting::all();

        return view('home',[
            'page' => [
                'title' => 'Home',
                'description' => 'Centrul de implantologie si chirurgie maxilo faciala DC dental coordonata de Dr. Drochioi Cristian ofera tratamente la cele mai inalte standarde in Iasi si Botosani.'
            ],
            'settings' => Setting::get('site_name')
        ]);
    }
}
