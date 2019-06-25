<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<h3>Product Discount Calculator</h3>
<form action="/" method="post">
    @csrf
    <p>
        <input type="text" name="name" placeholder="tên sản phẩm">
    </p>
    <p>
        <input type="number" name="price" placeholder="giá">
    </p>
    <p>
        <input type="number" name="percent" placeholder="phần trăm giảm giá">
    </p>
    <p>
        <button type="submit"> Calculate Discount</button>
    </p>
</form>
</body>
</html>
