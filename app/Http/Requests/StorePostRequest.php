<?php

namespace App\Http\Requests;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
        ];
    }

    public function isValid(){
        return Post::create([
            'title' => $this->title,
            'slug' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
            'user_id' => Auth::user()->id
        ]);
    }
}
