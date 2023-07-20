<?php

namespace App\Http\Controllers;

use App\Models\Offer;

class OfferController extends Controller
{
    public function show(): object
    {
        $offer = Offer::find(1);

        return view('offer', [
            'offer' => $offer
        ]);
    }
}
