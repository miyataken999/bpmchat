


	

Runner.pages.PageSettings.addPageEvent('retblresults', Runner.pages.constants.PAGE_SEARCH, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('retblresults', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	    $("td[id^=Photo]").each(function()
{
	if($(this).find("img")[0])
	{
		if($("#imgMainPhoto").attr("src").indexOf("no_image.gif") != -1)
			$("#imgMainPhoto").attr("src",$(this).find("img")[0].src);
		$(this).bind("mouseover", function(e){
			$("#imgMainPhoto").attr("src",$(this).find("img")[0].src);
		});
	}
});

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
