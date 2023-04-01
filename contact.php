<?php

include "header.php";

$sqll="select * from  contact_us  order by id desc";
$res=mysqli_query($conn, $sqll);

?>


<?php

include "footer.php";

?>