<!DOCTYPE html>  
<html>  
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
body{
  margin: 0px;
  padding: 0px;
  font-family: 'Lato', sans-serif;
  padding-top: 40px;
}
.container{
  width: 100%;
}
.container-pic{
  max-width: 100%;
}
header {
    background: #DEDEDE;
    height: 80px;
    position: fixed;
    top: 0;
    transition: top 0.2s ease-in-out;
    width: 100%;
    z-index: 2;
}
.nav-up{
  top: -80px;
}
.carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .grid-item {
    padding: 5% 5% 5% 5%;
    background: #fff;
    box-shadow: 1px 1px 5px #999999;
    border: 1px solid #fff;
  }
  .grid-item_news{
    background: #fff;
    border-bottom: 1px solid #c4c4c4;
    border-left: 1px solid #c4c4c4;
    border-right: 1px solid #c4c4c4;
  }
h1{
  margin: 2em 0px;
  padding: 0px;
  color: #fff;
  text-align: center;
  font-weight: 100;
  font-size: 50px;
}

@import url(https://fonts.googleapis.com/css?family=Lato);

*, *:before, *:after{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans-serif;
}

/*| Navigation |*/

nav{
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  background: #fff;
  box-shadow: 0 3px 10px -2px rgba(0,0,0,.1);
  border: 1px solid rgba(0,0,0,.1);
  z-index: 2;
    font-family: 'Lato', sans-serif;
}
  nav ul{
    list-style: none;
    position: relative;
    display: inline-table;
    margin-bottom: 0;
    margin-top: 8px;
  }
    nav ul li{
      float: left;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
    }

    nav ul li:hover{background: rgba(0,0,0,.15);}
    nav ul li:hover > ul{display: block;}
    nav ul li{
      float: left;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
    }
      nav ul li a{
        display: block; 
        padding: 5px 10px ;
        color: #222; 
        font-size: .9em;
        letter-spacing: 1px;
        text-decoration: none;
        text-transform: uppercase;
      }
      nav ul ul{
        display: none;
        background: #fff;
        position: absolute; 
        top: 100%;
        box-shadow: -3px 3px 10px -2px rgba(0,0,0,.1);
        border: 1px solid rgba(0,0,0,.1);
      }
        nav ul ul li{float: none; position: relative;}
          nav ul ul li a {
            padding: 10px 30px; 
            border-bottom: 1px solid rgba(0,0,0,.05);
          }
          nav ul ul ul {
            position: absolute; 
            left: 100%; 
            top:0;
          } 
.bg-h{
  background: #ebebeb;
}
.line{
  background-color: #fff;
  width: 100%;
}
.headslid{
  margin: 30px 0 0 150px;
  font-size: 30px;
  font-family: 'Lato', sans-serif;
  color: #050040;
}
.headhot{
  margin: 30px 30px 0px 30px;
  font-size: 30px;
  font-family: 'Lato', sans-serif;
  color: #050040;
}
.headhot-b{
  margin: 0px 0px 30px 0px;
  font-size: 16px;
  font-family: 'Lato', sans-serif;
  color: #c4c4c4;
}
    * {
      box-sizing: border-box;
    }
    .slider {
        width: 80%;
        margin: 10px auto;
    }
    .slick-slide {
      margin: 10px 10px;
    }
    .slick-slide img {
      width: 100%;
    }
    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
    .infotext{
      text-align:justify;
      word-wrap:break-word;
      width: 90%; 
      float:right;
      margin-right: 30px; 
    }
    .head_news
    {
       font-size: 18px;
       padding: 10px 10px 10px 10px;
       color: #050040;
       background: #dbdbdb;
       margin-bottom: 20px;
    }
    .oneday
    {
      padding-top: 410px;
      width: 60%;
      text-align: center;
    }
    .row
    {
      padding-top: 30px;
    }
    .table-info-oneday
    {
      line-height : 0.3;
      width: 70%;
      font-size: 10px;
      font-family: 'Lato', sans-serif;
      text-align: center;
    }


</style> 
</head>
<body> 
  <header>
    <div>
    <div>
      <img src = "image/LOGO.png" style="width: 160px" > 
    </div>
    <nav role='navigation' align="center">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a>
            <ul>
              <li><a href="">Our team</a></li>
              <li><a href="">History</a></li>
            </ul>
        </li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    </div>
  </header>

<section class="container-pic">
<div id="demo" class="carousel slide" data-ride="carousel" style="z-index: 0; width: 100%;">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/work51.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/work52.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/work53.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>
<div class="headslid">
  POPULAR TOUR
</div>
<section class="center slider">
    <div>
      <div class="grid-item" style="width: 180px" ><center>
        <img src = "image/work51.jpg" style="width: 160px" > 
        <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
        <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
        </center>
      </div>
    </div>
    <div>
      <div class="grid-item" style="width: 180px" >
        <center>
          <img src = "image/work51.jpg" style="width: 160px" > 
          <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
          <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
        </center>
      </div>
    </div>
    <div>
      <div class="grid-item" style="width: 180px" >
        <center>
          <img src = "image/work51.jpg" style="width: 160px" > 
          <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
          <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
        </center>
      </div>
    </div>
    <div>
      <div class="grid-item" style="width: 180px" >
        <center>
          <img src = "image/work51.jpg" style="width: 160px" > 
          <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
          <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
        </center>
      </div>
    </div>
    <div>
      <div class="grid-item" style="width: 180px" >
        <center>
          <img src = "image/work51.jpg" style="width: 160px" > 
          <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
          <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
        </center>
      </div>
    </div>
    <div>
      <div class="grid-item" style="width: 180px" >
        <center>
          <img src = "image/work51.jpg" style="width: 160px" > 
          <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
          <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
        </center>
      </div>
    </div>
  </section>


  <!-- stard New
  <section class="container">
  <div style="width: 75%; float:left;">
    <div class="row">
        <div class="col-sm-4">
            <div class="grid-item" >
              
              <font size = 3px;>เกาะไข่ ครึ่งวันเช้าและครึ่งวันบ่าย โดย เรือสปีดโบ๊ท</font>
              <button type="button" button style="height:40px;width:150px" class="btn btn-outline-primary">รายละเอียด</button>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="grid-item">
            <font size = 3px;> ดำน้ำ 2 จุด ดำน้ำเกาะไม้ท่อน เกาะเฮ เกาะราชา เต็มวัน ดย เรือสปีดโบ๊ท</font><br>
            <button type="button" button style="height:40px;width:150px" class="btn btn-primary">รายละเอียด</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="grid-item">
            <font size = 3px;> เกาะพีพี 2ไข่ (เกาะไข่นอก เกาะไข่ใน) อ่าวลิง  เต็มวัน เที่ยวจุใจถึง 4 เกาะ โดย เรือสปีดโบ๊ท</font><br>
            <button type="button" button style="height:40px;width:150px" class="btn btn-primary">รายละเอียด</button>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
          <div class="grid-item">  
            <font size = 3px;> เกาะราชา เกาะเฮ เต็มวันโดย เรือสปีดโบ๊ท</font><br>
            <button type="button" button style="height:40px;width:150px" class="btn btn-primary">รายละเอียด</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="grid-item">
            <font size = 3px;> อ่าวพังงา + พายแคนนู เต็มวัน โดย เรือสปีดโบ๊ท</font><br>
            <button type="button" button style="height:40px;width:150px" class="btn btn-primary">รายละเอียด</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="grid-item">
            <font size = 3px;> 3ไข่ เกาะไข่นอก เกาะไข่ใน เกาะนุ้ย เต็มวัน โดย เรือสปีดโบ๊ท</font><br>
            <button type="button" button style="height:40px;width:150px" class="btn btn-primary">รายละเอียด</button>
          </div>
        </div>
      </div>
    </div>
    End New-->
    <!-- start facebook -->
    <div style="width: 25%; float:right;">
     <div class="fb-page" data-href="https://www.facebook.com/krabiandamantourandtransfers/" data-tabs="timeline" data-width="220" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/krabiandamantourandtransfers/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/krabiandamantourandtransfers/">Krabi Andaman Tour and Transfers</a></blockquote>
     </div>
    </div>
    <!-- end facebook -->

  <section class="container" style="width: 75%; float:left;">
    <div class = "infotext">
        <b>Welcome to Krabi Andaman Tour and Transfers</b>
We are a professional and reliable travel and tour company with over 20 years experience in the industry. We pride ourselves in taking care of all of our guests needs and providing a safe, friendly and stress free holiday. We know organizing reliable tours and transfers can be difficult, let us take care of this for you while knowing you are in safe hands.
<br>
<b>Krabi Andaman Tour and Transfer offers</b> a first class, luxury transfer service to and from many locations including Koh Lanta, Krabi, Ao Nang, Phuket and many more. We use only the best drivers who are all licensed and experienced professionals who ensure safety first always. Our vehicles are all new, fully licensed and insured and we guarantee fully inclusive rates (no added charges).

We work with only the most reliable and highly rated tour companies offering our guests a wide range of tours in Koh Lanta, Krabi, Ao Nang, Railay, Koh Phi Phi and Phuket. Tours and activities range from snorkeling, island hopping, scuba diving, fishing, kayaking, elephant trekking, jungle exploring and many more.

We guarantee all our guests will have a great experience using our tour and transport service. We want our guests to feel welcome and cared for whilst in Thailand or even before you arrive. All guests are welcome to get in touch any time, we are always happy to help.

Not sure where to go on your time in Thailand? Not sure what to do while you are here? Get in touch now and let us take away your stress and worries and help you plan your time and get the most out of your holiday in Thailand.

We love to help and we thrive on seeing happy holiday makers.
  </div>
</section>
<section>
<div align="center" >
  <div class="oneday">
    <div class="headhot">
      One Day Trip Excursion
    </div>
    <div class="headhot-b">
    By Speed Boat
    </div>
    <div class="row">
      <div class = "col-sm-6">
        <img src = "image/work51.jpg" style="width: 100%" > 
        <div class="grid-item_news" align="center">
          <div class="head_news" >
            1) ONE DAY ROK ISLANDS TOUR
          </div>
          <div class="table-info-oneday">
            <table class="table">
              <thead>
                <tr>
                  <th>PACKAGES DETAIL</th>
                  <th>TIME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pick up from hotel</td>
                  <td>8.30 am</td>
                </tr>
                <tr>
                  <td>Departs from the Pier</td>
                  <td>9.00 am</td>
                </tr>
                <tr>
                  <td>Arrive at “Koh Rok"</td>
                  <td>9.50 - 10.00 am</td>
                </tr>
                <tr>
                  <td>Departs from “Koh Rok”</td>
                  <td>15.00 am</td>
                </tr>
                <tr>
                  <td>Arrive back the hotel</td>
                  <td>16.00 am</td>
                </tr>
                <thead>
                <tr>
                  <th>ADULT</th>
                  <th>CHILDREN</th>
                </tr>
              </thead>
                <tr>
                  <td>1,500 Baht /person</td>
                  <td>850 Baht /person</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class = "col-sm-6">
        <img src = "image/work51.jpg" style="width: 100%" > 
        <div class="grid-item_news" align="center">
         <div class="head_news" >
            1) ONE DAY ROK ISLANDS TOUR
          </div>
          <div class="table-info-oneday">
            <table class="table">
              <thead>
                <tr>
                  <th>PACKAGES DETAIL</th>
                  <th>TIME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pick up from hotel</td>
                  <td>8.30 am</td>
                </tr>
                <tr>
                  <td>Departs from the Pier</td>
                  <td>9.00 am</td>
                </tr>
                <tr>
                  <td>Arrive at “Koh Rok"</td>
                  <td>9.50 - 10.00 am</td>
                </tr>
                <tr>
                  <td>Departs from “Koh Rok”</td>
                  <td>15.00 am</td>
                </tr>
                <tr>
                  <td>Arrive back the hotel</td>
                  <td>16.00 am</td>
                </tr>
                <thead>
                <tr>
                  <th>ADULT</th>
                  <th>CHILDREN</th>
                </tr>
              </thead>
                <tr>
                  <td>1,500 Baht /person</td>
                  <td>850 Baht /person</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
      <div class="row">
      <div class = "col-sm-6">
        <img src = "image/work51.jpg" style="width: 100%" > 
        <div class="grid-item_news" align="center">
          <div class="head_news" >
            1) ONE DAY ROK ISLANDS TOUR
          </div>
          <div class="table-info-oneday">
            <table class="table">
              <thead>
                <tr>
                  <th>PACKAGES DETAIL</th>
                  <th>TIME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pick up from hotel</td>
                  <td>8.30 am</td>
                </tr>
                <tr>
                  <td>Departs from the Pier</td>
                  <td>9.00 am</td>
                </tr>
                <tr>
                  <td>Arrive at “Koh Rok"</td>
                  <td>9.50 - 10.00 am</td>
                </tr>
                <tr>
                  <td>Departs from “Koh Rok”</td>
                  <td>15.00 am</td>
                </tr>
                <tr>
                  <td>Arrive back the hotel</td>
                  <td>16.00 am</td>
                </tr>
                <thead>
                <tr>
                  <th>ADULT</th>
                  <th>CHILDREN</th>
                </tr>
              </thead>
                <tr>
                  <td>1,500 Baht /person</td>
                  <td>850 Baht /person</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <div class = "col-sm-6">
        <img src = "image/work51.jpg" style="width: 100%" > 
        <div class="grid-item_news" align="center">
          <div class="head_news" >
            1) ONE DAY ROK ISLANDS TOUR
          </div>
          <div class="table-info-oneday">
            <table class="table">
              <thead>
                <tr>
                  <th>PACKAGES DETAIL</th>
                  <th>TIME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pick up from hotel</td>
                  <td>8.30 am</td>
                </tr>
                <tr>
                  <td>Departs from the Pier</td>
                  <td>9.00 am</td>
                </tr>
                <tr>
                  <td>Arrive at “Koh Rok"</td>
                  <td>9.50 - 10.00 am</td>
                </tr>
                <tr>
                  <td>Departs from “Koh Rok”</td>
                  <td>15.00 am</td>
                </tr>
                <tr>
                  <td>Arrive back the hotel</td>
                  <td>16.00 am</td>
                </tr>
                <thead>
                <tr>
                  <th>ADULT</th>
                  <th>CHILDREN</th>
                </tr>
              </thead>
                <tr>
                  <td>1,500 Baht /person</td>
                  <td>850 Baht /person</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
    This is your footer.
</footer>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.0&appId=633256333445092&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

var maxHeight =400;

$(function(){
    $(".dropdown > li").hover(function() {
    
         var $container = $(this),
             $list = $container.find("ul"),
             $anchor = $container.find("a"),
             height = $list.height() * 1.1,       // make sure there is enough room at the bottom
             multiplier = height / maxHeight;     // needs to move faster if list is taller
        
        // need to save height here so it can revert on mouseout            
        $container.data("origHeight", $container.height());
        
        // so it can retain it's rollover color all the while the dropdown is open
        $anchor.addClass("hover");
        
        // make sure dropdown appears directly below parent list item    
        $list
            .show()
            .css({
                paddingTop: $container.data("origHeight")
            });
        
        // don't do any animation if list shorter than max
        if (multiplier > 1) {
            $container
                .css({
                    height: maxHeight,
                    overflow: "hidden"
                })
                .mousemove(function(e) {
                    var offset = $container.offset();
                    var relativeY = ((e.pageY - offset.top) * multiplier) - ($container.data("origHeight") * multiplier);
                    if (relativeY > $container.data("origHeight")) {
                        $list.css("top", -relativeY + $container.data("origHeight"));
                    };
                });
        }
        
    }, function() {
    
        var $el = $(this);
        
        // put things back to normal
        $el
            .height($(this).data("origHeight"))
            .find("ul")
            .css({ top: 0 })
            .hide()
            .end()
            .find("a")
            .removeClass("hover");
    
    });  
    
});
 
    $(document).on('ready', function() {
      $(".center").slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 5,
          centerMode: true,
          variableWidth: true,
      });
    });
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 11;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

</script>
</body>
</center>
</html>