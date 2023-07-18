<?php

namespace App\Models;

use App\Models\Images;
use App\Models\Apartments;
use Illuminate\Http\Request;
use App\Models\ApartmentsSpaces;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SearchModel extends Model
{
    use HasFactory;

    private int $index = 0;

    public function search(Request $request): object
    {
        $status = $request->status;
        $squarefootage = $request->squarefootage;
        $storey = $request->storey;
        $building = $request->building;

        $apartmentslist = Apartments::join('buildings', 'apartments.buildings_id', 'buildings.id')
            ->join('offertypes', 'apartments.offertypes_id', 'offertypes.id')
            ->join('status', 'apartments.status_id', 'status.id')
            ->select('apartments.*', 'buildings.name as buildingsname', 'offertypes.name as offertypesname', 'status.name as statusname')
            ->when($status, function (Builder $query, array $status) {
                $query->whereIn('status_id', $status);
            })            
            ->when($squarefootage, function (Builder $query, array $squarefootage) {
                $query->whereBetween('square_footage', $squarefootage);
            })
            ->when($storey, function (Builder $query, array $storey) {
                $query->whereIn('storey', $storey);
            })
            ->when($building, function (Builder $query, array $building) {
                $query->whereIn('buildings_id', $building);
            })
            ->orderBy('buildingsname', 'asc')
            ->orderBy('number', 'asc')
            ->paginate(8);

        foreach ($apartmentslist as $apartment) {
            $apartmentslist[$this->index]['insidespaces'] = ApartmentsSpaces::where([
                ['type', '=', 0],
                ['apartments_id', '=', $apartment->id],
            ])->get();

            $apartmentslist[$this->index]['outsidespaces'] = ApartmentsSpaces::where([
                ['type', '=', 1],
                ['apartments_id', '=', $apartment->id],
            ])->get();

            $apartmentslist[$this->index]['mainimage'] = Images::where([
                ['type', '=', 0],
                ['apartments_id', '=', $apartment->id],
            ])->first();

            $apartmentslist[$this->index]['sketchimage'] = Images::where([
                ['type', '=', 1],
                ['apartments_id', '=', $apartment->id],
            ])->first();

            $this->index++;
        }

        return $apartmentslist;
    }
}
