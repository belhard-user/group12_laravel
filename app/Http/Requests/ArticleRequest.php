<?php

namespace App\Http\Requests;

use App\Tag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
{
    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }
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
            'title' => 'required|max:140|unique:articles',
            'short_description' => 'required',
            'body' => 'required',
            'tag_list.*' => 'required|in:' . $this->tag->pluck('id')->implode(',')
        ];

        if( array_get($this->route()->action, 'as') == 'article.update'){
            $rule['title'] = 'required|max:140|unique:articles,title,' . $this->article->id;
        }

        return $rule;
    }

    /*public function messages()
    {
        return [
            'title.required' => 'Заполни поле Заголовок сынок!'
        ];
    }*/
}
