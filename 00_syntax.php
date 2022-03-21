<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  Hello World
  <?php
  $age = 15;
  $nodes = array('head', 'body', 'footer', 'tail');
  echo "<br>This is Sai Krishna " . $age;
  function test()
  {
    $GLOBALS['new'] = $GLOBALS['age'] + 10;
  }

  test();
  echo '<br>' . $new;
  var_dump($age);
  echo $nodes[0];
  class area
  {
    public $height;
    public $width;
    public function __construct($height, $width)
    {
      $this->height = $height;
      $this->width = $width;
    }

    public function calc()
    {
      return  $this->height * $this->width;
    }
  }

  $houser = new Area(10, 20);
  $rough = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias magnam possimus atque consequuntur id enim? Excepturi sequi neque cum officiis numquam, ut veniam exercitationem optio esse quaerat fugiat dolorum quidem non? Praesentium ex laudantium, velit quia est quisquam consequuntur. Minus labore deserunt atque! Nobis tenetur quidem voluptates. Culpa, quod suscipit.";
  echo '<br>' . $houser->calc();
  echo '<br>' . str_word_count($rough);

  ?>
</body>

</html>