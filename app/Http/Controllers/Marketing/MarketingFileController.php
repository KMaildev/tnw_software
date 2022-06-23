<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\MarketingTeam;
use App\Models\Models\MarketingFile;
use Illuminate\Http\Request;

class MarketingFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $id = $id;
        $marketing_files = MarketingFile::where(['marketing_team_id' => $id])->get();
        return view('marketing.marketing_file.create', compact('id', 'marketing_files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $file = new MarketingFile();
        if ($request->file('file')) {
            $filePath = $request->file('file');
            $fileName = $filePath->getClientOriginalName();
            $path = $filePath->store('public/marketing_files');
        }

        $file->photo = $path;
        $file->original_name = $fileName;
        $file->user_id = $user_id;
        $file->marketing_team_id = $request->marketing_team_id;
        $file->save();

        $id = $request->marketing_team_id;
        $marketing_team = MarketingTeam::findOrFail($id);
        $marketing_team->photo_status = 'yes';
        $marketing_team->update();

        return response()->json(['success' => $fileName]);
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
        $role = MarketingFile::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Role is successfully deleted.');
    }
}
