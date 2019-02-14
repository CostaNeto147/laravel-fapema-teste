<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        //dd(auth()->user()->balance()->get()); derbug verificando dados do banco do usuario com o balance

        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;

        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {

        return view('admin.balance.deposit');
    }

    public function depositStore(Request $request)
    {
        //balance->deposit($request->$value);
        //dd($request->all());
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $balance->deposit($request->value);

        //dd($balance->deposit($request->value));// verificando no debug o que esta acontecendo


        //dd(auth()->user()->balance()->firstOrCreate([]));

    }
}
