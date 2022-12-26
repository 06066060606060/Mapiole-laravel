<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;


class Vente extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'ventes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = [
        'user_id',
        'prix',
        'name',
        'description',
        'image',
        'category',
        'adresse',
        'ville',
        'pays',
        'type',
        'loyer',
        'code_postal',
        'surface',
        'nb_piece',
        'nb_chambre',
        'nb_salle_bain',
        'nb_toilette',
        'terrasse',
        'balcon',
        'garage',
        'parking',
        'piscine',
        'ascenseur',
        'status',
        'type_chauffage',
     ];
    // protected $hidden = [];
    // protected $dates = [];
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}