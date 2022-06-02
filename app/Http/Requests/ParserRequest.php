<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParserRequest extends FormRequest
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
            'id' => 'nullable|string',
            'dealer' => 'nullable|string',
            'category' => 'nullable|string',
            'type' => 'nullable|string',
            'year' => 'nullable|string',
            'brand' => 'nullable|string',
            'model' => 'nullable|string',
            'generation' => 'nullable|string',
            'bodyconfiguration' => 'nullable|string',
            'modification' => 'nullable|string',
            'enginetype' => 'nullable|string',
            'enginevolume' => 'nullable|string',
            'enginepower' => 'nullable|string',
            'bodytype' => 'nullable|string',
            'bodydoorcount' => 'nullable|string',
            'bodycolor' => 'nullable|string',
            'bodycolormetallic' => 'nullable|string',
            'drivetype' => 'nullable|string',
            'gearboxtype' => 'nullable|string',
            'steeringwheel' => 'nullable|string',
            'mileage' => 'nullable|string',
            'mileageunit' => 'nullable|string',
            'price' => 'nullable|string',
            'specialoffer' => 'nullable|string',
            'availability' => 'nullable|string',
            'ptstype' => 'nullable|string',
            'photocount' => 'nullable|string',
            'ownerscount' => 'nullable|string',
            'vehiclecondition' => 'nullable|string',
            'acquisitionsource' => 'nullable|string',
            'acquisitiondate' => 'nullable|string',
            'complectation' => 'nullable|string',
            'gearboxgearcount' => 'nullable|string',
            'country' => 'nullable|string',
            'maximumpermittedmass' => 'nullable|string',
        ];
    }
}
