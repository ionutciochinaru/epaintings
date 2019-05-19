<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
        //
    }
}
