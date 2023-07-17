<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreStatusRequest;

class StatusController extends Controller
{
    public function show():object
    {
        $statuslist = DB::table('status')->get();

        return view('status', [
            'statuslist' => $statuslist
        ]);
    }

    public function edit(int $id):object
    {
        $status = DB::table('status')->find($id);

        return view('edit-status', [
            'status' => $status
        ]);
    }

    public function save(Request $request, StoreStatusRequest $status_request):RedirectResponse
    {
        $validated = $status_request->validated();

        DB::table('status')
        ->where('id',$request->id)
        ->update([
            'name' => $validated['name'],
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $redirect = match ($request->save_button) {
            'Zapisz' => '/status/edit/'.$request->id,
            'Zapisz i zamknij' => '/status',
        };

        return redirect($redirect);
    }

    public function save_add_form(StoreStatusRequest $status_request):RedirectResponse
    {
        $validated = $status_request->validated();

        DB::table('status')->insert([
            'name' => $validated['name'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect('/status');
    }

    public function delete(Request $request):RedirectResponse
    {
        $deleted = DB::table('status')->where('id', '=', $request->id)->delete();

        return redirect('/status');
    }    
}
