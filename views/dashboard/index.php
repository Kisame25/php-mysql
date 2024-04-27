<?php include './views/component/header.php' ?>
<?php include './config.php' ?>
<?php include './utils/pathHelper.php' ?>

<body>
    <?php include './views/component/nav.php' ?>
    <?php
        try{
            if (!empty($_GET['page'])){
                $page = $_GET['page'];
                $included = @include $page;
                if (!$included) {
                    throw new Exception("Failed to include page: $page");
                }
            }else{
                // Redirect the user to the login page
                header("Location: http://$LHOST:$LPORT/dashboard?page=home.php");
                exit();
            }
        }catch (Exception $e){
            exit();
        }
    ?>

</body>


<?php include './views/component/footer.php' ?>