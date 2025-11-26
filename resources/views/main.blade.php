<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
    <h2>Welcome to the main page</h2>
   <div class="container">
        <div class="item" onclick="window.location='{{ route('page1') }}'">Item 1</div>
        <div class="item" onclick="window.location='{{ route('page2') }}'">Item 2</div>
        <div class="item" onclick="window.location='{{ route('page3') }}'">Item 3</div>
        <div class="item" onclick="window.location='{{ route('page4') }}'">Item 4</div>
    </div>
</div>
</body>
</html>