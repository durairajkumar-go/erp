<?php

namespace App\Http\Controllers\Masters;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Masters\Location;
use Yajra\Datatables\Datatables;
use Validator;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Location::all();
         return view('masters.location.index');
    }

    public function anyData()
    {
     $data = Location::all();
       return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="location/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>
                    <a href="location/'.$data->id.'/change_status" class="btn btn-xs btn-danger" ><i class="fa hvr-buzz-out  fa-trash" onclick="clickAndDisable(this);"></i></a>';
            })
            ->make(true);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'location_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:6'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     if ($this->validator($request->all())->fails()) {
        return redirect()->back()
                        ->withErrors($this->validator($request->all()))
                        ->withInput();
     }else{
        Location::create($request->all());
        return redirect()->route('location.index')->with('message','Item has been added successfully');
    }
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
    public function edit(Location $location)
    {
         return view('masters.location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
         if ($this->validator($request->all())->fails()) {
            return redirect()->back()
                            ->withErrors($this->validator($request->all()))
                            ->withInput();
         }else{
            $location->update($request->all());
            return redirect()->route('location.index')->with('message','Item has been updated successfully');
        }
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
