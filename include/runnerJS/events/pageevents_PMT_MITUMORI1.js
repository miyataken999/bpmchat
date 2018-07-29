





//	AJAX snippets
Runner.pages.ajaxEvents["PMT_MITUMORI1_ajax"] = function( pageObj, proxy, pageid, inlineRow, inlineObject ) { 
	var params = {}, 
		result = {}, 
		ret, reqParams,
		row = new Runner.AjaxRow( inlineRow ),
		before = function() {
			// Put your code here.
params["txt"] = "Hello";
row.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		},
		after = function() {
			// Put your code here.
var message = result["txt"] + " !!!";
row.setMessage(message);

		};
		
	ret = before.call( pageObj );
	if ( ret === false ) {
		return;
	}

	params["table"] = "PMT_MITUMORI1";
	
	reqParams = {
		params: JSON.stringify( params ), 
		keys: JSON.stringify( inlineRow.keys ), 
		event: "PMT_MITUMORI1_ajax"
	};
	
	$.post( Runner.getPageUrl("buttonhandler"), reqParams, function( _result ) {		
		// execute EventAfter code
		result = JSON.parse( _result );
		after.call( pageObj );
	});
}
