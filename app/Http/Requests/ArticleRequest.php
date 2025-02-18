<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    //Override di un metodo per modificare i messaggi di errore
    public function messages()
    {
        //Array chiave valore
        // Chiave: sarà il nome del campo . la regola da validare
        // Valore: sarà il messaggio che appare se quella regola non è stata rispettata
        return [
            'title.required' => "Inserisci il titolo dell'articolo",
            'category.required' => "Inserisci la categoria dell'articolo",
            'description.required' => "Inserisci la descrizione dell'articolo",
            'text.required' => "Inserisci il testo dell'articolo",
            'image.required' => "Inserisci l'immagine dell'articolo",
        ];
    }
}
