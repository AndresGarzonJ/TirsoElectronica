<?php 

namespace App\Shop\Blogs\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
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
            'name_blog' => ['required', Rule::unique('blogs')->ignore($this->segment(3))],
            'name_creator' => ['required'],
            'description_short'  => ['required']
        ];
    }
    //'cover' => ['required', 'file', 'image:png,jpeg,jpg,gif']

}