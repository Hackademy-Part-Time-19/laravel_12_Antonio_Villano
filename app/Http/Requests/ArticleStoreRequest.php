<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //se l'utente è un admin 
        return true;
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required|min:10',
            'category_id'=> 'required',
            'image' => 'image'
        ];
    }
    
    public function messages()
    {
        return [
            'title.required'=>'Il titolo deve esistere',
            'title.max'=>'Il titolo essere meno di 100 caratteri',
            'description.required'=>'La descrizione deve essere inserita',
            'description.min'=>'La descrizione deve avere più di 10 caratteri',
            'category_id.required'=>'La categoria deve essere selezionata',
        ];
    }
}
