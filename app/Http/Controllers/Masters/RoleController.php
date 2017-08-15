<?php

namespace App\Http\Controllers\Masters;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Masters\Role;
use App\Model\Masters\Menu;
use Yajra\Datatables\Datatables;
use Validator;
use Auth;
use Illuminate\Support\Facades\Route;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$data = Role::all();
		
		 return view('masters.role.index',compact('data'));
    }
	
	public function anyData()
    {
	
     $data = Role::all();
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
                        $actions.='<a href="role/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>';
                    if($delete_role=='1')
                        $actions.=' <a href="role/change/'.$data->id.'" class="btn btn-xs btn-danger" ><i class="fa hvr-buzz-out  fa-trash" onclick="clickAndDisable(this);"></i></a>'; 
						
						$actions.=' <a href="role/menu_mapping/'.$data->id.'" class="btn btn-xs btn-success" ><i class="fa hvr-buzz-out  fa-map-signs" onclick="clickAndDisable(this);"></i></a>';                     
                }else{
                    /*if($edit_role=='1')
                        $actions.='<a href="role/'.$data->id.'/edit" class="btn btn-xs btn-warning" ><i class="fa hvr-buzz-out  fa-edit" onclick="clickAndDisable(this);"></i></a>';*/
                    if($delete_role=='1')
                        $actions.=' <a href="role/change/'.$data->id.'" class="btn btn-xs btn-success" ><i class="fa hvr-buzz-out  fa-check" onclick="clickAndDisable(this);"></i></a>';
						
                }

                 return $actions;   
            })->addColumn('menuMapping', function ($data) {
                	return '<button id="menuMapping-'.$data->id.'"   onclick="menuMapping('.$data->id.')" class="btn btn-xs btn-primary"> Menu Mapping </button>';
			})
            ->make(true);
    }
	
	 protected function validator(array $data)
    {      

        return Validator::make($data, [
            'name' => 'required|max:255',
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
		return view('masters.role.create');
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
        Role::create($request->all());
        return redirect()->route('role.index')->with('message','Item has been added successfully');
        } 
        catch(\Illuminate\Database\QueryException $ex){ 
        return redirect()->back()
                        ->withErrors("Duplicate Entry or Error in Query")
                        ->withInput();             
        }
    }
    
    
    }
	
	public function change($id){

        if($data = Role::find($id)){
            $record_status=1;
            if($data->record_status==1){
                $record_status=0;                
            } 
            Role::where('id', $id)->update(['record_status' => $record_status]);           
            return redirect()->route('role.index')->with('message','Item has been updated successfully');
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
    public function edit(Role $role)
    {
        //
		$data = $role; 
        return view('masters.role.edit',compact('data'));
    }
	
	//For Menu Mapping
	 public function menuMapping($id)
    {
        //
		
		$data = Role::find($id);
		$main_menu_data = Menu::select('title','id')->where('parent_id',0)->where('record_status',1)->get();
		
		$tree_design = ' <div class="i-check"><ul>';
		//Create Tree view for Menus & Sub Menus
		foreach($main_menu_data as $menus)
		{
			 $sub_menu_tree_design = $this->getSubMenus($menus->id);
			
			
			$tree_design = $tree_design.'<li><input class="icheckbox_minimal" type="checkbox" name="chk[]" value="'.$menus->id.'"><label for="select_checkbox">'.$menus->title.'</label>';
			if($sub_menu_tree_design!='')
			{
				$tree_design = $tree_design.'<ul>'.$sub_menu_tree_design.'</ul>';
			}
			//$tree_design = $tree_design.'<ul><li>'.$submenu_title.'</li></';
			$tree_design = $tree_design.'</li>';
			
		}
		$tree_design = $tree_design.'</ul></div>';
		
		
		//echo $tree_design;exit;
		 return view('masters.role.menu_mapping',['design_data' => $tree_design,'data' => $data ]);
		
//        return view('masters.role.menu_mapping',compact('data','menu_data'));
    }
	function getSubMenus($menu_id)
		{
			
			//Get Sub Menus
			
			$sub_menu_tree = '';
			$sub_submenu_tree_vals = '';
			
			$submenu_title_data = Menu::select('title','id')->where('parent_id',$menu_id)->where('record_status',1)->get();
			
			
			foreach($submenu_title_data as $submenu_title)
			{
				$submenu_title_value = $submenu_title->title;
				$submenu_title_count = Menu::select('title','id')->where('parent_id',$submenu_title->id)->where('record_status',1)->count();
				if($submenu_title_count>0)
				{
					$sub_submenu_tree = $this->getSubMenus($submenu_title->id);
					$sub_menu_tree = $sub_menu_tree.'<li><input class="icheckbox_minimal" name="chk[]" type="checkbox" value="'.$submenu_title->id.'"><label for="select_checkbox">'.$submenu_title_value.'</label><ul>'.$sub_submenu_tree.'</ul></li>';
				
				}
				else
				{
					$sub_menu_tree = $sub_menu_tree.'<li><input class="icheckbox_minimal" type="checkbox" name="chk[]" value="'.$submenu_title->id.'"><label for="select_checkbox">'.$submenu_title_value.'</label></li>';
				}
				
			}
		
			//echo $sub_menu_tree;
			return $sub_menu_tree;
		}
	
	//To Save Role Menu Mappings
	public function addRoleMenuMappings(Request $request)
	{
		echo 'In controller';exit;
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
		
        //
		  $data = $role;
         if ($this->validator($request->all())->fails()) {
            return redirect()->back()
                            ->withErrors($this->validator($request->all()))
                            ->withInput();
         }else{

            try { 

                $data->update($request->all());
                return redirect()->route('role.index')->with('message','Item has been updated successfully');
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
