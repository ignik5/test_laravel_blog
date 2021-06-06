<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <!-- Подключаемые файлы, метатеги, название страницы -->

  <!-- Кодировка страницы-->
  <meta charset="utf-8"/> 
  <title>Название страницы</title>
</head>
<body>
<form action ="{{Route('posts.update', ['post'=>$id])}}" method="post">
  
   @method('PUT')
    @csrf
<input type="text" name=title">
<button type="submit">submit</button>

</form>
</body>
</html>