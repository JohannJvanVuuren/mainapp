<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
      // Imagine data were loaded from the database
      $ourName = 'Johann';
      $animals = ['Meowsalot', 'Barksalot', 'Purrslaot'];

      return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function aboutPage() {
      return view('single-post');
    }
}
