<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PunishmentController;
use App\Models\Charge;
use App\Models\Rent;
use Illuminate\Http\Request;

class PunishmentController extends Controller
{
    //
    public function index()
    {
        $data = [
            'punishment' => Rent::query()
                ->whereRelation('car', function ($q) {
                    return $q->whereRelation('rental', function ($q) {
                        return $q->where('user_id', auth()->id());
                    });
                })
                ->orderByRaw("
            CASE
            WHEN status = 'pending' THEN 1
            WHEN status = 'disewa' THEN 2
            WHEN status = 'selesai' THEN 3
            ELSE 4
            END ")
                ->get(),
        ];
        return view('dashboard.punishment.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Charge::create($data);

        return redirect()->back()->with('success', 'Berhasil menambahkan Denda !');
    }

    public function show($id)
    {
        $data = [
            'penalty' => Charge::query()
                ->whereRelation('rent', function ($q) use ($id) {
                    return $q->where('rent_id', $id);
                })
                ->get(),
        ];
        return view('dashboard.punishment.show', $data);
    }

    public function destroy(Charge $denda)
    {
        $denda->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus denda !');
    }
}
