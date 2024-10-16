<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnimalController;

class AnimalController extends Controller
{

public $animal = ["cat","fish","cow"];

 public function index ()
 {
    return  $this->animal;
   //  TES
 }

 public function store (Request $request){
    $this->animal[] = $request->animal;
    return $this->animal;
 }

 public function update (Request $request, $id){
    //
 }

 public function destroy (Request $request, $id){
   echo "Mengahapus data hewan id $id";
 }


}
