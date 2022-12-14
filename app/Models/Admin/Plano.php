<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
  use HasFactory;

  protected $fillable = ['nome', 'url', 'preco', 'descricao'];

  #Relecionamentos
  public function detalhes()
  {
    return $this->hasMany(DetalhePlano::class);
  }
}
