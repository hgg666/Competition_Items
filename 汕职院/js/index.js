$(function() {
	// 导航栏悬停样式
	$('ul.nav li.dropdown').hover(function() {
		$(this).addClass('open');
	}, function() {
		$(this).removeClass('open');
	});
	$('ul.nav li').hover(function() {
		$(this).addClass('active');
	}, function() {
		$(this).removeClass('active');
	});
	$('a.list-group-item').hover(function() {
		$(this).addClass('active');
	}, function() {
		$(this).removeClass('active');
	});
	$("a").hover(function() {
		$(this).css({
			textDecoration: "none",
		});
	}, function() {});
	//搜索框搜索
	$("#search").click(function() {
		var search = $("#searchMes").val();
		var w = window.open();
		w.location = "http://www.baidu.com/s?wd=" + search;
	});
	// 鼠标悬停显示二维码
	$("#wechat").hover(function() {
		$("#wechatMes").css({
			display: 'block'
		});
	}, function() {
		$("#wechatMes").fadeOut(3000);
	});
});