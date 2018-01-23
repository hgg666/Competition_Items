$(function  () {
	$(".brief-info").hover(function() {
		$(this).css({
			boxShadow: "0 5px 10px 0 rgba(0, 0, 0, 0.1)",
			backgroundColor: "#f5f5f5",
		});
	}, function() {
		$(this).css({
			boxShadow: "",
			backgroundColor: "#f7f4f7",
		});
	});
})