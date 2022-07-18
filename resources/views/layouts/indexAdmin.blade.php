<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/adminNav.css">

</head>




<body>


    <div class="main">

        @include('components/adminside')
        <div class="main-content">
            @yield('content')

        </div>
    </div>

    @include('components/adminFooter')


</body>

</html>
