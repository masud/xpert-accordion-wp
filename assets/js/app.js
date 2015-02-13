(function ($){
	
	// var init = function($el) {
 //    $('.chosen', $el).selectize({
 //        sortField: 'text'
 //    });
 //  };

	$(document).ready(function(){

//___Start for cloning Text Panel___//

		$('.action-new').on('click', function(e){
		// e.preventDetault();

		var cloned = $('.clonable').html();


		$('#repeatable').append( cloned ).eq(1);

		var randomId = Math.floor( Math.random() * 100) +1,
			newId = 'acc-' + randomId;

		cloned.find('#acc-1').attr('id', newId);
		cloned.find('[href=#acc-1]').attr('href', '#' + newId);
		// init( cloned );
		$('.chosen').chosen();
	});
		
//___End for Cloning Text Panel___//

//__Start for draggin Panel__//


		$( "#repeatable" ).sortable({      
       		 revert: true
    		});
     
   		 
//__End for draggin Panel__//


	});
// init(document.body);
//___Start Panel Remove___//
// $(document).on('click', '.action-remove', function(){
// 	//$('.panel').each(function(){

//       var panel = $(this).closest('.panel');
//       var panelnum = $('#repeatable').find('.panel').length;
//       var classCheck = $('.panel-default').attr('class');
//       if ( panelnum != 1 )
//       {
//       	confrimId = confirm("Are Your sure");
// 	    if(confrimId===true){
// 		 panel.remove();
// 		}
         
//       }else {
//       	alert("Hey Dude! You can't delete single item :)");
//       }
     
// });

//___End  Panel Remove___//


// $(document).on('change', '.chosen', function(){		
	
// 	var newIcon = $('i').attr('class');
// 	var newIconChange = $(this).val();

// 	if(newIcon!==newIconChange){
// 	$(this).closest('.panel').find('#ms_title_icon').removeClass(newIcon);
// 	$(this).closest('.panel').find('#ms_title_icon').addClass('fa fa-' + newIconChange);

// 	}

// });


// $(document).on('change', '.preset_select', function(){		
	
// 	var newIcon = $('#repeatable').attr('class');
// 	var newIconChange = $(this).val();

// 	if(newIcon!==newIconChange){

// 	$(this).next('#repeatable').removeClass(newIcon);
// 	$(this).next('#repeatable').addClass('panel-group ui-sortable ' + newIconChange);
// 	}

// });
//___Admin Style Change___//

//___Start Live change Title___//

// $(document).on('keyup', '.title', function(){		
// 	var newValue = $(this).val();
// 	$(this).closest('.panel').find('.panel-title > a  > .ms_title').text(newValue);
// });

//___End  Live change Title___//



//___Start Insert into Editor Panel___//	
	
// $(document).on('click','.submit_inputs',function(){
// 	var title = $('.title').val();
// 	var presets = $('.preset_select').val();
	

// 	//var descpription = $('.content_area').val();
// 	var acc ='';


// 	$('.panel').each(function(){

// 		var panel_title = $(this).find('.title').val(),
// 			panel_content = $(this).find('.content_area').val(),
// 			panel_icon = $(this).find('.chosen').val();
			
// 			acc += '[ms_acc_slide title="' + panel_title + '" icon="fa fa-' + panel_icon + '"]' + panel_content + '[/ms_acc_slide]';

// 	});

	

// 	wp.media.editor.insert('[ms_acc preset="'+ presets +'" ]' + acc + '[/ms_acc]');

	
// });

})(jQuery);