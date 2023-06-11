<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    
    <div class="container my-4 bg-light">
      <?php
      //$Errors=array();
      ?>

        <U><center><h1 class="heading_h1" >REGISTRATION FORM</h1></center></U>
    <form class="row g-3 needs-validation my-auto" novalidate action="save.php" method="post">
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" name="fname" class="form-control" id="validationCustom01"  value="" required>
          <div class="valid-feedback">
            Good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" name="lname" value="" required>
          <div class="valid-feedback">
            Good!
          </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Aadhar Number</label>
            <input type="number" class="form-control" name="adhar"id="validationCustom02" value="" required >
            <div class="valid-feedback">
              Good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Email ID</label>
            <input type="email" class="form-control" id="validationCustom02" name="email" value="" required>
            <div class="valid-feedback">
              Good!
            </div>
          </div>
          
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Phone number</label>
            <input type="number" class="form-control" id="validationCustom02" name="phone" value="" required>
            <div class="valid-feedback">
              Good!
            </div>
          </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Temporary Address</label>
          <input type="text" class="form-control" id="validationCustom03" name="temp-ad" required>
          <div class="invalid-feedback">
            Please provide a valid address.
          </div>
          
        </div>

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Permanent Address</label>
            <input type="text" class="form-control" id="validationCustom03" name="parm-ad" required>
            <div class="invalid-feedback">
              Please provide a valid address.
            </div>
            
          </div>

        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">State</label>
          <select class="form-select" id="validationCustom04" name="stat" required>
            <option selected disabled value="">Choose...</option>
            <?php
                //$conn= mysqli_connect('localhost','root','','gharlijiye') or die("not connect database");
                //$sql="SELECT*FROM reg";
                //$resu=mysqli_query($conn,$sql)or die("unsucce");
            ?>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chhattisgarh</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jammu and Kashmir</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Odisha</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>


        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">Chhose buyer or seller</label>
          <select class="form-select" id="validationCustom04" name="buy-saler" required>
            <option selected disabled value="">Choose...</option>
            <option>I am buyer</option>
            <option>I am seller</option>
          </select>
          <div class="invalid-feedback">
              Please fill it.
          </div>
        </div>


        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Zip</label>
          <input type="text" class="form-control" id="validationCustom05" name="zip" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Date of birth</label>
            <input type="date" class="form-control" id="validationCustom05" name="dob" required>
            <div class="invalid-feedback">
              Please provide DOB.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Create Password</label>
            <input type="password" class="form-control" id="validationCustom05" 
            name="cpass" required>
            <div class="invalid-feedback">
              Please enter password.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="validationCustom05" name="con-pass" required>
            <div class="invalid-feedback">
              Confirm password.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Upload Aadhar or PAN card</label>
            <input type="file" class="form-control" id="validationCustom05" name="id-card" required>
            <div class="invalid-feedback">
              Please upload Aadhar or PAN card.
            </div>
          </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="agri" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary red_btn" type="submit">Submit form</button>
        </div>
      </form>

      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
</body>
</html>