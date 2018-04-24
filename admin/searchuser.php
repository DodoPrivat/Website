<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Search User</h2>
</div>
</div>
</hr>
<div calss="row">
<div class="col-md-8">


<form action="test.php"  method="post">
<div class="form-group">
  <label for="sel1">Search by:</label>
  <select class="form-control" id="sel1" name="search">
    <option value="user_id">Id</option>
    <option value="username">Name</option>
    <option  value="email">Email</option>
    <option value="address">Address</option>
    <option value="contact">Phone</option>
  </select>
</div>



<div class="form-group">
  <label for="usr">Enter Details </label>
  <input type="text" class="form-control" id="usr" name="detail">
</div>

<div class="form-group">
 <input type="submit" class="btn btn-success" value="Search" name='btn'/>
</div>

</form>
</div>
</div>


<?php 
include("footer.php");?>