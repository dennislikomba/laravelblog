<?php

namespace App\Http\Controllers;
class PageController extends Controller
{
  public function getIndex()
  {

    return view('page.welcome');
  }
  public function getAbout()
  {
    $first="Dennis";
    $last="likomba";
    $full=$first  ." ". $last;
    return view('page.about')->with("fullname",$full);
  }
  public function getContact()
  {
    return view('page.contact');
  }

}
