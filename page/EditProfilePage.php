<?php
    include '../component/sidebar.php';
    include ('../db.php');
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>EDIT PROFILE</h4><a href="../page/EditProfilePage.php?"onClick="return confirm( \'Apakah anda yakin Kembali?\')">
        <i class='fa fa-angle-left fa-3x'  style="color: green"></i> </a>
    </div>
    <hr>

    <form class="row g-3">
              <div class="mb-3">
                <label for="fullname" class="form-label">Name</label>
                <input type="text"    class="form-control" id="name" placeholder="Name" name="name">
              </div>

              <div class="mb-3">
                <label for="PhoneNumber" class="form-label">Phone Number</label>
                <input type="text"    class="form-control" id="phonenum" placeholder="PhoneNumber" name="phonenum">
              </div>
              <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>

              <div class="mb-3">
                <label for="Job" class="form-label">Job</label>
                  <select class="form-select" id="job"  name="job">
                    <option selected disabled >Select Job</option>
                    <option value="collage">Collage Student</option>
                    <option value="SHS">Senior High School</option>
                    <option value="JHS">Junior High School</option>
                  </select>
              </div>

              <div class="mb-3">
                <label for="Membership" class="form-label">Membership</label>
                <input type="membership" class="form-control" id="membership" placeholder="Membership" name="membership">
              </div>

              <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary" type="editProfile">Save</button>
            </div>
    </form>
    </aside>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    </body>
</html>