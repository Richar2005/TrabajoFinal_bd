<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $precio
 * @property $clientre_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'precio' => 'required',
		'clientre_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['precio','clientre_id'];



}
