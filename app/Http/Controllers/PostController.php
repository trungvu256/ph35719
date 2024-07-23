<?php
namespace App\Http\Controllers;

class PostController extends Controller{
    public function test(){
        $sum = PostController::query()->sum('view');
        return $sum;


    }

}
