<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class languageController extends Controller
{
public function switcher($lang){
    if(array_key_exists($lang,config('language'))){
        session()->put('applocal',$lang);
        return redirect()->back();
    }
    else{
        return redirect()->back();
    }

}


}
