<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "nama"  => "required",
            "harga" => "required|min:0",
            "gambar"=> "required"
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
     
        $imageName = time() . "." . $this->gambar->getClientOriginalExtension();
        // $this->gambar->move(public_path('products'), $imageName);
        $this->gambar->storeAs(
            'public/products', $imageName
        );
        $this->merge([
            'gambar' => $imageName,
        ]);
        
    }
}
