/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function(a){var c,e=widgetkitajax,h=a("#widgetkit").data("token");a('select[name="settings[style]"]').bind("change",function(){a("#form").trigger("submit")});var f=a("#finder").finder({url:e+"&task=dirs_gallery"}).delegate("a","click",function(){a("#finder li").removeClass("selected");c=a(this).parent().addClass("selected").data("path")});a("#gallery").delegate(".delete-photo","click",function(c){c.preventDefault();var b=a(this);confirm("Do you really want to delete "+b.data("path")+" ?")&&
a.post(e+"&task=delete_file_gallery",{file:b.data("path"),token:h},function(d){a.parseJSON(d).status?b.parent().fadeOut(300,function(){a().remove()}):alert("Couldn't delete "+b.data("path")+" !")})});a("a.create-folder").bind("click",function(i){i.preventDefault();var b=(c?c:"")+"/",d=prompt("Create new folder in: "+b,"");d!==null&&d!==""&&a.post(e+"&task=create_folder_gallery",{path:b+d,token:h},function(c){a.parseJSON(c).status?b=="/"?f.trigger("retrieve:finder").trigger("retrieve:finder"):f.find(".selected a").trigger("click").trigger("click"):
alert("Couldn't create "+d+" !")})});a("a.delete-folder").bind("click",function(i){i.preventDefault();if(c){var b=[];a('#form input[name="paths[]"]').each(function(){var d=a(this);d.val().indexOf(c)!=-1&&b.push(d.closest(".box"))});confirm("Do you really want to delete "+c+" ?")&&a.post(e+"&task=delete_folder_gallery",{path:c,token:h},function(d){a.parseJSON(d).status?(f.find(".selected").fadeOut(300,function(){a(this).remove();c=null}),b.length&&a.each(b,function(){a(this).fadeOut(300,function(){a(this).remove()})})):
alert("Couldn't delete "+c+" !")})}else alert("Please select a folder!")});a("button.add-folder").bind("click",function(e){e.preventDefault();var b;a.each(a('#form input[name="paths[]"]').serializeArray(),function(a,e){e.value==c&&(b=true)});c&&!b&&a("#gallery").trigger("add",[c])});a("#gallery").bind("add",function(c,b){var d=a(this),g=a('<div class="box"><div class="progress"></div><div class="deletable"></div><h3>'+b+'</h3><div class="content"></div></div>').appendTo(d).find(".content"),f=null,
k=null,j=false,l=function(){j||(g.children().remove(),j=true,a.post(e+"&task=files_gallery",{path:b},function(c){a.each(c,function(a,b){g.append('<div class="file"><div class="image"><img src="'+d.data("url")+b.path+'" class="size-auto"/></div><div class="filename">'+b.name+'</div><input type="text" name="captions['+b.path+']" placeholder="Enter caption here..." /><input type="text" name="links['+b.path+']" placeholder="Enter custom link here..." /> <button data-path="'+b.path+'" class="delete-photo"></button></div>')});
g.append('<input type="hidden" name="paths[]" value="'+b+'" />');a.support.ajaxupload&&g.append('<div class="dropinfo">Drop new images here to upload.</div>');a("input:text",d.trigger("update")).placeholder();j=false},"json"))};g.uploadOnDrag({action:e+"&task=upload_files_gallery",single:true,params:{path:b,token:h},loadstart:function(){f=g.find(".dropinfo");k=f.html('<div class="meter">&nbsp;</div>').find(".meter")},progress:function(a){k.css("width",String(a)+"%").html(String(parseInt(a))+"%")},
allcomplete:function(){l()}});l()});a("#gallery").delegate("#gallery > .box","delete",function(){a(this).fadeOut(300,function(){a(this).remove()})})});