<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $this->title ?></title>
</head>
<body>
  <div class="article">
    <h1><?php echo $this->article['title'] ?></h1>
    <div class="content">
      <?php echo $this->article['content'] ?>
    </div>
  </div>
  <ul class="foobar">
    <li>FooBar</li>
    <li>
      <?php echo $this->foo_bar ?>
    </li>
  </ul>
  <a href="demo">JSON demo</a>
  <hr/>
  <a href="/api?name=demo">Demo API</a>
  <hr/>
  <a href="/api?name=v1">V1 API</a>
</body>
</html>
