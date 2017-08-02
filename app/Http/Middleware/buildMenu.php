<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Tree\Node\Node;
use Auth;
use \App\Model\Masters\RoleMenuMapping;

class buildMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $menus_list =\App\Model\Masters\RoleMenuMapping::select('menu_id')->where('parent_id',Auth::user()->role_id)->get();

        $menu_array = array();   
        foreach ($menus_list as $menu_list) {
            array_push($menu_array, $menu_list->menu_id );
        }
      
        $tableMenu = \App\Menu::where('record_status','1')
                            ->whereIn('id', $menu_array)
                            ->orderBy('parent_id','ASC')
                            ->orderBy('ordering','ASC')
                            ->get();

        Session::put('menu',$this->buildMenuTree($tableMenu));                   
        return $next($request);
    }

    private function buildMenuTree($tableMenu){
        $root = (new Node('root'));
        foreach ($tableMenu as $row) {
            $node = new Node($row);
            if($node->getValue()->parent_id == '0'){
                $root->addChild($node);
            }else{
                foreach ($root->getChildren() as $cursor) {
                    $this->InsertNode($cursor, $node);
                }
            }
        }
        //return generated Tree
        return $root;
    }

    private function InsertNode($sourceNode, $newNode){

        if($sourceNode->getValue()->id == $newNode->getValue()->parent_id){
            $sourceNode->addChild($newNode);
        }else{
            foreach ($sourceNode->getChildren() as $cursor) {
                $this->InsertNode($cursor, $newNode);
            }
        }
        return $sourceNode;
    }
}
