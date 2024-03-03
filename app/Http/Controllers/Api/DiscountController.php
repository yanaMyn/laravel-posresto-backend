<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    //index
    public function index()
    {
        $discount = Discount::all();
        return response()->json([
            "status" => "success",
            "data" => $discount
        ], 200);
    }
}
