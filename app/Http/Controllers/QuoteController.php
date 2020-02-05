<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Get the Quotes home page view
     */
      public function index()
      {
       return view('quotes.index');
      }

   /**
    * Get the Quotes details view
    */
     public function show()
     {
       return view('quotes.show');
     }

}
