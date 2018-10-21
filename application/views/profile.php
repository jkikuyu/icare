
  <div class="content">
    <!-- Profile info -->
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">Profile information</h6>
        <div class="heading-elements">
          <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                  </ul>
              </div>
      </div>

      <div class="panel-body">
        <form action="<?= site_url('home/update_profile') ?>" method="POST">
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label>Username</label>
                <input type="text" name="fname" value="<?php echo $profile_data['first_name']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <label>Surname</label>
                <input type="text" name="sname" value="<?php echo $profile_data['surname']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <label>Middle Name</label>
                <input type="text" name="lname" value="<?php echo $profile_data['last_name']; ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label>KRA PIN</label>
                <input type="text" name="kra" value="<?php echo $profile_data['kra']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <label>ID Number</label>
                <input type="text" name="id_number" readonly="readonly" value="<?php echo $profile_data['id_number']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <label>Email Address</label>
                <input type="text" name="email" value="<?php echo $profile_data['email']; ?>" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label>Occupation</label>
                <input type="text" name="occupation" value="<?php echo $profile_data['occupation']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <label>DoB</label>
                <input type="text" name="dob" value="<?php echo $profile_data['dob']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <label>Location</label>
                <input type="text" name="home_address" value="<?php echo $profile_data['home_address']; ?>" class="form-control">
                        </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label>Marital Status</label>
                <?php
                  if($profile_data['marital_status'] == "married"){
                    ?>
                      <div class="radio">
                        <label>
                          <input type="radio" value="<?php echo "married"; ?>" name="marital_status" class="styled" checked="checked">
                          Married
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" value="<?php echo "single"; ?>" name="marital_status" class="styled">
                          Single
                        </label>
                      </div>
                    <?php
                  }elseif($profile_data['marital_status'] == "single"){
                    ?>  
                      <div class="radio">
                        <label>
                          <input type="radio" value="<?php echo "married"; ?>" name="marital_status" class="styled">
                          Married
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" value="<?php echo "single"; ?>" name="marital_status" class="styled" checked="checked">
                          Single
                        </label>
                      </div>
                    <?php
                  }
                ?>
              </div>
              <div class="col-md-4">
                <label>Gender</label>
                <?php
                  if($profile_data['gender'] == "male"){
                    ?>
                      <div class="radio">
                        <label>
                          <input type="radio" value="male" name="gender" class="styled" checked="checked">
                          Male
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" value="female" name="gender" class="styled">
                          Female
                        </label>
                      </div>
                    <?php
                  }elseif($profile_data['gender'] == "female"){
                    ?>  
                      <div class="radio">
                        <label>
                          <input type="radio" value="male" name="gender" class="styled">
                          Male
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" value="female" name="gender" class="styled" checked="checked">
                          Female
                        </label>
                      </div>
                    <?php
                  }
                ?>
              </div>
              <div class="col-md-4">
                <label>Phone Number</label>
                <input type="text" name="phone_number" value="<?php echo $profile_data['phone_number']; ?>" class="form-control">
                        </div>
            </div>
          </div>

                    <div class="text-right">
                      <button type="submit_details" name="submit_details" value="Save Changes" class="btn btn-primary">Save Changes<i class="icon-arrow-right14 position-right"></i></button>
                    </div>
        </form>
      </div>
    </div>
    <!-- /profile info -->


  <script type="text/javascript">
    function initialize() {
      var mapOptions = {
        center: new google.maps.LatLng(-1.2915761, 36.7847456),
        zoom: 9,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        scrollwheel: false,
        draggable: false,
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: true,
        streetViewControl: true,
        overviewMapControl: true,
        rotateControl: true,
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

  </script>
