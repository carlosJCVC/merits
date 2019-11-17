<?php

namespace App\Http\Controllers\Admin;

use App\Announcement;
use App\Area;
use App\Http\Requests\AnnouncementRequest;
use Carbon\Carbon;
use Cassandra\Date;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::all();

        return view('admin.announcements.index', [ 'announcements' => $announcements ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();

        return view('admin.announcements.create', [ 'areas' => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {
        $announcement = new Announcement($request->all());
        $announcement->start_date_announcement = new Carbon($request->start_date_announcement);
        $announcement->end_date_announcement = new Carbon($request->end_date_announcement);
        $announcement->start_date_calification = new Carbon($request->start_date_calification);
        $announcement->end_date_calification = new Carbon($request->end_date_calification);

        $announcement->save();

        $areas = Area::find($request->areas);

        $announcement->areas()->attach($areas);

        return redirect(route('admin.announcements.index'))->with([ 'message' => 'Convocatoria creado exitosamente!', 'alert-type' => 'success' ]);
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
        $announcement = Announcement::find($id);

        $areas = Area::all();

        return view('admin.announcements.edit', [ 'announcement' => $announcement ,'areas' => $areas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementRequest $request, $id)
    {
        $announcement = Announcement::find($id);

        $announcement->update($request->all());
        $announcement->save();

        $announcement->areas()->detach();

        $areas = Area::find($request->areas);

        $announcement->areas()->attach($areas);

        return redirect(route('admin.announcements.index'))->with([ 'message' => 'Convocatoria actualizado exitosamente!', 'alert-type' => 'info' ]);
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
