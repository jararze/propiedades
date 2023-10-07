<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snazzy Info Window</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <script src="snazzy-info-window.js"></script>
    <script src="scripts.js"></script>
    <script id="marker-content-template" type="text/x-handlebars-template">
        <div class="custom-img" style="background-image: url()"></div>
        <section class="custom-content">
            <h1 class="custom-header">
                dsa
                <small>dsadsa</small>
            </h1>
            <div class="custom-body">dsadasdsa</div>
        </section>
    </script>
    <script id="marker-content-template2" type="text/x-handlebars-template">
        <div class="custom-img" style="background-image: url(dasdasdas)"></div>
        <section class="custom-content">
            <h1 class="custom-header">
                dsadas
                <small>dasdas</small>
            </h1>
            <div class="custom-body">adsdasda</div>
        </section>
    </script>
</head>
<body>
{{ route('front.properties.inner', "2") }}
</body>
</html>
