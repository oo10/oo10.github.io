var userMenuTimeOut=null;
jQuery(function($){
	if($(".slide-pic").length>0)
	{
		var defaultOpts = { interval: 5000, fadeInTime: 300, fadeOutTime: 200 };
		var _titles = $("ul.slide-txt li");
		var _titles_bg = $("ul.op li");
		var _bodies = $("ul.slide-pic li");
		var _count = _titles.length;
		var _current = 0;
		var _intervalID = null;
		var stop = function() { window.clearInterval(_intervalID); };
		var slide = function(opts) {
			if (opts) {
				_current = opts.current || 0;
			} else {
				_current = (_current >= (_count - 1)) ? 0 : (++_current);
			};
			_bodies.filter(":visible").fadeOut(defaultOpts.fadeOutTime, function() {
				_bodies.eq(_current).fadeIn(defaultOpts.fadeInTime);
				_bodies.removeClass("cur").eq(_current).addClass("cur");
			});
			_titles.removeClass("cur").eq(_current).addClass("cur");
			_titles_bg.removeClass("cur").eq(_current).addClass("cur");
		}; 
		var go = function() {
			stop();
			_intervalID = window.setInterval(function() { slide(); }, defaultOpts.interval);
		}; 
		var itemMouseOver = function(target, items) {
			stop();
			var i = $.inArray(target, items);
			slide({ current: i });
		}; 
		_titles.hover(function() { if($(this).attr('class')!='cur'){itemMouseOver(this, _titles); }else{stop();}}, go);
		_bodies.hover(stop, go);
		go();
	}
	

	
	$("#tuangou1").mouseover(function(){
		$(this).addClass("on");
		$("#tuangou2").removeClass("on");
		$("#tuangoushow1").show();					  
		$("#tuangoushow2").hide();					  
	});
	$("#tuangou2").mouseover(function(){
		$(this).addClass("on");
		$("#tuangou1").removeClass("on");
		$("#tuangoushow2").show();					  
		$("#tuangoushow1").hide();					  
	});
	
	$(".Ant-FloatClass").hover(function(){
		$(".Select").show();
	},function(){
		$(".Select").hide();
	});
	$(".Ant-ul").find(".Ant-li").each(function(){
		$(this).hover(function(){
			$(this).find('.Ant-Lower').show();
			$(this).find('.Ant-A').addClass("current");
		},function(){
			$(this).find('.Ant-Lower').hide();
			$(this).find('.Ant-A').removeClass("current");
		});
	});
	$(".AntCategories").find(".li").each(function(){
		$(this).mouseover(function(){
			$(this).addClass("Ant-li");
		});
		$(this).mouseout(function(){
			$(this).removeClass("Ant-li");
		});
	});
	$("#cataloglast").click(function(){
		var y=$("#cataloglastShow").offset().top ;
		$(document.documentElement).animate({"scrollTop": y}, {duration:"slow"});							 
	});								 
	
	
	
	

	$(".Ant-UpdateQuantity").click(function(){
		$(".Ant-ShoppingCart-01").find("#ordertr").each(function(){
			var obj=$(this);		
			//alert("/public/ajax.aspx?action=updateshoporder&aa="+obj.find("#text").val()+"&id="+obj.find("#text").attr("rel"));
			$.ajax({
			  url: "/public/ajax.aspx?action=updateshoporder&aa="+obj.find("#text").val()+"&id="+obj.find("#text").attr("rel"),
			  cache: false,
			  success:function(data)
			  {
				  if(data!=0)
				  {
					alert(data);  
					return false;
				  }
			  }
		   });
		});
		//window.location.href=window.location.href;
	});

	$(".Ant-ShoppingCart-01").find("#ordertr").each(function(){
		var obj=$(this);
		obj.find('#delete').click(function(){
			if(confirm(""))
			{
				$.ajax({
				  url: "/public/ajax.aspx?action=deleteshoptoorder&id="+obj.find("#text").attr("rel"),
				  cache: false,
				  success:function(data)
				  {
					  window.location.href=window.location.href;
				  }
			   });
		   }
		});
		
		obj.find('#Update').click(function(){
			var aa=obj.find("#text").val();
			if(!checknumber(aa))
			{
				alert("");	
				return false;
			}
			else
			{
				$.ajax({
				  url: "/public/ajax.aspx?action=updateshoporder&aa="+aa+"&id="+obj.find("#text").attr("rel"),
				  cache: false,
				  success:function(data)
				  {
					  if(data==0)
					  {
						window.location.href=window.location.href;
					  }
					  else{
						alert(data);  
					  }
				  }
			   });
			}
		});
	});
	
	if($("#formordersubmit").length>0)
	{
		$.formValidator.initConfig({formid:"formordersubmit",errorfocus:false,onerror:function(msg){},onsuccess:function(){
			$("#querengorder").attr("disabled", true);
			var curl="../public/ajax.aspx?action=addcompanyorder&OrderMan="+escape($("#txtOrderMan").val());
			curl +="&OrderAddress="+escape($("#txtOrderAddress").val())+"&OrderCode="+escape($("#txtOrderCode").val())+"&OrderTel="+escape($("#txtOrderTel").val())+"&OrderMark="+escape($("#txtOrderMark").val())+"&OrderPeisong="+$("input[name='txtOrderPeisong']:checked").val();
			$.ajax({
				  url: curl,
				  cache: false,
				  success:function(data)
				  {
						var re = /^[1-9]+[0-9]*]*$/;   // 整数
						if (re.test(data))
						{
							window.location.href="SuccesOrder.aspx?id="+data;
						}
						else{
							alert(data);
							$("#querengorder").attr("disabled", false);
						}
				  }
			});
			return false;
		}});
		$.formValidator.getInitConfig("1").wideword = true;
		
		$("#txtOrderMan").formValidator({onshow:"",onfocus:""}).functionValidator({
			fun:function(val,elem){
				var tt= 0;
				if($("#txtOrderPeisong").length>0)
					tt = $("input[name='txtOrderPeisong']:checked").val();
				if( ( val.length>1 && val.length<15 ) ){
					return true;
				}else{
					return ""
				}
			}
		});
		$("#txtOrderTel").formValidator({onshow:"",onfocus:""}).functionValidator({
			fun:function(val,elem){
				if( val.match(/^.{6,}$/) ){
					return true;
				}else{
					return ""
				}
			}
		});
		$("#txtOrderAddress").formValidator({onshow:"",onfocus:""}).functionValidator({
			fun:function(val,elem){
				var tt= 0;
				if($("#txtOrderPeisong").length>0)
					tt = $("input[name='txtOrderPeisong']:checked").val();
				if( ( val.length>2 && val.length<60 ) || tt==1 ){
					return true;
				}else{
					return ""
				}
			}
		});
		$("#txtOrderCode").formValidator({onshow:"",onfocus:""}).functionValidator({
			fun:function(val,elem){
				var tt= 0;
				if($("#txtOrderPeisong").length>0)
					tt = $("input[name='txtOrderPeisong']:checked").val();
				if( val.match(/^\d{6}$/) || tt==1 ){
					return true;
				}else{
					return ""
				}
			}
		});
		$("#txtOrderMark").formValidator({onshow:"",onfocus:"",oncorrect:"&nbsp;"}).inputValidator({min:0,max:500,onerror: ""})
	}
	
	
	
	

	
});

function setsonghuofashi()
{

	if( $("#totalmoney").html()!="")
	{
		var totalmoney = parseFloat( $("#totalmoney").html().replace("￥","") );
		var yunfeimoney=0;
		$(".Ant-ShoppingCart-01").find("#ordertr").each(function(){
			var obj=$(this);
			yunfeimoney += parseFloat( obj.attr("rel") );
			var thisyunfeimoney =  parseFloat( obj.attr("rel") ) ;
			if(thisyunfeimoney==0 || tt==1)
			{
				obj.find("#totalyunfeitr").html("");	
			}
			if(tt==0)
			{
				if( thisyunfeimoney >0 )
					obj.find("#totalyunfeitr").html(""+thisyunfeimoney.toFixed(2));	
				else
					obj.find("#totalyunfeitr").html("");	
			}
			
			
		});

	}
}