<?php
//Agregar campo tabla Productos
//Modificar para crear el campo de N° de caja 

namespace App\Shop\Products\Requests;
 
use App\Shop\Base\BaseFormRequest;

class CreateProductRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku' => ['required'],
            'name' => ['required', 'unique:products'],
            'nBox' => ['required'],
            'tag' => ['required'],
            'quantity' => ['required', 'numeric'],
            'price' => ['required'],
            'buyprice' => ['required'],
            'cover' => ['required', 'file', 'image:png,jpeg,jpg,gif']
        ];
    }
}
