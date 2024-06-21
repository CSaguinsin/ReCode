<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documentation; 

class SocialShareButtonsController extends Controller
{
    public function ShareWidget($documentId)
    {
        $documentation = Documentation::find($documentId); 
        $url = $documentation->url; 

    
        $shareComponent = \Share::page($url, $url)
            ->facebook()
            ->twitter()
            ->linkedin();


        return view('posts', compact('shareComponent'));
    }

}
