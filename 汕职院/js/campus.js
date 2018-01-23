$(function  () {
	//鼠标悬停渐变
	$(".campus-img").hover(function() {
		$(this).css({
			boxShadow: "0 5px 10px 0 rgba(55,136,218, 0.1)",
			opacity: "1",
			border: "1px solid #3788DA",
		});
	}, function() {
		$(this).css({
			boxShadow: "",
			opacity: "0.65",
			border: "1px solid #444",
		});
	});
})