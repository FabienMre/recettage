<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('create');
        //$this->middleware('isadmin')->only('index', 'show', 'edit', 'destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Project::paginate(5);
        return view('plans.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'customer_infos' => 'required',
            'customer_address' => 'required',
            'customer_email' => 'required',
            'customer_phonenumber' => 'required',
            'pitch' => 'required',
            'cdc_fonctionnel' => 'required',
            'goals' => 'required',
            'team_project' => 'required',
            'team_client' => 'required',
            'process' => 'required',
            'organisation' => 'required',
            'information' => 'required',
            'cr_client' => 'required',
            'cr_interne' => 'required',
            'request' => 'required',
            'base_mail' => 'required',
            'thrends_msg' => 'required',
            'risk' => 'required',
            'signature' => 'required'
        ]);
        $plan = new Plan();
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;
        $plan->fill($input)->save();
        return redirect()->back()->with('success', 'Votre Cahier de recettage a été soumis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Plan::findOrFail($id);
        return view('plan.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Plan::findOrFail($id);
        return view('plans.edit', compact('plan'));
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
        $plan = Plan::findOrFail($id);
        $input = $request->input();
        $plan->fill($input)->save();
        return redirect()->back()->with('success', 'Votre cahier de recettage a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);

        $plan->delete();

        return redirect()->route('plan.index')->with('success', 'Votre cahier de recettage a été supprimé');
    }
}
