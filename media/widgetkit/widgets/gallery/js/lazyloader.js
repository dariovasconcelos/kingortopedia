/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

(function(){$widgetkit.lazyloaders["gallery-slider"]=function(b,a){var f=b.find(".slides:first"),d=f.children(),e=a.total_width=="auto"?b.width():a.total_width>b.width()?b.width():a.total_width,h=e/d.length-a.spacing,g=a.width,c=a.height;if(a.total_width=="auto"||a.total_width>=e)c=a.width/(e/2),g=a.width/c,c=a.height/c,d.css("background-size",g+"px "+c+"px");d.css({width:h,"margin-right":a.spacing});f.width(d.eq(0).width()*d.length*2);b.css({width:e,height:c});$widgetkit.load(WIDGETKIT_URL+"/widgets/gallery/js/slider.js").done(function(){b.galleryslider(a)})}})(jQuery);
