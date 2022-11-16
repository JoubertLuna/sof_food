<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanoRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    $id = $this->segment(3);

    return [
      'nome' => "required|min:3|max:255|unique:planos,nome,{$id},id",
      'preco' => "required|regex:/^\d+(\.\d{1,2})?$/",
      'descricao' => 'nullable|min:3|max:150'

    ];
  }
}
