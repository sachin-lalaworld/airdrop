@extends('layouts.app')
@section('content')
<header class="header bg-fixed gradient-animation">
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <div>
          <h1 class="text-uppercase fs fs-30 ">Dear Community Members! Thank You for making LALA Airdrop a grand success.</h1>
          <!-- <a href="https://tokensale.lalaworld.io/" target="_blank"><h2 style="color: #00ae9e;">Token Sale</h2></a> -->
        </div>
      </div>
      <div class="col-12 col-lg-8 offset-lg-2">
        <h1 class="airdrop-amount text-center hidden-sm-down " style="font-size:150px;">0.00</h1>
        <h1 class="airdrop-amount text-center fs fs-80 hidden-md-up ">0</h1>
        <div>
          <h1 class="text-uppercase fs fs-30 "> LALA Tokens were up for grabs in Airdrop and we have received an overwhelming response</h1>

          <h1 class="text-uppercase fs fs-30 ">LALA Airdrop is closed now</h1>
        </div>
        <br />
        <!-- <button class="btn btn-xl btn-round btn-success " data-scrollto="section-airdrop">
          start
        </button> -->
      </div>
    </div>
  </div>
</header>
<!-- <main class="main-content">
  <section class="section" id="token-profile">
    <div class="container text-center">
      <div class="row text-left">
        <div class="col-md-4">
            <p class="text-black railway">Token Profile</p>
            <hr>
            <p class="text-black railway">Token Name: LALA Token</p>
            <p class="text-black railway">Token Symbol: LALA</p>
            <p class="text-black railway">Parent Company: LALA WORLD PTE. LTD.</p>
            <hr>
              <div class="profile-btn text-center">
                <a href="https://www.facebook.com/MyLaLaWorld" target="_blank">
                  <i class="fa fa-facebook-official profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/MyLaLaWorld" target="_blank">
                  <i class="fa fa-twitter profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://t.me/LaLaWorld" target="_blank">
                  <i class="fa fa-telegram profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/company/13426271/" target="_blank">
                  <i class="fa fa-linkedin profile-icon" aria-hidden="true"></i>
                </a>
                <a href="http://bit.ly/2yiWRE4" target="_blank">
                  <i class="fa fa-slack profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://medium.com/@MyLaLaWorld" target="_blank">
                  <i class="fa fa-medium profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/lalawallet/" target="_blank">
                  <i class="fa fa-instagram profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://www.reddit.com/user/MyLaLaWorld" target="_blank">
                  <i class="fa fa-reddit profile-icon" aria-hidden="true"></i>
                </a>
              </div>
        </div>
        <div class="col-md-8">
          <p class="text-black railway">About LALA</p>
            <hr>
            <p class="text-black" style="font-weight: 400;">LALA World (“LALA”) is all about migrants and their unbanked families. Its an ECOSYSTEM enabled by the LALA Wallet as a PLATFORM, a single sign on platform revolving around their issues and problems. Employment issues, digital ID’s, communities build up, government and NGO partnerships, health issues, and of course, a new financial ecosystem for the huge underbanked population by capitalizing the Blockchain revolution to bridge the gap between cash, digital and the crypto world.
            <br><br>By creating a whole new peer to peer ecosystem, LALA aims to revolutionize the way individuals, small businesses and micro-entrepreneurs transact, make payments, borrow money and associated products like insurances, domestic and Cross-Border remittances, cards and other general banking products.
          </p>
          <hr>
          </div>
      </div>
    </div>
  </section>
  <section class="section" id="section-airdrop">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 task">
          <div class="card card-bordered card-hover-shadow text-center">
            <a class="card-block" target="_blank" href="https://t.me/LaLaWorld">
              <p>
                <i class="fa fa-telegram fs-50 text-muted" style="color:#00a99d !important;"></i>
              </p>
              <h1 class="card-title text-uppercase">Join Our Telegram Channel</h1>
              <span>Step 1</span>

            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 task">
          <div class="card card-bordered card-hover-shadow text-center">
            <a href="javascript:fbShare('Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)">
            <span id="share" class="card-block">
              <p>
                <i class="fa fa-facebook fs-50 text-muted" style="color:#00a99d !important;"></i>
              </p>
              <h1 class="card-title text-uppercase">Share on Facebook</h1>
               <span>Step 2</span>
              <div class="message">
              </div>

            </span>
          </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 task">
          <div class="card card-bordered card-hover-shadow text-center">
            <a class="card-block" target="_blank" href="https://twitter.com/MyLaLaWorld">
              <p>
                <i class="fa fa-twitter fs-50 text-muted" style="color:#00a99d !important;"></i>
              </p>
              <h1 class="card-title text-uppercase">Join Us on Twitter</h1>
               <span>Step 3</span>

            </a>
          </div>
        </div>
      </div>
      <hr />
      <div id="register" class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card card-shadowed p-50  mb-0" style="max-width: 70%; margin-left: 20%;">
            <h5 class="text-uppercase text-center" id="form-head">Fill The Form</h5>
            <form class="form-type-material" method="post" action="#" id="register_user">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">@</span>
                  <input type="text" class="form-control" aria-describedby="basic-addon1" name="telegram" placeholder="Telegram Username" id="telegram">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">@</span>
                  <input type="text" class="form-control" aria-describedby="basic-addon1" name="twitter" placeholder="Twitter Id (Follow us on twitter & get 2x)" id="twitter">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="eth_address" id="eth_address" placeholder="ETH Address">
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              </div>
              
              <button class="btn btn-xl btn-primary" type="submit" style="margin-left: 33%;">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footer" class="footer-section">
    <div class="container footer-width">
      <hr class="footer white" width="100%">
      <div class="container text-center footer-width footer-bottom">
        <p>
        <img class="footer-logo" src="{{asset('/public/img/logo-icon.png')}}">
        </p>
      </div>
    </div>
  </section>
</main> -->
@endsection()
@section('footerjs')
<script type="text/javascript">
 $(document ).ready(function(){
    $('#register_user').submit(function(e){
        e.preventDefault()
        value = $(this).serialize();

        telegram_uname  = $('#telegram').val()
        eth_address     = $('#eth_address').val()
        email           = $('#email').val()

        if(telegram_uname == ''){
          $.notify('Invalid Telegram Username')
          return false
        }
        
        eth_regex  = new RegExp('^0x[a-fA-F0-9]{40}$')

        if (eth_address == '' || !eth_regex.test(eth_address)) {
            $.notify("Invalid Ether Address")
            return false;
        }

        email_regex = new RegExp('^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$')

        if (email == '' || !email_regex.test(email)) {
            $.notify("Invalid Email Address")
            return false;
        }

        response = JSON.parse(ajax_resp('/register',value))
      
        if(response.status == 'succ'){
          $('#form-head').html('Thank You')
          $('#register_user').html('<i class="fa fa-check-circle" aria-hidden="true"></i><br><br><button onclick="redirect_crowdsale()" class="btn btn-xl btn-primary" id="crowdsale" type="button" style="margin-left: 14%;">Participate in Crowdsale</button><p style="margin-left: 31%;padding-top: 4%;font-size: 20px;">Get 5% extra bonus</p>')
        }else{
          $.confirm({
              title: 'Error',
              content: response.msg,
              autoClose: 'cancellation|5000',
              buttons: {
                cancellation: function () {
                }
              }
          });
        }
    });
    function ajax_resp(url,data){
      var tmp = null;
      $.ajax({
          'async': false,
          'type': "POST",
          'global': false,
          'dataType': 'html',
          'url':  url,
          'data': data,
          'success': function (resp) {
              tmp = resp;
          }
      });

      return tmp;
    }
    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pl_PL/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    function pendingBonus(callback) {
        $.getJSON("public/counter.json", function (obj) {
          d3.selectAll(".airdrop-amount")
            .transition()
            .duration(2500)
            .on("start", function repeat() {

              d3.active(this)
                .tween("text", function () {
                  var that = d3.select(this),
                    i = d3.interpolateNumber(that.text().replace(/,/g, ""), obj["counter"]);
                  return function (t) { that.text(format(i(t))); };
                })
                .transition()
                .delay(1500)
              //.on("start", repeat);

            });
      });
    }
    var format = d3.format(",.2f");
    function getCounter(callback) {

      $.getJSON("public/counter.json", function (obj) {
        d3.selectAll(".airdrop-amount")
          .transition()
          .duration(2500)
          .on("start", function repeat() {

            d3.active(this)
              .tween("text", function () {
                var that = d3.select(this),
                  i = d3.interpolateNumber(that.text().replace(/,/g, ""), obj["counter"]);
                return function (t) { that.text(format(i(t))); };
              })
              .transition()
              .delay(2000)
            //.on("start", repeat);

          });
      });
    }
  getCounter();
  $(".task").on("click", function (e) {
    var v = $(this).find(".card-title");
    v.html("<del>" + v.html() + "</dev>");
  })
})
function redirect_crowdsale(){
      window.open(
      'https://tokensale.lalaworld.io/',
      '_blank'
      );
}
function fbShare(title, descr, image, winWidth, winHeight) {
      var winTop = (screen.height / 2) - (winHeight / 2);
      var winLeft = (screen.width / 2) - (winWidth / 2);
      window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flalaworld.io%2F&amp;src=sdkpreparse' + title + '&p[summary]=' + descr + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}
</script>
@endsection()
