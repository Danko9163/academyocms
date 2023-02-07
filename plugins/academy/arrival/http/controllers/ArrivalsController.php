<?php namespace Academy\Arrival\Http\Controllers;

use Illuminate\Routing\Controller;
use Academy\Arrival\Models\Arrival;
use Academy\Arrival\Http\Resources\ArrivalResource;

class ArrivalsController extends Controller
{
    public function index()
    {
        return ArrivalResource::collection(
            Arrival::isPublished()->get()
        );
    }
}
