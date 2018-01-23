 	$(document).ready(function() {
 		$("#inputPassword").keyup(function() {
 			var inputUser = $("#inputUser").val();
 			var inputPassword = $("#inputPassword").val();
 			$.ajax({
 				url: 'form_check.php',
 				type: 'POST',
 				dataType: 'json',
 				data: {user: inputUser,
 						passwd: inputPassword},
 				success:function(data,textStatus,jqXHR){
 					$("#mes2").html(data.passwd);
 					console.log("hey" + data);
 				},
 				error: function (data) {
 					$("#mes2").html(data);
 					console.log("ho"+data);
 				}
 			});
 		});
 		$("#inputUser").keyup(function() {
 			var inputUser = $("#inputUser").val();
 			var inputPassword = $("#inputPassword").val();
 			$.ajax({
 				url: 'form_check.php',
 				type: 'POST',
 				dataType: 'json',
 				data: {user: inputUser,
 						passwd: inputPassword},
 				success:function(data,textStatus,jqXHR){
 					$("#mes1").html(data.name);
 				},
 				error: function (data) {
 					$("#mes1").html(data);
 				}
 			});
 		});
 	});