<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\QueryFieldRequest;
use App\SearchField;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Grimthorr\LaravelUserSettings\Facade;

class SearchController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $fieldVals = array_keys(array_filter(json_decode(\Auth::user()->settings, true)));
        $userFields = SearchField::whereIn('text_id', $fieldVals)->get();
        $selectFields = SearchField::whereNotIn('text_id', $fieldVals)->get();
        return view('search.index', compact('userFields', 'selectFields'));
    }

    public function getQueryFields()
    {
        $queryFields = SearchField::all(['display_name','text_id', 'category'])->sortBy('category');
        $fieldCategory = SearchField::all(['category'])->groupBy('category');
        $userSettings = array_keys(array_filter(json_decode(\Auth::user()->settings, true)));

        return view('search.queryFields', compact('queryFields', 'userSettings'));
    }

    public function results(Request $request)
    {
      $databases = [
        'crdb',
        'sirdb',
        'rvdb'
      ];

      $results;
      $columns;

      foreach($databases as $database) {
        \Config::set('database.default', $database);
        $results = \DB::table('demography')->get();
        $columns = \DB::getSchemaBuilder()->getColumnListing('demography');
      }
      return view('search.results', compact('results', 'columns'));
    }

    public function postQueryFields(QueryFieldRequest $request)
    {
        \Auth::user()->settings = json_encode($request->except('_token'));
        \Auth::user()->save();
        return redirect('search');
    }

}
