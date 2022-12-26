<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'locations';
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
    protected $casts = [
        'image' => 'array'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setImageAttribute($value)
    {
    
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "/uploads";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
   

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}