$(document).ready(function(){
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel');
		var popURL = $(this).attr('href');
				
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1];

		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) });
		
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=50)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	$('a.close, #fade').live('click', function() {
	  	$('#fade, .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	});
		return false;
	});
});

	
$(document).ready(function(){
	$('#topmenu li.sublnk').each(function(){
		var ul = $(this).children("ul").hide().css({visibility:"visible",opacity:0.1});
		var t = ul.css("top").match(/\d+/)[0];
		var show = function(){ ul.stop().show().css({top:(t-12)}).animate({top:13,opacity:1},180); };
		var hide = function(){ ul.stop().animate({top:"+=10",opacity:0.1},180,function(){ ul.hide(); }); };
		$(this).mouseenter(show).mouseleave(hide);
		$(this).children("ul").css({marginTop:28,opacity:80});
	});
});


var ddaccordion={
	contentclassname:{},
	expandone:function(headerclass, selected){
		this.toggleone(headerclass, selected, "expand")
	},

	collapseone:function(headerclass, selected){
		this.toggleone(headerclass, selected, "collapse")
	},

	expandall:function(headerclass){
		var $=jQuery
		var $headers=$('.'+headerclass)
		$('.'+this.contentclassname[headerclass]+':hidden').each(function(){
			$headers.eq(parseInt($(this).attr('contentindex'))).trigger("evt_accordion")
		})
	},

	collapseall:function(headerclass){ 
		var $=jQuery
		var $headers=$('.'+headerclass)
		$('.'+this.contentclassname[headerclass]+':visible').each(function(){
			$headers.eq(parseInt($(this).attr('contentindex'))).trigger("evt_accordion")
		})
	},

	toggleone:function(headerclass, selected, optstate){
		var $=jQuery
		var $targetHeader=$('.'+headerclass).eq(selected)
		var $subcontent=$('.'+this.contentclassname[headerclass]).eq(selected)
		if (typeof optstate=="undefined" || optstate=="expand" && $subcontent.is(":hidden") || optstate=="collapse" && $subcontent.is(":visible"))
			$targetHeader.trigger("evt_accordion")
	},

	expandit:function($targetHeader, $targetContent, config, useractivated, directclick){
		this.transformHeader($targetHeader, config, "expand")
		$targetContent.slideDown(config.animatespeed, function(){
			config.onopenclose($targetHeader.get(0), parseInt($targetHeader.attr('headerindex')), $targetContent.css('display'), useractivated)
			if (config.postreveal=="gotourl" && directclick){ 
				var targetLink=($targetHeader.is("a"))? $targetHeader.get(0) : $targetHeader.find('a:eq(0)').get(0)
				if (targetLink) //if this header is a link
					setTimeout(function(){location=targetLink.href}, 200) 
			}
		})
	},

	collapseit:function($targetHeader, $targetContent, config, isuseractivated){
		this.transformHeader($targetHeader, config, "collapse")
		$targetContent.slideUp(config.animatespeed, function(){config.onopenclose($targetHeader.get(0), parseInt($targetHeader.attr('headerindex')), $targetContent.css('display'), isuseractivated)})
	},

	transformHeader:function($targetHeader, config, state){
		$targetHeader.addClass((state=="expand")? config.cssclass.expand : config.cssclass.collapse) 
		.removeClass((state=="expand")? config.cssclass.collapse : config.cssclass.expand)
		if (config.htmlsetting.location=='src'){ 
			$targetHeader=($targetHeader.is("img"))? $targetHeader : $targetHeader.find('img').eq(0)
			$targetHeader.attr('src', (state=="expand")? config.htmlsetting.expand : config.htmlsetting.collapse)
		}
		else if (config.htmlsetting.location=="prefix")
			$targetHeader.find('.accordprefix').html((state=="expand")? config.htmlsetting.expand : config.htmlsetting.collapse)
		else if (config.htmlsetting.location=="suffix")
			$targetHeader.find('.accordsuffix').html((state=="expand")? config.htmlsetting.expand : config.htmlsetting.collapse)
	},

	urlparamselect:function(headerclass){
		var result=window.location.search.match(new RegExp(headerclass+"=((\\d+)(,(\\d+))*)", "i")) 
		if (result!=null)
			result=RegExp.$1.split(',')
		return result 
	},

	getCookie:function(Name){ 
		var re=new RegExp(Name+"=[^;]+", "i") //construct RE to search for target name/value pair
		if (document.cookie.match(re)) //if cookie found
			return document.cookie.match(re)[0].split("=")[1] //return its value
		return null
	},

	setCookie:function(name, value){
		document.cookie = name + "=" + value + "; path=/"
	},

	init:function(config){
	document.write('<style type="text/css">\n')
	document.write('.'+config.contentclass+'{display: none}\n') 
	document.write('<\/style>')
	jQuery(document).ready(function($){
		ddaccordion.urlparamselect(config.headerclass)
		var persistedheaders=ddaccordion.getCookie(config.headerclass)
		ddaccordion.contentclassname[config.headerclass]=config.contentclass 
		config.cssclass={collapse: config.toggleclass[0], expand: config.toggleclass[1]}
		config.revealtype=config.revealtype || "click"
		config.revealtype=config.revealtype.replace(/mouseover/i, "mouseenter")
		if (config.revealtype=="clickgo"){
			config.postreveal="gotourl" 
			config.revealtype="click"
		}
		if (typeof config.togglehtml=="undefined")
			config.htmlsetting={location: "none"}
		else
			config.htmlsetting={location: config.togglehtml[0], collapse: config.togglehtml[1], expand: config.togglehtml[2]}
		config.oninit=(typeof config.oninit=="undefined")? function(){} : config.oninit
		config.onopenclose=(typeof config.onopenclose=="undefined")? function(){} : config.onopenclose
		var lastexpanded={}
		var expandedindices=ddaccordion.urlparamselect(config.headerclass) || ((config.persiststate && persistedheaders!=null)? persistedheaders : config.defaultexpanded)
		if (typeof expandedindices=='string')
			expandedindices=expandedindices.replace(/c/ig, '').split(',')
		var $subcontents=$('.'+config["contentclass"])
		if (expandedindices.length==1 && expandedindices[0]=="-1")
			expandedindices=[]
		if (config["collapseprev"] && expandedindices.length>1)
			expandedindices=[expandedindices.pop()]
		if (config["onemustopen"] && expandedindices.length==0)
			expandedindices=[0]
		$('.'+config["headerclass"]).each(function(index){
			if (/(prefix)|(suffix)/i.test(config.htmlsetting.location) && $(this).html()!=""){
				$('<span class="accordprefix"></span>').prependTo(this)
				$('<span class="accordsuffix"></span>').appendTo(this)
			}
			$(this).attr('headerindex', index+'h')
			$subcontents.eq(index).attr('contentindex', index+'c')
			var $subcontent=$subcontents.eq(index)
			var needle=(typeof expandedindices[0]=="number")? index : index+''
			if (jQuery.inArray(needle, expandedindices)!=-1){
				if (config.animatedefault==false)
					$subcontent.show()
				ddaccordion.expandit($(this), $subcontent, config, false)
				lastexpanded={$header:$(this), $content:$subcontent}
			}
			else{
				$subcontent.hide()
				config.onopenclose($(this).get(0), parseInt($(this).attr('headerindex')), $subcontent.css('display'), false)
				ddaccordion.transformHeader($(this), config, "collapse")
			}
		})
		$('.'+config["headerclass"]).bind("evt_accordion", function(e, isdirectclick){
				var $subcontent=$subcontents.eq(parseInt($(this).attr('headerindex')))
				if ($subcontent.css('display')=="none"){
					ddaccordion.expandit($(this), $subcontent, config, true, isdirectclick)
					if (config["collapseprev"] && lastexpanded.$header && $(this).get(0)!=lastexpanded.$header.get(0)){
						ddaccordion.collapseit(lastexpanded.$header, lastexpanded.$content, config, true)
					}
					lastexpanded={$header:$(this), $content:$subcontent}
				}
				else if (!config["onemustopen"] || config["onemustopen"] && lastexpanded.$header && $(this).get(0)!=lastexpanded.$header.get(0)){
					ddaccordion.collapseit($(this), $subcontent, config, true)
				}
 		})
		$('.'+config["headerclass"]).bind(config.revealtype, function(){
			if (config.revealtype=="mouseenter"){
				clearTimeout(config.revealdelay)
				var headerindex=parseInt($(this).attr("headerindex"))
				config.revealdelay=setTimeout(function(){ddaccordion.expandone(config["headerclass"], headerindex)}, config.mouseoverdelay || 0)
			}
			else{
				$(this).trigger("evt_accordion", [true])
				return false
			}
		})
		$('.'+config["headerclass"]).bind("mouseleave", function(){
			clearTimeout(config.revealdelay)
		})
		config.oninit($('.'+config["headerclass"]).get(), expandedindices)
		$(window).bind('unload', function(){
			$('.'+config["headerclass"]).unbind()
			var expandedindices=[]
			$('.'+config["contentclass"]+":visible").each(function(index){
				expandedindices.push($(this).attr('contentindex'))
			})
			if (config.persiststate==true && $('.'+config["headerclass"]).length>0){
				expandedindices=(expandedindices.length==0)? '-1c' : expandedindices
				ddaccordion.setCookie(config.headerclass, expandedindices)
			}
		})
	})
	}
}
ddaccordion.init({
	headerclass: "sublink",
	contentclass: "submenu",
	revealtype: "click",
	mouseoverdelay: 200,
	collapseprev: false,
	defaultexpanded: [],
	onemustopen: false,
	animatedefault: false,
	persiststate: false,
	toggleclass: ["closed", "opened"],
	togglehtml: ["none", "", ""],
	animatespeed: "fast",
	oninit:function(expandedindices){
	},
	onopenclose:function(header, index, state, isuseractivated){
	}
})




$(document).ready(function(){ 
	    $(function () { 
	        $(window).scroll(function () { 
	            if ($(this).scrollTop() > 100) { 
	                $('#up').fadeIn(); 
	            } else { 
	                $('#up').fadeOut(); 
	            } 
	        }); 
	        $('#up').click(function () { 
	            $('body,html').animate({ 
	                scrollTop: 0 
	            }, 800); 
	            return false; 
	        }); 
	    }); 
});