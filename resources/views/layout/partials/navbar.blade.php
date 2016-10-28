{{-- <div class="container-fluid">
    <div class="row customNavbar2">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 navbarLogo2">
            <a href="/"><img src="/getgrillz_images/logo.png" class="navbarLogo"></a>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-5">
            <a href="/" class="navbarLinks"><h2>GetGrillz</h2></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 navbarFAQ">
            <a href=""><h2 class="navbarLinks" style="display: inline-block;">Login</h2></a>
            {{-- <a href=""><h2 class="navbarLinks" style="display: inline-block;">Logout</h2></a> --}}
            {{-- <a href="/your-orders"><h2 class="navbarLinks" style="display: inline-block;">Your Orders</h2></a>
            <a href=""><h2 class="navbarLinks" style="display: inline-block;">FAQs/Contact</h2></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 hamburgerIcon">
            <button type="button" class="navbar-toggle collapsed hamburgerIconButton" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <img src="/getgrillz_images/hamburgerIcon.png" class="hamburgerIcon">
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li class=""><a href="#">Login</a></li>
          <li class=""><a href="#">Your Orders</a></li>
          <li class="pull-right"><a href="#">FAQs/Contact</a></li>
      </ul>
    </div>
</div> --}}

<div class="container-fluid">
    <div class="row navBarRow">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 navBarContainer">
            <a href="/"><img src="/getgrillz_images/logo.png" class="navbarLogo"></a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 navBarContainer">
            <h2 class="getGrillz"><a href="/" class="coloredAnchorTag noTextDecoration">GetGrillz</a></h2>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 navBarContainer navBarStuff">
            <ul class="nav navbar-nav navbar-right">
                <li class="navBarListItems"><h3 id="login" data-toggle="modal" data-target="#loginModal">Login/Register</h3></li>
                <li class="navBarListItems"><h3><a href="/your-orders" class="coloredAnchorTag noTextDecoration">Your Orders</a></h3></li>
                <li class="navBarListItems"><h3><a href="/faq-contact" class="coloredAnchorTag noTextDecoration">FAQs/Contact</a></h3></li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Please Enter Your Email</h4>
          </div>
          {{-- <div class="modal-body"> --}}
          <div class="modal-footer loginModal" id="loginModal">
              {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Login</button> --}}
          {{-- </div> --}}
              <form class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label for="emailLogin">Email address</label>
                    <input type="email" class="form-control" id="emailLogin" placeholder="Enter email">
                  </div>
                  <div class="form-group password" id="passwordLogin">
                    <label for="passwordLogin">Password</label>
                    <input type="password" class="form-control" id="passwordLogin" placeholder="Enter Password">
                  </div>
                  <div class="form-group confirmPassword" id="confirmPasswordLogin">
                    <label for="confirmPasswordLogin">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPasswordLogin" placeholder="Enter Password">
                  </div>
                  <div class="btn btn-default continueButton" id="continueButtonLogin">
                      <h4>Continue</h4>
                  </div>
              </form>
          </div>
        </div>

      </div>
    </div>
</div>
