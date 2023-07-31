<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>403 Error! - LUAssist </title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">

</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center" style="padding-top:10rem">
                    <h1 style="font-size: 10rem">403</h1>
                    <h3>You do not have permission to access this page.</h3>
                    <h5>Reason: {{ $exception->getMessage() }}</h5>
                </div>
            </div>
        </div>
    </div>
</body>


</html>