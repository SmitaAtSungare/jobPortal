<div id="authBox" class="white_content">
  <div class="logmod__container">
      <a class="close2" id = "closeBox" href = "javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
    <ul class="logmod__tabs">
      <li data-tabtar="lgm-1"><a href="#">Login</a></li>
      <li data-tabtar="lgm-2"><a href="#">Sign Up</a></li>
    </ul>

    <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading"> <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span> </div>
        <div class="logmod__form">          
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <input class="string optional" maxlength="255" id="loginEmail" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <input class="string optional" maxlength="255" id="loginPass" placeholder="Password" type="password" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Log In" id = "loginBtn"/>
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?</a></span> </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container"> <a href="#" class="connect googleplus">
            <div class="connect__icon"> <i class="fa fa-google-plus"></i> </div>
            <div class="connect__context"> <span>Sign in with <strong>Google+</strong></span> </div>
            </a> </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading"> <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span> </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <input class="string optional" maxlength="255" id="signEmail" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <input class="string optional" maxlength="255" id="signPass" placeholder="Password" type="text" size="50" />
              </div>
              <div class="input string optional">
                <input class="string optional" maxlength="255" id="signCPass" placeholder="Repeat password" type="text" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Create Account" id = " "/>
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span> </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container"> <a href="#" class="connect googleplus">
            <div class="connect__icon"> <i class="fa fa-google-plus"></i> </div>
            <div class="connect__context"> <span>Create an account with <strong>Google+</strong></span> </div>
            </a> </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div id="fade" class="black_overlay"></div>

@push('footer')
  <script type="text/javascript" src = "/js/custom/login.js"></script>
@endpush