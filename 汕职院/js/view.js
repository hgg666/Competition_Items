$(function() {
	//卡片跳转代码 取消默认行为及样式
	$('#myTab button a').click(function(e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#myTab a.btn').hover(function(e) {
		$(this).css({
			color: '#fdfdfd',
		});
	});
})