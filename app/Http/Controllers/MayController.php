<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MayController extends Controller
{
  function getYear(){

  $byear = 1994;
  $abc = $byear + 599999999;
  echo decbin($abc);
}

  function getName($id)
  {
    $customers =
    [
      ["Name" => 'Madamm' , "Surname" => "Ktd"],
      ["Name" => 'Patty' , "Surname" => "Story"]
    ];
    return $customers[$id-1];
  }

}
