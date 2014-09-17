<?php namespace Geosearch\Http\Controllers;

use Geosearch\Services\GeoSearch;
use Geosearch\Http\Requests\SearchRequest;
use Illuminate\Routing\Controller;

class HomeController extends Controller {

	public function index()
	{
		return view('pages.home');
	}

    public function post(GeoSearch $search, SearchRequest $request)
    {
        $search->domain = $request->input('domain');
        $search->lang = $request->input('lang');
        $search->pws = boolval($request->input('pws'));

        $target = $search->build($request->only('location','query'));
        return redirect($target);
    }

}
