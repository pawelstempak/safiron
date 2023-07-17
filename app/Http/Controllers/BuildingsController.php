<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreBuildingsRequest;

class BuildingsController extends Controller
{
    public function show():object
    {
        $buildingslist = DB::table('buildings')->get();

        return view('buildings', [
            'buildingslist' => $buildingslist
        ]);
    }

    public function edit(int $id):object
    {
        $buildings = DB::table('buildings')->find($id);

        return view('edit-buildings', [
            'buildings' => $buildings
        ]);
    }

    public function save(Request $request, StoreBuildingsRequest $building_request):RedirectResponse
    {
        $validated = $building_request->validated();

        DB::table('buildings')
        ->where('id',$request->id)
        ->update([
            'name' => $validated['name'],
            'storeys' => $validated['storeys'],
            'description' => $validated['description'],
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $redirect = match ($request->save_button) {
            'Zapisz' => '/buildings/edit/'.$request->id,
            'Zapisz i zamknij' => '/buildings',
        };

        return redirect($redirect);
    }

    public function save_add_form(StoreBuildingsRequest $building_request):RedirectResponse
    {
        $validated = $building_request->validated();

        DB::table('buildings')->insert([
            'name' => $validated['name'],
            'storeys' => $validated['storeys'],
            'description' => $validated['description'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect('/buildings');
    }

    public function delete(Request $request)
    {
        $deleted = DB::table('buildings')->where('id', '=', $request->id)->delete();

        return redirect('/buildings');
    }    
}
