<html>
<head>
  <title>Hello/Index</title>
  <style>
  body {
    font-size: 16pt;
    color: #999;
  }
  h1 {
    font-size: 100pt;
    text-align: right;
    color: #eee;
    margin: -40px 0 -50px 0;
  }
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>&#064;whileディレクティブの例</p>
  <ol>
    @php
      $counter = 0;
    @endphp
    @while ($counter < count($data))
      <li>{{$data[$counter]}}</li>
      @php
        $counter++;
      @endphp
    @endwhile
  </ol>
</body>
</html>