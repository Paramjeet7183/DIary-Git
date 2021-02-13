<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DIARY</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>


<style>
body{
	background-color: #FCF2D8;
	height: 100vh;
}
/*font-family: 'Montserrat', sans-serif;*/

/*.container h1 {
	font-size: 20em;
	font-family: 'Montserrat', sans-serif;
	text-align: center;
	font-weight: 300px;
	color: black;
}
*/

h1.hh {
  writing-mode: vertical-rl;
   font-size:6em;
  font-family: 'Prompt', sans-serif;
  /*color: rgb(0,0,0,0.1);*/
  -webkit-text-stroke: 1px black;
  letter-spacing: 4px;
  word-spacing: 5px;
    color: transparent;

}
.a11 {
  text-decoration: none;
  font-size: 1.2em;
  color: black;
}


#two {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: right;

}

.box {
  height: 100%;
  overflow: hidden;
  position: absolute;
}
.box::before {
  top: 0;
  left: 0;
  width: 100%;
  content: '';
  height: 0px;
  position: absolute;
 /* background: linear-gradient(180deg, #ff8e71, rgba(255, 142, 113, 0));*/
}
.box::after {
  left: 0;
  bottom: 0;
  width: 100%;
  content: '';
  height: 10px;
  position: absolute;
/*  background: linear-gradient(180deg, rgba(255, 142, 113, 0), #ff8e71);*/
}
.ul1 {
  float: right;
  margin: 0;
  padding: 0;
  -webkit-animation: scrollUp 60s ease-in-out infinite normal;
          animation: scrollUp 60s ease-in-out infinite normal;
}
.ul1 li {
  opacity: 1;
  height: 100%;
  padding: 0;
  list-style: none;
}

@-webkit-keyframes scrollUp {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  to {
    -webkit-transform: translateY(-80%);
            transform: translateY(-80%);
  }
}

@keyframes scrollUp {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  to {
    -webkit-transform: translateY(-80%);
            transform: translateY(-80%);
  }
}

.navbar {
  right: 0;
  overflow: hidden;
  background-color: transparent;
  position: fixed;
  width: 50%;
  padding-left:10em;
  word-spacing: 10px;
}

.navbar a {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 2em;
  letter-spacing: 4px;
  font-family: 'Montserrat', sans-serif;
}

.navbar a:hover {
  color: grey;
}
.notes {
	width: 70%;
	right: 0;
	height: 80%;
	bottom: 0;
	background-color: transparent;
	position: fixed;
}
.notes h1 {
	font-size: 3em;
	font-family: 'Acme', sans-serif;
}

.notes p {
	font-size: 1.5em;
	font-family: 'Noto Sans', sans-serif;
}
.title{
	position: fixed;
	top: 0;
  left: 25%;
	right: 25%;
	width: 50%;
	height: 200px;
	align-self: center;
	background-color: transparent;
	text-align: center;


}

.title a {
	text-align: center;
	text-decoration: none;
	margin: 40px auto;
  font-family: 'Ubuntu', sans-serif;
  font-size: 80px;
  font-weight: bold;
  color: #FF0000;
  text-align: center;
  letter-spacing: 5px;
  text-shadow: 0 2px 2px #FF0000, 
      -2px 5px 0 #FF7F00, 
      -4px 10px 0 #FFFF00,
      -8px 15px 0 #00FF00,
      -12px 20px 0 #0000FF,
      -16px 25px 0 #4B0082,
      -20px 30px 0 #9400D3;
}
@import url('https://fonts.googleapis.com/css?family=Ubuntu');

</style>


<body>
<div class="navbar">
	@if (Route::has('login'))
	@auth
  <a href="{{ url('/homes') }}">DASHBOARD</a>
  @else
  <a href="{{ route('login') }}">LOGIN</a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}">REGISTER</a>
  @endif
  @endauth
  @endif
</div>
<div class="title"><a href="">MY DIARY</a></div>
<div class="notes">
	<h1>What are You Writing For ?</h1><br>
	<p>Whether you’re looking for a tool to record your daily emotions and activities in a reflective journal, keep track of milestones in a food diary, or record your dreams in a dream journal, MyDiary has you covered.
	We gives you all the tools you need to focus on the ideas you want to preserve, rather than the process of writing itself.</p>
</div>
<div id ="two">
<div class="box">
  <ul class="ul1">
  	<li class="item-1"><h1 class="hh"><a class="a11" href="#">T<a>HIS IS</h1></li>
  	<li class="item-1"><h1 class="hh"><a class="a11" href="#">Y<a>OUR</h1></li>
  	<li class="item-1"><h1 class="hh"><a class="a11" href="#">DIARY,<a></h1></li>
    <li class="item-1"><h1 class="hh"><a class="a11" href="#"><a>HERE</h1></li>
    <li class="item-2"><h1 class="hh"><a class="a11" href="#">W<a>RITE</h1></li>
    <li class="item-3"><h1 class="hh"><a class="a11" href="#">Y<a>OUR</h1></li>
    <li class="item-4"><h1 class="hh"><a class="a11" href="#">F<a>EELINGS,</h1></li>
    <li class="item-5"><h1 class="hh"><a class="a11" href="#">Y<a>OUR</h1></li><br>
    <li class="item-5"><h1 class="hh"><a class="a11" href="#">D<a>AY</h1></li><br>
    <li class="item-5"><h1 class="hh"><a class="a11" href="#">E<a>XPRESS</h1></li><br>
    <li class="item-5"><h1 class="hh"><a class="a11" href="#">E<a>MOTION</h1></li>
  </ul>  
</div>
</div>
</body>
</html>