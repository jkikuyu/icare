<div class="modal fade" id="modalSeeDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center panel-heading">
                    <h4 class="modal-title w-100 font-weight-bold">Appointment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">	
                        <?php
                            $d = new DateTime(date('Y-m-d H:i:s'));

                        ?> 
                        <div class="form-check" id="pickdate">
                            <input type="radio" class="form-check-input" name="dtPickerRadios" value="1" checked>
                            <label class="form-check-label">Now</label>
                            <input type="radio" class="form-check-input" name="dtPickerRadios" value="2">
                            <label class="form-check-label">Select Date</label>
                        </div>


                        <div class="input-group date form_datetime col-md-8" data-date='<?php echo $d->format('j F Y - h:i');?>' data-date-format="dd MM yyyy - h:i p" id="dtpicker" data-link-field="disabledtPicker">
                            <input id="inputdtPicker"  class="form-control " value="" placeholder='when' readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove" disabled></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th" disabled></span></span>
                        </div>
                        <input type="hidden" id="disabledtPicker" value="" /><br/>
                    </div>
                    <div class="md-form mb-5">
                        <label for="medtypelist">Doctor Type</label>
                        <select class="form-control" id="medtype">

                                <?php 
                                $data = getenv('MEDTYPE');
                                $med = json_decode($data,true);
                                foreach ($med as $key => $value) {
                                    echo '<option value='.$key.'>'.$value.'</option>';
                                }


                                ?>
                        </select>
                    </div>
                 </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button id="btnSchedule" class="btn btn-default  close-exit-modal">submit</button>
                  </div>                
            </div>
        </div>
        <script type="application/javascript">
            
        $("#btnSchedule").click(function() {
            var pickdate = $('#inputdtPicker').val();
            var medtype=$('#medtype').val();
            $.post("home/schedule", {'pickdate': 'test'}, function(xhr, status, error) {
               // we're fine here
            }).fail(function(xhr, status, error) {
                  //alert(status);               
                  //alert(status);               
                   var err = eval("(" + xhr.responseText + ")");
                  alert(err.Message);           
            });
/*
           $.ajax({    
            url:'/home/schedule',
            type: 'post',
            data: {"pickdate":pickdate},
            success: function(data) {
            alert('test');
            },
            error(function(){
                alert('error');
            });
            });         
*/
                //type:'POST',
                //url:'home/schedule'
                //data:'pickdate='+pickdate+'&medtype='+medtype
            });
           
        
            $("#dtpicker").addClass("disabledtPicker"); //disable calendar
            document.getElementById("inputdtPicker").value ='<?php echo $d->format('j F Y - h:i A');?>' ;

            $(".form_datetime").datetimepicker({
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1                    
            });
            $("input[name='dtPickerRadios']").change(function(e){
             console.log( $(this).val() );                 
             if($(this).val() == 1) {
                    $("#dtpicker").addClass("disabledtPicker");

                } else {
                    var element = document.getElementById("dtpicker");
                    element.classList.remove("disabledtPicker");
                }

            });
        </script>
        <style rel="stylesheet" type="text/css">
            .disabledtPicker {
                pointer-events: none;
                opacity: 0.8;
            }
        </style>
