<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test Materialize</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
	<nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo">Use Materialize</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
			   	<li><a href="sass.html">Login</a></li>
			    <li><a href="badges.html">Register</a></li>
			    <li><a href="collapsible.html">JavaScript</a></li>
			</ul>
	    </div>
  	</nav>

  <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

  
     

  	
        
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script >
		$(function(){
			$(".button-collapse").sideNav();
		})
	</script>
  	
  	
</body>
</html>