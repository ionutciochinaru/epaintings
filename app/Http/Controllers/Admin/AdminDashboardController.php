<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Paintings;


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.dashboardAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allpaintings()
    {
        $paintings = Paintings::all();

        return view('pages.admin.dashboard_all_paintings',compact('paintings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storePainting()
    {
        $paintings = new Paintings();

        $cover = $paintings -> filename = request('paintingPicture');
        $extension = $cover->getClientOriginalExtension();

        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));


        $paintings->mime = $cover->getClientMimeType();
        $paintings->original_filename = $cover->getClientOriginalName();
        $paintings->filename = $cover->getFilename().'.'.$extension;

        $paintings -> title = request('inputTitle');
        $paintings -> subject = request('inputSubject');
        $paintings -> authorName = request('inputAuthorName');
        $paintings -> description = request('inputDescription');
        $paintings -> materials = request('inputMaterials');
        $paintings -> medium = request('inputMedium');
        $paintings -> yearMade = request('inputYearMade');
        $paintings -> price = request('inputPrice');
        $paintings -> size = request('inputSize');
        $paintings -> onSale = request('onSaleCheck');
        $paintings->save();

        return redirect('/dashboardAdmin/paintings');
    }

    public function createPainting()
    {
        return view('pages.admin.dashboard_create_painting');
    }

    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPainting($id)
    {
        $paintings[] = Paintings::find($id);

        return view('pages.admin.dashboard_edit_painting', compact('paintings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePainting($id)
    {
        $paintings = Paintings::findOrFail($id);

        $paintings -> title = request('inputTitle');
        $paintings -> subject = request('inputSubject');
        $paintings -> authorName = request('inputAuthorName');
        $paintings -> description = request('inputDescription');
        $paintings -> materials = request('inputMaterials');
        $paintings -> medium = request('inputMedium');
        $paintings -> yearMade = request('inputYearMade');
        $paintings -> price = request('inputPrice');
        $paintings -> size = request('inputSize');
        $paintings -> onSale = request('onSaleCheck');
        $paintings->save();

        return redirect('/dashboardAdmin/paintings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPainting($id)
    {

        Paintings :: findOrFail($id)->delete();

        return redirect('/dashboardAdmin/paintings');
    }
}
