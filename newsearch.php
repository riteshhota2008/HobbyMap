<?php
include('php/config.php');
$result = $db->prepare("SELECT * FROM users ORDER BY id DESC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>




<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>





    <link href="chosen.css" rel="stylesheet" />



    <style>

        /*	Reset & General
---------------------------------------------------------------------- */

        #wrapper{
            overflow: hidden;
            height: auto;/*1153px*/
            width: auto;/*1643px*/
            background:#fff;
        }
        #header{
            height:92px;
            background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/header-icons.png") 1448px -2px no-repeat;
            border-bottom:1px solid #eee;
        }
        #header ul{padding:33px 0 0 45px;}
        #header li{
            list-style:none;
            float:left;
            margin-right:30px;
        }
        #header li a{
            font-weight:700;
            color:#333;
            font-size:14px;
            text-decoration:none;
            text-transform:uppercase;
            letter-spacing:1px;
        }
        #headerli a:hover{
            color:#000;
            cursor:pointer;
        }
        #grid-selector{
            height: 10px;
            width: auto;/*1291px*/
            padding: 40px 0 40px 30px;
            float: left;
            color: #5d5f68;
            font-size: 14px;
        }
        #grid-menu{
            float:right;
            width:105px;
        }
        #grid-menu ul{
            width: 65px;
            float: right;
            position: relative;
            top: -1px;}
        #grid-menu li{
            float:right;
            width:25px;
            height:25px;
            list-style:none;
        }
        #grid-menu li a{
            display:block;
            width:25px;
            height:25px;
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/grid-menu.png") 0 0  no-repeat;
        }
        #grid-menu li.smallGrid{margin-right:7px;}
        #grid-menu li.smallGrid a{background-position:0 -33px;}
        #grid-menu li.largeGrid a{background-position:-37px 0;}

        #grid-menu li.smallGrid a.active{background-position:0 0;}
        #grid-menu li.largeGrid a.active{background-position:-37px -33px;}


        #grid{
            width: auto;/*1335px*/
            position: absolute;
            left: 300px;/*340px*/
            height: auto;/*1200px*/
            top: 180px;
        }
        #sidebar{
            float:left;
            background:#fff;
            width:20%;/*275px*/
            padding:13px 0 0 45px;
            height:auto;/*1400px*/
            border-right:1px solid #eee;
            position: fixed;/**/
        }
        #sidebar h3{
            color:#262626;
            text-transform:uppercase;
            font-size:14px;
            font-weight:700;
            padding:35px 0 10px 0;
            letter-spacing:1px;
            clear:both;
        }
        #cart{padding:0px;}
        #cart .empty{
            font-style:italic;
            color:#a0a3ab;
            font-size:14px;
            letter-spacing:1px;
        }
        #sidebar .checklist{
            padding:0;
        }

        .checklist ul li{
            font-size:14px;
            font-weight:400;
            list-style:none;
            padding: 7px 0 7px 23px;
        }
        .checklist li span{
            float:left;
            width:11px;
            height:11px;
            margin-left:-23px;
            margin-top:4px;
            border: 1px solid #d1d3d7;
            position:relative;
        }
        .sizes li span, .categories .sizes li{
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
        }
        .checklist li a{
            color:#676a74;
            text-decoration:none;
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
        }
        .checklist li a:hover{
            color:#222;
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
        }
        .checklist a:hover span{
            border-color:#a6aab3;
        }
        .sizes a:hover span, .categories a:hover span{
            border-color:#a6aab3;
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
        }
        .checklist a span span{border:none;margin:0;float:none; position:absolute;top:0;left:0;}
        .checklist a .x{
            display:block;
            width:0;
            height:2px;
            background:#5ff7d2;
            top:6px;
            left:2px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 50ms ease-out;
        }
        .checklist a .x.animate{
            width:4px;
            -webkit-transition: all 100ms ease-in;
            -moz-transition: all 100ms ease-in;
            -ms-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }
        .checklist a .y{
            display:block;
            width:0px;
            height:2px;
            background:#5ff7d2;
            top:4px;
            left:3px;
            -ms-transform: rotate(13deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            -webkit-transition: all 50ms ease-out;
        }
        .checklist a .y.animate{
            width:8px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .checklist .checked span{
            border-color:#8d939f;
        }
        .colors ul, .sizes ul{
            float:left; width:130px;
        }
        .colors ul li{padding-left:21px;}
        .colors a span{
            border:none;
            position:relative;
            border-radius:100%;
            background-color:#eae3d3;
            width:13px;
            height:13px;
            margin-left:-20px;
        }
        .colors a:hover span{
            width:15px;
            height:15px;
            margin-top:3px;
            margin-left:-21px;
        }
        #sidebar img{margin-top:6px;}

        .product{
            position: relative;
            perspective: 800px;
            width:306px;
            height:471px;
            transform-style: preserve-3d;
            transition: transform 5s;
            float:left;
            margin-right: 23px;
            -webkit-transition: width 500ms ease-in-out;
            -moz-transition: width 500ms ease-in-out;
            -ms-transition: width 500ms ease-in-out;
            -o-transition: width 500ms ease-in-out;
            transition: width 500ms ease-in-out;
        }
        .product-front img{width:100%;}
        .product-front, .product-back{
            width:315px;
            height:480px;
            background:#fff;
            position:absolute;
            left:-5px;
            top:-5px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .product-back{
            display:none;
            transform: rotateY( 180deg );
        }
        .make3D.animate .product-back,
        .make3D.animate .product-front,
        div.large .product-back{
            top:0px;
            left:0px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .make3D{
            width:305px;
            height:470px;
            position:absolute;
            top:10px;
            left:10px;
            overflow:hidden;
            transform-style: preserve-3d;
            -webkit-transition:  100ms ease-out;
            -moz-transition:  100ms ease-out;
            -o-transition:  100ms ease-out;
            transition:  100ms ease-out;
        }
        div.make3D.flip-10{
            -webkit-transform: rotateY( -10deg );
            -moz-transform: rotateY( -10deg );
            -o-transform: rotateY( -10deg );
            transform: rotateY( -10deg );
            transition:  50ms ease-out;
        }
        div.make3D.flip90{
            -webkit-transform: rotateY( 90deg );
            -moz-transform: rotateY( 90deg );
            -o-transform: rotateY( 90deg );
            transform: rotateY( 90deg );
            transition:  100ms ease-in;
        }
        div.make3D.flip190{
            -webkit-transform: rotateY( 190deg );
            -moz-transform: rotateY( 190deg );
            -o-transform: rotateY( 190deg );
            transform: rotateY( 190deg );
            transition:  100ms ease-out;
        }
        div.make3D.flip180{
            -webkit-transform: rotateY( 180deg );
            -moz-transform: rotateY( 180deg );
            -o-transform: rotateY( 180deg );
            transform: rotateY( 180deg );
            transition:  150ms ease-out;
        }
        .make3D.animate{
            top:5px;
            left:5px;
            width:315px;
            height:480px;
            box-shadow:0px 5px 31px -1px rgba(0, 0, 0, 0.15);
            -webkit-transition:  100ms ease-out;
            -moz-transition:  100ms ease-out;
            -o-transition:  100ms ease-out;
            transition:  100ms ease-out;
        }
        div.large .make3D{
            top:0;
            left:0;
            width:315px;
            height:480px;
            -webkit-transition:  300ms ease-out;
            -moz-transition:  300ms ease-out;
            -o-transition:  300ms ease-out;
            transition:  300ms ease-out;
        }
        .large div.make3D{box-shadow:0px 5px 31px -1px rgba(0, 0, 0, 0);}
        .large div.flip-back{display:none;}
        .stats-container{
            background:#fff;
            position:absolute;
            top:382px;
            left:0;
            width: 252px;
            height: 300px;
            padding: 24px 40px 35px 32px;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .make3D.animate .stats-container{
            top:265px;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .stats-container .product_name{
            font-size: 15px;
            color: #393c45;
            font-weight: 700;
        }
        .stats-container p{
            font-size:15px;
            color:#b1b1b3;
            padding:2px 0 20px 0;
        }
        .stats-container .product_price{
            float:right;
            color:#5ff7d2;
            font-size:22px;
            font-weight:600;
        }
        .image_overlay{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:#5ff7d2;
            opacity:0;
        }
        .make3D.animate .image_overlay{
            opacity:0.7;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .product-options{
            padding:0;
        }
        .product-options strong{
            font-weight:700;
            color:#393c45;
            font-size:14px;
        }
        .product-options span{
            color:#969699;
            font-size:14px;
            display:block;
            margin-bottom:8px;
        }
        .add_to_cart{
            position:absolute;
            top:80px;
            left:50%;
            width:152px;
            font-size:15px;
            margin-left:-78px;
            border:2px solid #fff;
            color:#fff;
            text-align:center;
            text-transform:uppercase;
            font-weight:700;
            padding:10px 0;
            opacity:0;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .add_to_cart:hover{
            background:#fff;
            color:#5ff7d2;
            cursor:pointer;

        }
        .make3D.animate .add_to_cart{
            opacity:1;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .view_gallery{
            position:absolute;
            top:144px;
            left:50%;
            width:152px;
            font-size:15px;
            margin-left:-78px;
            border:2px solid #fff;
            color:#fff;
            text-align:center;
            text-transform:uppercase;
            font-weight:700;
            padding:10px 0;
            opacity:0;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .view_gallery:hover{
            background:#fff;
            color:#5ff7d2;
            cursor:pointer;

        }
        .make3D.animate .view_gallery{
            opacity:1;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        div.colors div{
            margin-top:3px;
            width:15px;
            height:15px;
            margin-right:5px;
            float:left;
        }
        div.colors div span{
            width:15px;
            height:15px;
            display:block;
            border-radius:50%;
        }
        div.colors div span:hover{
            width:17px;
            height:17px;
            margin:-1px 0 0 -1px;
        }
        div.c-blue span{background:#6e8cd5;}
        div.c-red span{background:#f56060;}
        div.c-green span{background:#44c28d;}
        div.c-white span{
            background:#fff;
            width:14px;
            height:14px;
            border:1px solid #e8e9eb;
        }
        div.shadow{
            width:335px;height:520px;
            opacity:0;
            position:absolute;
            top:0;
            left:0;
            z-index:3;
            display:none;
            background: -webkit-linear-gradient(left,rgba(0,0,0,0.1),rgba(0,0,0,0.2));
            background: -o-linear-gradient(right,rgba(0,0,0,0.1),rgba(0,0,0,0.2));
            background: -moz-linear-gradient(right,rgba(0,0,0,0.1),rgba(0,0,0,0.2));
            background: linear-gradient(to right, rgba(0,0,0,0.1), rgba(0,0,0,0.2));
        }
        .product-back div.shadow{
            z-index:10;
            opacity:1;
            background: -webkit-linear-gradient(left,rgba(0,0,0,0.2),rgba(0,0,0,0.1));
            background: -o-linear-gradient(right,rgba(0,0,0,0.2),rgba(0,0,0,0.1));
            background: -moz-linear-gradient(right,rgba(0,0,0,0.2),rgba(0,0,0,0.1));
            background: linear-gradient(to right, rgba(0,0,0,0.2), rgba(0,0,0,0.1));
        }
        .flip-back{
            position:absolute;
            top:20px;
            right:20px;
            width:30px;
            height:30px;
            cursor:pointer;
        }
        .cx, .cy{
            background:#d2d5dc;
            position:absolute;
            width:0px;
            top:15px;
            right:15px;
            height:3px;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -ms-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
        }
        .flip-back:hover .cx, .flip-back:hover .cy{
            background:#979ca7;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -ms-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
        }
        .cx.s1, .cy.s1{
            right:0;
            width:30px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .cy.s2{
            -ms-transform: rotate(50deg);
            -webkit-transform: rotate(50deg);
            transform: rotate(50deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .cy.s3{
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .cx.s1{
            right:0;
            width:30px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .cx.s2{
            -ms-transform: rotate(140deg);
            -webkit-transform: rotate(140deg);
            transform: rotate(140deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .cx.s3{
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        .carousel{
            width:315px;
            height:500px;
            overflow:hidden;
            position:relative;
        }
        .carousel ul{
            position:absolute;
            top:0;
            left:0;
        }
        .carousel li{
            width:315px;
            height:500px;
            float:left;
            overflow:hidden;
        }
        .carousel img{
            margin-top: -22px;
            width: 110%;
        }
        .arrows-perspective{
            width:315px;
            height:55px;
            position: absolute;
            top: 218px;
            transform-style: preserve-3d;
            transition: transform 5s;
            perspective: 335px;
        }
        .carouselPrev, .carouselNext{
            width: 50px;
            height: 55px;
            background: #ccc;
            position: absolute;
            top:0;
            transition: all 200ms ease-out;
            opacity:0.9;
            cursor:pointer;
        }
        .carouselNext{
            top:0;
            right: -26px;
            -webkit-transform: rotateY( -117deg );
            -moz-transform: rotateY( -117deg );
            -o-transform: rotateY( -117deg );
            transform: rotateY( -117deg );
            transition: all 200ms ease-out;

        }
        .carouselNext.visible{
            right:0;
            opacity:0.8;
            background: #fff;
            -webkit-transform: rotateY( 0deg );
            -moz-transform: rotateY( 0deg );
            -o-transform: rotateY( 0deg );
            transform: rotateY( 0deg );
            transition: all 200ms ease-out;
        }
        .carouselPrev{
            left:-26px;
            top:0;
            -webkit-transform: rotateY( 117deg );
            -moz-transform: rotateY( 117deg );
            -o-transform: rotateY( 117deg );
            transform: rotateY( 117deg );
            transition: all 200ms ease-out;

        }
        .carouselPrev.visible{
            left:0;
            opacity:0.8;
            background: #fff;
            -webkit-transform: rotateY( 0deg );
            -moz-transform: rotateY( 0deg );
            -o-transform: rotateY( 0deg );
            transform: rotateY( 0deg );
            transition: all 200ms ease-out;
        }
        .carousel .x, .carousel .y{
            height:2px;
            width:15px;
            background:#5ff7d2;
            position:absolute;
            top:31px;
            left:17px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .carousel .x{
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            top:21px;
        }
        .carousel .carouselNext .x{
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .carousel .carouselNext .y{
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }
        div.floating-cart{
            position:absolute;
            top:0;
            left:0;
            width:315px;
            height:480px;
            background:#fff;
            z-index:200;
            overflow:hidden;
            box-shadow:0px 5px 31px -1px rgba(0, 0, 0, 0.15);
            display:none;
        }

        div.floating-cart .stats-container{display:none;}
        div.floating-cart .product-front{width:100%; top:0; left:0;}
        div.floating-cart.moveToCart{
            left: 75px !important;
            top: 55px !important;
            width: 47px;
            height: 47px;
            -webkit-transition: all 800ms ease-in-out;
            -moz-transition: all 800ms ease-in-out;
            -ms-transition: all 800ms ease-in-out;
            -o-transition: all 800ms ease-in-out;
            transition: all 800ms ease-in-out;
        }
        body.MakeFloatingCart div.floating-cart.moveToCart{
            left: 90px !important;
            top: 140px !important;
            width: 21px;
            height: 22px;
            box-shadow:0px 5px 31px -1px rgba(0, 0, 0, 0);
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -ms-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        div.cart-icon-top{
            position:absolute;
            background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/cart.png") 0 -3px no-repeat;
            margin:0;
            width:21px;
            height:3px;
            z-index:1;
            top: 140px;
            left: 90px;
        }
        div.cart-icon-bottom{
            position:absolute;
            background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/cart.png") 0 -3px no-repeat;
            margin:0;
            width:21px;
            height:19px;
            z-index:1;
            top: 143px;
            left: 90px;
        }
        body.MakeFloatingCart div.cart-icon-top{z-index:30;}
        body.MakeFloatingCart div.cart-icon-bottom{z-index:300;}
        .cart-item{
            padding: 11px 0 5px 110px;
            height: 62px;
            width: 210px;
            margin-left: -45px;
            position:relative;
            background:#fff;
            -webkit-transition: all 1000ms ease-out;
            -moz-transition: all 1000ms ease-out;
            -ms-transition: all 1000ms ease-out;
            -o-transition: all 1000ms ease-out;
            transition: all 1000ms ease-out;
        }
        .cart-item.flash{background:#fffeb0;}
        .cart-item-border{
            position:absolute;
            bottom:0;
            left:45px;
            background:#edeff0;
            height: 1px;
            width: 230px;
        }
        .cart-item .img-wrap{
            width:50px;
            height:50px;
            overflow:hidden;
            border:1px solid #edeff0;
            float:left;
            margin-left:-65px;
        }
        .cart-item img{width:100%; position:relative;top:-10px;}
        .cart-item strong{color:#5ff7d2; font-size:16px;}
        .cart-item span{
            color: #393c45;
            display: block;
            font-size: 14px;
        }

        .cart-item .delete-item{
            background:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/delete-item.png") 0 0 no-repeat;
            width:15px;
            height:15px;
            float:right;
            margin-right:18px;
            display:none;
        }
        .cart-item:hover .delete-item{display:block;cursor:pointer}


        #info{
            position: absolute;
            top: 20px;
            left: 676px;
            text-align: center;
            width: 413px;

        }
        #info p{font-size:15px; padding:3px;color:#b1b1b3}
        #info a{text-decoration:none;}
        #checkout{
            border: 2px solid #5ff7d2;
            font-size: 13px;
            font-weight: 700;
            padding: 3px 9px;
            position: absolute;
            top: 137px;
            left: 181px;
            color: #5ff7d2;
            display:none;
        }

        .product.large{
            width:639px;
            margin-bottom:25px;
            overflow:hidden;
            -webkit-transition: all 500ms ease-in-out;
            -moz-transition: all 500ms ease-in-out;
            -ms-transition: all 500ms ease-in-out;
            -o-transition: all 500ms ease-in-out;
            transition: all 500ms ease-in-out;
        }




        /* ---------------- */
        .floating-image-large{
            position:absolute;
            top:0;
            left:0;
            width:100%;
        }
        .info-large{
            display:none;
            position: absolute;
            top: 0;
            left: 0px;
            padding: 42px;
            width: 245px;
            height: 395px;
            -webkit-transition: all 500ms ease-out;
            -moz-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
        }
        .large .info-large{
            left: 310px;
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
        }

        .info-large h4{
            text-transform:uppercase;
            font-size:28px;
            color:#000;
            font-weight:400;
            padding:0;
        }
        div.sku{
            font-weight: 700;
            color: #d0d0d0;
            font-size: 12px;
            padding-top: 11px;
        }
        div.sku strong{
            color:#000;
        }
        .price-big{
            font-size: 34px;
            font-weight: 600;
            color: #5ff7d2;
            margin-top: 21px;
        }
        .price-big span{
            color:#d0d0d0;
            font-weight:400;
            text-decoration:line-through;
        }

        .add-cart-large{
            border: 3px solid #000;
            font-size: 17px;
            background: #fff;
            text-transform: uppercase;
            font-weight: 700;
            padding: 10px;
            font-family: "Open Sans", sans-serif;
            width: 246px;
            margin-top: 38px;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -ms-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        .add-cart-large:hover{
            color: #5ff7d2;
            border-color:#5ff7d2;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -ms-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
            cursor:pointer;
        }
        .info-large h3{
            letter-spacing: 1px;
            color: #262626;
            text-transform: uppercase;
            font-size: 14px;
            clear:left;
            margin-top:20px;
            font-weight: 700;
            margin-bottom:3px;
        }


        .colors-large{
            margin-bottom:38px;
        }
        .colors-large li{
            float:left;
            list-style:none;
            margin-right:7px;
            width:16px;
            height:16px;
        }
        .colors-large li a{
            float:left;
            width:16px;
            height:16px;
            border-radius:50%;
        }
        .colors-large li a:hover{
            width:19px;
            height:19px;
            position:relative;
            top:-1px;
            left:-1px;
        }

        .sizes-large{
        }
        .sizes-large span{
            font-weight:600;
            color:#b0b0b0;
        }
        .sizes-large span:hover{color:#000;cursor:pointer;}

        .product.large:hover{
            box-shadow:0px 5px 31px -1px rgba(0, 0, 0, 0.15);
        }

    </style>

    <style>

        /*       #custom-search-form {
                   margin:0;
                   margin-top: 5px;
                   padding: 0;
               }

               #custom-search-form .search-query {
                   padding-right: 3px;
                   padding-right: 4px \9;
                   padding-left: 3px;
                   padding-left: 4px \9;
                   /* IE7-8 doesn't have border-radius, so don't indent the padding */

        /*           margin-bottom: 0;
                   -webkit-border-radius: 3px;
                   -moz-border-radius: 3px;
                   border-radius: 3px;
               }

               #custom-search-form button {
                   border: 0;
                   background: none;
                   /** belows styles are working good */
        /*           padding: 2px 5px;
                   margin-top: 2px;
                   position: relative;
                   left: -28px;
                   /* IE7-8 doesn't have border-radius, so don't indent the padding */
        /*           margin-bottom: 0;
                   -webkit-border-radius: 3px;
                   -moz-border-radius: 3px;
                   border-radius: 3px;
               }

               .search-query:focus + button {
                   z-index: 3;
               }

           </style>

    <style>

        /*     @import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
             @import url(http://weloveiconfonts.com/api/?family=entypo);
             /* entypo */
        /*       [class*="entypo-"]:before {
                   font-family: 'entypo', sans-serif;
               }

               * {
                   box-sizing: border-box;
               }

               body {
                   background: #f5f5f5;
                   max-width: 1200px;
                   margin: 0 auto;
                   padding: 10px;
                   font-family: 'Lato', sans-serif;
                   text-shadow: 0 0 1px rgba(255, 255, 255, 0.004);
                   font-size: 100%;
                   font-weight: 400;
               }

          */

        .toggler {
            color: #A1A1A4;
            font-size: 1.25em;
            margin-left: 8px;
            text-align: center;
            cursor: pointer;
        }
        .toggler.active {
            color: #000;
        }

        .surveys {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .survey-item {
            display: block;
            margin-top: 10px;
            padding: 20px;
            border-radius: 2px;
            background: white;
            box-shadow: 0 2px 1px rgba(170, 170, 170, 0.25);
        }

        .survey-name {
            font-weight: 400;
        }

        .list .survey-item {
            position: relative;
            padding: 0;
            font-size: 14px;/*14*/
            line-height: 40px;
        }
        .list .survey-item .pull-right {
            position: absolute;
            right: 0;
            top: 0;
        }
        @media screen and (max-width: 800px) {
            .list .survey-item .stage:not(.active) {
                display: none;
            }
        }
        @media screen and (max-width: 700px) {
            .list .survey-item .survey-progress-bg {
                display: none;
            }
        }
        @media screen and (max-width: 600px) {
            .list .survey-item .pull-right {
                position: static;
                line-height: 20px;
                padding-bottom: 10px;
            }
        }
        .list .survey-country,
        .list .survey-progress,
        .list .survey-completes,
        .list .survey-end-date {
            color: #A1A1A4;
        }
        .list .survey-country,
        .list .survey-completes,
        .list .survey-end-date,
        .list .survey-name,
        .list .survey-stage {
            margin: 0 10px;
        }
        .list .survey-country {
            margin-right: 0;
        }
        .list .survey-end-date,
        .list .survey-completes,
        .list .survey-country,
        .list .survey-name {
            vertical-align: middle;
        }
        .list .survey-end-date {
            display: inline-block;
            width: 100px;
            white-space: nowrap;
            overflow: hidden;
        }

        .survey-stage .stage {
            display: inline-block;
            vertical-align: middle;
            width: 16px;
            height: 16px;
            overflow: hidden;
            border-radius: 50%;
            padding: 0;
            margin: 0 2px;
            background: #f2f2f2;
            text-indent: -9999px;
            color: transparent;
            line-height: 16px;
        }
        .survey-stage .stage.active {
            background: #A1A1A4;
        }

        .list .list-only {
            display: auto;
        }
        .list .grid-only {
            display: none !important;
        }

        .grid .grid-only {
            display: auto;
        }
        .grid .list-only {
            display: none !important;
        }

        .grid .survey-item {
            position: relative;
            display: inline-block;
            vertical-align: top;
            height: 200px;/*200px*/
            width: 290px;/*250px*/
            margin: 10px;
        }
        @media screen and (max-width: 600px) {
            .grid .survey-item {
                display: block;
                width: auto;
                height: 200px;/*250*mobile*/
                margin: 10px auto;
            }
        }
        .grid .survey-name {
            display: block;
            max-width: 80%;
            font-size: 16px;
            line-height: 20px;
        }
        .grid .survey-country {
            font-size: 11px;
            line-height: 16px;
            text-transform: uppercase;
        }
        .grid .survey-country,
        .grid .survey-end-date {
            color: #545454;
        }
        /*
        .grid .survey-end-date:before {
            content: 'Ends\00a0';
        }
        */
        /*.grid .survey-end-date.ended:before {
            content: 'Ended\00a0';
        }*/
        .grid .survey-progress {
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 20px;
            border-top: 1px solid #eee;
            font-size: 13px;
        }
        .grid .survey-progress-bg {
            width: 40%;
            display: block;
        }
        @media screen and (max-width: 200px) {
            .grid .survey-progress-bg {
                display: none;
            }
        }
        .grid .survey-progress-labels {
            position: absolute;
            right: 20px;
            top: 0;
            line-height: 40px;
        }
        @media screen and (max-width: 200px) {
            .grid .survey-progress-labels {
                right: auto;
                left: 10px;
            }
        }
        .grid .survey-progress-label {
            line-height: 21px;
            font-size: 13px;
            font-weight: 400;
        }
        .grid .survey-completes {
            line-height: 21px;
            font-size: 13px;
            vertical-align: middle;
        }
        .grid .survey-stage {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .grid .survey-stage .stage {
            display: none;
        }
        .grid .survey-stage .active {
            display: block;
        }
        .grid .survey-end-date {
            font-size: 12px;
            line-height: 20px;
        }

        .survey-progress-label {
            vertical-align: middle;
            margin: 0 10px;
            color: #8DC63F;
        }

        .survey-progress-bg {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            width: 100px;
            height: 4px;
            border-radius: 2px;
            overflow: hidden;
            background: #eee;
        }

        .survey-progress-fg {
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            margin: 0;
            background: #8DC63F;
        }


    </style>

    <style>

        @media only screen and (max-width: 768px)	{
            #sidebar {
                width: 45%;
                margin-left: -35px;
            }
            #grid {
                margin-left: -55%;
                width: auto;
                left: 340px;
            }
            .input-group {
                width: 100%;
                /*margin-left: -20px;*/
            }
        }
    </style>

    <style>


        /***********************
        ********* Footer ******
        ************************/
        #footer {
            padding-top: 30px;
            padding-left: 30px;
            padding-bottom: 20px;
            color: #aaa;
            background: #2e2e2e;
        }
        #footer a {
            color: #eee;
        }
        #footer a:hover {
            color: #f39c12;
        }
        #footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #footer ul > li {
            display: inline-block;
            margin-left: 15px;
        }
        .follow-us {
            margin-top: -30px;
            text-align: right;
            display: inline;
        }
        .social-icon {
            padding-top: 6px;
            font-size: 16px;
            text-align: center;
            width: 32px;
            height: 32px;
            border: 2px solid #999;
            border-radius: 50%;
            color: #999;
            margin: 5px;
        }
        a.social-icon:hover, a.social-icon:active, a.social-icon:focus {
            text-decoration: none;
            color: #f39c12;
            border-color: #f39c12;
        }

    </style>


    <title>HobbyMap - Find your passion!</title>
</head>
<body style="background-color: #fff">
<header>
    <a id="cd-logo" href="#0"><img src="img/cd-logo.svg" alt="Homepage"></a>
    <nav id="cd-top-nav">
        <ul>
            <!--<li><a href="#0">Tour</a></li>-->
            <!-- <li><a href="#0">Login</a></li> -->
        </ul>
    </nav>
    <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
</header>
<main class="cd-main-content" style="background-color: #fff"><!--FAFAFA-->

    <!-- put your content here -->




    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <div id="wrapper">

        <!--   <div class="cart-icon-top">
           </div>

           <div class="cart-icon-bottom">
           </div>

           <div id="checkout">
               CHECKOUT
           </div>

           <div id="info">
               <p class="i1">Add to cart interaction prototype by Virgil Pana</p>
               <p>    Follow me on <a href="https://dribbble.com/virgilpana" style="color:#ea4c89" target="_blank">Dribbble</a> | <a style="color:#2aa9e0" href="https://twitter.com/virgil_pana" target="_blank">Twitter</a></p>
           </div> -->

        <!--    <div id="header">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">BRANDS</a></li>
                    <li><a href="">DESIGNERS</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div> -->











        <div id="sidebar">
            <!--   <h3>CART</h3>
               <div id="cart">
                   <span class="empty">No items in cart.</span>
               </div>  -->

            <h3>LOCALITY</h3>
            <div class="checklist categories" >
                <ul>
                    <li><a href=""><span></span>Vadapalani</a></li>
                    <li><a href=""><span></span>Adambakkam</a></li>
                    <li><a href=""><span></span>Adyar</a></li>
                    <li><a href=""><span></span>Alandur</a></li>
                    <li><a href=""><span></span>Alwarpet</a></li>
                    <li><a href=""><span></span>Guindy</a></li>
                    <li><a href=""><span></span>Koyambedu</a></li>
                    <li><a href=""><span></span>Kundrathur</a></li>
                    <li><a href=""><span></span>Madhavaram</a></li>
                    <li><a href=""><span></span>Saidapet</a></li>
                    <li><a href=""><span></span>Saligramam</a></li>
                    <li><a href=""><span></span>Ashok Nagar</a></li>
                    <li><a href=""><span></span>Besant Nagar</a></li>
                    <li><a href=""><span></span>Egmore</a></li>
                    <li><a href=""><span></span>Kilpauk</a></li>
                    <li><a href=""><span></span>Kolathur</a></li>
                    <li><a href=""><span></span>Mylapore</a></li>
                    <li><a href=""><span></span>Vadapalani</a></li>
                    <li><a href=""><span></span>Adambakkam</a></li>
                    <li><a href=""><span></span>Adyar</a></li>
                    <li><a href=""><span></span>Alandur</a></li>
                    <li><a href=""><span></span>Alwarpet</a></li>
                    <li><a href=""><span></span>Guindy</a></li>
                    <li><a href=""><span></span>Koyambedu</a></li>
                    <li><a href=""><span></span>Kundrathur</a></li>
                    <li><a href=""><span></span>Madhavaram</a></li>
                    <li><a href=""><span></span>Saidapet</a></li>
                    <li><a href=""><span></span>Saligramam</a></li>
                    <li><a href=""><span></span>Ashok Nagar</a></li>
                    <li><a href=""><span></span>Besant Nagar</a></li>
                    <li><a href=""><span></span>Egmore</a></li>
                </ul>
            </div>




            <!--   <h3>COLORS</h3>
               <div class="checklist colors">
                   <ul>
                       <li><a href=""><span></span>Beige</a></li>
                       <li><a href=""><span style="background:#222"></span>Black</a></li>
                       <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
                       <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
                       <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
                   </ul>

                   <ul>
                       <li><a href=""><span style="background:#999"></span>Grey</a></li>
                       <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
                       <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
                       <li><a href=""><span style="background:#f56060"></span>Red</a></li>
                       <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
                   </ul>
               </div> -->

            <!--      <h3>SIZES</h3>
                  <div class="checklist sizes">
                      <ul>
                          <li><a href=""><span></span>XS</a></li>
                          <li><a href=""><span></span>S</a></li>
                          <li><a href=""><span></span>M</a></li>
                      </ul>

                      <ul>
                          <li><a href=""><span></span>L</a></li>
                          <li><a href=""><span></span>XL</a></li>
                          <li><a href=""><span></span>XXL</a></li>
                      </ul>
                  </div>  -->

            <!--  <h3>PRICE RANGE</h3>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/price-range.png" alt="" />  -->
        </div>

        <!--     <div id="grid-selector">
                 <div id="grid-menu">
                     View:
                     <ul>
                         <li class="largeGrid"><a href=""></a></li>
                         <li class="smallGrid"><a class="active" href=""></a></li>
                     </ul>
                 </div>

                 Showing 1–9 of 48 results
             </div>  -->

        <div id="grid">




            <div class="input-group" style="width: 95.5%;margin-top: -90px">


                <select data-placeholder="Select a hobby..." class="chosen-select" style="width:100%;" tabindex="2">
                    <option value=""></option>
                    <option value="Painting">Painting</option>
                    <option value="Music">Music</option>
                    <option value="Dance">Dance</option>
                    <option value="Skating">Skating</option>
                    <option value="Swimming">Swimming</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Web Development">Web Development</option>
                    <option value="App Development">App Development</option>
                    <option value="Game Development">Game Development</option>
                    <option value="Cooking">Cooking</option>
                    <option value="Modelling">Modelling</option>
                    <option value="Fashion Designing">Fashion Designing</option>



                </select>


                <!--
                <input type="text" class="form-control" placeholder="Search for Hobbies...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
      </span> -->
            </div><!-- /input-group -->



            <span class="toggler active" data-toggle="grid"><span class="entypo-layout"></span></span>
            <span class="toggler" data-toggle="list"><span class="entypo-list"></span></span>

            <ul class="surveys grid">






                <!-- fetch start from here -->

                <!--



                               <li class="survey-item">

                   <span class="survey-country list-only">
                     Ritesh Hota
                   </span>

                   <span class="survey-name">
                     Web Development<i class="fa fa-heart-o" style="margin-left: 28px"></i>
                   </span><br>

                   <span class="survey-country grid-only">
                     Name - Ritesh Hota<br>
                     Mobile No. - 9551631252<br>
                     Email - <br>
                     Address - Vadapalani, Chennai<br>
                     Fees - Rs 1000/month<br>
                     Description - Something......
                   </span>

                                   <div class="pull-right">
                                       <!--
                                             <span class="survey-progress">
                                               <span class="survey-progress-bg">
                                                 <span class="survey-progress-fg" style="width: 88%;"></span>
                                             </span>

                                             <span class="survey-progress-labels">
                                                 <span class="survey-progress-label">
                                                   88%
                                                 </span>

                                             <span class="survey-completes">
                                                   490 / 500
                                                 </span>
                                             </span>
                                             </span>

                                             <span class="survey-end-date ended">
                                              <!-- 2014 - May 10 -->
                <!--      </span>
                      <span class="survey-stage">
                        <span class="stage draft">Draft</span>
                      <span class="stage awarded">Awarded</span>
                      <span class="stage live">Live</span>
                      <span class="stage ended active">Ended</span>
                      </span> -->
                <!--                   </div>
                               </li>
                               <li class="survey-item">
                   <span class="survey-country list-only">
                     US
                   </span>

                   <span class="survey-name">
                     Android Development<i class="fa fa-heart-o" style="margin-left: 28px"></i>
                   </span><br>

                   <span class="survey-country grid-only">



                     Name - Abhishek Dabholkar<br>
                     Mobile No. - 9551631252<br>
                     Email - riteshhota.2008@gmail.com<br>
                     Address - Vadapalani, Chennai<br>
                     Fees - Rs 1000/month<br>
                     Description - Something......
                   </span>

                                   <div class="pull-right">
                                       <!--
                                             <span class="survey-progress">
                                               <span class="survey-progress-bg">
                                                 <span class="survey-progress-fg" style="width: 25%;"></span>
                                             </span>

                                             <span class="survey-progress-labels">
                                                 <span class="survey-progress-label">
                                                   25%
                                                 </span>

                                             <span class="survey-completes">
                                                   150 / 500
                                                 </span>
                                             </span>
                                             </span>

                                             <span class="survey-end-date">
                                               <!--2014 - July 12-->
                <!--      </span>
                      <span class="survey-stage">
                        <span class="stage draft">Draft</span>
                      <span class="stage awarded">Awarded</span>
                      <span class="stage live active">Live</span>
                      <span class="stage ended">Ended</span>
                      </span>  -->
                <!--                   </div>
                               </li>












                               <li class="survey-item">
                   <span class="survey-country list-only">
                     US
                   </span>

                   <span class="survey-name">
                     Database Management<i class="fa fa-heart-o" style="margin-left: 17px"></i>
                   </span><br>

                   <span class="survey-country grid-only">
                     Name - Sruthik P<br>
                     Mobile No. - 9551631252<br>
                     Email - riteshhota.2008@gmail.com<br>
                     Address - Vadapalani, Chennai<br>
                     Fees - Rs 1000/month<br>
                     Description - Something......
                   </span>

                                   <div class="pull-right">
                                       <!--     <span class="survey-end-date">
                                              <!--2014 - Oct 1-->
                <!--     </span>
                     <span class="survey-stage">
                       <span class="stage draft">Draft</span>
                     <span class="stage awarded active">Awarded</span>
                     <span class="stage live">Live</span>
                     <span class="stage ended">Ended</span>
                     </span>  -->
                <!--                   </div>
                               </li>

                               <li class="survey-item">
                   <span class="survey-country list-only">
                     US
                   </span>

                   <span class="survey-name">
                     Database Management<i class="fa fa-heart-o" style="margin-left: 17px"></i>
                   </span><br>

                   <span class="survey-country grid-only">
                     Name - Sruthik P<br>
                     Mobile No. - 9551631252<br>
                     Email - riteshhota.2008@gmail.com<br>
                     Address - Vadapalani, Chennai<br>
                     Fees - Rs 1000/month<br>
                     Description - Something......
                   </span>

                                   <div class="pull-right">
                                       <!--     <span class="survey-end-date">
                                              <!--2014 - Oct 1-->
                <!--     </span>
                     <span class="survey-stage">
                       <span class="stage draft">Draft</span>
                     <span class="stage awarded active">Awarded</span>
                     <span class="stage live">Live</span>
                     <span class="stage ended">Ended</span>
                     </span>  -->
                <!--                    </div>
                                </li>


                                <li class="survey-item">
                    <span class="survey-country list-only">
                      US
                    </span>

                    <span class="survey-name">
                      Database Management<i class="fa fa-heart-o" style="margin-left: 17px"></i>
                    </span><br>

                    <span class="survey-country grid-only">
                      Name - Sruthik P<br>
                      Mobile No. - 9551631252<br>
                      Email - riteshhota.2008@gmail.com<br>
                      Address - Vadapalani, Chennai<br>
                      Fees - Rs 1000/month<br>
                      Description - Something......
                    </span>

                                    <div class="pull-right">

                                    </div>
                                </li>


                                <li class="survey-item">
                    <span class="survey-country list-only">
                      US
                    </span>

                    <span class="survey-name">
                      Database Management<i class="fa fa-heart-o" style="margin-left: 17px"></i>
                    </span><br>

                    <span class="survey-country grid-only">
                      Name - Sruthik P<br>
                      Mobile No. - 9551631252<br>
                      Email - riteshhota.2008@gmail.com<br>
                      Address - Vadapalani, Chennai<br>
                      Fees - Rs 1000/month<br>
                      Description - Something......
                    </span>

                                    <div class="pull-right">

                                    </div>
                                </li>


                                <li class="survey-item">
                    <span class="survey-country list-only">
                      US
                    </span>

                    <span class="survey-name">
                      Database Management<i class="fa fa-heart-o" style="margin-left: 17px"></i>
                    </span><br>

                    <span class="survey-country grid-only">
                      Name - Sruthik P<br>
                      Mobile No. - 9551631252<br>
                      Email - riteshhota.2008@gmail.com<br>
                      Address - Vadapalani, Chennai<br>
                      Fees - Rs 1000/month<br>
                      Description - Something......
                    </span>

                                    <div class="pull-right">

                                    </div>
                                </li>

                -->

                <?php
                include('php/config.php');
                $result = $db->prepare("SELECT * FROM users WHERE profession LIKE '%Teacher%'");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                    echo '<li class="survey-item">
    <span class="survey-country list-only">'.$row['email'] . '</span><span class="survey-name">
      '.$row['subjects'].'<!--<i class="fa fa-heart-o" style="margin-left: 17px"></i>-->
    </span><br><span class="survey-country grid-only">Name - '.$row['firstname'].'&nbsp;'.$row['lastname'].'<br>Email - '.$row['email'].'<br>Contact No - '.$row['mobile'].'<br>Address - '.$row['locality'].'<br>Fees - '.$row['fees'].'/month

   <!--  <br><br><button class="btn btn-primary" type="button"><a href="http://rh.16mb.com/newsearch.php"><span style="color:#fff">Get Contact Details!</span></a></button> -->

    </span><div class="pull-right">


                    </div>
                </li>';
                }
                ?>








            </ul>









            <!--

                  <div class="product">
                      <div class="info-large">
                          <h4>FLUTED HEM DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#f56060"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">FLUTED HEM DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="product">
                      <div class="info-large">
                          <h4>PLEAT PRINTED DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#f56060"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">PLEAT PRINTED DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="product">
                      <div class="info-large">
                          <h4>FLOWY SHIRT DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#f56060"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">FLOWY SHIRT DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="product">
                      <div class="info-large">
                          <h4>DOUBLE LAYER DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#f56060"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">DOUBLE LAYER DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/6.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="product">
                      <div class="info-large">
                          <h4>BEAD DETAIL DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#f56060"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">BEAD DETAIL DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="product">
                      <div class="info-large">
                          <h4>PLEATED DETAIL DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#9b887b"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/6.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">PLEATED DETAIL DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/6.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="product">
                      <div class="info-large">
                          <h4>PRINTED DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#9b887b"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">PRINTED DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="product">
                      <div class="info-large">
                          <h4>PRINTED DRESS</h4>
                          <div class="sku">
                              PRODUCT SKU: <strong>89356</strong>
                          </div>

                          <div class="price-big">
                              <span>$43</span> $39
                          </div>

                          <h3>COLORS</h3>
                          <div class="colors-large">
                              <ul>
                                  <li><a href="" style="background:#222"><span></span></a></li>
                                  <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                  <li><a href="" style="background:#9b887b"><span></span></a></li>
                                  <li><a href="" style="background:#44c28d"><span></span></a></li>
                              </ul>
                          </div>

                          <h3>SIZE</h3>
                          <div class="sizes-large">
                              <span>XS</span>
                              <span>S</span>
                              <span>M</span>
                              <span>L</span>
                              <span>XL</span>
                              <span>XXL</span>
                          </div>

                          <button class="add-cart-large">Add To Cart</button>

                      </div>
                      <div class="make3D">
                          <div class="product-front">
                              <div class="shadow"></div>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/8.jpg" alt="" />
                              <div class="image_overlay"></div>
                              <div class="add_to_cart">Add to cart</div>
                              <div class="view_gallery">View gallery</div>
                              <div class="stats">
                                  <div class="stats-container">
                                      <span class="product_price">$39</span>
                                      <span class="product_name">PRINTED DRESS</span>
                                      <p>Summer dress</p>

                                      <div class="product-options">
                                          <strong>SIZES</strong>
                                          <span>XS, S, M, L, XL, XXL</span>
                                          <strong>COLORS</strong>
                                          <div class="colors">
                                              <div class="c-blue"><span></span></div>
                                              <div class="c-red"><span></span></div>
                                              <div class="c-white"><span></span></div>
                                              <div class="c-green"><span></span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="product-back">
                              <div class="shadow"></div>
                              <div class="carousel">
                                  <ul class="carousel-container">
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/8.jpg" alt="" /></li>
                                      <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                                  </ul>
                                  <div class="arrows-perspective">
                                      <div class="carouselPrev">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                      <div class="carouselNext">
                                          <div class="y"></div>
                                          <div class="x"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="flip-back">
                                  <div class="cy"></div>
                                  <div class="cx"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> -->
        </div> </div>

    <!--
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="margin-left: -50px">Copyright &copy; 2016 HobbyMap. All Rights Reserved.</div>
                    <div class="col-sm-6">
                        <!--   <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div> -->
    <!--             </div>
             </div>
         </div>
     </footer>  -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!--  <script src="menu.js"></script>  -->



</main> <!-- cd-main-content -->
<nav id="cd-lateral-nav">
    <!--	<ul class="cd-navigation">
            <li class="item-has-children">
                <a href="#0">Services</a>
                <ul class="sub-menu">
                    <li><a href="#0">Brand</a></li>
                    <li><a href="#0">Web Apps</a></li>
                    <li><a href="#0">Mobile Apps</a></li>
                </ul>
            </li> <!-- item-has-children -->

    <!--		<li class="item-has-children">
                <a href="#0">Products</a>
                <ul class="sub-menu">
                    <li><a href="#0">Product 1</a></li>
                    <li><a href="#0">Product 2</a></li>
                    <li><a href="#0">Product 3</a></li>
                    <li><a href="#0">Product 4</a></li>
                    <li><a href="#0">Product 5</a></li>
                </ul>
            </li> <!-- item-has-children -->

    <!--		<li class="item-has-children">
                <a href="#0">Stockists</a>
                <ul class="sub-menu">
                    <li><a href="#0">London</a></li>
                    <li><a href="#0">New York</a></li>
                    <li><a href="#0">Milan</a></li>
                    <li><a href="#0">Paris</a></li>
                </ul>
            </li> <!-- item-has-children -->
    <!--	</ul> <!-- cd-navigation -->

    <ul class="cd-navigation cd-single-item-wrapper">
        <!--		<li><a href="#0">Tour</a></li>  -->
        <li><a href="profile.html">Profile</a></li>
        <li><a href="index.html">Logout</a></li>
        <li><a href="teacher-user-info.php">Pricing</a></li>
        <li><a href="#0">Support</a></li>
    </ul> <!-- cd-single-item-wrapper -->

    <ul class="cd-navigation cd-single-item-wrapper">
        <li><a class="current" href="#0">About Us</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Terms &amp; Conditions</a></li>
        <li><a href="#0">Contact Us</a></li>
        <!--	<li><a href="#0">Students</a></li> -->
    </ul> <!-- cd-single-item-wrapper -->

    <div class="cd-navigation socials">
        <a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
        <!--	<a class="cd-github cd-img-replace" href="#0">Git Hub</a> -->
        <a class="cd-facebook cd-img-replace" href="#0">Facebook</a> -->
        <!--	<a class="cd-google cd-img-replace" href="#0">Google Plus</a>  -->
    </div> <!-- socials -->
</nav>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->


<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>

    $(document).ready(function(){

        $(".largeGrid").click(function(){
            $(this).find('a').addClass('active');
            $('.smallGrid a').removeClass('active');

            $('.product').addClass('large').each(function(){
            });
            setTimeout(function(){
                $('.info-large').show();
            }, 200);
            setTimeout(function(){

                $('.view_gallery').trigger("click");
            }, 400);

            return false;
        });

        $(".smallGrid").click(function(){
            $(this).find('a').addClass('active');
            $('.largeGrid a').removeClass('active');

            $('div.product').removeClass('large');
            $(".make3D").removeClass('animate');
            $('.info-large').fadeOut("fast");
            setTimeout(function(){
                $('div.flip-back').trigger("click");
            }, 400);
            return false;
        });

        $(".smallGrid").click(function(){
            $('.product').removeClass('large');
            return false;
        });

        $('.colors-large a').click(function(){return false;});


        $('.product').each(function(i, el){

            // Lift card and show stats on Mouseover
            $(el).find('.make3D').hover(function(){
                $(this).parent().css('z-index', "20");
                $(this).addClass('animate');
                $(this).find('div.carouselNext, div.carouselPrev').addClass('visible');
            }, function(){
                $(this).removeClass('animate');
                $(this).parent().css('z-index', "1");
                $(this).find('div.carouselNext, div.carouselPrev').removeClass('visible');
            });

            // Flip card to the back side
            $(el).find('.view_gallery').click(function(){

                $(el).find('div.carouselNext, div.carouselPrev').removeClass('visible');
                $(el).find('.make3D').addClass('flip-10');
                setTimeout(function(){
                    $(el).find('.make3D').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
                        $(el).find('.product-front, .product-front div.shadow').hide();
                    });
                }, 50);

                setTimeout(function(){
                    $(el).find('.make3D').removeClass('flip90').addClass('flip190');
                    $(el).find('.product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
                    setTimeout(function(){
                        $(el).find('.make3D').removeClass('flip190').addClass('flip180').find('div.shadow').hide();
                        setTimeout(function(){
                            $(el).find('.make3D').css('transition', '100ms ease-out');
                            $(el).find('.cx, .cy').addClass('s1');
                            setTimeout(function(){$(el).find('.cx, .cy').addClass('s2');}, 100);
                            setTimeout(function(){$(el).find('.cx, .cy').addClass('s3');}, 200);
                            $(el).find('div.carouselNext, div.carouselPrev').addClass('visible');
                        }, 100);
                    }, 100);
                }, 150);
            });

            // Flip card back to the front side
            $(el).find('.flip-back').click(function(){

                $(el).find('.make3D').removeClass('flip180').addClass('flip190');
                setTimeout(function(){
                    $(el).find('.make3D').removeClass('flip190').addClass('flip90');

                    $(el).find('.product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
                        $(el).find('.product-back, .product-back div.shadow').hide();
                        $(el).find('.product-front, .product-front div.shadow').show();
                    });
                }, 50);

                setTimeout(function(){
                    $(el).find('.make3D').removeClass('flip90').addClass('flip-10');
                    $(el).find('.product-front div.shadow').show().fadeTo( 100 , 0);
                    setTimeout(function(){
                        $(el).find('.product-front div.shadow').hide();
                        $(el).find('.make3D').removeClass('flip-10').css('transition', '100ms ease-out');
                        $(el).find('.cx, .cy').removeClass('s1 s2 s3');
                    }, 100);
                }, 150);

            });

            makeCarousel(el);
        });

        $('.add-cart-large').each(function(i, el){
            $(el).click(function(){
                var carousel = $(this).parent().parent().find(".carousel-container");
                var img = carousel.find('img').eq(carousel.attr("rel"))[0];
                var position = $(img).offset();

                var productName = $(this).parent().find('h4').get(0).innerHTML;

                $("body").append('<div class="floating-cart"></div>');
                var cart = $('div.floating-cart');
                $("<img src='"+img.src+"' class='floating-image-large' />").appendTo(cart);

                $(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');
                setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);

                setTimeout(function(){
                    $('div.floating-cart').remove();
                    $("body").removeClass("MakeFloatingCart");


                    var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+img.src+"' alt='' /></div><span>"+productName+"</span><strong>$39</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";

                    $("#cart .empty").hide();
                    $("#cart").append(cartItem);
                    $("#checkout").fadeIn(500);

                    $("#cart .cart-item").last()
                        .addClass("flash")
                        .find(".delete-item").click(function(){
                        $(this).parent().fadeOut(300, function(){
                            $(this).remove();
                            if($("#cart .cart-item").size() == 0){
                                $("#cart .empty").fadeIn(500);
                                $("#checkout").fadeOut(500);
                            }
                        })
                    });
                    setTimeout(function(){
                        $("#cart .cart-item").last().removeClass("flash");
                    }, 10 );

                }, 1000);


            });
        })

        /* ----  Image Gallery Carousel   ---- */
        function makeCarousel(el){


            var carousel = $(el).find('.carousel ul');
            var carouselSlideWidth = 315;
            var carouselWidth = 0;
            var isAnimating = false;
            var currSlide = 0;
            $(carousel).attr('rel', currSlide);

            // building the width of the casousel
            $(carousel).find('li').each(function(){
                carouselWidth += carouselSlideWidth;
            });
            $(carousel).css('width', carouselWidth);

            // Load Next Image
            $(el).find('div.carouselNext').on('click', function(){
                var currentLeft = Math.abs(parseInt($(carousel).css("left")));
                var newLeft = currentLeft + carouselSlideWidth;
                if(newLeft == carouselWidth || isAnimating === true){return;}
                $(carousel).css({'left': "-" + newLeft + "px",
                    "transition": "300ms ease-out"
                });
                isAnimating = true;
                currSlide++;
                $(carousel).attr('rel', currSlide);
                setTimeout(function(){isAnimating = false;}, 300);
            });

            // Load Previous Image
            $(el).find('div.carouselPrev').on('click', function(){
                var currentLeft = Math.abs(parseInt($(carousel).css("left")));
                var newLeft = currentLeft - carouselSlideWidth;
                if(newLeft < 0  || isAnimating === true){return;}
                $(carousel).css({'left': "-" + newLeft + "px",
                    "transition": "300ms ease-out"
                });
                isAnimating = true;
                currSlide--;
                $(carousel).attr('rel', currSlide);
                setTimeout(function(){isAnimating = false;}, 300);
            });
        }

        $('.sizes a span, .categories a span').each(function(i, el){
            $(el).append('<span class="x"></span><span class="y"></span>');

            $(el).parent().on('click', function(){
                if($(this).hasClass('checked')){
                    $(el).find('.y').removeClass('animate');
                    setTimeout(function(){
                        $(el).find('.x').removeClass('animate');
                    }, 50);
                    $(this).removeClass('checked');
                    return false;
                }

                $(el).find('.x').addClass('animate');
                setTimeout(function(){
                    $(el).find('.y').addClass('animate');
                }, 100);
                $(this).addClass('checked');
                return false;
            });
        });

        $('.add_to_cart').click(function(){
            var productCard = $(this).parent();
            var position = productCard.offset();
            var productImage = $(productCard).find('img').get(0).src;
            var productName = $(productCard).find('.product_name').get(0).innerHTML;

            $("body").append('<div class="floating-cart"></div>');
            var cart = $('div.floating-cart');
            productCard.clone().appendTo(cart);
            $(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');
            setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);
            setTimeout(function(){
                $('div.floating-cart').remove();
                $("body").removeClass("MakeFloatingCart");


                var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+productImage+"' alt='' /></div><span>"+productName+"</span><strong>$39</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";

                $("#cart .empty").hide();
                $("#cart").append(cartItem);
                $("#checkout").fadeIn(500);

                $("#cart .cart-item").last()
                    .addClass("flash")
                    .find(".delete-item").click(function(){
                    $(this).parent().fadeOut(300, function(){
                        $(this).remove();
                        if($("#cart .cart-item").size() == 0){
                            $("#cart .empty").fadeIn(500);
                            $("#checkout").fadeOut(500);
                        }
                    })
                });
                setTimeout(function(){
                    $("#cart .cart-item").last().removeClass("flash");
                }, 10 );

            }, 1000);
        });
    });

</script>


<script>

    (function () {
        $(function () {
            return $('[data-toggle]').on('click', function () {
                var toggle;
                toggle = $(this).addClass('active').attr('data-toggle');
                $(this).siblings('[data-toggle]').removeClass('active');
                return $('.surveys').removeClass('grid list').addClass(toggle);
            });
        });
    }.call(this));

</script>


<?php
}
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script src="chosen.jquery.js"></script>
<script type="text/javascript">
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>




</body>
</html>