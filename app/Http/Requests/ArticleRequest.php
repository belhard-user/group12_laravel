<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
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
        $rule =  [
            'title' => [
                'required',
                'max:140',
                Rule::unique('articles')->ignore($this->article->id),
            ],
            'short_description' => 'required',
            'body' => 'required'
        ];

        /*if( array_get($this->route()->action, 'as') == 'article.update'){
            $rule['title'] = 'required|max:140|unique:articles,title,' . $this->article->id;
        }*/

        return $rule;
    }
}
