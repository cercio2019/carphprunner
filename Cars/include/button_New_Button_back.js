Runner.buttonEvents["New_Button_back"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button_back';
	
	if ( !pageObj.buttonEventBefore['New_Button_back'] ) {
		pageObj.buttonEventBefore['New_Button_back'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href="carscars_list.php";
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button_back'] ) {
		pageObj.buttonEventAfter['New_Button_back'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button_back"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button_back" + "_" + Runner.genId();
		
		// create object
		var button_New_Button_back = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button_back"
		});
		
		// init
		button_New_Button_back.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

