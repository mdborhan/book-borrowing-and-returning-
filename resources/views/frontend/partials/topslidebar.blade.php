  
<style>
#a1{
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
    height: 50px;
    width: 50px;
    margin-top: 100px;
    margin-left: 20px;
    margin-right: 20px;
    font-size:20px;
}

#a1:hover {
    background-color: blueviolet;
    color: black;
}

.previous {
    background-color:blue;
    color: white;
}

.next {
    background-color:blue;
    color: white;
}

.round {
    border-radius: 50%;
}
</style>

<div class="row" style="max-height:200px; margin-bottom:50px; margin-top:20px;" >
 

<div class="col-md-12" style="">
 <div id="carouselExampleIndicators" class="carousel slide bg-dark" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  
  <div class="carousel-inner">
   
    <div class="carousel-item active">
      <img class="d-block" style="height:250px; width:100%;" src="{{ asset('images/topsidebarimages/b2.jpg') }}" alt="First slide">
    </div> 
    <div class="carousel-item">
      <img class="d-block" style="height:250px; width:100%;"   src="{{ asset('images/topsidebarimages/b1.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " style="height:250px; width:100%;"  src="{{ asset('images/topsidebarimages/b3.jpg') }}" alt="Third slide">
    </div>
     
     <div class="carousel-item">
      <img class="d-block " style="height:250px; width:100%;"  src="{{ asset('images/topsidebarimages/b4.jpg') }}" alt="Third slide">
    </div>
   
  </div>
  <a id="a1" class="carousel-control-prev previous round" href="#carouselExampleIndicators" role="button" data-slide="prev">
    &#8249;
  </a>
  <a id="a1" class="carousel-control-next next round" href="#carouselExampleIndicators" role="button" data-slide="next">
   
&#8250;
  </a>
  
</div>

</div>

 
</div>