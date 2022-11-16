<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalhePlano extends Model
{
  use HasFactory;

  protected $table = 'detalhes_plano';

  protected $fillable = ['nome'];

  #Relecionamentos
  public function plano()
  {
    return $this->belongsTo(Plano::class);
  }
}
