<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
        <?php
        $user_names = ['太郎', '一郎', '二郎', '三郎', '四郎'];

        foreach ($user_names as $user_name) {
          echo $user_name . '<br>';
        }

        foreach ($user_names as $index => $value) {
          echo "{$index}:{$value}<br>";
        }
        ?>
      </p>

      <p>
        <?php
        $personal_data = ['name' => '太郎', 'age' => 36, 'gender' => '男性'];

        foreach ($personal_data as $key => $value) {
          echo "{$key}は{$value}です。<br>";
        }

        foreach ($personal_data as $value) {
          echo $value . '<br>';
        }
        ?>
      </p>

      <p>出身地を選択してください。</p>
      <form>
        <select>
          <option>北海道地方</option>
          <option>東北地方</option>
          <option>関東地方</option>
          <option>中部地方</option>
          <option>近畿地方</option>
          <option>中国・四国地方</option>
          <option>九州地方</option>
        </select>
      </form>

      <p>出身地を選択してください。</p>
      <form>
        <select>
          <?php
          $birthplaces = [
            '北海道地方',
            '東北地方',
            '関東地方',
            '中部地方',
            '近畿地方',
            '中国・四国地方',
            '九州地方'
          ];

          foreach ($birthplaces as $birthplace) {
            echo "<option>{$birthplace}</option>";
          }
          ?>
        </select>
      </form>



  </body>
  </html>