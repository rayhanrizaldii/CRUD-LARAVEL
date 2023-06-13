<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('partials.navbar')
    <div class="container-fluid mt-5" style="font-family: Lobster; font-size: 60px">
        <div class="row">
            <div class="col-md-5">
                <div class="container" style="padding-top: 180px;">
                    <p><span id="typed"></span></p>
                </div>
            </div>
            <div class="col-md-7" style=" padding-top:20px;display:flex; justify-content:end">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ecvbfngq.json" background="transparent" speed="1" style="width:75%; " loop autoplay></lottie-player>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        new Typed('#typed', {
            strings: ['Welcome to My Medic', 'Lets keep healthy'],
            typeSpeed: 40,
            delaySpeed: 90,
            loop: true
        });
    </script>
</body>

</html>