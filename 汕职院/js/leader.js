$(function  () {
	// 鼠标悬停样式
	$("div.media-pic").hover(function() {
		$(this).css({
			boxShadow: "0 5px 10px 0 rgba(55,136,218, 0.5)",
		});
		$(this).children('.media').children('.media-left').children('.circle').css({
			boxShadow: "0 5px 10px 0 rgba(55,136,218, 0.5)",
		});
		$(this).children('.media').children('.media-body').children('.media-heading').css({
			color: "#3788DA",
		});
		$(this).children('.media').children('.media-vi').children('.media-heading').css({
			color: "#3788DA",
		});
	}, function() {
		$(this).css({
			boxShadow: "0 5px 10px 0 rgba(0, 0, 0, 0.1)",
		});
		$(this).children('.media').children('.media-left').children('.circle').css({
			boxShadow: "",
		});
		$(this).children('.media').children('.media-body').children('.media-heading').css({
			color: "#000",
		});
		$(this).children('.media').children('.media-vi').children('.media-heading').css({
			color: "#000",
		});
	});
})