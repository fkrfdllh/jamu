<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ingredient;
use App\Herb;
use App\Step;

class HerbController extends Controller
{
	public function getSlideShow() {
		$images = Herb::select('image', 'name')->get();

		return view('home')->with('images', $images);
	}

	public function index() {
		$herbs = Herb::all();

		return view('herb.index')->with('herbs', $herbs);
	}

	public function detail($id) {
		$herb = Herb::find($id);

		$ingredient = Ingredient::leftJoin('herbs', 'herbs.id', '=', 'ingredients.herb_id')->where('ingredients.herb_id', $id)->get();
		$step = Step::leftJoin('herbs', 'herbs.id', '=', 'steps.herb_id')->where('steps.herb_id', $id)->get();

		return view('herb.detail')->with('herb', $herb)->with('ingredient', $ingredient)->with('step', $step);
	}

	public function search(Request $request) {
		$herbs = Herb::where('name', 'like', '%' . $request->input('s') . '%')->get();

		return view('herb.result')->with('herbs', $herbs);
	}

    public function add() {
        return view('herb.add');
    }

    public function create(Request $request) {
    	$herb = new Herb;

    	$herb->user_id = auth()->user()->id;
    	$herb->name = $request->input('name');
    	$herb->image = $request->image->store('uploads', 'public');
    	$herb->description = $request->input('description');
    	$herb->save();

    	$herbId = $herb->id;

    	if (count($request->ingredient) > 0) {
    		foreach ($request->ingredient as $i => $key) {
    			$ingredients = array(
    				'herb_id' => $herbId,
    				'ingredient' => $request->ingredient[$i]
    			);

    			Ingredient::insert($ingredients);
    		}
    	}

    	if (count($request->step) > 0) {
    		foreach ($request->step as $i => $key) {
    			$steps = array(
    				'herb_id' => $herbId,
    				'step' => $request->step[$i]
    			);

    			Step::insert($steps);
    		}
    	}

    	return redirect()->route('jamu')->with('success', 'Data telah disimpan');
    }
}
