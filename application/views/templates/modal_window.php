    <div class="modal fade" id="modalSeeDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Save</h4>
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
                  <input type="radio" class="form-check-input" name="groupOfMaterialRadios" value="1" checked>
                  <label class="form-check-label">Now</label>
                <input type="radio" class="form-check-input" name="groupOfMaterialRadios" value="2">
                <label class="form-check-label">Select Date</label>


                </div>


                <div class="input-group date form_datetime col-md-8" data-date='<?php echo $d->format('Y-m-d\TH:i:s.u');?>' data-date-format="dd MM yyyy - HH:ii p" id="dtpicker" data-link-field="dtp_input1">
                    <input class="form-control " type="text" value="" placeholder='when' readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th" disabled></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                </div>
			 </div>
				    </div>
			</div>
			<script type="application/javascript">
    		    $(".form_datetime").datetimepicker({
    		        format: "dd MM yyyy - hh:ii",
                    locale: 'uk'
                    
    		    });
                $("input[name='groupOfMaterialRadios']").change(function(e){
                 console.log( $(this).val() );                 
                 if($(this).val() == 1) {
                        $("#dtpicker").prop('disabled',true);

                    } else {
                        $("#dtpicker").prop('disabled',false);
                    }

                });
            </script>
