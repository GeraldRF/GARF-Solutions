<div style="display: flex; justify-content: center; align-items: center;
    width: 100%;">
    <div class="login-card">

        <div class="logo-card">
            <img class="logo" src="../../images/encabezado/Logo.svg" alt="">
            <h3>Please, log in.</h3>

            <?php
            if (isset($_SESSION["login_error"])) {
                echo $_SESSION["login_error"] ? "<h4 class='error'></h4>" : "";
            }
            ?>
        </div>

        <form method="post" action="/backend/admin/loginController.php">

            <input id="username" name="username" placeholder="Username" type="text" required>
            <div id="pass">
                <input id="password" name="password" type="password" placeholder="Password" required>
                <div id="showpass">
                    <label id="label" for="showpass">show</label>
                    <input id="show-pass" name="showpass" type="checkbox">
                </div>
            </div>
            <button type="submit" class="btn">LogIn</button>

        </form>

        <script>
            $("#show-pass").on("click", function() {

                if ($(this).is(":checked")) {
                    $("#password").prop('type', 'text');
                    $("#label").text("hide");
                } else {
                    $("#password").prop('type', 'password');
                    $("#label").text("show");
                }

            });
        </script>

    </div>
</div>