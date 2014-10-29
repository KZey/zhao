$(function() {
$(".tab1").click(function(){
						  $(".is-model-table a").removeClass("is-model-cur");
						   $(this).addClass("is-model-cur");
							 $(".is-model-pro").css("display","block");
							 $(".is-model-pol").css("display","none");
							 $(".is-model-press").css("display","none");
							var totalPanels	= $(".is-model-pro .scrollContainer").children().size();
		
	var regWidth			= $(".is-model-pro .panel").css("width");
	var regImgWidth			= $(".is-model-pro .panel img").css("width");
	var regTitleSize		= $(".is-model-pro .panel h2").css("font-size");
	var regParSize			= $(".is-model-pro .panel p").css("font-size");
	//var regMargintop			= $(".panel").css("margin-top");
	
	var movingDistance	    = 290;
	
	var curWidth			= 339;
	
	var curImgWidth			= 326;    
	var curTitleSize		= "20px"; 
	var curParSize			= "15px"; 

	var $panels				= $('.is-model-pro #slider .scrollContainer > div');
	var $container			= $('.is-model-pro #slider .scrollContainer');

	$panels.css({'float' : 'left','position' : 'relative'});
    
	$(".is-model-pro #slider").data("currentlyMoving", false);

	$container
		.css('width', ($panels[0].offsetWidth * $panels.length) + 100 )
		.css('left', "-350px"); /* for middle image */


	var scroll = $('.is-model-pro #slider .scroll').css('overflow', 'hidden');

	function returnToNormal(element) {
		$(element)
			.animate({ width: regWidth })
			.find("img")
			.animate({ width: regImgWidth,marginTop:"0px"})
		    .end()
			.find("h2")
			.animate({ fontSize: regTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: regParSize });
	};
	
	function growBigger(element) {
		$(element)
			.animate({ width: curWidth })
			.find("img")
			.animate({ width: curImgWidth,marginTop:"0px" })
		    .end()
			.find("h2")
			.animate({ fontSize: curTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: curParSize });
	}
	
	//direction true = right, false = left
	function change20(direction) {
		
		$(".is-model-pro #panel_"+curPanel).css("top","35px");
	 $(".is-model-pro #panel_"+(curPanel+1)).css("top","0");
	$(".is-model-pro #panel_"+(curPanel-1)).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel+2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-pro #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-pro #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-pro .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-pro .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-pro #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-pro #panel_"+curPanel);
			growBigger(".is-model-pro #panel_"+next);
			
			curPanel = next;
			
			
		}
	}
	
	function change2(direction) {
	$(".is-model-pro #panel_"+curPanel).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel-1)).css("top","0");
	$(".is-model-pro #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel-2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-pro #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-pro #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-pro .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-pro .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {

					$(".is-model-pro #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-pro #panel_"+curPanel);
			growBigger(".is-model-pro #panel_"+next);
			
			curPanel = next;
			
		}
	}
	
	
	// Set up "Current" panel and next and prev
	growBigger(".is-model-pro #panel_3");	
	var curPanel = 3;
	//alert("11");
	
	$(".is-model-pro #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel-1)).css("top","35px");
	
	//when the left/right arrows are clicked
	$(".is-model-pro .right").click(function(){ change20(true); });	
	$(".is-model-pro .left").click(function(){ change2(false); });

							
							 })  


	
	
	
   $(".tab2").click(function(){
							  $(".is-model-table a").removeClass("is-model-cur");
						   $(this).addClass("is-model-cur");
							 $(".is-model-pro").css("display","none");
							 $(".is-model-pol").css("display","block");
							 $(".is-model-press").css("display","none");
							 
							 var totalPanels	= $(".is-model-pol .scrollContainer").children().size();
		
	var regWidth			= $(".is-model-pol .panel").css("width");
	var regImgWidth			= $(".is-model-pol .panel img").css("width");
	var regTitleSize		= $(".is-model-pol .panel h2").css("font-size");
	var regParSize			= $(".is-model-pol .panel p").css("font-size");
	//var regMargintop			= $(".panel").css("margin-top");
	
	var movingDistance	    = 290;
	
	var curWidth			= 339;
	
	var curImgWidth			= 326;    
	var curTitleSize		= "20px"; 
	var curParSize			= "15px"; 

	var $panels				= $('.is-model-pol #slider .scrollContainer > div');
	var $container			= $('.is-model-pol #slider .scrollContainer');

	$panels.css({'float' : 'left','position' : 'relative'});
    
	$(".is-model-pol #slider").data("currentlyMoving", false);

	$container
		.css('width', ($panels[0].offsetWidth * $panels.length) + 100 )
		.css('left', "-350px"); /* for middle image */


	var scroll = $('.is-model-pol #slider .scroll').css('overflow', 'hidden');

	function returnToNormal(element) {
		$(element)
			.animate({ width: regWidth })
			.find("img")
			.animate({ width: regImgWidth,marginTop:"0px"})
		    .end()
			.find("h2")
			.animate({ fontSize: regTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: regParSize });
	};
	
	function growBigger(element) {
		$(element)
			.animate({ width: curWidth })
			.find("img")
			.animate({ width: curImgWidth,marginTop:"0px" })
		    .end()
			.find("h2")
			.animate({ fontSize: curTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: curParSize });
	}
	
	//direction true = right, false = left
	function change30(direction) {
		
		$(".is-model-pol #panel_"+curPanel).css("top","35px");
	 $(".is-model-pol #panel_"+(curPanel+1)).css("top","0");
	$(".is-model-pol #panel_"+(curPanel-1)).css("top","35px");
	$(".is-model-pol #panel_"+(curPanel+2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-pol #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-pol #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-pol .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-pol .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-pol #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-pol #panel_"+curPanel);
			growBigger(".is-model-pol #panel_"+next);
			
			curPanel = next;
			
			
		}
	}
	
	function change3(direction) {
		
		$(".is-model-pol #panel_"+curPanel).css("top","35px");
	 $(".is-model-pol #panel_"+(curPanel-1)).css("top","0");
	$(".is-model-pol #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-pol #panel_"+(curPanel-2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-pol #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-pol #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-pol .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-pol .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-pol #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-pol #panel_"+curPanel);
			growBigger(".is-model-pol #panel_"+next);
			
			curPanel = next;
			
		}
	}
	
	
	// Set up "Current" panel and next and prev
	growBigger(".is-model-pol #panel_3");	
	var curPanel = 3;
	//alert("11");
	
	$(".is-model-pol #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-pol #panel_"+(curPanel-1)).css("top","35px");
	
	//when the left/right arrows are clicked
	$(".is-model-pol .right").click(function(){ change30(true); });	
	$(".is-model-pol .left").click(function(){ change3(false); });

							 })
   
   
   $(".tab3").click(function(){
							  $(".is-model-table a").removeClass("is-model-cur");
						   $(this).addClass("is-model-cur");
							 $(".is-model-pro").css("display","none");
							 $(".is-model-pol").css("display","none");
							 $(".is-model-press").css("display","block");
							 
							 var totalPanels	= $(".is-model-press .scrollContainer").children().size();
		
	var regWidth			= $(".is-model-press .panel").css("width");
	var regImgWidth			= $(".is-model-press .panel img").css("width");
	var regTitleSize		= $(".is-model-press .panel h2").css("font-size");
	var regParSize			= $(".is-model-press .panel p").css("font-size");
	//var regMargintop			= $(".panel").css("margin-top");
	
	var movingDistance	    = 290;
	
	var curWidth			= 339;
	
	var curImgWidth			= 326;    
	var curTitleSize		= "20px"; 
	var curParSize			= "15px"; 

	var $panels				= $('.is-model-press #slider .scrollContainer > div');
	var $container			= $('.is-model-press #slider .scrollContainer');

	$panels.css({'float' : 'left','position' : 'relative'});
    
	$(".is-model-press #slider").data("currentlyMoving", false);

	$container
		.css('width', ($panels[0].offsetWidth * $panels.length) + 100 )
		.css('left', "-350px"); /* for middle image */


	var scroll = $('.is-model-press #slider .scroll').css('overflow', 'hidden');

	function returnToNormal(element) {
		$(element)
			.animate({ width: regWidth })
			.find("img")
			.animate({ width: regImgWidth,marginTop:"0px"})
		    .end()
			.find("h2")
			.animate({ fontSize: regTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: regParSize });
	};
	
	function growBigger(element) {
		$(element)
			.animate({ width: curWidth })
			.find("img")
			.animate({ width: curImgWidth,marginTop:"0px" })
		    .end()
			.find("h2")
			.animate({ fontSize: curTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: curParSize });
	}
	
	//direction true = right, false = left
	function change40(direction) {
		
		$(".is-model-press #panel_"+curPanel).css("top","35px");
	 $(".is-model-press #panel_"+(curPanel+1)).css("top","0");
	$(".is-model-press #panel_"+(curPanel-1)).css("top","35px");
	$(".is-model-press #panel_"+(curPanel+2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-press #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-press #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-press .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-press .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-press #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-press #panel_"+curPanel);
			growBigger(".is-model-press #panel_"+next);
			
			curPanel = next;
			
			
		}
	}
	
	function change4(direction) {
		
		$(".is-model-press #panel_"+curPanel).css("top","35px");
	 $(".is-model-press #panel_"+(curPanel-1)).css("top","0");
	$(".is-model-press #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-press #panel_"+(curPanel-2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-press #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-press #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-press .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-press .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-press #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-press #panel_"+curPanel);
			growBigger(".is-model-press #panel_"+next);
			
			curPanel = next;
			
		}
	}
	
	
	// Set up "Current" panel and next and prev
	growBigger(".is-model-press #panel_3");	
	var curPanel = 3;
	//alert("11");
	
	$(".is-model-press #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-press #panel_"+(curPanel-1)).css("top","35px");
	
	//when the left/right arrows are clicked
	$(".is-model-press .right").click(function(){ change40(true); });	
	$(".is-model-press .left").click(function(){ change4(false); });

	
	
							 })
   
   
   
	
	var totalPanels			= $(".is-model-pro .scrollContainer").children().size();
		
	var regWidth			= $(".is-model-pro .panel").css("width");
	var regImgWidth			= $(".is-model-pro .panel img").css("width");
	var regTitleSize		= $(".is-model-pro .panel h2").css("font-size");
	var regParSize			= $(".is-model-pro .panel p").css("font-size");
	//var regMargintop			= $(".panel").css("margin-top");
	
	var movingDistance	    = 290;
	
	var curWidth			= 339;
	
	var curImgWidth			= 326;    
	var curTitleSize		= "20px"; 
	var curParSize			= "15px"; 

	var $panels				= $('.is-model-pro #slider .scrollContainer > div');
	var $container			= $('.is-model-pro #slider .scrollContainer');

	$panels.css({'float' : 'left','position' : 'relative'});
    
	$(".is-model-pro #slider").data("currentlyMoving", false);

	$container
		.css('width', ($panels[0].offsetWidth * $panels.length) + 100 )
		.css('left', "-350px"); /* for middle image */


	var scroll = $('.is-model-pro #slider .scroll').css('overflow', 'hidden');

	function returnToNormal(element) {
		$(element)
			.animate({ width: regWidth })
			.find("img")
			.animate({ width: regImgWidth,marginTop:"0px"})
		    .end()
			.find("h2")
			.animate({ fontSize: regTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: regParSize });
	};
	
	function growBigger(element) {
		$(element)
			.animate({ width: curWidth })
			.find("img")
			.animate({ width: curImgWidth,marginTop:"0px" })
		    .end()
			.find("h2")
			.animate({ fontSize: curTitleSize })
			.end()
			.find("p")
			.animate({ fontSize: curParSize });
	}
	
	//direction true = right, false = left
	function change(direction) {
		
		$(".is-model-pro #panel_"+curPanel).css("top","35px");
	 $(".is-model-pro #panel_"+(curPanel+1)).css("top","0");
	$(".is-model-pro #panel_"+(curPanel-1)).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel+2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-pro #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-pro #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-pro .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-pro .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-pro #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-pro #panel_"+curPanel);
			growBigger(".is-model-pro #panel_"+next);
			
			curPanel = next;
			
			
		}
	}
	
	function change1(direction) {
		
		$(".is-model-pro #panel_"+curPanel).css("top","35px");
	 $(".is-model-pro #panel_"+(curPanel-1)).css("top","0");
	$(".is-model-pro #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel-2)).css("top","35px");
	
	    //if not at the first or last panel
		if((direction && !(curPanel < totalPanels)) || (!direction && (curPanel <= 1))) { return false; }	
       
        //if not currently moving
        if (($(".is-model-pro #slider").data("currentlyMoving") == false)) {
            
			$(".is-model-pro #slider").data("currentlyMoving", true);
			
			var next         = direction ? curPanel + 1 : curPanel - 1;
			var leftValue    = $(".is-model-pro .scrollContainer").css("left");
			var movement	 = direction ? parseFloat(leftValue, 10) - movingDistance : parseFloat(leftValue, 10) + movingDistance;
		
			$(".is-model-pro .scrollContainer")
				.stop()
				.animate({
					"left": movement
				}, function() {
					$(".is-model-pro #slider").data("currentlyMoving", false);
				});
			
			returnToNormal(".is-model-pro #panel_"+curPanel);
			growBigger(".is-model-pro #panel_"+next);
			
			curPanel = next;
			
		}
	}
	
	
	// Set up "Current" panel and next and prev
	growBigger(".is-model-pro #panel_3");	
	var curPanel = 3;
	//alert("11");
	
	$(".is-model-pro #panel_"+(curPanel+1)).css("top","35px");
	$(".is-model-pro #panel_"+(curPanel-1)).css("top","35px");
	
	//when the left/right arrows are clicked
	$(".is-model-pro .right").click(function(){ change(true); });	
	$(".is-model-pro .left").click(function(){ change1(false); });





	$(window).keydown(function(event){
	  switch (event.keyCode) {
			case 13: //enter
				$(".is-model-pro .right").click();
				break;
			case 32: //space
				$(".is-model-pro .right").click();
				break;
	    case 37: //left arrow
				$(".is-model-pro .left").click();
				break;
			case 39: //right arrow
				$(".is-model-pro .right").click();
				break;
	  }
	});
	
});