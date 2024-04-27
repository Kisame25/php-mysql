<?php include './views/component/header.php' ?>
<?php include './config.php' ?>
<?php include './utils/pathHelper.php' ?>

<?php
    try{
        if (!empty($_GET['page'])){
            $page = $_GET['page'];
            $included = @include $page;
            if(!$included){
                throw new Exception("Failed to include page: $page");
            }
        }else{
            // Redirect the user to the login page
            header("Location: http://$LHOST:$LPORT/auth?page=login.php");
            exit();
        }
    }catch (Exception $e){
        // Handle include error by redirecting to the login page
        header("Location: http://$LHOST:$LPORT/auth?page=login.php");
        exit();
    }
?>


<?php include './views/component/footer.php' ?>