/*
 * Thumbshot Popups script for Thumbshots.RU
 * Powered by jQuery (http://www.jquery.com)
 * 
 * Author: Sonorth Corp. - {@link http://www.sonorth.com/}
 * License: Creative Commons Attribution-ShareAlike 3.0 Unported
 * License info: {@link http://creativecommons.org/licenses/by-sa/3.0/}
 *
 * Version: 1.4
 * Date: 9/02/2010
 */
function ThumbshotPopups(tclass, target) {
	if (!target) {
		// window.location.host.replace(/\w+\./,'')
		target = jQuery("a[href^=\'http:\']").not("[class~=\'thumbshot-no-popup\']").not("[href*=\'" + window.location.host + "\']").get();
		target = target.concat(jQuery("a.thumbshot-popup[href^=\'http:\']").get());
		target = jQuery.unique(target);
	}
	if (target.length < 1) return;
	var img_height = 210;
	var host = 'http://get.thumbshots.ru/';
	var params = new Array();
	params['size'] = 'L'; // XS, S, M, L

	jQuery('<style type="text/css"> .' + tclass + ' {position:absolute;left:-20000px;display:none;z-index:1001;border:1px solid #ccc; background:#333; padding:2px;color:#fff} .' + tclass + ' img {margin:0;padding:0;border:none} </style>').appendTo('head');
	var query = [];
	for (var v in params) {
		if (typeof params[v] != 'function') {
			query.push(encodeURIComponent(v) + '=' + encodeURIComponent(params[v]))
		}
	}
	jQuery(target).each(function (i) {
		jQuery(this).hover(function () {
			var src = host + "?" + query.join('&') + "&url=" + jQuery(this).attr('href');
			jQuery("body").append("<div class='" + tclass + "' id='" + tclass + i + "'><img src='" + src + "' alt='Загрузка…' /></div>");
			jQuery("#" + tclass + i).css({
				opacity: 1,
				display: "none"
			}).fadeIn(50)
		}, function () {
			jQuery("#" + tclass + i).fadeOut(50)
		}).mousemove(function (kmouse) {
			x = kmouse.pageX;
			y = kmouse.pageY - 50 - img_height;
			jQuery("#" + tclass + i).css({ left: x, top: y });
		})
	})
}

var jQueryScriptOutputted = false;

function initjQuery() {
	if (typeof(jQuery) == 'undefined') {
		if (!jQueryScriptOutputted) {
			jQueryScriptOutputted = true;
			document.write("<scr" + "ipt type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></scr" + "ipt>")
		}
		setTimeout("initjQuery()", 50);
	}
	else {
		jQuery.noConflict();
		jQuery(document).ready(function () {
			ThumbshotPopups( 'ThumbshotPopups', jQuery("a[rel~=external]") );
		})
	}
}

initjQuery();