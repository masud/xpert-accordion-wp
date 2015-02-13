<?php


function accordion_shortcode($attr, $content= null){

	$default = array(
          'preset' => 'default'
		);
	

	$data = shortcode_atts($default, $attr);

	$content = do_shortcode($content);

	return '<div class="panel-group '.$data['preset'].'"  id="accordion" role="tablist" aria-multiselectable="true">
'.$content.'</div>';
}
add_shortcode('ms_acc','accordion_shortcode');


function accordion_shortcode_nested($attr, $content= null){

	$default = array(
		'title'=> 'Insert Your Title',
		'icon' => ''

		);

	
	$data = shortcode_atts($default, $attr);
	$rand = rand(1,100);

	//$content = do_shortcode($content);

	return '<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#acc-'.$rand.'" aria-expanded="true" aria-controls="collapseOne">
          <i class="'.$data['icon'].'"></i> '.$data['title'].'
        </a>
      </h4>
    </div>
    <div id="acc-'.$rand.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
'.$content.'</div>
    </div>
  </div>';
}
add_shortcode('ms_acc_slide','accordion_shortcode_nested');









//___start nestes shortcode__//
   
// function accordion_shortcode($attr, $content= null){

// 	$default = array(

// 		);
	

// 	$data = shortcode_atts($default, $attr);

// 	$content = do_shortcode($content);

// 	return '<span style="color:#f00;">'.$content.'</span>';
// }
// add_shortcode('ms_acc','accordion_shortcode');

// function accordion_shortcode_nested($attr, $content= null){

// 	$default = array(

// 		);
	

// 	$data = shortcode_atts($default, $attr);

// 	$content = do_shortcode($content);

// 	return '<span style="color:green;">'.$content.'</span>';
// }
// add_shortcode('ms_acc_slide','accordion_shortcode_nested');


//___End nestes shortcode__//


   
// function accordion_nested($attr, $content= null){

// 	$default = array(

// 		);
	

// 	$data = shortcode_atts($default, $attr);

// 	$content = do_shortcode($content);

// 	return '.$content.';
// }
// add_shortcode('ms_acc_slide','accordion_nested');


//   function accordion_title(){

//     $var = '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
// 			  <div class="panel panel-default">
// 			    <div class="panel-heading" role="tab" id="headingOne">
// 			      <h4 class="panel-title">
// 			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
// 			          Collapsible Group Item #1
// 			        </a>
// 			      </h4>
// 			    </div>
// 			    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
// 			      <div class="panel-body">
// 			        Hello
// 			      </div>
// 			    </div>
// 			  </div>
// 			</div>';
//     return $var;
//   }
// add_shortcode('ms_acc_slide','accordion_title');



?>