<!-- <?php
setcookie("test_cookie", "test", time() + 3600, "/")
    ?> -->

<!-- Delete the cookie -->
<?php
setcookie("test_cookie", "test", time() - 3600, "/")
    ?>