<script type="text/javascript">
	$(document).ready(function(){


	});

const register_announcements_training =()=>{
var section = '<?=$esection;?>';
var announcement_date = document.getElementById('announcement_date_training').value;
var content = document.getElementById('content_training').value;

		 $.ajax({
                url: '../../process/training_processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'insert_announcement_training',
                   	section:section,
                   	announcement_date:announcement_date,
                   	content:content
                },success:function(response){
                    // console.log(response);
               
                if (response =='error'){
                    swal('INFORMATION',response,'info');
                      $('#content').val('');
                }else{
                    swal('SUCCESS',response,'success');
                      $('#content').val('');
                }
               
                }
            });
	}	
</script>