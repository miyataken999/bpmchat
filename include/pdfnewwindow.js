/**
 *  Pdf constructor
 */
Pdf = function() {
	this.pdfbuilt = 0;
	
	/**
	 * RunPDF
	 * Create IFrame and load page to it (start pdf creation) 
	 */
	this.RunPDF = function() {
		var paramsStr = window.location.href,
			params = {}, url,
			$el = $('<iframe></iframe>').css({
				position: 'absolute',
				left: '-1000px'
			}).appendTo('body');
			
		/*if ( paramsStr.substr(paramsStr.length - 1) == '#') {
			paramsStr = paramsStr.substr(0, paramsStr.length - 1);
		}*/	
		paramsStr.replace(/[?&]+([^=&]+)=([^&]*)/gi, function( match, key, value ) {
			params[ key ] = value;
		});
			
		url = decodeURIComponent( params["url"] );
		$el.attr('src', url + ( url.indexOf('?') < 0 ? '?' : '&' ) 
			+ 'pdf=1&width=' + params['width'] + '&height=' + params['height'] + '&rndval=' + Math.random() );
		
		//	display progress div	
		if ( !$('.progress_bar').length ) {
			this.SetContent('<p>' + Runner.lang.constants.TEXT_PDF_BUILD1 
				+ '<br><span style="display:block;background:white;border:solid black 1px;width:100px;height:20px;">'
					+ '<span class=progress_bar style="display:block;background:#6080FF;width:1px;height:100%"></span>'
				+ '</span><br>'
				+ '<span class=progress_percent></span>% '
			+ Runner.lang.constants.TEXT_PDF_BUILD2 + '</p>');
		}
		this.pdfbuilt = 0;
	};

	/**
	 * SetProgress
	 * Calculate progress and display it on the progress bar (using in file, loaded in IFrame)
	 * @param {number} total amount of data
	 * @param {number} progress - amount of processed data
	 */
	this.SetProgress = function( total, progress ) {
		if ( isNaN(total) || isNaN(progress) ) {
			return;
		}
		
		var count = Math.floor(progress * 100 / total);
		count = count > 100 ? 100 : count;
		
		$('.progress_bar').css('width', count + 'px');
		$('.progress_percent').html( count );
	} 
	
	/**
	 * SetContent
	 * @param {string} content
	 * Set content of pdf block (using in file, loaded in IFrame)
	 */
	this.SetContent = function( content ) {
		var $printPageCont = $('[class*="printpdf"]'),
			$viewPageCont = $('[class*="viewpdf"]');
			
		if ( $printPageCont.length ) {
			$printPageCont.html( content );
		}
		if ( $viewPageCont.length ) {
			$viewPageCont.html( content );
		}
	}
};

Runner.Pdf = new Pdf();
Runner.Pdf.RunPDF();