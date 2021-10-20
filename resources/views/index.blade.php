@extends('Layouts.Navbar')
@section('title','Home')
@section('content')
    
<div class="container mx-5 " style="margin-top: 20px;">
  <div class="row">
      <div class="card" style="width: 18rem;">
       <img src="Storage\Logo\physics.jpg" width="170" height="100"  class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Physics</h5>
        <p class="card-text">If you stat physics quize then you click under the buttom...</p>
           <a href="#" class="btn btn-primary">Strat Now</a>
         </div>
        </div>

       <div class="card" style="width: 18rem; margin-left:10px">
       <img src="Storage\Logo\computer.jpg" width="150" height="100" class="card-img-top" alt="...">
       <div class="card-body">
      <h5 class="card-title">computer</h5>
      <p class="card-text">If you start computer quiuze click under the buttom...  </p>
      <a href="#" class="btn btn-primary">start Now</a>
    </div>
   </div>
  </div>
</div>
<div class="footer">
  <h3>@copyright by pinaki-----@@</h3>

  </div>
@endsection