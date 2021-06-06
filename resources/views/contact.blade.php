<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <!-- Подключаемые файлы, метатеги, название страницы -->

  <!-- Кодировка страницы-->
  <meta charset="utf-8"/> 
  <title>Название страницы</title>
</head>
<body>
<form action ="{{route('contact')}}" method="post">
    @method('PUT')
    @csrf
<input type="text" name="name">
<input type="email" name="email">
<button type="submit">submit</button>

</form>
</body>
</html>