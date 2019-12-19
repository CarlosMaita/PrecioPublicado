<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<title>Buscador</title>
	<style type="text/css">
			.padre {
	  height: 100vh;
	  /*IMPORTANTE*/
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  text-align: center;
	}

	.hijo {
	  width: 100vw;
	}

	 div.scroll
    {
        height: 100vh;
   		overflow: scroll;
   		padding: 56px 0; 
    }
	</style>
</head>
<body onload="all_ok()">

<div class="padre">
  <div class="hijo">
	<div class="preloader-wrapper big active center ">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
</div>
</div>
  </div>



 <nav id="nav_main" style="position: fixed;  top: 0px;">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Logo</a>
  	  <a href="#!" data-target="slide-out" class="sidenav-trigger"><i class="material-icons center">menu</i></a>
  	  <a href="#!" onclick="search_nav(0)"><i class="material-icons right" style="padding: 0 10px">search</i></a>
    </div>
  </nav>

 <nav id="nav_search" style="display: none;position: fixed;  top: 0px;">
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons" onclick="search_nav(1)">close</i>
        </div>
      </form>
    </div>
  </nav>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="imagen/company/empresa2.jpg">
      </div>
      <!-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> -->
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="sidenav-close" href="#!">Cerrar</a></li>
  </ul>

<ul id="slide-config" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="imagen/company/empresa2.jpg">
      </div>
      <!-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> -->
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="sidenav-close" href="#!">Cerrar</a></li>
  </ul>

 <div class="scroll" >
 <div class="row">
 	<div class="col s4">imagen 1</div>
 	<div class="col s4">imagen 2</div>
 	<div class="col s4">imagen 3</div>
 </div>


<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu sodales nisl. In placerat nunc leo, id vestibulum nibh aliquam ac. Morbi hendrerit turpis sit amet magna pretium, vitae consequat libero dictum. Sed pellentesque lectus ut enim ornare, non dignissim risus tincidunt. Vestibulum metus nunc, fringilla nec leo eget, ornare volutpat nunc. Aliquam id sapien eget odio ullamcorper ultricies vel vitae dolor. Pellentesque a ex ex. Sed a facilisis odio, et imperdiet purus. Praesent mollis euismod ligula a rhoncus. Curabitur ut iaculis orci, varius dictum orci. Morbi sed tempus risus, a fringilla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus laoreet sapien vitae malesuada. Morbi sit amet nisl dignissim, luctus nunc ac, faucibus leo. Quisque a quam id tortor auctor sollicitudin.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu sodales nisl. In placerat nunc leo, id vestibulum nibh aliquam ac. Morbi hendrerit turpis sit amet magna pretium, vitae consequat libero dictum. Sed pellentesque lectus ut enim ornare, non dignissim risus tincidunt. Vestibulum metus nunc, fringilla nec leo eget, ornare volutpat nunc. Aliquam id sapien eget odio ullamcorper ultricies vel vitae dolor. Pellentesque a ex ex. Sed a facilisis odio, et imperdiet purus. Praesent mollis euismod ligula a rhoncus. Curabitur ut iaculis orci, varius dictum orci. Morbi sed tempus risus, a fringilla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus laoreet sapien vitae malesuada. Morbi sit amet nisl dignissim, luctus nunc ac, faucibus leo. Quisque a quam id tortor auctor sollicitudin.
</p>


  
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu sodales nisl. In placerat nunc leo, id vestibulum nibh aliquam ac. Morbi hendrerit turpis sit amet magna pretium, vitae consequat libero dictum. Sed pellentesque lectus ut enim ornare, non dignissim risus tincidunt. Vestibulum metus nunc, fringilla nec leo eget, ornare volutpat nunc. Aliquam id sapien eget odio ullamcorper ultricies vel vitae dolor. Pellentesque a ex ex. Sed a facilisis odio, et imperdiet purus. Praesent mollis euismod ligula a rhoncus. Curabitur ut iaculis orci, varius dictum orci. Morbi sed tempus risus, a fringilla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus laoreet sapien vitae malesuada. Morbi sit amet nisl dignissim, luctus nunc ac, faucibus leo. Quisque a quam id tortor auctor sollicitudin.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu sodales nisl. In placerat nunc leo, id vestibulum nibh aliquam ac. Morbi hendrerit turpis sit amet magna pretium, vitae consequat libero dictum. Sed pellentesque lectus ut enim ornare, non dignissim risus tincidunt. Vestibulum metus nunc, fringilla nec leo eget, ornare volutpat nunc. Aliquam id sapien eget odio ullamcorper ultricies vel vitae dolor. Pellentesque a ex ex. Sed a facilisis odio, et imperdiet purus. Praesent mollis euismod ligula a rhoncus. Curabitur ut iaculis orci, varius dictum orci. Morbi sed tempus risus, a fringilla tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus laoreet sapien vitae malesuada. Morbi sit amet nisl dignissim, luctus nunc ac, faucibus leo. Quisque a quam id tortor auctor sollicitudin.
</p>
 	
 </div>

 <nav  id="nav_main" style="position: fixed;  bottom: 0px;">
    <div class="nav-wrapper">
       <ul class="center">
        <li  class="center"><a href="sass.html"> <i class="material-icons">home</i></a></li>
        <li  class="center"><a href="badges.html"> <i class="material-icons">search</i></a></li>
        <li  class="center"><a href="collapsible.html"><i class="material-icons">local_offer</i></a></li>
        <li  class="right"><a href="#!" data-target="slide-config" class="sidenav-trigger"> <i class="material-icons">account_circle</i></a></li>
      </ul>
    </div>
  </nav>
</body>
<script type="text/javascript">
  function search_nav(id){
  	if (!id){
  	$("#nav_search").show();
  	$("#nav_main").hide();
  	$("input#search").focus();
  	}else{
  	$("#nav_main").show();
  	$("#nav_search").hide();

  	}

  }
 

   $('.scroll').scroll(function() {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            alert('Bottom reached!');
        }
    });

  function all_ok(){
  	$(".padre").delay(200).fadeOut(500);
  }
	 // Or with jQuery
  
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });



</script>
</html>