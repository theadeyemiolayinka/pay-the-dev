<!DOCTYPE html>
<!--
    PayTheDev by TheAdeyemiOlayinka
-->
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayTheDeveloper | TheAdeyemiOlayinka</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Montserrat Font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        body {
            height: 100vh;
            font-family: Montserrat !important;
        }
        ::-moz-selection {
            background-color: #e957ac !important;
        }
         ::selection {
            background-color: #e957ac !important;
        }
        @media screen and (max-width: 767px) {
            .ctn {
                padding: 0 !important;
            }
            .mask {
                padding: 20px !important;
                border-radius: 7px;
            }
        }
    </style>
</head>
<body>

    <!-- Hero -->
    <div class="ctn p-5 text-center bg-image d-flex justify-content-center align-items-center" style="
        background-image: url('https://theadeyemiolayinka.netlify.app/assets/dist/pay_the_dev_bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    ">
    <div class="mask w-100 p-5" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center h-100">
            <div class="text-white text-left">
                <h1 class="mb-3"><marquee>&lt;/&gt; Pay the Developer &lt;/&gt;</marquee></h1>
                <p class="mb-3">Howdy? This site has been locked till the owners of the website deem it fit to pay the
                    developer who had sleepless nights developing the website.<br />
                    You can check back soon after the owners have paid the developer.
                </p>
                <a class="btn btn-outline-light btn-lg" href="{{ config('pay-the-dev.developer_website') }}" role="button">Visit the developer's website</a>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero -->

    <!-- Bootstrap + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>