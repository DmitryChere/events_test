<?php

namespace App\Http\Controllers;

use App\Event;
use App\Template;
use App\Type;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(Request $request)
    {
        if (!$request->ajax())
        {
            return redirect('/')->send();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['templates'] = Template::get(['id', 'name']);
        $data['types'] = Type::get(['code', 'label']);
        return view('forms.event', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $event = new Event();
        $event->create($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['event'] = Event::find($id)->get(['id'. 'type_code', 'template_id']);
        $data['templates'] = Template::get(['id', 'name']);
        $data['types'] = Type::get(['code', 'label']);
        return view('forms.event', $data);
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
