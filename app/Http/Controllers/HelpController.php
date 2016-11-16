<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelpController extends Controller
{
    /* Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function __invoke()
   {
       return 'Show Some Help what the hell is going on';
   }
}
