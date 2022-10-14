<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialties();
?>
    <h1 class="text-center">Registration for IT Confrence</h1>

<form method="post" enctype="multipart/form-data" action="success.php">
    <div class="form-group">
   <label for="FirstName">First Name</label>
   <input required type="text" class="form-control" id="first name"name="firstname"  >
 
</div>
<div class="form-group">
  <label for="LastName">Last Name</label>
  <input required type="text" class="form-control" id="last name" name="lastname" >
  
</div>
<div class="form-group">
   <label for="dob">Date Of Birth</label>
  <input type="text" class="form-control" id="dob" name="dob" >
 
</div>
<div class="form-group">
<label for="area of specialization">Specialty</label>
 <select class="form-select" id=" Specialization" name=" specialization">
   <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){?>
 <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
 <?php } ?>
</select>
</div>

 <div class="form-group">
  <label for="Email">Email address</label>
  <input required type="email" class="form-control" id="Email" name="email"
  aria-describedlby="emailHelp">
  <small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else.</small>
</div>

<div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="text" class="form-control" id="phone" name="phone"
  aria-describedlby="phoneHelp">
  <small id="phoneHelp" class="form-text text-muted"> We'll never share your phone number with anyone else.</small>
</div>
<br>

<div class="custom-file">
  
  <input type="file" accept= "image/* "class="custom-file-input" id="avatar" name="avatar">
  <label class="custom-file-label" for= "avatar">Browse</label>
<br>

  <small id="avatar" class="form-text text-primary"> Picture upload is OPTIONAL!</small>
  
</div>
<br>


<button type="submit" name="submit" class="btn btn-primary btn-block">submit</button>
</form>

<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php';?>