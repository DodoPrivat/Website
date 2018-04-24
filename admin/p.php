<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2>View User Ratio</h2>
</div>
</div>
</hr>
</hr>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "bakery");  
 $query = "SELECT Sid, count(*) as number FROM products GROUP BY Sid";  
 $result = mysqli_query($connect, $query);  
 
  $connect2 = mysqli_connect("localhost", "root", "", "bakery");  
 $query2 = "SELECT * FROM subcategory";  
 $result2 = mysqli_query($connect2, $query2);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Users Statistcis</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Category Name', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Sid"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Users Registered on Website',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
</div>
</div>


<?php 
include("footer.php");?>