<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Array_;

class Balance extends Model
{

    protected $fillable = [
        'amount', 'user_id'
    ];
    public $timestamps = false;

    // não vai trabalhar com timestamps

    public function deposit(float $value): Array
    {
        $totalBefore = $this->amount;// valor anterior antes do deposito

        $this->amount += $value;// acresentra o saldo

        $historico = auth()->user()->historico()->create([
            'type'          => 'I',
            'amount'        => $value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date '         => date('Ymd'),

        ]);


        $deposit = $this->save();
        if ($deposit && $historico)
            return [
                'success' => true,
                'message' => "Recarga efetuada com Sucesso"
            ];
        return [
            'success' => false,
            'message' => "Falha ao Recaregar"
        ];

    }
}


