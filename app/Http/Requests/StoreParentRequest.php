<?php

namespace App\Http\Requests;

use App\Rules\Idnumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreParentRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'sfzz'    => 'required',
			'fmxm1'   => 'required_if:sfzz,否',
			'fmzjhm1' => ['required_if:sfzz,否', new Idnumber],
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages() {
		return [
			'fmxm1.required_if'   => '非在职学生必须填写父母或监护人姓名',
			'fmzjhm1.required_if' => '非在职学生必须填写父母或监护人证件号码',
		];
	}
}
