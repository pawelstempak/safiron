<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ApartmentsModel extends Model
{
    public function getApartmentsList(): object
    {
        $list = DB::table('apartments')
            ->join('buildings', 'apartments.buildings_id', 'buildings.id')
            ->select('apartments.*', 'buildings.name as buildingsname')
            ->orderBy('buildingsname', 'asc')
            ->orderBy('number', 'asc')
            ->get();

        return $list;
    }

    public function getApartment(int $id): object
    {
        $apartment = DB::table('apartments')->find($id);

        return $apartment;
    }

    public function getStatusList(): object
    {
        $list = DB::table('status')->get();

        return $list;
    }

    public function getBuildingsList(): object
    {
        $list = DB::table('buildings')->get();

        return $list;
    }

    public function getMaxBuildingsStorey(): int
    {
        $storey = DB::table('buildings')->max('storeys');

        return $storey;
    }

    public function getOfferTypesList(): object
    {
        $list = DB::table('offertypes')->get();

        return $list;
    }

    public function getInsideSpacesList(int $id): object
    {
        $list = DB::table('apartments_spaces')
            ->where([
                ['type', '=', '0'],
                ['apartments_id', '=', $id],
            ])
            ->get();

        return $list;
    }

    public function getOutsideSpacesList(int $id): object
    {
        $list = DB::table('apartments_spaces')
            ->where([
                ['type', '=', '1'],
                ['apartments_id', '=', $id],
            ])
            ->get();

        return $list;
    }

    public function getRedirectURL($request): string
    {
        $redirect = match ($request->save_button) {
            'Zapisz' => '/apartments/edit/' . $request->id,
            'Zapisz i zamknij' => '/apartments',
        };

        return $redirect;
    }

    public function updateApartmentTable($request, $apartments_request): void
    {
        $validated = $apartments_request->validated();

        DB::table('apartments')
            ->where('id', $request->id)
            ->update([
                'name' => $validated['name'],
                'number' => $validated['number'],
                'square_footage' => $validated['squarefootage'],
                'storey' => $validated['storey'],
                'rooms' => $validated['rooms'],
                'price' => $validated['price'],
                'rotatingmodel' => $request->rotatingmodel,
                'virtualwalk' => $request->virtualwalk,
                'description1' => $request->description1,
                'description2' => $request->description2,
                'description3' => $request->description3,
                'buildings_id' => $request->buildings_id,
                'offertypes_id' => $request->offertypes_id,
                'status_id' => $request->status_id,
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
    }

    public function updateApartmentCardTable($request, $filename): void
    {
        DB::table('apartments')
            ->where('id', $request->id)
            ->update([
                'card' => $filename,
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
    }

    public function clearApartmentCardTable($id): void
    {
        DB::table('apartments')
            ->where('id', $id)
            ->update([
                'card' => '',
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
    }

    public function storeApartmentTable($request, $apartments_request): int
    {
        $validated = $apartments_request->validated();

        $id = DB::table('apartments')->insertGetId([
            'name' => $validated['name'],
            'number' => $validated['number'],
            'square_footage' => $validated['squarefootage'],
            'storey' => $validated['storey'],
            'rooms' => $validated['rooms'],
            'price' => $validated['price'],
            'buildings_id' => $request->buildings_id,
            'offertypes_id' => $request->offertypes_id,
            'status_id' => $request->status_id,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        return $id;
    }

    public function storeApartmentSpacesTable($apartments_spaces_request, $id): void
    {
        $validated = $apartments_spaces_request->validated();

        DB::table('apartments_spaces')->insert([
            'name' => $validated['name'],
            'square_footage' => $validated['squarefootage'],
            'type' => $validated['type'],
            'apartments_id' => $id,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }

    public function deleteApartment($request): void
    {
        DB::table('apartments')->where('id', '=', $request->id)->delete();
    }

    public function deleteApartmentSpaces($request): void
    {
        DB::table('apartments_spaces')->where('id', '=', $request->sid)->delete();
    }

    public function changeStatusAPartment($request): void
    {
        DB::table('apartments')
            ->where('id', $request->id)
            ->update([
                'status_id' => $request->sid,
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
    }
}
