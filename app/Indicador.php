<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'indicadores';
    protected $fillable = ['id','nombre','opciones','orden'];

    public function categoria(){
        return $this->belongsTo('App\CategoriaDeInstrumento','categorias_instrumento_id','id');
    }
}
