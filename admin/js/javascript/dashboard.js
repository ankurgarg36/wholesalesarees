$(function() {
	
	
	
});

<!--Preview image-->	
function readURL(input) 
	{
		if (input.files && input.files[0]) 
		{
			var reader = new FileReader();
			reader.onload = function (e) {
			$('#img_prev')
			.attr('src', e.target.result)
			.width(350)
			.height(330);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
	<!--end of preview image-->
	
	
	function master_data_entry1(opr,prid,page)
	{
			var val=opr.split(':');
			var val1=val[0];
			var val2=val[1];
			//alert(opr)
		//var x=document.getElementsByName('id').value=opr+":"+id;	
		if(val1=="edit")
		{		
	    window.location.href= "dashboard.php?page="+page+"&prid="+prid+"&action_id=1&edit=" +opr;	
		}
		else
		{
	    window.location.href= "dashboard.php?page="+page+"&prid="+prid+"&action_id=3&del=" +opr;	
		}
	}// JavaScript Document
	
	function del(val) {
			var r=confirm("Do you remove this entry from record");
			if(r==true)
			window.location.href=val;
	}