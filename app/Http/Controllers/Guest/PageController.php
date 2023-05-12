<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $newTrain = new Train();

        $newTrain->id = 5;
        $newTrain->agency = 'Trenitalia';
        $newTrain->departure_station = 'Torino Porta Nuova';
        $newTrain->arrival_station = 'Milano Centrale';
        $newTrain->departure_time = '12/05/2023 18:32:00';
        $newTrain->arrival_time = '12/05/2023 20:00:00';
        $newTrain->train_code = '234566';
        $newTrain->carriage_number = 6;
        $newTrain->in_time = true;
        $newTrain->cancelled = false;
        //$newTrain->save();

        $trains = Train::All();
        return view('home', compact('trains'));
    }
}