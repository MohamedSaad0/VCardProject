<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <img width="250" src="../../../storage/{{$user}}.png" /> -->
    {!! QrCode::size($size)->generate($url) !!}
     {!!
    QrCode::format('png')->size($size)->generate($url,storage_path($user.'.png'))    
    !!}

</body>
</html>
