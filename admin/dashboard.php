<?php include("header.php");?>



<div id="page-inner">
      <div class="row">
        <div class="col-md-12">
          <h2>Admin Dashboard</h2>
          <h5>Welcome Admin , Love to see you back. </h5>
        </div>
      </div>
      <!-- /. ROW  -->
      <hr />
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="panel panel-back noti-box"> <span class="icon-box bg-color-red set-icon"> <i class="fa fa-comments"></i> </span>
            <div class="text-box" >
              <p class="main-text"><?php $query="select * from comments where Status='Pending'";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  echo mysqli_num_rows($sql)." Pending";}?></p>
              <p class="text-muted">Comments</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="panel panel-back noti-box"> <span class="icon-box bg-color-green set-icon"> <i class="fa fa-users"></i> </span>
            <div class="text-box" >
              <p class="main-text"><?php $query="select * from users";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  echo mysqli_num_rows($sql)." Users";}?></p>
              <p class="text-muted">Registered</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="panel panel-back noti-box"> <span class="icon-box bg-color-blue set-icon"> <i class="fa fa-cubes"></i> </span>
            <div class="text-box" >
              <p class="main-text"><?php $query="select * from products";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  echo mysqli_num_rows($sql)." New";}?></p>
              <p class="text-muted">Products</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="panel panel-back noti-box"> <span class="icon-box bg-color-brown set-icon"> <i class="fa fa-institution"></i> </span>
            <div class="text-box" >
              <p class="main-text"><?php $query="select * from vendors";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  echo mysqli_num_rows($sql)." Vendors";}?></p>
              <p class="text-muted">Registered</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
      <hr />
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="panel panel-back noti-box"> <span class="icon-box bg-color-blue"> <i class="fa fa-calendar"></i> </span>
            <div class="text-box" >
              <p class="main-text">Calendar </p>
             <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="span12">
    	    <table class="table-condensed table-bordered table-striped">
                <thead>
                    <tr>
                      <th colspan="7" >
                        <a class="btn"><i class="icon-chevron-left"></i></a>
                        <a class="btn">March-2018</a>
                        <a class="btn"><i class="icon-chevron-right"></i></a>
                      </th>
                    </tr>
                    <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="muted">29</td>
                        <td class="muted">30</td>
                        <td class="muted">31</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td><strong>20</strong></td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td class="muted">1</td>
                        <td class="muted">2</td>
                        <td class="muted">3</td>
                    </tr>
                </tbody>
            </table>    
		</div>
	</div>
</div>
            </div>
          </div>
        </div>
       
        <div class="col-md-3 col-sm-12 col-xs-12 ">
          <div class="panel ">
            <div class="main-temp-back">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Karachi City </div>
                  <div class="col-xs-6">
                    <div class="text-temp"> 35° </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

  <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="panel panel-back noti-box"> <span class="icon-box bg-color-blue set-icon"> <i class="fa fa-reorder"></i> </span>
            <div class="text-box" >
              <p class="main-text"><?php $query="select * from category";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  echo mysqli_num_rows($sql)." New";}?></p>
              <p class="text-muted">Categories</p>
            </div>
          </div>
        </div>           
       
    
    <?php include("footer.php");?>