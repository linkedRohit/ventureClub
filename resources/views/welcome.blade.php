@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="list-group">
          <button type="button" class="list-group-item active">All Items</button>
          <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
          <button type="button" class="list-group-item">Morbi leo risus</button>
          <button type="button" class="list-group-item">Porta ac consectetur ac</button>
          <button type="button" class="list-group-item">Vestibulum at eros</button>
            <button type="button" class="list-group-item">Cras justo odio</button>
            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
            <button type="button" class="list-group-item">Morbi leo risus</button>
            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
            <button type="button" class="list-group-item">Vestibulum at eros</button>
              <button type="button" class="list-group-item">Cras justo odio</button>
              <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
              <button type="button" class="list-group-item">Morbi leo risus</button>
              <button type="button" class="list-group-item">Porta ac consectetur ac</button>
              <button type="button" class="list-group-item">Vestibulum at eros</button>
                <button type="button" class="list-group-item">Cras justo odio</button>
                <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                <button type="button" class="list-group-item">Morbi leo risus</button>
                <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                <button type="button" class="list-group-item">Vestibulum at eros</button>
        </div>
      </div>
        <div class="col-md-7">
            <div class="row panel panel-default">
               <div class="panel-body">
              <div class="row">
                  <div class="input-group input-group-lg" style="padding:25px 25px 25px 25px;">
                      <input type="text" style="border: none; border-bottom: 1px solid #808080; border-radius:0;" class="form-control" placeholder="What are you looking for?">
                      <div class="input-group-btn">
                        <button class="btn btn-primary" style="border:0px;" type="button"> Search</button>
                      </div>
                    </div>
              </div>
              <div class="row hidden-xs hidden-sm">
                <center>
                  <ul class="list-group">
                    <button type="button" class="btn btn-primary btn-md">
                        <span class="fa fa-scissors" aria-hidden="true"></span> Furniture
                    </button>
                    <button type="button" class="btn btn-secondary btn-md">
                        <span class="fa fa-building-o" aria-hidden="true"></span> Office Space
                    </button>
                    <button type="button" class="btn btn-info btn-md">
                        <span class="fa fa-male" aria-hidden="true"></span> Resources
                    </button>
                    <button type="button" class="btn btn-warning btn-md">
                        <span class="fa fa-coffee" aria-hidden="true"></span> Coffee Network
                    </button>
                    <button type="button" class="btn btn-danger btn-md">
                        <span class="fa fa-suitcase" aria-hidden="true"></span> New Job
                    </button>
                  </ul>
                </center>
              </div>
             </div>
               <div class="panel-footer panel-primary">
                   <div class="row">
                      <div class="col-md-6">
                        <li>Find and Share love among startup buddies</li>
                        <li>Buy, Sell, Rent or Share resources</li>
                      </div>
                      <div class="col-md-6">
                        <li>A Community that helps each other grow</li>
                        <li>Platform to find dream jobs.</li>
                      </div>
                  </div>
               </div>
             </div>

                                 <div class="alert alert-warning" role="alert">Flat <strong>20%</strong> cashback if you pay using PayTM wallet, TnC apply. <a href="#">Know more</a></div>
             <div class="row">
               <fieldset>
                 <legend style="text-align:center;">Featured Products</legend>
                 <div class="row">
                   <div class="col-sm-6 col-md-4">
                     <a href="">
                     <div class="thumbnail">
                       <img src="images/logo.png" alt="3 air conditioners" style="border-bottom: solid #eee 1px; height: 150px; width: 100%; display: block;">
                       <div class="caption">
                         <h4>3 air conditioners</h4>
                         <p>Cras justo odio, dapibus metus. Nullam id  vehicula ut id elit.</p>
                         <p>
                           <a href="#" title="Suggest this product to other people" class="btn btn-xs btn-default" role="button">Suggest <span class="badge">418</span></a>
                           <a href="#" title="Add product to cart" class=" fa fa-plus-circle btn btn-xs btn-danger" role="button"> Add to cart</a>
                         </p>
                       </div>
                     </div>
                   </a>
                   </div>
                   <div class="col-sm-6 col-md-4">
                     <a href="">
                     <div class="thumbnail">
                       <img src="images/logoText.png" alt="25 Dell Laptops" style="border-bottom: solid #eee 1px; height: 150px; width: 100%; display: block;">
                       <div class="caption">
                         <h4>25 Dell Laptops</h4>
                         <p>Cras justo odio, dasd aslsveh asd asd asd asds icula ut id elit.</p>
                         <p>
                           <a href="#" title="Suggest this product to other people" class="btn btn-xs btn-default" role="button">Suggest <span class="badge">198</span></a>
                           <a href="#" class="btn btn-xs btn-danger fa fa-plus-circle" role="button"> Add to cart</a>
                         </p>
                       </div>
                     </div>
                   </a>
                   </div>
                   <div class="col-sm-6 col-md-4">
                     <a href="">
                     <div class="thumbnail">
                       <img src="images/Logo.png" alt="Graphic designer" style="border-bottom: solid #eee 1px; height: 150px; width: 100%; display: block;">
                       <div class="caption">
                         <h4>Airbnb web designer</h4>
                         <p>Nullam id dolor id nibh ultri asd asd asd cies vehicula ut id elit.</p>
                         <p>
                           <a href="#" class="btn btn-xs btn-default" role="button">Suggest <span class="badge">411</span></a>
                           <a href="#" class="btn btn-xs btn-danger fa fa-plus-circle" role="button"> Add to cart</a>
                         </p>
                       </div>
                     </div>
                   </a>
                   </div>
                 </div>
             </fieldset>
             </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info hidden-sm hidden-xs">
                <div class="panel-heading"><span class="fa fa-paper-plane"></span> <b>Best Selling Products</b></div>
                <div>
                  <ul class="list-group">
                      <li class="list-group-item"><h4 class="list-group-item-heading">Akash Mittal, Gurgaon</h4>Laptop bagpack that can carry your gym too.</li>
                      <li class="list-group-item"><h4 class="list-group-item-heading">Sanjeev Kumar, Bengaluru</h4>Dell Laptops under 1 year warranty</li>
                      <li class="list-group-item"><h4 class="list-group-item-heading">Nipun, Chandigarh</h4>Get one coffee free with a kindle</li>
                      <li class="list-group-item"><h4 class="list-group-item-heading">Sunena, Hyderabad</h4>I have Adbobe photoshop license to transfer</li>
                </div>
                <div class="panel-footer">
                  <a href="{{ url('/post') }}" class="btn btn-info">Sell Now <i class="fa fa-btn fa-upload"></i></a>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading"><span class="fa fa-smile-o"></span> <b>Happy Users</b></div>
                <div>
                  <ul class="list-group">
                      <li class="list-group-item"><h4 class="list-group-item-heading">Rohit, Stareup Inc. Noida</h4>I got my office furniture for just 40% of my original estimates.</li>
                      <li class="list-group-item"><h4 class="list-group-item-heading">Kasim, Google Bengaluru</h4>I got graphic designer for half the cost.</li>
                      <li class="list-group-item"><h4 class="list-group-item-heading">Sakshi, Deloitte Gurgaon</h4>I got a lot of entrepreneurs and advice from the network.</li>
                      <li class="list-group-item"><h4 class="list-group-item-heading">Ramanujan, Microsoft Hyderabad</h4>Free OTP solution is awesome.</li>
                </div>
                <div class="panel-footer">
                  <a href="{{ url('/register') }}" class="btn btn-success">Join Now <i class="fa fa-btn fa-group"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
