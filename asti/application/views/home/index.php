<!DOCTYPE html>
<html lang="en">

<BODY OnLoad="tanggal()" OnUnload="tutup()"> <SCRIPT LANGUAGE="JavaScript">


function tanggal()
{
var d = new Date();
var y = d.getFullYear();

var m = d.getMonth() + 1;
var d = d.getDate();
var t = d + '/' + m + '/' + y + ' ';

document.g.defaultStatus.value = "    "+"Anda datang pada tanggal " + t ;
alert("Selamat Datang \n Happy Shopping");

}
function timer()
{
var d = new Date();
var jam = d.getHours();

var menit = d.getMinutes();
var detik = d.getSeconds();

var strwaktu = (jam<10)?"0"+jam: " Sekarang Jam : " +jam; strwaktu +=(menit<10)?":0"+menit:":"+menit; strwaktu +=(detik<10)?"0"+detik:":"+detik;

document.f.txtwaktu.value="       "+strwaktu; setTimeout("timer()",200); 
}

//  end hiding --> </SCRIPT>

<h1 align="center"></h1> <hr width="600" color="black" noshade size="10">
<font face="arial">

<CENTER>

<form name="g">

<input type="Text" size="35" name="defaultStatus"> 

</form>

<form name="f">

<h4 align="center"></h4>
<input type="Text" size="30" name="txtwaktu"> 
<hr width="600" color="black" noshade size="2"> 

</form>

<SCRIPT LANGUAGE="JavaScript">timer()</SCRIPT> </center>
</BODY>

<hr>
   <h3><center>T-Shirt Terfavorite</center></h3>

<SCRIPT LANGUAGE="JavaScript">
function Guru(pilihan)
{
alert("Anda Memilih  " + pilihan +" Sebagai T-Shirt TerFavorite");

document.bgColor=pilihan;
}
</SCRIPT>
<hr width="500" color="black" noshade>



<section id="team" class="team">
    <div class="container">

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/bloods.jpg' ?> " class="img-fluid" alt="" >
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Bloods')" >
                <h4>Bloods</h4>
                <span>Bandung</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/distro.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Greenlight')" >
                <h4>Greenlight</h4>
                <span>Bandung</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/distro2.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
               <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('OTS')" >
                <h4>OTS </h4>
                <span>Bandung</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/bloods.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Bloods')" >
                <h4>Bloods</h4>
                <span>Bandung</span>
                </div>
               </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/double.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Double')" >
                <h4>Double</h4>
                <span>Yogyakarta</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/galgil2.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Galgil')" >
                <h4>Galgil</h4>
                <span>Tegal</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/double.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Double')" >
                <h4>Double</h4>
                <span>Yogyakarta</span>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/kaos/kaosgalgil.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Guru('Galgil')" >
                <h4>Galgil</h4>
                <span>Tegal</span>
                </div>
              </div>
            </div>
          </div>
        </div>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<div class="container">
    <h3 class="h3">Happy shopping</h3>
    <div class="row">
    <!------ Data Baju 1 start ----->
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                       <img src="assets/img/img-3.jpg" height="300" width="250" class="mr-1">
 
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>

    <!------ Data Baju 1 end ----->

        <!------ Data Baju 1 start ----->
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                       <img src="assets/img/img-3.jpg" height="300" width="250" class="mr-1">
 
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>

    <!------ Data Baju 1 end ----->

        <!------ Data Baju 1 start ----->
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                       <img src="assets/img/img-3.jpg" height="300" width="250" class="mr-1">
 
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>

    <!------ Data Baju 1 end ----->

        <!------ Data Baju 1 start ----->
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                       <img src="assets/img/img-3.jpg" height="300" width="250" class="mr-1">
 
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>

    <!------ Data Baju 1 end ----->
    
 
</body>
</html>