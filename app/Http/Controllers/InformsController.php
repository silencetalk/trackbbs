<?php

namespace App\Http\Controllers;

use App\Models\Inform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InformRequest;

class InformsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$informs = Inform::paginate();
		return view('informs.index', compact('informs'));
	}

    public function show(Inform $inform)
    {
        return view('informs.show', compact('inform'));
    }

	public function create(Inform $inform)
	{
		return view('informs.create_and_edit', compact('inform'));
	}

	public function store(InformRequest $request)
	{
		$inform = Inform::create($request->all());
		return redirect()->route('informs.show', $inform->id)->with('message', 'Created successfully.');
	}

	public function edit(Inform $inform)
	{
        $this->authorize('update', $inform);
		return view('informs.create_and_edit', compact('inform'));
	}

	public function update(InformRequest $request, Inform $inform)
	{
		$this->authorize('update', $inform);
		$inform->update($request->all());

		return redirect()->route('informs.show', $inform->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Inform $inform)
	{
		$this->authorize('destroy', $inform);
		$inform->delete();

		return redirect()->route('informs.index')->with('message', 'Deleted successfully.');
	}
}