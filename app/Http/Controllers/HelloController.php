<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HelloController extends Controller {

    public function show() {
        return view("welcome2");
    }
}

?>