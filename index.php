<?php
session_start();
//session started
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Fee collection system</title>
        <!---->
        <!--icon-->
        <link rel="icon" href="assets/frontend/img/icon/icon.gif" />
        <!--css-->
        <link rel="stylesheet" href="assets/frontend/w3css/w3.css" />
        <link rel="stylesheet" href="assets/frontend/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/frontend/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!--js-->
        <script type="text/javascript" src="assets/frontend/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/frontend/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<style type="text/css"> 
		body{
			background:black;
		}
        .navbar {
			z-index:999;
            padding: 15px;
            background:black;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            font-weidth:bold;
            letter-spacing: 1px;			
        }
        .navbar-nav li a:hover {
           // color: tomato !important;
        }
        .container-fluid{
            padding-top:20px;
            padding-bottom:20px;
        }
			.bg-header{
				background:black;
				height:500px;
				background-image: url('assets/frontend/img/bg/bgNormal.gif');
				background-size: cover;
				background-position: left top;
				background-attachment:fixed;
				width: 100%;
			}
			.bg-header:hover{
				background-image: url('assets/frontend/img/bg/IMG_20150217_11034222.gif');
			}
			.bg-content{
				height:400px;	
				background:black;
			}
			.bg-content-body{
				margin:0;
				height:400px;
				width:100%;
				//background:#3A3A3A;
				color:#1ABB9C;
			}
			.bg-content-body .address{
				text-decoration:underline;
				 text-decoration-style: wavy;
				 text-decoration-color: #1ABB9C;
			}
			footer{
				background:black;
				color:tomato;
				padding:25px;
				min-height:50px;
				border-top:3px solid #1ABB9C;
			}
			footer a{				
				color:tomato;
			}	
		  .slideanim {visibility:hidden;}
		  .slide {
			  animation-name: slide;
			  animation-duration: 1s;
			  visibility: visible;
		  }
		  @keyframes slide {
			0% {
			  opacity: 0;
			  transform: translateY(70%);
			} 
			100% {
			  opacity: 1;
			  transform: translateY(0%);
			}
		  }
		</style>
   </head>
<body>
	<nav class="navbar navbar-inverse" style="position:sticky; top:0; left:0;">
		<div class="navbar-header w3-animate-right">
			<div class="navbar-brand">
				<p>Fee collection System</p>
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#navbarBody">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-right container  w3-animate-left" id="navbarBody">			
			<ul class="nav navbar-nav"> 
				<li><a href="">home</a></li>
				<li><a href="#footer">footer</a></li>
				<?php
					if(isset($_SESSION['fcs_activation_status'])&&(($_SESSION['fcs_activation_status']==1)&&($_SESSION['deleteStatus']==0))){
				?>
				<li><a href="admin/">Dashboard</a></li>
				<?php
					}else{
						?>
				<li><a href="admin/">login</a></li>						
						<?php
					}
				?>
			</ul>
		</div>
	</nav>
	<div class="">
		<div class="container-fluid bg-header" id='search'>
		</div>
		<div class="container-fluid bg-content" id="gelery">
			<div class="container bg-content-body slideanim">
				<div class="row">
					<div class="col-md-5 text-right text-danger w3-animate-fading">
						<h3 class='address'>Previus address</h3>
						<address>
							<p>
								Islami Bank plaza (5th floor)
							</p>
							<p>
								kazi nazrul islam road, sadar, sathmatha
							</p>
							<p>
								Bogura
							</p>
						</address>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-5">						
						<h3 class='address'>Pressent address</h3>
						<address>
							<p>IBIT Campas</p>
							<p>Rangpur road, fultola, banani</p>
							<p>Bogura</p>
							<p  title='call'>
								<b>Dirrect call:</b> <a href="tel:0000000"><span class="glyphicon glyphicon-earphone"></span></a>
							</p>
							<p title='message'>
								<b>Message:</b> <a href="sms:0000000"><span class="glyphicon glyphicon-send"></span></a>
							</p>
						</address>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id='footer'> 
		<div class="row  w3-animate-bottom">
			<div class="col-sm-4  w3-animate-right">
				<strong> Developed by</strong> <p><a href="assets\frontend\img\developer\1.jpg">zahid hasan</a></p>
			</div>
			<div class="col-sm-4  w3-animate-zoom">
				<center>					
					<strong>Contact us</strong>
					<p>017......</p>
					<p>ibit@yahoo.com</p>
				</center>
			</div>
			<div class="col-sm-4  w3-animate-left">
				<div class="text-right">
					<strong> Islami bank institute of technology</strong>
					<address> IBIT campus, banani, bogura.</address>
				</div>
			</div>
		</div>
		<div class="row">
			<p class="text-right">&copy2020</p>
		</div>
	</footer>
	
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 180) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>