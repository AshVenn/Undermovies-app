<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.components.headlinks')
</head>

<body id="top">
    @include('frontend.components.homeitems', ['films' => $films ,'tops' => $tops,'tvs' => $tvs])
</body>
</html>
