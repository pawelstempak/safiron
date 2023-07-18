<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\SearchModel;
use App\Models\Apartments;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getStorey(Request $request): array
    {
        return $request->storey ? $request->storey : array();
    }

    public function getBuilding(Request $request): array
    {
        return $request->building ? $request->building : array();
    }

    public function getSquarefootage(Request $request): array
    {
        return $request->squarefootage ? $request->squarefootage : array();
    }

    public function getStatus(Request $request): array
    {
        return $request->status ? $request->status : array();
    }    

    public function show(Request $request): object
    {
        $apartments = new SearchModel();
        $apartmentslist = $apartments->search($request);

        $buildingslist = Buildings::all();

        return view('frontend.search', [
            'apartmentslist' => $apartmentslist,
            'buildingslist' => $buildingslist,
            'storey' => $this->getStorey($request),
            'building' => $this->getBuilding($request),
            'squarefootage' => $this->getSquarefootage($request),
            'status' => $this->getStatus($request),
            'minsquarefootage' => Apartments::min('square_footage'),
            'maxsquarefootage' => Apartments::max('square_footage'),
        ]);
    }

    public function search(Request $request): object
    {
        $apartments = new SearchModel();
        $apartmentslist = $apartments->search($request);

        $buildingslist = Buildings::all();

        return view('frontend.search', [
            'apartmentslist' => $apartmentslist,
            'buildingslist' => $buildingslist,
            'storey' => $this->getStorey($request),
            'building' => $this->getBuilding($request),
            'squarefootage' => $this->getSquarefootage($request),
            'status' => $this->getStatus($request),
            'minsquarefootage' => Apartments::min('square_footage'),
            'maxsquarefootage' => Apartments::max('square_footage'),
        ]);
    }
}
