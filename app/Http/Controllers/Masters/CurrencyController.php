<?php

namespace App\Http\Controllers\Masters;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Masters\Currency;
use Yajra\Datatables\Datatables;
use Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Model\Masters\RoleMenuMapping;
use Illuminate\Support\Facades\Route;

class CurrencyController extends Controller
{
    //
	public function index()
    {
         $data = Currency::all();
		// $default = Input::has('default')?true:false;
         return view('masters.currency.index',compact('data'));
    }
	 public function anyData()
    {
     $data = Currency::all();
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
                        $actions.='<a href="currency/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>';
                    if($delete_role=='1')
                        $actions.=' <a href="currency/change/'.$data->id.'" class="btn btn-xs btn-danger" ><i class="fa hvr-buzz-out  fa-trash" onclick="clickAndDisable(this);"></i></a>';                     
                }else{
                   /* if($edit_role=='1')
                        $actions.='<a href="currency/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>';*/
                    if($delete_role=='1')
                        $actions.=' <a href="currency/change/'.$data->id.'" class="btn btn-xs btn-success" ><i class="fa hvr-buzz-out  fa-check" onclick="clickAndDisable(this);"></i></a>';
                }

                 return $actions;  
            })
           
            ->make(true);
    }

    protected function validator(array $data)
    {      

        return Validator::make($data, [
            'name' => 'required|max:255',
            'exchange_rate' => 'required|max:255',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.currency.create');
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
		
		$default = $request->default;
		if($default=='1')
				{
				
				    Currency::where('default', 1)->update(['default' => 0]); 
				}
					Currency::create($request->all());
		
        return redirect()->route('currency.index')->with('message','Item has been added successfully');	
				
				
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

        if($data = Currency::find($id)){
            $record_status=1;
            if($data->record_status==1){
                $record_status=0;                
            } 
            Currency::where('id', $id)->update(['record_status' => $record_status]);           
            return redirect()->route('currency.index')->with('message','Item has been updated successfully');
        }   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
         $data = $currency;
         return view('masters.currency.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Currency $currency)
    {
         $data = $currency;
         if ($this->validator($request->all())->fails()) {
            return redirect()->back()
                            ->withErrors($this->validator($request->all()))
                            ->withInput();
         }else{

            try { 
               
			    $default = $request->default;
			   if($default=='1')
				{
				    Currency::where('default', 1)->update(['default' => 0]); 
				}
                $data->update($request->all());
                return redirect()->route('currency.index')->with('message','Item has been updated successfully');
				
				
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
