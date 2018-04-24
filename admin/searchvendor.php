<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Search Vendor</h2>
</div>
</div>
</hr>
<div calss="row">
<div class="col-md-8">
<form action="searchv.php"  method="post">
<div class="form-group">
  <label for="sel1">Search by:</label>
  <select class="form-control" id="sel1" name="search">
    <option value="vid">Vendor Id</option>
    <option value="bakeyname">Bakery Name</option>
    <option  value="email">Email</option>
    <option value="addr">Address</option>
    <option value="venname">Vendor Name</option>
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