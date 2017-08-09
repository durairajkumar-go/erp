<?php


if(!function_exists('getOutput')){
	function getOutput($node)
	{
		if($node->isLeaf()){
			$output = '<li><a href="'.url($node->getValue()->slug).'">';
			if($node->getValue()->parent_id=='0')
				$output .= '<i class="ti-home"></i>';
			$output .= trans('messages.'.strtolower($node->getValue()->title).'')."</a></li>";
		}else{
             $output ='<li class="dropdown"><a href="'.url($node->getValue()->slug).'" class="dropdown-toggle" data-toggle="dropdown">';

			if($node->getValue()->parent_id=='0')
				$output .= '<i class="ti-home"></i>';

             $output .=trans('messages.'.strtolower($node->getValue()->title).'').'</a><ul class="dropdown-menu animated">';

			foreach ($node->getChildren() as $nodec) {
				$output.= getOutput($nodec);
			}
			$output.='</li></ul>';
		}

		return $output;
	}
}

if(!function_exists('printMenu')){
	function printMenu($tree){
		$output ='';
		foreach ($tree->getChildren() as $node) {
			$output.= getOutput($node);
		}

		return $output;
	}
}

if(!function_exists('currency')){
	function currency($value,$decimals,$symbol){
		try{
			echo $symbol.' '.number_format($value,$decimals);
		}catch(Exception $e){
			echo "&#9888;";
		}
	}
}