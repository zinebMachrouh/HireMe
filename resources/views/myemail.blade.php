<!DOCTYPE html>
<html>
<head>
    <title>HireMe</title>
</head>
<body>
    <h1>Hello, I'm {{Auth::user()->fname}} {{Auth::user()->lname}};</h1>
    <h4>And I am intrested in this service: {{$data['service']->title}}.</h4>
    <p>Contact me on the following number : {{Auth::user()->phone_number}}</p>
</body>
</html>
