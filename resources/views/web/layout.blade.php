<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite([])
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Register</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
</body>

</html>