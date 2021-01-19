<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisiteursRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|string',
            'prenoms'=>'required|string',
            'sexe_id'=>'required|integer',
            'structure'=>'required|string',
            'contacts'=>'required|integer|min:10',
            'mail'=>'required|string|email',
            'objet_id'=>'required|integer',            
            'agence_id'=>'required|integer',            
            'user_id'=>'required|integer',            
            ];
    }
}
