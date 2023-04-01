<?php

function get_product($conn, $category_id){
    $sql="select * from product where status=1";
    if($category_id!=''){
        $sql.=" and category_id= $category_id";
    }
}


?>