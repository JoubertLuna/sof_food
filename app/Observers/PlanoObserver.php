<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Admin\Plano;

class PlanoObserver
{
    /**
   * Handle the Plano "creating" event.
   *
   * @param  \App\Models\Plano  $plano
   * @return void
   */
  public function creating(Plano $plano)
  {
    $plano->url = Str::kebab($plano->nome);
  }

  /**
   * Handle the Plano "updating" event.
   *
   * @param  \App\Models\Plano  $plano
   * @return void
   */
  public function updating(Plano $plano)
  {
    $plano->url = Str::kebab($plano->nome);
  }
}
