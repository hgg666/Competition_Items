$(function() {
	// 随机颜色
	var arrColor = ["#4C10AE", "#4B2A82", "#2E0571", "#7C45D6","#946BD6", 
				"#9303A7", "#72217D", "#60016D", "#C038D3","#FFEF7",
				"#C561D3", "#1826B0", "#2E3784", "#081272", "#4C59D8",
				"#717BD8", "#FFE200", "#BFAF30", "#A69300", "#FFE940", 
				"#00A08A", "#1E786C", "#00685A", "#34D0BA", "#5DD0C0",
				"#1049A9", "#29497F", "#052C6E", "#4479D4", "#6A92D4",
				"#25D500", "#3DA028", "#188A00", "#59EA3A", "#80EA69",
				"#FF6A00", "#BF6B30", "#A64500", "#FF8F40", "#FFAD73"
	];
	// 打乱数组随机取值并分配颜色
	var colorCache = null;
	var ranColor = arrColor[Math.floor(Math.random()*arrColor.length)];
	var ranArrColor = arrColor.sort(function  () {
		return Math.random()-0.5;
	});
	$(".color-bar > div").each(function(i) {
		$(this).css({
			backgroundColor: arrColor[i],
			boxShadow: "0 5px 10px 0 rgba(0, 0, 0, 0.1)",
		});
	});
	//选择时颜色的改变
	$(".card-mes").hover(function() {
		$(this).attr("colorCache",$(this).css('backgroundColor'));
		$(this).css({
			backgroundColor: '#3788DA',
			transition: "all 0.3s ease 0s",
		});
	}, function() {
		$(this).css({
			backgroundColor: $(this).attr("colorCache"),
		});
	});
});