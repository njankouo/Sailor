<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


<body>

    <div class="container">
        <h2 style="text-align:center">NOS PARTENAIRES</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="assets/img/sika.png"></div>
            <div class="slide"><img src="assets/img/agc.png"></div>
            <div class="slide"><img src="assets/img/savon.jpg"></div>
            <div class="slide"><img src="assets/img/ola.jpeg" class="my-4"></div>
            <div class="slide"><img src="assets/img/scb.jpg" class="my-4"></div>
            <div class="slide"><img src="assets/img/olam.png" style="margin-top: 15px;"></div>
            <div class="slide"><img src="assets/img/food.jpg"></div>
            <div class="slide"><img src="assets/img/fre.png" class="my-4"></div>

        </section>
    </div>

    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
</body>

</html>