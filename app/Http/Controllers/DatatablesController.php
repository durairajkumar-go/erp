<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Yajra\Datatables\Datatables;

use App\User;

class DatatablesController extends Controller
{
    public function index(){

    	return view('datatables.index');
    }

    public function getIndex()
    {
        return view('datatables.index');
    }

    public function anyData()
    {
        return Datatables::of(User::query())->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}
