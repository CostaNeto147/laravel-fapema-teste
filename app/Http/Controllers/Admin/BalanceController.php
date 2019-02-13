<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function index(){
        //dd(auth()->user()->balance()->get()); derbug verificando dados do banco do usuario com o balance

         $balance=auth()->user()->balance;
         $amount= $balance ? $balance->amount:0;

        return view('admin.balance.index', compact('amount'));
    }

    public function deposit(){

        return view ('admin.balance.deposit');
    }
}
