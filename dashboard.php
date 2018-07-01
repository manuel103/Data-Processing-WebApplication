<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>plandR</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    plandR
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>Manage Users</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Registered Users</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Extras</p>
                    </a>
                </li>

                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Alerts</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Publish Data</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Data Visualizations</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>

                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- <p>
										Dropdown
										<b class="caret"></b>
									</p> -->

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="./Login/Login2.html">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">General Statistics</h4>
                                <p class="category">Population Size Based on Gender</p>
                            </div>
                            <div class="content" style="height:470px;">
                                <!-- <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->

                                <?php 
                                $connect = mysqli_connect("localhost", "root", "", "datacollected");
                                $query = "SELECT gender, count(*) as number FROM formdata GROUP BY gender";
                                $result = mysqli_query($connect, $query);
                                ?>   
       
           <title>pie Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php 
                            while ($row = mysqli_fetch_array($result)) {
                                echo "['" . $row["gender"] . "', " . $row["number"] . "],";
                            }
                            ?>  
                     ]);  
                var options = {  
                    //   title: 'Percentage population of Male and Female',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      
           <br /><br />  
           <div style="width:300px;">  
                <!-- <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3> -->  
                <br />  
                <div id="piechart" style="width: 310px; height: 350px;margin-left:0px;margin-top:0px;background:none;"></div>  
           </div>  
      
                                <div class="footer">
                                    <div class="legend">
                                        <!-- <i class="fa fa-circle text-info"></i> Male
                                        <i class="fa fa-circle text-danger"></i> Female -->
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Data sent 2 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Total Population per County</h4>
                                <p class="category">Geospatial Data</p>
                            </div>
                            <div class="content">
                                <!-- <div id="chartHours" class="ct-chart"></div> -->
                                <div class="footer">
                                    <div class="legend" style="height:10px">

                                        <?php 
                                        $connect = mysqli_connect("localhost", "root", "", "datacollected");
                                        $query = "SELECT residence, count(*) as number FROM formdata GROUP BY residence";
                                        $result = mysqli_query($connect, $query);
                                        ?>  
      
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Residence', 'Residents'],  
                          <?php 
                            while ($row = mysqli_fetch_array($result)) {
                                echo "['" . $row["residence"] . "', " . $row["number"] . "],";
                            }
                            ?>  
                     ]);  
                var options = {  
                     
                      is3D:true,  
                     };  
                var chart = new google.visualization.BarChart(document.getElementById('barchart'));  
                chart.draw(data, options);  
           }  
           </script>   
           <br /><br />  
           <div style="width:900px;">  
                <br />  
                <div id="barchart" style="width: 650px; height: 300px;"></div>  
           </div>  
     
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <div class="card "style="width:750px;">
                            <div class="header">
                                <h4 class="title">Rate of Employment</h4>
                                <p class="category">General Employment Levels</p>
                                
                            </div>
                            <div class="content">
                                <!-- <div id="chartActivity" class="ct-chart"></div> -->
                                <div>
                                <?php 
                                $connect = mysqli_connect("localhost", "root", "", "datacollected");
                                $query = "SELECT employment, count(*) as number FROM formdata GROUP BY employment";
                                $result = mysqli_query($connect, $query);
                                ?>  

           <title>pie Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Residence', 'People'],  
                          <?php 
                            while ($row = mysqli_fetch_array($result)) {
                                echo "['" . $row["employment"] . "', " . $row["number"] . "],";
                            }
                            ?>  
                     ]);  
                var options = {    
                       vAxis: {title: 'Number of People'},
                      hAxis: {title: 'Employment Level'}, 
                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));  
                chart.draw(data, options);  
           }  
           </script>  

           <br /><br />  
           <div style="width:900px;">  
                <br />  
                <div id="columnchart" style="width: 610px; height: 300px;"></div>  
           </div>  

                            </div>

                                <div class="footer">
                                    <div class="legend">
                                        <!-- <i class="fa fa-circle text-info"></i> Male
                                        <i class="fa fa-circle text-danger"></i> Female -->
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data updated 5 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

 <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Population of ethnic communities</h4>
                                <p class="category">Most popular ethnic groups</p>
                                
                            </div>
                            <div class="content">
                                <!-- <div id="chartActivity" class="ct-chart"></div> -->
                                <div>




<?php  
 $connect = mysqli_connect("localhost", "root", "", "datacollected");  
 $query = "SELECT ethnicity, count(*) as number FROM formdata GROUP BY ethnicity";  
 $result = mysqli_query($connect, $query);  
 ?>  
  
           <title>pie Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart'],
        //  'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
       });  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Residence', 'Residents'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["ethnicity"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {
                      //is3D:true,  
                      pieHole: 0.4


                     };  
                var chart = new google.visualization.PieChart(document.getElementById('chart'));  
                chart.draw(data, options);  
           }  
           </script>  
     
           <br /><br />  
           <div style="width:900px;">
                <br />  
                <div id="chart" style="width: 500px; height: 300px;"></div>  
           </div>  

                            </div>

                                <div class="footer">
                                    <div class="legend">
                                        <!-- <i class="fa fa-circle text-info"></i> Male
                                        <i class="fa fa-circle text-danger"></i> Female -->
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data updated 5 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   


                    <div class="col-md-4">

                   
        </div>

        </div>
        <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Variation of Income earners</h4>
                            </div>
                            <div class="content">
                                <!-- <div id="chartActivity" class="ct-chart"></div> -->
                                <div>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "datacollected");  
 $query = "SELECT income, count(*) as number FROM formdata GROUP BY income";  
 $result = mysqli_query($connect, $query);  
 ?>  
  
           <title>pie Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart'],
        //  'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
       });  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Income Earners', 'Income Earners'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["income"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {
                    //legend: { position: 'bottom' }
                    vAxis: {title: 'Population'},
                    hAxis: {title: 'Income Earned'},


                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById('charts'));  
                chart.draw(data, options);  
           }  
           </script>  
     
           <br /><br />  
           <div style="width:900px;">
                <br />  
                <div id="charts" style="width: 500px; height: 300px;"></div>  
           </div>  

                            </div>

                                <div class="footer">
                                    <div class="legend">
                                        <!-- <i class="fa fa-circle text-info"></i> Male
                                        <i class="fa fa-circle text-danger"></i> Female -->
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data updated 5 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





 <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Percentage of married people</h4>                                
                            </div>
                            <div class="content">
                                <!-- <div id="chartActivity" class="ct-chart"></div> -->
                                <div>




<?php  
 $connect = mysqli_connect("localhost", "root", "", "datacollected");  
 $query = "SELECT marriage, count(*) as number FROM formdata GROUP BY marriage";  
 $result = mysqli_query($connect, $query);  
 ?>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart'],
        //  'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
       });  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Marriage', 'Marriage'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["marriage"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = { 
                      //pieHole: 0.4


                     };  
                var chart = new google.visualization.PieChart(document.getElementById('marriage'));  
                chart.draw(data, options);  
           }  
           </script>  
     
           <br /><br />  
           <div style="width:900px;">
                <br />  
                <div id="marriage" style="width: 500px; height: 300px;"></div>  
           </div>  

                            </div>

                                <div class="footer">
                                    <div class="legend">
                                        <!-- <i class="fa fa-circle text-info"></i> Male
                                        <i class="fa fa-circle text-danger"></i> Female -->
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data updated 5 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    



                    <div class="row">
                    <div class="col-md-6">
                        <div class="card " style="width:550px">
                            <div class="header">
                                <h4 class="title">Age Variations</h4>
                               
                            </div>
                            <div class="content">
                                <!-- <div id="chartActivity" class="ct-chart"></div> -->
                                <div>




<?php  
 $connect = mysqli_connect("localhost", "root", "", "datacollected");  
 $query = "SELECT Age, count(*) as number FROM formdata GROUP BY Age";  
 $result = mysqli_query($connect, $query);  
 ?>  
  
           <title>pie Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart'],
        //  'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
       });  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Person', 'Age'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Age"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {
                    vAxis: {title: 'Age'},
                    hAxis: {title: 'polpulation'},


                     };  
                var chart = new google.visualization.BarChart(document.getElementById('age'));  
                chart.draw(data, options);  
           }  
           </script>  
     
           <br /><br />  
           <div style="width:900px;">
                <br />  
                <div id="age" style="width: 500px; height: 300px;"></div>  
           </div>  



<tbody id="table_body">

</tbody>




<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAPGKQJCpLiSXz5jRyOmTam8bl5kiid1cg",
    authDomain: "plandr-01.firebaseapp.com",
    databaseURL: "https://plandr-01.firebaseio.com",
    projectId: "plandr-01",
    storageBucket: "plandr-01.appspot.com",
    messagingSenderId: "466634078055"
  };
  firebase.initializeApp(config);
</script>
<script src="https://code.jquery.com/jQuery-3.1.0.js"></script>
<script src="index.js"></script>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJV4vRJXeYwu_odJqqqtD75Zhsyb5-iVQ"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>plandR Cens</b> - an easier way to process big data."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
