$(document).ready(function(){
	$("#frmPago").submit(function(){
		var hash = md5($("#orderid").val() + '|' + $("#amount").val() + '|' + $("#time").val() + '|' + $("#key").val());
		
		$("#hash").val(hash);
		$("#frmPago")[0].submit();
	});
});