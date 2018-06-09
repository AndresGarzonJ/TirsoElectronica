<?php
//Modificar para crear el campo de N° de caja 

namespace App\Shop\Blogs\Requests;
 
use App\Shop\Base\BaseFormRequest;

class CreateBlogRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_blog' => ['required', 'unique:blogs'],
            'name_creator' => ['required'],
            'description_short'  => ['required'],
            'cover' => ['required', 'file', 'image:png,jpeg,jpg,gif']
        ];
    }
}