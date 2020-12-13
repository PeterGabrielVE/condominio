@extends('layouts.app')

@section('content')
<div class="main-content">
        
        
        
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card card-block no-border bg-primary">
              <div class="card-title text-center">
                <h5 class="m-a-0 text-uppercase">Weekly projections</h5>
                <small>the quick brew</small>
              </div>
              <div class="canvas-holder">
                <div class="chart labels-white dashboard-bar2" style="height:71px"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="row">
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">dax</h6>
                    <small class="bold text-muted">10,499.71</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-danger">-2.56%</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">Appl</h6>
                    <small class="bold text-muted">114.72</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-success">+0.84%</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">Dow j</h6>
                    <small class="bold text-muted">17,392.22</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-danger">-1.30%</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card card-block no-border bg-white row-equal align-middle">
                  <div class="column">
                    <h6 class="m-a-0 text-uppercase">Goog</h6>
                    <small class="bold text-muted">651.23</small>
                  </div>
                  <div class="column">
                    <h3 class="m-a-0 text-success">+1.34%</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="card card-block no-border bg-white">
              <div class="circle-icon bg-info text-white m-r">
                <i class="icon-bulb"></i>
              </div>
              <div class="overflow-hidden" style="margin-top:1px;">
                <h4 class="m-a-0">932K</h4>
                <h6 class="m-a-0 text-muted">Registered users</h6>
              </div>
            </div>
            <div class="card card-block no-border bg-white">
              <div class="circle-icon bg-danger text-white m-r">
                <i class="icon-user"></i>
              </div>
              <div class="overflow-hidden" style="margin-top:1px;">
                <h4 class="m-a-0">8.3K</h4>
                <h6 class="m-a-0 text-muted">Revenue increase</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row same-height-cards">
          <div class="col-md-4">
            <div class="card no-border bg-dark text-white">
              <div class="card-img-overlay p-a-0" style="background: url(images/unsplash/img3.jpeg) no-repeat; background-size: cover;"></div>
              <div class="card-block">
                <div class="">
                  <i class="icon-info pull-right"></i>
                  <h5 class="text-white m-a-0">Visits</h5>
                </div>
                <div class="block m-y dashboard-line2" style="height:150px"></div>
                <div class="">
                  <h5 class="text-white m-a-0 pull-right">Returning: <span class="text-info">456</span></h5>
                  <h5 class="text-white m-a-0">New: <span class="text-info">78</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-white no-border relative" style="min-height:250px">
              <div class="slide absolute tp lt rt bt" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner" role="listbox">
                  <div class="item active" style="background-image:url(http://lorempixel.com/400/400);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;width:100%;height:100%;">
                  </div>
                  <div class="item" style="background-image:url(http://lorempixel.com/400/400?2);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;width:100%;height:100%;">
                  </div>
                  <div class="item" style="background-image:url(http://lorempixel.com/400/400?3);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;width:100%;height:100%;">
                  </div>
                </div>
              </div>
              <div class="absolute tp lt rt bt" style="background:rgba(0,0,0,.1)"></div>
              <div class="card-block">
                <div class="block text-right">
                  <i class="icon-action-redo"></i>
                </div>
                <div class="absolute lt rt bt p-a">
                  <h4>Meet Reactor. Beautifully designed <br>admin pack.</h4>
                  <div class="block">
                    <a href="#" class="card-link m-r-lg">website.com</a>
                    <a href="#" class="card-link"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-warning text-white no-border overflow-hidden" style="min-height:250px">
              <div class="card-block">
                <div class="row">
                  <div class="col-xs-6">
                    <div class="climacon cloud moon fa-5x"></div>
                    <div class="h5 m-a-0">Mostly cloudy</div>
                    <div class="h6 m-a-0">New York</div>
                  </div>
                  <div class="col-xs-6 text-right">
                    <div class="bg-white absolute shadow circle" style="width: 240px;height:240px; top:-100px;right:-80px;"></div>
                    <div class="h1 relative text-color" style="font-size:70px;">76&#176;</div>
                  </div>
                  <div class="text-center absolute lt rt bt p-b">
                    <div class="row-equal">
                      <div class="column">
                        <div class="degree-value bold">23&#176;</div>
                        <div class="small">MON</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">65&#176;</div>
                        <div class="small">TUE</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">45&#176;</div>
                        <div class="small">WED</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">23&#176;</div>
                        <div class="small">THU</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">54&#176;</div>
                        <div class="small">FRI</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">22&#176;</div>
                        <div class="small">SAT</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">45&#176;</div>
                        <div class="small">SAT</div>
                      </div>
                      <div class="column">
                        <div class="degree-value bold">08&#176;</div>
                        <div class="small">SAT</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row same-height-cards">
          <div class="col-md-4">
            <div class="card bg-primary text-white">
              <div class="p-x p-b">
                <div class="text-center" style="margin:120px 0;">
                  <h2 class="m-a-0 text-uppercase">Swiftly</h2>
                  <small class="text-uppercase">and with style</small>
                </div>
                <div class="absolute lt rt bt p-a">
                  <a href="#" class="card-link pull-right"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  <a href="#" class="card-link m-l-0">website.com</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-danger">
              <div class="p-x p-b">
                <div class="text-center" style="margin:105px 0 104px;">
                  <div class="card-circle-icon bg-white icon-bell m-b-md"></div>
                  <div class="text-white">Donec ullamcorper nulla non metus auctor fringilla.</div>
                </div>
                <div class="absolute lt rt bt p-a text-white">
                  <a href="#" class="card-link bold text-uppercase pull-right">Done</a>
                  <a href="#" class="card-link bold text-uppercase m-l-0">Back</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card row-equal align-middle bg-white no-border">
              <div class="column p-a relative">
                <div class="text-center" style="margin:100px 0;">
                  <h4>Etiam porta sem malesuada magna mollis euismod.</h4>
                </div>
                <div class="absolute lt rt bt p-a">
                  <a href="#" class="card-link pull-right"><i class="icon-clock"></i>&nbsp;20m ago</a>
                  <a href="#" class="card-link m-l-0">website.com</a>
                </div>
              </div>
              <div class="column" style="background: url(images/unsplash/img2.jpeg) no-repeat; background-size: cover;background-position: center center;">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
        

@endsection
@section('js')
 <!-- initialize page scripts -->
  <script src="{{asset('js/helpers/sameheight.js')}}"></script> 
  <script src="{{asset('js/ui/dashboard.js')}}"></script> 

  <!-- end initialize page scripts -->
@endsection