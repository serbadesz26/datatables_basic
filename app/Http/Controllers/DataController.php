<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Phone;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function datatables()
    {
        return view('datatable');
    }

    public function dataUserUser()
    {
        $collection = User::query()->with('phone');

        return datatables()->of($collection)
            ->addColumn('btn', function ($row) {
                return '<div class="d-flex">
                            <a class="btn btn-sm btn-danger">Hapus</a>
                        </div>';
            })
            ->addIndexColumn()
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function paginate()
    {
        $users = User::with('phone')->paginate(10);
        return view('paginate', ['users' => $users]);
    }
}
