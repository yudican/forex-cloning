<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php echo base_url('asset/css/uikit.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('asset/css/responsive.css') ?>" rel="stylesheet" media="only screen and (max-width: 1200px)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Get your hands on the list of the best Forex brokers here</title>
    <style>
        body{
            background-color: #F8F8F8;
        }
        .card{
            border:none;
        }
        .card-product .img-wrap {
            border-radius: 0.2rem 0.2rem 0 0;
            overflow: hidden;
            position: relative;
            height:auto;
            text-align: center;
        }
       
        .section {
            clear: both;
            position: relative;
            height: 40px;
            /* margin-top: -40px; */
            width: 100%;
            height: 70px; /* Set the fixed height of the footer here */
        }
        .footer {
            
            line-height: 50px; /* Vertically center the text there */
            color:#fff;
            background-color: #007bff;
        }
        .footer .social-media{
            width: 2.4rem;
            height: 2.4rem;
            border-radius: 50%;
            text-align:center;
            background-color: #fff;
            color: #007bff;
        }
        .social-media-navbar{
            width: 2.4rem;
            height: 2.4rem;
            border-radius: 50%;
            text-align:center;
            background-color: #007bff;
            color: #fff;
        }
        .social-media-navbar:hover{
            width: 2.4rem;
            height: 2.4rem;
            border-radius: 50%;
            text-align:center;
            background-color: #1683f9;
            color: #fff;
        }

        @media (min-width: 1281px) {
            .review-text{
                font-size:36px;
                line-height: 2.5rem;
                font-weight: 500;
                font-family: 'Catamaran', sans-serif;
                width: 60rem;
                max-width: 100%;
            }
        }
        @media (min-width: 1025px) and (max-width: 1280px) {
            .review-text{
                font-size:36px;
                line-height: 2.5rem;
                font-weight: 500;
                font-family: 'Catamaran', sans-serif;
                width: 60rem;
                max-width: 100%;
            }
        }

        /* 
        ##Device = Tablets, Ipads (portrait)
        ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) {
        
            .review-text{
                font-size:26px;
                line-height: 2.5rem;
                font-weight: 500;
                font-family: 'Catamaran', sans-serif;
                width: 60rem;
                max-width: 100%;
            }
        
        }

        /* 
        ##Device = Tablets, Ipads (landscape)
        ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        
            .review-text{
                font-size:26px;
                line-height: 2.5rem;
                font-weight: 500;
                font-family: 'Catamaran', sans-serif;
                width: 60rem;
                max-width: 100%;
            }
        
        }

        /* 
        ##Device = Low Resolution Tablets, Mobiles (Landscape)
        ##Screen = B/w 481px to 767px
        */

        @media (min-width: 481px) and (max-width: 767px) {
        
            .review-text{
                font-size:26px;
                line-height: 2.5rem;
                font-weight: 500;
                font-family: 'Catamaran', sans-serif;
                width: 60rem;
                max-width: 100%;
            }
        
        }

        /* 
        ##Device = Most of the Smartphones Mobiles (Portrait)
        ##Screen = B/w 320px to 479px
        */

        @media (min-width: 320px) and (max-width: 480px) {
        
            .review-text{
                font-size:26px;
                line-height: 2.5rem;
                font-weight: 500;
                font-family: 'Catamaran', sans-serif;
                width: 60rem;
                max-width: 100%;
            }
        
        }
        .d-md-block {
            display: inline-block !important;
        }
    </style>
</head>
<body>
<!-- navbar -->
<div class="bg-white" >
    <nav class="container navbar navbar-expand-lg navbar-light bg-white">
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <a class="navbar-brand" href="#">LOGO</a>

    <div class="inline ml-auto">
        <span class="text-white d-none">Follow us : </span>
        <a href="<?php echo e($sosmed['facebook']); ?>" class="btn social-media-navbar text-center"><i class="fab fa-facebook-f"></i></a>
        <a href="<?php echo e($sosmed['youtube']); ?>" class="btn social-media-navbar text-center"><i class="fab fa-youtube" style="margin-left:-2px;"></i></a>
        <a href="<?php echo e($sosmed['twitter']); ?>" class="btn social-media-navbar text-center"><i class="fab fa-twitter"></i></a>
    </div>
    </nav>
</div>
<!-- end navbar -->


<!-- content -->
<?php echo $__env->yieldContent('content'); ?>
<!-- end content -->

<!-- footer -->
<footer id="section" style="margin-top:200px;">
    <div class="footer">
        <nav class="container navbar navbar-expand-md bg-primary" style="padding-top:0;padding-bottom:0;">
            <a class="navbar-brand text-white" href="#" style="overflow: visible;" >LOGO</a>

            <div class="inline ml-auto">
                <span class="text-white d-none d-md-block">Follow us  </span>
                <a href="<?php echo e($sosmed['facebook']); ?>" class="btn social-media text-center"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo e($sosmed['youtube']); ?>" class="btn social-media text-center"><i class="fab fa-youtube" style="margin-left:-2px;"></i></a>
                <a href="<?php echo e($sosmed['twitter']); ?>" class="btn social-media text-center"><i class="fab fa-twitter"></i></a>
            </div>
        </nav>
    </div>
</footer>
<!-- end footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /opt/lampp/htdocs/forex-cloning/application/views/layout/master.blade.php ENDPATH**/ ?>