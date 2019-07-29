
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta property="og:title" content="Welcome to UTF"></meta>
 		
		<meta property="og:description" content="" /> 
		
		<title>UFT | welcome</title> 

		<link rel="canonical" href="https://blog.gitea.io/2016/12/welcome-to-gitea/">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://blog.gitea.io/styles/main.css">

		<link rel="shortcut icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<link rel="icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<style>
		 	body{ background:linen; }
		 	#headline{font-size:30px; font-weight:400; border-bottom:3px solid black; padding-top:10px; color:green;}
		 	a{text-decoration:none; } 
		 	td,th{ padding-left:15px; padding-right:15px; }
		 	tr:nth-child(odd){ background:wheat; }
		 	th{text-align:left; background:burlywood; }
		 	
		 	.navbar-brand{position:absolute; left:5%; top:4px; border:1px solid black; padding-right:4px; padding-left:4px; z-index:10; border-radius:4px; background:wheat; font-weight:800; font-size:40px;} 
		 	#topMenu{position:absolute; left:0%; top:0px; border:1px solid red; width:100%; padding:4px; padding-right:50px; background:skyblue; color:black; border-top:3px solid gray; }
		 	#topMenu a{float:left; margin-left:4px;font-weight:800; border:1px solid white; padding:4px; background:wheat; border-radius:3px; }
		 	#add-more-container{position:absolute; top:5px; min-width:100px; left:84%; background:linen; border-radius:5px; padding:4px; color:gray;}
		 	#add-more-container:hover{border:2px solid gray; color:white}
		 	#add-more-button{font-size:20px; color:gray; }
		 	#recomendr_div{position:absolute; left:2%; top:280px; width:16%; }
		 	#recomendr_div table{border-top:1px solid skyblue;}
		</style>
 
	</head>
	
	
	<body>

			<nav class="navbar">
				<div class="container">  
					<div class="navbar-menu" id="topMenu">
						<div class="navbar-end">   
							<a class="navbar-item" href="/members"> Members  </a> 
							<a class="navbar-item" href="/agents"> Agents </a> 
							<a class="navbar-item" href="payments">  Payments </a>
							<a class="navbar-item" href="/districts">  Districts </a> 
							<a class="navbar-item" href="/donations"> Donations </a> 
							<a class="navbar-item" href="/home"> Home </a>   
						</div>
					</div>
					<div class="navbar-background" id="navbar-background"></div>
				</div>
			</nav>

			@yield('content')

	</body>
</html>


