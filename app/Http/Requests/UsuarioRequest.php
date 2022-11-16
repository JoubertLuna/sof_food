<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
      'name' => ['required', 'string', 'max:255'],
      'email' => "required|string|max:255|email|unique:users,email,{$id},id",
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];
  }
}
