<?php
    if(filter_has_var(INPUT_GET, 'id')){

        $clean_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


        if($clean_id){
            $id = filter_var($clean_id, FILTER_VALIDATE_INT, 
                    ['option' => [
                        'min_range' => 10
                    ]]);

            echo $id === false ? 'id must be at least 10' : $id;
        } else {
            echo "id invalid";
        }
    } else {
        echo 'id is required';
    }
?>