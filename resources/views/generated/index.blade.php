<!doctype html>
<html lang="en">
    <head>
        <title>COVID-19 Zones</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
                integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
                crossorigin=""></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset("css/normalize.css")}}">
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
              integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
              crossorigin=""/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div data-behaviour="choropleth-map"></div>
            </div>
        </div>
    </div>

    </body>

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>

    <script>
        var data = [];
        $.ajax({
            'async': false,
            'global': false,
            'url': "/api/get-json-data",
            'dataType': "json",
            'success': function (result) {
                data = result;
                // console.log(data);
            }
        });
    </script>

    <script src="{{asset("js/leaflet.geocsv.js")}}"></script>
    <script src="{{asset("js/india_dist_662.js")}}"></script>
    <script src="{{asset('js/states.js')}}"></script>
    <script src="{{asset('js/choropleth.js?v=1.0')}}"></script>
</html>