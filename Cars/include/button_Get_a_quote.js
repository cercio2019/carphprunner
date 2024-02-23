Runner.buttonEvents["Get_a_quote"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Get_a_quote';
	
	if ( !pageObj.buttonEventBefore['Get_a_quote'] ) {
		pageObj.buttonEventBefore['Get_a_quote'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Get_a_quote'] ) {
		pageObj.buttonEventAfter['Get_a_quote'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var win = Runner.displayPopup( {
 url: 'carsform_add.php?editid1='+result["id"],
 width: 850,
 height: 700,
 header: 'Get a quote'
});

		}
	}
	
	$('a[id="Get_a_quote"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Get_a_quote" + "_" + Runner.genId();
		
		// create object
		var button_Get_a_quote = new Runner.form.Button({
			id: this.id ,
			btnName: "Get_a_quote"
		});
		
		// init
		button_Get_a_quote.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

