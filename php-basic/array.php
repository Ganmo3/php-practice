<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
  <p>
    <?php
    $user_names =['太郎', '一郎', '二郎', '三郎', '四郎'];

    print_r($user_names);

    echo '<br>';

    $user_names[1] = '花子';

    $user_names[] = '五郎';

    print_r($user_names);
    ?>
  </p>
</body>
 
 </html>