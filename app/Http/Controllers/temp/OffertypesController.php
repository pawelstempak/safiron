<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreOffertypesRequest;

class OffertypesController extends Controller
{
    public function show():object
    {
        $offertypeslist = DB::table('offertypes')->get();

        return view('offertypes', [
            'offertypeslist' => $offertypeslist
        ]);
    }

    public function edit(int $id):object
    {
        $offertypes = DB::table('offertypes')->find($id);

        return view('edit-offertypes', [
            'offertypes' => $offertypes
        ]);
    }

    public function save(Request $request, StoreOffertypesRequest $offertypes_request):RedirectResponse
    {
        $validated = $offertypes_request->validated();

        DB::table('offertypes')
        ->where('id',$request->id)
        ->update([
            'name' => $validated['name'],
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $redirect = match ($request->save_button) {
            'Zapisz' => '/offertypes/edit/'.$request->id,
            'Zapisz i zamknij' => '/offertypes',
        };

        return redirect($redirect);
    }

    public function save_add_form(StoreOffertypesRequest $offertypes_request):RedirectResponse
    {
        $validated = $offertypes_request->validated();

        DB::table('offertypes')->insert([
            'name' => $validated['name'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect('/offertypes');
    }

    public function delete(Request $request):RedirectResponse
    {
        $deleted = DB::table('offertypes')->where('id', '=', $request->id)->delete();

        return redirect('/offertypes');
    }    
}
