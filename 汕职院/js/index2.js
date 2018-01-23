$(function  () {
	// 学院要闻信息长度控制
	var wordNum = $('li.list-group-item').width()/20;
	$('li.list-group-item div p a').each(function() {
		var mes = $(this).html();
	    var mes1 = mes;
	    var mes2 = mes1;
	    mes1 = mes1.slice(0,wordNum);
	    mes2 = mes2.slice(-10);
	    $(this).html(mes1 + "...   "+ mes2);
	});
	// 宽度改变后的学院要闻信息长度控制
	$(window).resize(function() {
		var wordNum = $('li.list-group-item').width()/20;
		$('#catche p').each(function(i) {
			var mes = $(this).html();
		    var mes1 = mes;
		    var mes2 = mes1;
		    mes1 = mes1.slice(0,wordNum);
		    mes2 = mes2.slice(-10);
		    $("li.list-group-item div p a").eq(i).html(mes1 + "...   "+ mes2);
		});
	});

});