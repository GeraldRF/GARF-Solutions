<div class="admin-container">


    <div class="nav-bar">

    

    </div>

    <div class="view-port">

        <?php

        if (isset($e)) {
            switch ($e) {

                case "dashboard": {
                        include "content/dashboard.php";
                        break;
                    }
                case "all-msg": {
                        include "content/all_msg.php";
                        break;
                    }
                case "unreaded-msg": {
                        include "content/unreaded_msg.php";
                        break;
                    }
                case "readed-msg": {
                        include "content/readed_msg.php";
                        break;
                    }
            }
        } else {
            include "content/dashboard.php";
        }

        ?>


    </div>

</div>