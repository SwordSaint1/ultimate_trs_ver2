<script type="text/javascript">
	$(document).ready(function(){


	});

const register_announcements =()=>{
var section = '<?=$esection;?>';
var announcement_date = document.getElementById('announcement_date').value;
var content = document.getElementById('content').value;
if (content == '') {
    swal('INFORMATION','Please Input Announcement Content','info');
}else{
		 $.ajax({
                url: '../../process/qualificator_processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'insert_announcement',
                   	section:section,
                   	announcement_date:announcement_date,
                   	content:content
                },success:function(response){
                    // console.log(response);
               	if (response == 'Successfully Register') {
               		swal('SUCCESS',response,'success');
                    $('#content').val('');

               	}   else{
               		swal('INFORMATION',response,'info');
                    $('#content').val('');
                    

               	} 
               
                }
            });
	}
}
</script>