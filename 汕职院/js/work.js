$(function() {
	// 鼠标悬停样式
	$(".main-content>div").css({
		boxShadow: "0 5px 10px 0 rgba(0, 0, 0, 0.1)",
	});
	$(".main-content>div").hover(function() {
		$(this).attr('cache');
		$(this).css({
			boxShadow: "",
			backgroundColor: "#3788DA",
			color: "#fff",
		});
	}, function() {
		$(this).css({
			boxShadow: "0 5px 10px 0 rgba(0, 0, 0, 0.1)",
			transition: "all 0.3s ease 0s",
			backgroundColor: "#fff",
			color: "black"
		});
	});
	$(".sidebar>div").hover(function() {
		$(this).attr('cache');
		$(this).css({
			boxShadow: "",
			backgroundColor: "#3788DA",
			color: "#fff",
		});
	}, function() {
		$(this).css({
			boxShadow: "0 5px 10px 0 rgba(0, 0, 0, 0.1)",
			transition: "all 0.3s ease 0s",
			backgroundColor: "#fff",
			color: "black"
		});
	});

});