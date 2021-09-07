<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LombaFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Film::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($item){
                        return '
                        <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                type="button" id="action' .  $item->id . '"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                <form action="' . route('film.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Delete
                                    </button>
                                </form>
                            </form>
                            </div>
                        </div>
                </div>';
                    })
                    ->editColumn('ktm', function ($item) {
                        return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 60px;"/>' : '';
                    })
                    ->editColumn('photo', function ($item) {
                        return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 60px;"/>' : '';
                    })
                    ->rawColumns(['action','ktm','photo'])
                    ->make(true);
        }
        $count = DB::table('films')->count();
        return view('pages.admin.film',compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.form',[
            'categories' => $categories
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function success()

    {
        return view('pages.success');
    }

    public function show(Film $film)
    {
        return view('pages.admin.film-show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =Film::findorFail($id);
        $item->delete();

        return redirect()->route('film.index');
    }
}

