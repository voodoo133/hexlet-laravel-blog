<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleFormRequest extends StoreArticleFormRequest
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            'name' => 'required|unique:articles,name,' . $this->route('article')->id,
        ]);
    }
}
