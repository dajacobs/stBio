<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class QueryFieldRequest extends Request {


    public function rules()
    {
        return [
            'subjectName',
            'subjectId',
        ];
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



}
