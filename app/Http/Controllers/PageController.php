<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  /**
   * Get the Welcome view
   */
   public function index()
   {
     return view('welcome');
   }
  /**
   * Get the About us view
   */

   public function aboutus()
   {
     return view('aboutus');
   }

   /**
    * Get the Webdesign view
    */
   public function webdesign()
   {
     return view('services.webdesign');
   }
}
