<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SearchField;
use Illuminate\Http\Request;

class SearchFieldController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        SearchField::create([
            'display_name' => 'New',
            'text_id' => 'subjectBirthDate',
            'field_type' => 'datepicker',
            'filters' => json_encode(['equals' => 'Equals', 'before' => 'Before', 'after' => 'After', 'between' => 'Between'])
        ]);
    }

    public function getFields($textId)
    {
        return $textId;
    }
}
