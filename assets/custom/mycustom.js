$(document).ready(function(){
	
	$(".deleteRecord").click(function(){
	var id= $(this).attr("data-id");
	
	$.ajax({
		url:base_url+"Hello/deleteAjax",
		data:{id:id},
		type:"post",
		success:function(res){
			console.log(res);
			if(res == "true"){
				$("#row_"+id).remove();
			}
			
		}
	})
	
	});
	
});
