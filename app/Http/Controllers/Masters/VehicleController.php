<?php

namespace App\Http\Controllers\Masters;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Masters\Vehicle;
use Yajra\Datatables\Datatables;
use Validator;
use Auth;
use App\Model\Masters\RoleMenuMapping;
use Illuminate\Support\Facades\Route;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	
		$data = Vehicle::all();
		
		 return view('masters.vehicle.index',compact('data'));
    }


	  public function anyData()
    {
	
     $data = Vehicle::all();
	 $edit_role='0';
     $delete_role='0';
     $actions='';

    $array_uri = explode("_", Route::getFacadeRoot()->current()->uri(), 2);
    $main_uri = $array_uri[0];
    $main_uri_id = \App\Menu::select('id')->where('slug',$main_uri)->first();
    $roles = \App\Model\Masters\RoleMenuMapping::where('parent_id',Auth::user()->role_id)->where('menu_id',$main_uri_id->id)->first();

    if($roles!=null){
        $edit_role=$roles->edit;
        $delete_role=$roles->delete;
    }

       return Datatables::of($data)
            ->addColumn('action', function ($data) use($edit_role,$delete_role,$actions) {
                if($data->record_status==1){
                    if($edit_role=='1')
                        $actions.='<a href="vehicle/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>';
                    if($delete_role=='1')
                        $actions.=' <a href="vehicle/change/'.$data->id.'" class="btn btn-xs btn-danger" ><i class="fa hvr-buzz-out  fa-trash" onclick="clickAndDisable(this);"></i></a>';                     
                }else{
                   /* if($edit_role=='1')
                        $actions.='<a href="vehicle/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>';*/
                    if($delete_role=='1')
                        $actions.=' <a href="vehicle/change/'.$data->id.'" class="btn btn-xs btn-success" ><i class="fa hvr-buzz-out  fa-check" onclick="clickAndDisable(this);"></i></a>';
                }

                 return $actions;   
            })
            ->editColumn('parent_id', function ($data) {
                return $data->location->name;
            })
            ->make(true);
    }
	
	 protected function validator(array $data)
    {      

        return Validator::make($data, [
            'registration_number' => 'required|max:255',
			'parent_id' => 'required|max:255',
            'route_id' => 'required|max:255',
			'inspection_date' => 'required|max:255',
			'capacity' => 'required|max:255',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('masters.vehicle.create');
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
		
     if ($this->validator($request->all())->fails()) {
        return redirect()->back()
                        ->withErrors($this->validator($request->all()))
                        ->withInput();
     }else{
        try { 
        Vehicle::create($request->all());
        return redirect()->route('vehicle.index')->with('message','Item has been added successfully');
        } 
        catch(\Illuminate\Database\QueryException $ex){ 
        return redirect()->back()
                        ->withErrors("Duplicate Entry or Error in Query")
                        ->withInput();             
        }
    }
    
    }
	
	 public function change($id){

        if($data = Vehicle::find($id)){
            $record_status=1;
            if($data->record_status==1){
                $record_status=0;                
            } 
            Vehicle::where('id', $id)->update(['record_status' => $record_status]);           
            return redirect()->route('vehicle.index')->with('message','Item has been updated successfully');
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
    public function edit(Vehicle $vehicle)
    {
        $data = $vehicle; 
        return view('masters.vehicle.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
		  $data = $vehicle;
         if ($this->validator($request->all())->fails()) {
            return redirect()->back()
                            ->withErrors($this->validator($request->all()))
                            ->withInput();
         }else{

            try { 

                $data->update($request->all());
                return redirect()->route('vehicle.index')->with('message','Item has been updated successfully');
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
