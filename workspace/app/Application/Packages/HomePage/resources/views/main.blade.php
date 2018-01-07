<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Гороскопы, Гадание карты Таро бесплатно</title>
    <link href="{{ asset('css/normalizer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Josefin+Slab" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.slim.min.js"></script>
    <script type="application/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
</head>

<body>
    <div id="content-wrapper">
        @include('HomePage::header')

        <div id="body">
            <div class="container top">
                <div class="row">
                    <div class="col-sm-9">
                        @include('HomePage::horoskop')
                        @include('HomePage::content')
                    </div>
                    <div class="col-sm-3">
                        @include('HomePage::right_block')
                    </div>
                </div>

            </div>
            <div class="container">
                @include('HomePage::footer')
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>var a = $(".navbar").offset().top;
        $(window).on('ready', function () {
            FastClick.attach(document.body);
            $(window).scrollTop(0);
        });
        $(document).scroll(function () {
            if ($(this).scrollTop() > a) {
                $('.navbar').removeClass("affix-top");
            } else {
                $('.navbar').addClass("affix-top");
            }
        });
    </script>

</body>
</html>