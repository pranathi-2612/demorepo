<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$conn_string=new mysqli("localhost","root","","miniprojecttracking_db");
if($conn_string->connect_error)
{
die('connection failed'.$conn_string->connect_error);
} 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="../js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="../js/pie-chart.js" type="text/javascript"></script>

<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="../css/owl.carousel.css" rel="stylesheet">
					<script src="../js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								
								
          
								var objDiv = document.getElementById("style-3");
objDiv.scrollToTop = objDiv.scrollHeight;
        // var element = document.getElementById("style-3");
        // element.scrollTop = element.scrollHeight;

								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});			 
								setInterval(function(){

						
									
    $.ajax({
        type: 'GET',
        url : "GetMessage.php?$_SESSION['sname']",
        success: function(response){
		
            console.log(response);
			
            $("#style-3").empty();
            for (var key in response.messages)
           {
			var temp=null;
			var sender="<?php echo $_SESSION['Name']; ?>";
            // alert(sender);
			if((response.messages[key].Sender)==sender)
			{
				temp="<div class='activity-row activity-row1'><div class='col-xs-2 activity-desc1'></div><div class='col-xs-7 activity-img2'><div class='activity-desc-sub1'><h5>"+response.messages[key].Msg+"<p>"+response.messages[key].date+"</p></div></div><div class='col-xs-3 activity-img'><img src='../images/a.png' class='img-responsive' alt=''/><span>You</span></div><div class='clearfix'></div></div>";
			}
			else
			{
                  temp="<div class='activity-row activity-row1'><div class='col-xs-3 activity-img'><img src='../images/1.jpg' class='img-responsive' alt=''/><span>"+response.messages[key].Sender+"</span></div><div class='col-xs-5 activity-img1'><div class='activity-desc-sub'><h5>"+response.messages[key].Msg+"</h5><p>"+response.messages[key].date+"</p></div></div><div class='col-xs-4 activity-desc1'></div><div class='clearfix'> </div></div>";			  
			}
				  $("#style-3").append(temp);
			
            }
        },
        error: function(response){
           // alert('An error occured')
        }
    });
},1000);

							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php include('Sidebar.php');?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
         	<?php include('Header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
	<!-- for amcharts js -->
	<!-- for amcharts js -->

    <script  src="../js/index1.js"></script>
		<div class="col-md-4">
		<?php	
        $name=$_SESSION['Name'];
		$data="select distinct Receiver from message_tb where Sender='$name'";
		/* echo $data;
		exit; */
		$d=mysqli_query($conn_string,$data);  
        while($row=mysqli_fetch_array($d))
		{
	     //echo $row['Receiver'];
		}           		
        ?>
		
		</div>
		<div class="row">
		<br><br><br>
			<div class="col-md-12">
			<div class="col-md-1 compose-left">
			<div class="chat-grid widget-shadow">
			<?php	
           $id=$_SESSION['ID'];
		   $p="select distinct(Sender) from message_tb where  Receiver='$name' order by Date desc";
			// $p="select user_creation_tb.*,guide_assign_tb.Student_Id from user_creation_tb INNER JOIN guide_assign_tb ON user_creation_tb.ID=guide_assign_tb.Student_Id  where Guide_Id=$id";
		   $d=mysqli_query($conn_string,$p);  
		   ?> 
						<ul>
							<li class="head bg-primary">Students</li>
							<?php
							 while($row=mysqli_fetch_array($d))
                            {
								//session_start();
		                       //$_SESSION['stud']=$row['Sender'];
								?>
							<li><a href="setsession.php?sname=<?php echo $row['Sender'];?>">
									<div class="chat-left">
										<img class="img-circle" src="../images/user.png" alt="">
										
									</div>
									<div class="chat-right">
									<form>
									<input type="hidden" name="sname" value="<?php echo $row['Sender'];?>">
										<p><label><?php echo $row['Sender'];?></label></p>
										<h6></h6>
									</form>
									</div>
									<div class="clearfix"></div>				
									</a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
				<div class="col-md-12 compose-right widget-shadow">
				<div class="activity_box activity_box1">
					<h3>Message</h3>
					<div class="scrollbar" id="style-3">
						<div class="activity-row activity-row1" style="display:none">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='../images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="Message_Action.php" method="post">
						<input type="text" value="Enter your text" name="msg" id="msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" id="butsave" value="Send"/>		
					</form>
				</div>
				
			</div>
			</div>
				</div>
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="../js/Chart.bundle.js"></script>
    <script src="../js/utils.js"></script>
	
	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="../js/classie.js"></script>
		
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='../js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="../js/SimpleChart.js"></script>
   
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
	 <script type="text/javascript">
			$('#butsave').on('click',function(event)
			{
				event.preventDefault();
				
	var message = $('#msg').val();
	//alert(message);
    $.ajax({
      type:'POST',
      url:'Message_Action.php',
      data:{
		  message:message
      },
	   cache: false,
      success: function(data){
    //alert(data);	
 //console.log(response);
        },
            	
    });
  document.getElementById('msg').value = ''
  	  $("#style-3").animate({ scrollBottom: $(document).height() }, "fast");  });

</script>	
</body>
</html>																																																																																																																																																																																																																																																											