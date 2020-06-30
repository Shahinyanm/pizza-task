<?php

namespace App\Http\Controllers\Api;

use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\FoodResource;

class FoodController extends Controller
{
    public function index()
    {
        return FoodResource::collection(Food::all());
    }
}
