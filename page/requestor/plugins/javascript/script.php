<!-- function -->
<script type="text/javascript">

// const close=()=> {
//  // header("Refresh:0; url=request.php");
// }

  const create_request =()=> {

    setTimeout(generateBatchID,100);
    // generateBatchID();

} 
// GENERATE BATCH ID
const generateBatchID =()=>{
    $.ajax({
        url: '../../process/req_processor.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'generateBatchCode'
        },success:function(response){
            $('#batchID').html(response);
        }
    });
} 

const detect_part_info =()=>{
    var employee_num = document.querySelector('#employee_num').value;
    // console.log(employee_num);
    $.ajax({
        url: '../../process/req_processor.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'fetch_details_req',
            employee_num:employee_num
        },success:function(response){
            // console.log(response);
            if(response !== ''){
                var str = response.split('~!~');
                document.querySelector('#full_name').value = str[0];
                document.querySelector('#batch_no').value = str[1];
                document.querySelector('#position').value = str[2];
                document.querySelector('#department').value = str[3];
                document.querySelector('#section').value = str[4];
                document.querySelector('#emline').value = str[5];
             
            }
            else{ 
               //  $('#employee_num').val('');
               $('#batch_no').val('');
               $('#full_name').val('');
               $('#position').val('');
               $('#department').val('');
               $('#section').val('');
               $('#emline').val('');
               $('#eprocess').val('');
               $('#training_reason').val('');
               $('#categ').val('');
                 
            }
        }
    });
}


//INSERT REQUEST

const save_request =()=> {
    var employee_num = document.querySelector('#employee_num').value;
    var batch_no = document.querySelector('#batch_no').value;
    var full_name = document.querySelector('#full_name').value;
    var position = document.querySelector('#position').value;
    var department = document.querySelector('#department').value;
    var section = document.querySelector('#section').value;
    var emline = document.querySelector('#emline').value;
    var eprocess = document.querySelector('#eprocess').value;
    var training_reason = document.querySelector('#training_reason').value;
     var esection = document.querySelector('#section').value;
     var ojt_period = document.querySelector('#ojt_period').value;
    var batchID = document.querySelector('#batchID').innerHTML;
     var esection = '<?=$esection;?>';
     var full_names = '<?=$full_name;?>';
    
     // console.log(full_names);


        if(employee_num == ''){
      
        swal('Notification', 'Please Enter EMPLOYEE ID','info');
    }
    else if(batchID == ''){
      
         swal('Notification', 'Missing Batch Number, Please reload your browser!','info');

    }else if(full_name == ''){
        swal('Notification', 'Please Enter Full Name','info');
    }else if(batch_no == ''){
        swal('Notification', 'Please Enter Batch No','info');
    }else if(position == ''){
         swal('Notification', 'Please Enter Position','info');
    }else if(department == ''){
        swal('Notification', 'Please Enter Department','info');
    }else if(section == ''){
        swal('Notification', 'Please Enter Section','info');
    }else if(emline == ''){
        swal('Notification', 'Please Enter Line','info');
    }else if(eprocess == '-'){
        swal('Notification', 'Invalid Process','info');
    }else if(eprocess == ''){
        swal('Notification', 'Please Select Process','info');
    }else if(training_reason == ''){
        swal('Notification', 'Please Enter Training Reason','info');
    }
 
else{


    $.ajax({
        url: '../../process/req_processor.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'insert_req',
            employee_num:employee_num,
            batch_no:batch_no,
            full_name:full_name,
            position:position,
            department:department,
            section:section,
            emline:emline,
            eprocess:eprocess,
            training_reason:training_reason,
            batchID:batchID,
            esection:esection,
            ojt_period:ojt_period,
            full_names:full_names
        },success:function(x){
            console.log(x);

            if (x == 'Already Have Training Request') {
               swal('Notification',x,'info');
            }else{
           
           swal('SUCCESS',x,'success');
         }
           // M.toast({html:x});

           $('#employee_num').val('');
           $('#batch_no').val('');
           $('#full_name').val('');
           $('#position').val('');
           $('#department').val('');
           $('#section').val('');
           $('#emline').val('');
           $('#eprocess').val('');
           $('#training_reason').val('');
           $('#categ').val('');
           $('#ojt_period').val('');

           load_prev();
           
       
        }
    });

 }
}

//function prev in request training
const load_prev =()=>{
     var batch = $('#batchID').html();

    // console.log(batch);
    $.ajax({
        url:'../../process/req_processor.php',
        type:'POST',
        cache:false,
        data:{
            method:'prev_req',
            batch:batch
        },success:function(response){
            $('#data_preview_req').html(response);
        }
    });
}


//PROCESS ONCHANGE
const load_curiculum =()=>{
        // VARIABLE X IS THE ID OF REASON SELECT TAG
        // var value = $('#categ').val();

        
         var value = document.querySelector('#categ').value;
        // console.log(value);
        $.ajax({
            url: '../../process/req_processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'getCuriculum',
                value:value
            },success:function(data){
                // console.log(data);
                $('#eprocess').html(data);
                load_eprocess();
             
            }
        });
    }


const load_eprocess =()=>{
      

          var value10 = $('#categ').val();
        console.log(value10);
        $.ajax({
            url: '../../process/req_processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'getprocess',
                value10:value10
            },success:function(data){
                console.log(data);
                // $('#eprocess').html(data);
                load_ojt();
            }
        });
    }

//ojt period onchange

    const load_ojt =()=>{

 var value10 = $('#categ').val();
 var value12 = $('#eprocess').val();
        // console.log(value10);
        $.ajax({
            url: '../../process/req_processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'getOJT',
                value10:value10,
                value12:value12
            },success:function(data){
                console.log(data);
                $('#ojt_period').html(data);
            }
        });
    }


    // function in pending tab

      function load_pending(){
       var role = '<?=$role;?>';
       var esection = '<?=$esection;?>';
        var dateFrom = document.getElementById('pendingrequestDateFrom').value;
        var dateTo = document.getElementById('pendingrequestDateTo').value;

            // var batch = document.getElementById('batch_search').value;
   
        // console.log(role);
            $.ajax({
                url: '../../process/req_processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_request',
                    role:role,
                    esection:esection,
                    dateFrom:dateFrom,
                    dateTo:dateTo
                },success:function(response){
                    console.log(response);
                    document.getElementById('request_data').innerHTML = response;
               $('#batch_search').val('');
                }
            });
        }





// pending modal

const get_view =(param)=>{
    var data = param.split('~!~');
    var id = data[0];
    var batch_number = data[1];
    var approval_status = data[2];
    var request_date_time = data[3];
  
      $('#id_prev').val(id);
    $('#batch_number_prev').val(batch_number);
    $('#approval_status_prev').val(approval_status);
    $('#req_date_time_prev').val(request_date_time);
  
    $.ajax({
        url:'../../process/req_processor.php',
        type: 'POST',
        cache:false,
        data:{
            method: 'prevbatch',
            id:id,
            batch_number:batch_number,
            approval_status:approval_status,
            request_date_time:request_date_time
        },success:function(response){
            $('#view_request_data').html(response);
        }
    });

}


// function in approved tab
const load_approved_list_req =()=>{
     var role = '<?=$role;?>';
     var esection = '<?=$esection;?>';

     var dateFrom = document.getElementById('approverequestDateFrom').value;
        var dateTo = document.getElementById('approverequestDateTo').value;

          
           $.ajax({
                url: '../../process/req_processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_approve_request_req',
                    role:role,
                    esection:esection,
                    dateFrom:dateFrom,
                    dateTo:dateTo
                },success:function(response){
                    // console.log(response);
                    document.getElementById('approved_data_req').innerHTML = response;
           
                }
            });
    
}


// function in approved tab
const load_pendingq_list =()=>{
          var role = '<?=$role;?>';
     var esection = '<?=$esection;?>';

     var dateFrom = document.getElementById('pendingqrequestDateFrom').value;
        var dateTo = document.getElementById('pendingqrequestDateTo').value;

    
           $.ajax({
                url: '../../process/req_processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_pendingq_request_req',
                    role:role,
                    esection:esection,
                    dateFrom:dateFrom,
                    dateTo:dateTo
                },success:function(response){
                    // console.log(response);
                    document.getElementById('request_pendingq_data').innerHTML = response;
    
                }
            });
    
}



const get_view_pendingq_req =(param)=>{
    var data = param.split('~!~');
    var id = data[0];
    var batch_number = data[1];
    var approval_status = data[2];
    var request_date_time = data[3];
    var esection = '<?=$esection;?>';



  
      $('#id_pending').val(id);
    $('#batch_number_pending').val(batch_number);
    $('#approval_status_pending').val(approval_status);
    $('#req_date_time_pending').val(request_date_time);
  


    $.ajax({
        url:'../../process/req_processor.php',
        type: 'POST',
        cache:false,
        data:{
            method: 'prev_pendingq',
            id:id,
            batch_number:batch_number,
            approval_status:approval_status,
            request_date_time:request_date_time,
            esection:esection
        },success:function(response){
            $('#data_pendingq_request').html(response);
        }
    });

}



// function approve modal

const get_view_approve_req =(param)=>{
    var data = param.split('~!~');
    var id = data[0];
    var batch_number = data[1];
    var approval_status = data[2];
    var request_date_time = data[3];
    var esection = '<?=$esection;?>';



  
      $('#id_approve').val(id);
    $('#batch_number_approve').val(batch_number);
    $('#approval_status_approve').val(approval_status);
    $('#req_date_time_approve').val(request_date_time);
  


    $.ajax({
        url:'../../process/req_processor.php',
        type: 'POST',
        cache:false,
        data:{
            method: 'prevbatch_approve',
            id:id,
            batch_number:batch_number,
            approval_status:approval_status,
            request_date_time:request_date_time,
            esection:esection
        },success:function(response){
            $('#data_request_approve').html(response);
        }
    });

}




// function in cancelled tab
const load_cancelled_list =()=>{
     var role = '<?=$role;?>';
     var esection = '<?=$esection;?>';

        var dateFrom = document.getElementById('cancelrequestDateFrom').value;
        var dateTo = document.getElementById('cancelrequestDateTo').value;

            // var batch = document.getElementById('batch_search_cancel').value;


           $.ajax({
                url: '../../process/req_processor.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_cancel_request_req',
                    role:role,
                    esection:esection,
                    dateFrom:dateFrom,
                    dateTo:dateTo
                },success:function(response){
                    // console.log(response);
                    document.getElementById('cancel_data_req').innerHTML = response;
                      $('#batch_search_cancel').val('');
                }
            });
   
}


// function cancel modal

const get_cancel_req =(param)=>{
    var data = param.split('~!~');
    var id = data[0];
    var batch_number = data[1];
    var approval_status = data[2];
    var request_date_time = data[3];
    var esection = '<?=$esection;?>';



  
      $('#id_cancel').val(id);
    $('#batch_number_cancel').val(batch_number);
    $('#approval_status_cancel').val(approval_status);
    $('#req_date_time_cancel').val(request_date_time);
  

  
    $.ajax({
        url:'../../process/req_processor.php',
        type: 'POST',
        cache:false,
        data:{
            method: 'prevbatch_cancel',
            id:id,
            batch_number:batch_number,
            approval_status:approval_status,
            request_date_time:request_date_time,
            esection:esection
        },success:function(response){
            $('#data_request_cancel').html(response);
        }
    });

}



</script>
