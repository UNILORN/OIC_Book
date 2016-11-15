<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>productpage</title>
    <script src="/js/jquery.min.js" charset="utf-8"></script>
    <script src="/js/vue.min.js" charset="utf-8"></script>
    <script src="/js/productpage/product.js" charset="utf-8"></script>
  </head>
  <body>
    <ul>
        @foreach ($products as $product)
        <li>{{ $product->product_id }}</li>
        @endforeach
    </ul>
  </body>
</html>
