<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP LAB 3</title>
</head>
<body>
    <ul>
        <!-- TASK 1 -->
        <?php 
            $color = array('white', 'green', 'red');
            for($color_index = 0; $color_index < count($color); $color_index++) {
                if(isset($color[$color_index])){    
            ?>
                <li><?php echo $color[$color_index]; ?></li>
            <?php
                }   
            } 
        ?>
    </ul>


    <!-- TASK 2 -->
    <?php 

    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    
    asort($ceu);

    foreach($ceu as $country => $capital) { ?>
        <p><?php echo "The capital of $country is $capital"; ?></p>
    <?php } ?>

    <!-- TASK 3 -->

    <?php
        $array_of_file_data = array();
        $file = fopen("sample.txt", "rb");

        while (!feof($file) ) {
            $line = fgets($file);
            $divided_line = explode(' ', $line);
            if(isset($divided_line[0]) && isset($divided_line[1])){   
                $array_of_file_data += [$divided_line[0] => $divided_line[1]];
            }
        }

        fclose($file);

        foreach($array_of_file_data as $key => $value) {
            echo "Key: \"" . $key . "\" Value: \"" . $value . "\"";
            echo "<br>";
          }
    ?>

    <!-- TASK 4 -->

    <?php
    $original_array = array( '1','2','3','4','5' );?>
    <p><?php echo 'Original array : ';?></p>
    <?php 
    foreach ($original_array as $x) { ?>
        <span><?php echo "$x ";?></span>
    <?php }
    $value_to_add = '$';
    array_splice( $original_array, 3, 0, $value_to_add ); ?>
    <p><?php echo "After inserting '$' the array is : ";?></p>
    <?php foreach ($original_array as $x) {?>
        <span><?php echo "$x ";?></span>
    <?php } ?>
</body>
</html>