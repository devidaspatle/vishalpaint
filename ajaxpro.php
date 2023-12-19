<?php

    

    require 'db_config.php';

  

    $parentKey = '0';

    $sql = "SELECT * FROM executive_member";

  

    $result = $mysqli->query($sql);

   

      if(mysqli_num_rows($result) > 0)

      {

          $data = membersTree($parentKey);

      }else{

          $data=["id"=>"0","name"=>"No Members present in list","text"=>"No Members is present in list","nodes"=>[]];

      }

   

      function membersTree($parentKey)

      {

          require 'db_config.php';

  

          $sql = 'SELECT id, firstName, middleName, lastName from executive_member WHERE parent_id="'.$parentKey.'"';

  

          $result = $mysqli->query($sql);

  

          while($value = mysqli_fetch_assoc($result)){

             $id = $value['id'];

             $row1[$id]['id'] = $value['id'];

             $row1[$id]['firstName'] = $value['firstName'];

             $row1[$id]['text'] = $value['firstName'];

             $row1[$id]['nodes'] = array_values(membersTree($value['id']));

          }

  

          return $row1;

      }

  

      echo json_encode(array_values($data));

  

?>