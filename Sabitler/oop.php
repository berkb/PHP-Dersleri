<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
    class Matematik
    {
        public function __construct()
        {
            echo 'Matematik kurucusundan selamlar, yıkıcılar ölsün!';
        }
        
        public function carpma($x,$y)
        {
           return ($x*$y);
        }
        
        public function __destruct()
        {
           echo 'Yıkar geçerim!';
        }
    }
    $m = new Matematik(); // Matematik kurucusundan selamlar, yıkıcılar ölsün!
    $m->carpma(3,5); // 15 
    //Yıkar geçerim!
    ?>
</body>
</html>