<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
    	$response2 = Http::get('https://api.kawalcorona.com/positif');
	    $posi = $response2->json();
	    // end positif
	    $response3 = Http::get('https://api.kawalcorona.com/sembuh');
	    $semb = $response3->json();
	    // end sembuh
	    $response4 = Http::get('https://api.kawalcorona.com/meninggal');
	    $meni = $response4->json();
	    // end meninggal
    	return view('apps.pages.home', compact(
    		'posi','semb','meni'
    	));
    }
    public function indonesia()
    {
    	$response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
	    $data = $response->json();
	    // end table
	    $response2 = Http::get('https://api.kawalcorona.com/indonesia');
	    $stats = $response2->json();
	    // end stats
	    return view('apps.pages.info.indonesia',compact(
	    	'data','stats'
	    ));
    }
    public function global()
    {
    	$response = Http::get('https://api.kawalcorona.com/');
	    $data = $response->json();
	    // end table
	    $response2 = Http::get('https://api.kawalcorona.com/positif');
	    $posi = $response2->json();
	    // end positif
	    $response3 = Http::get('https://api.kawalcorona.com/sembuh');
	    $semb = $response3->json();
	    // end sembuh
	    $response4 = Http::get('https://api.kawalcorona.com/meninggal');
	    $meni = $response4->json();
	    // end meninggal
	    return view('apps.pages.info.global',compact(
	    	'data','posi','semb','meni'
	    ));
    }
    public function hotline()
    {
    	return view('apps.pages.hotline');
    }
}