<div class="admin-container">
    <div class="main-nav">
        <div id="btn-menu">
            <div class="hamburger" type="button" style="border: none; align-items: self-start;">
                <div class="hamburger-inner-0"></div>
                <div class="hamburger-inner-1"></div>
                <div class="hamburger-inner-2"></div>
            </div>
        </div>

        <div class="nav-bar">

            <div class="logo">
                <h4 style="font-weight: Bold;">GARF</h4>
                <h4 style="font-weight: lighter;">Solutions</h4>
            </div>

            <ul class="nav flex-column nav-pills">
                <li class="nav-item">
                    <a id="dashboard" href="/admin" class="nav-link">Dashboard</a>
                </li>
                <li  class="nav-item">
                    <a id="todos" href="/admin/mensajes/todos" class="nav-link">Todos los mensajes</a>
                </li>
                <li  class="nav-item">
                    <a id="sinleer" href="/admin/mensajes/sin-leer" class="nav-link">Mensajes sin leer</a>
                </li>
                <li  class="nav-item">
                    <a id="leidos" href="/admin/mensajes/leidos" class="nav-link">Mensajes leidos</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="view-port">

        <?php
        
        if (isset($_GET["e"])) {

            $e = $_GET["e"];

            switch ($e) {

                case "": {
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
<script>
    $(".hamburger").on("click", function() {
        $(".hamburger").toggleClass("open");
        $(".nav-bar").toggleClass("showNav-bar");
       
    });
    
</script>
<script>
   
</script>