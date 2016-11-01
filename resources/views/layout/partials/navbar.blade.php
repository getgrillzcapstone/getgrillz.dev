<div class="container-fluid">
    <div class="row navBarRow">
        <div class="col-xs-11 col-sm-11 col-md-4 col-lg-4 navBarContainer">
            <a href="/"><img src="/getgrillz_images/logo.png" class="navbarLogo"></a>
            <h2 class="getGrillz"><a href="/" class="coloredAnchorTag noTextDecoration">GetGrillz</a></h2>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 navBarContainer navBarStuff">
            <ul class="nav navbar-nav navbar-right">
                <li class="navBarListItems"><h3 id="login" data-toggle="modal" data-target="#loginModal">Login/Register</h3></li>
                <li class="navBarListItems"><h3><a href="/your-orders" class="coloredAnchorTag noTextDecoration">Your Orders</a></h3></li>
                <li class="navBarListItems"><h3><a href="/faq-contact" class="coloredAnchorTag noTextDecoration">FAQs/Contact</a></h3></li>
            </ul>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right customHamburgerIcon">
            <img src="/getgrillz_images/hamburgerIcon.png" class="customHamburgerImg">
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
              <form method="POST" action="{{{ action('Auth\AuthController@postLogin') }}}" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="loginmod">
              <input type="hidden" id="token" name="_token" value="{{{csrf_token()}}}">
                  <div class="form-group">
                    <label for="emailLogin">Email address</label>
                    <input type="email" class="form-control" id="emailLogin" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group password">
                    <label for="passwordLogin">Password</label>
                    <input type="password" class="form-control" id="passwordLogin" placeholder="Enter Password" name="password">
                  </div>
                  <div class="form-group confirmPassword">
                    <label for="confirmPasswordLogin">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPasswordLogin" placeholder="Enter Password" name="password_confirmation">
                  </div>
                  <button type="submit" class="btn btn-default continueButton" id="continueButtonLogin">
                      <h4>Continue</h4>
                  </div>
              </form>
          </div>
        </div>

      </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hideHamburgerMenu">
            <div class="hamburgerMenu">
                <ul class="hamburgerMenuLinks">
                    <li class="hamburgerMenuLink" data-toggle="modal" data-target="#loginModal">Login/Register</li>
                    <li class="hamburgerMenuLink"><a href="/your-orders" class="coloredAnchorTag noTextDecoration">Your Orders</a></li>
                    <li class="hamburgerMenuLink"><a href="/faq-contact" class="coloredAnchorTag noTextDecoration">FAQs/Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
