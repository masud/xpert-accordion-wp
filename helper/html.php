<?php

abstract class Html {

	public static function getMediaButtion()
	{
		$html = '<a href="#" id="xa-media" class="btn button" data-toggle="modal" data-target="#exampleModal">XpertAccordion</a>';

		return $html;
	}

	public static function getModal()
	{
		$html = array();

		$html[] = '<div class="tx">';
			$html[] = '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
				$html[] = '<div class="modal-dialog">';
					$html[] = '<div class="modal-content">';
						$html[] = self::getModalHeader();
						$html[] = '<div class="modal-body">';
							$html[] = '<button type="button" class="btn btn-success action-new">Add New</button>';
							$html[] = self::getPresetStyles();
							$html[] = self::getRepeatable();
							//	$html[] = Html::get_icons_list();
							///$html[] = Html::get_body_form_footer();
							$html[] = '</div>';
							$html[] = self::getModalFooter();
						$html[] = '</div>';
				$html[] = '</div>';
			$html[] = '</div>';
		$html[] = '</div>';

		return implode('', $html);
	}

	public static function getModalHeader()
	{
		$html = '<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
			      </div>';

		return $html;
	}

	public static function getPresetStyles(){
		$html = '<select class="form-control pull-right preset_select" >
					<option value="ms_default" selected >Select Styles</option>
					<optgroup label="Bootstrap Styles">
					  <option value="ms_green">Bootstrap Success</option>
					  <option value="ms_blue">Bootstrap Infro</option>
					  <option value="ms_yellow" >Bootstrap Warning</option>
					  <option value="ms_red" >Bootstrap Danger</option>
					 
				  </optgroup>
				  <optgroup label="ThemeXpert Styles">
				  <option value="tx-style1">Style 1</option>
				  <option value="tx-style2">Style 2</option>
				  </optgroup>
				</select>';

		return $html;
	}

	public static function getRepeatable()
	{
		$html = '<div id="repeatable" class="panel-group" role="tablist"><br>
				<div class="panel panel-default clonable">
					     <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
					        <h4 class="panel-title">
					          <a class="collapsed" data-toggle="collapse"  data-parent="#repeatable" href="#acc-1" aria-expanded="false" aria-controls="acc-1">
					            <span class="fa fa fa-bars tx_draging" ></span>
					            <i class="fa fa-default" id="ms_title_icon"></i> 
					            <span class="ms_title">New Item</span>
					          </a>
					          <span class="btn fa fa-times action-remove pull-right"></span>
					        </h4>
					     </div>
					  <div id="acc-1" class="panel-collapse collapse" role="tabpanel">
					      <div class="panel-body">
					       	  <form>
					        	 <div class="form-group">
					        	 	<div class="row">  
							            <div class="col-md-8">
								        	<label for="title">Title</label>
								         	<input type="text" class="form-control title" placeholder="Enter title">
					        	        </div>

                                        <div class="col-md-4">
                                        	<label for="icon">Icon</label>
                                        	' . self::getIconLists() . '
									    </div>
									  </div>
									  <div class="row">
									  	<div class="col-md-12">
										  	<label for="content">Content</label>
									    	<textarea name="content" class="form-control content_area"></textarea>
									  	</div>
									  </div>
									</div>
						     	</form>
					     </div>
					 </div>
				</div>
			</div>';
		return $html;
	}

	public static function getModalFooter()
	{
		$html = ' <div class="modal-footer">
			        <button type="button" class="btn btn-success pull-left submit_inputs" data-dismiss="modal">Insert</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>';
	    return $html;
	}

	public static function getIconLists()
	{
		$html = array();
		
		include_once 'helper/icons.php';

		$html[] = '<select class="form-control chosen" style="font-family: \'FontAwesome\'">';
			foreach ($icons['fontawesome'] as $icon => $content )
			{
				$html[] = '<option class="fa fa-'.$icon.'" value="'. $icon .'"> ' .$icon .'</option>';
			}
		$html[] = '</select>';

		return implode('', $html);
	}
}
