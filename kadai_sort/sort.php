<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 8, 23, 10];

       function sort_2way($array, $order) {   
           if($order) {
               echo "昇順にソートしました。<br>";
               sort($array);
               foreach($array as $num) {
                   echo $num . '<br>';
               }
           }else {
               echo "降順にソートしました。<br>";
               rsort($array);
               foreach($array as $num) {
                   echo $num . '<br>';
               }
           }
       }

       
       sort_2way($nums, true);
       sort_2way($nums, false);

       ?>
    </p>
</body>

</html>