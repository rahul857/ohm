@extends('Master')



@section('container')


<!-- <hr/>

<h3>{{$oldages->name}}</h3>
<h3>{{$oldages->email}}</h3>
<img style="border-radius: 60px;" width="7%" src="{{url('/uploads//'.$oldages->image)}}" alt="">

</div> -->
//CSS
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway);
html, *, h1 {
  font-family: "Raleway";
}

.bg {
  background: url(https://i.imgur.com/GX6pCPB.jpg);
  background-size: cover;
  height: 500px;
  color: white;
  -webkit-transform: rotate(360deg);
}
.bg h1 {
  margin-top: 50px;
  font-size: 50px;
  font-weight: 900;
  color: white;
}
.bg h3 {
  color: white;
}
.bg hr {
  margin-top: 30px;
  width: 100px;
}
.bg .btn {
  padding: 10px 30px;
  font-size: 20px;
  margin-left: 5px;
}
.bg .btn-primary {
  background: #FFC700;
  border: 2px solid #FFC700;
}
.bg .btn-primary:Hover {
  background: black;
  border: 2px solid black;
}
.bg .btn-default {
  background: white;
  border: 2px solid white;
  color: black;
}
.bg img {
  width: 200px;
  display: block;
  border-radius: 100%;
  margin: 0 auto;
  margin-top: 60px;
  border: 5px solid #ffffff;
  box-shadow: 0 0 10px 3px #000;
}

.navbar {
  background-color: transparent;
  border-color: transparent;
}
.navbar-nav li a {
  color: white;
}

.navbar-nav li a:hover {
  background-color: transparent;
  color: black;
}

.sec {
  font-family: "Raleway", san-serif;
  font-weight: 500;
}
.sec h1 {
  text-align: center;
  color: #2c3e50;
  font-weight: 500;
  margin-top: 0px;
  font-weight: bold;
}
.sec h1 span {
  color: #FFC700;
}
.sec hr {
  width: 50px;
  border-bottom: 2px solid black;
}

.sec.first {
  height: 500px;
  padding-top: 150px;
  background: url("https://i.imgur.com/Mv90nfj.jpg");
  text-align: center;
}
.sec.first .grey {
  color: black;
}

.sec.second {
  padding-top: 50px;
  padding-bottom: 50px;
  text-align: center;
}
.sec.second .heading {
  padding: 20px;
}
.sec.second a {
  border: 1px solid #ddd;
  width: 100%;
  display: inline-block;
  color: #2c3e50;
  transition: border 0.5s ease;
}
.sec.second a:hover {
  text-decoration: none;
  border: 1px solid #FFC700;
  box-sizing: border-box;
}
.sec.second img {
  width: 100%;
  border-bottom: 5px solid #FFC700;
  display: block;
}

.top-50 {
  margin-top: 50px;
}

footer {
  padding: 20px;
  background-color: #1a242f;
  height: 50px;
  color: #fff;
}
</style>
//HTML

<h3 class="pt-5">Information:</h3>

<div class="bg">
  <div class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#work">Previous Work</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <div class="container text-center bg-text" style="margin-top:-250px ;">
    <h1>{{$oldages->name}}</h1>
    <h3>Web Developer</h3>
    <hr>
    <!-- <a href="https://github.com/OmranAbazid" class="btn btn-primary">Github</a>
    <a href="https://twitter.com/omran_abazid" class="btn btn-default">Twitter</a> -->
    <br />
  </div>
  <img style="border-radius: 60px;" width="7%" src="{{url('/uploads//'.$oldages->image)}}" alt="">
</div>
<div id="skills" class="sec first" style="margin-top:-250px ;">
  <h1>Hello, Everyone.</h1>
  <h1> My name is {{$oldages->name}}.</h1>
  <h3>{{$oldages->email}}</h3>
  <p>{{$oldages->name}}, 35 years young, born and grew up in Bangladesh. living in Banhladesh.</p>
  <hr />
  </br>
  </br>
  <p class='grey'>I currently work as a web Developer at The Center of Entrepreneurship, Qatar University</br>i am also a computer engineering undergraduate student in the same university</p>
  </br>
  <a href="" class="btn btn-primary">DOWNLOAD RESUME</a>
  </p>
</div>
<div id="work" class="sec second">
  <h1>PREVIOUS WORK</h1>
  <hr />
  <div class="top-50"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="">
          <img src="https://i.imgur.com/BBOl0Lf.jpg" alt="">
          <div class="heading">
            <h3>FAFS Conference</h3>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="https://i.imgur.com/BBOl0Lf.jpg" alt="">
          <div class="heading">
            <h3>FAFS Conference</h3>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="https://i.imgur.com/BBOl0Lf.jpg" alt="">
          <div class="heading">
            <h3>FAFS Conference</h3>
          </div>
        </a>
      </div>
    </div>
    <div class="top-50"></div>
    <div class="row">
      <div class="col-md-4">
        <a href="">
          <img src="https://i.imgur.com/BBOl0Lf.jpg" alt="">
          <div class="heading">
            <h3>FAFS Conference</h3>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="https://i.imgur.com/BBOl0Lf.jpg" alt="">
          <div class="heading">
            <h3>FAFS Conference</h3>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="https://i.imgur.com/BBOl0Lf.jpg" alt="">
          <div class="heading">
            <h3>FAFS Conference</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<footer class='footer'>
  <div class="container">
    <p class="text-center">Created By Omran Abazid</p>
  </div>
</footer>


    







@endsection


