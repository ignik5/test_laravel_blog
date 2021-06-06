<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <!-- Подключаемые файлы, метатеги, название страницы -->

  <!-- Кодировка страницы-->
  <meta charset="utf-8"/> 
  <title>Название страницы</title>
</head>
<body>
    <h1>Список постов</h1>
<ul>
    <li>
<a href="{{route('posts.show',['post'=>1])}}">Post 1  | </a>

<a href="{{route('posts.edit',['post'=>1])}}">Edit  | </a>
<form action="{{route('posts.destroy',['post'=>1])}}" method="post">
 @method('Delete')
@csrf
<button type="submit"  >DELETE</button>
</form>


    <li>
        <a href="{{route('posts.show',['post'=>2])}}">Post 2  | </a>
        
<a href="{{route('posts.edit',['post'=>2])}}">Edit  | </a>
<form action="{{route('posts.destroy',['post'=>2])}}" method="post">
    @method('Delete')
   @csrf
   <button type="submit"  >DELETE</button>
   </form> </li>
            <li>
   <a href="{{route('posts.show',['post'=>3])}}">Post 3  | </a>
   
<a href="{{route('posts.edit',['post'=>3])}}">Edit | </a>
<form action="{{route('posts.destroy',['post'=>3])}}" method="post">
    @method('Delete')
   @csrf
   <button type="submit"  >DELETE</button>
   </form>
              </li>
</ul>
</body>
</html>