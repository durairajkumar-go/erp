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
                if($data->record_status==1){
                return '<a href="location/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>
                    <a href="location/change/'.$data->id.'" class="btn btn-xs btn-danger" ><i class="fa hvr-buzz-out  fa-trash" onclick="clickAndDisable(this);"></i></a>';

                }else{

                return '<a href="location/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>
                    <a href="location/change/'.$data->id.'" class="btn btn-xs btn-success" ><i class="fa hvr-buzz-out  fa-check" onclick="clickAndDisable(this);"></i></a>';
                }

            })
            ->make(true);
    }

    protected function validator(array $data)
    {      

        return Validator::make($data, [
            'location_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:6',
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
        try { 
        Location::create($request->all());
        return redirect()->route('location.index')->with('message','Item has been added successfully');
        } 
        catch(\Illuminate\Database\QueryException $ex){ 
        return redirect()->back()
                        ->withErrors("Duplicate Entry or Error in Query")
                        ->withInput();             
        }
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

    public function change($id){

        if($data = Location::find($id)){
            $record_status=1;
            if($data->record_status==1){
                $record_status=0;                
            } 
            Location::where('id', $id)->update(['record_status' => $record_status]);           
            return redirect()->route('location.index')->with('message','Item has been updated successfully');
        }   
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

            try { 

                $location->update($request->all());
                return redirect()->route('location.index')->with('message','Item has been updated successfully');
             }
             catch(\Illuminate\Database\QueryException $ex){ 
                        return redirect()->back()
                            ->withErrors("Duplicate Entry or Error in Query")
                            ->withInput();             
            }
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
