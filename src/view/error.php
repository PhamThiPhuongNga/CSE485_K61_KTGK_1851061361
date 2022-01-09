<div style="color: red">
    <?php
    if (isset($_GET['error'])) {
        echo $_GET['error'];
        // header("location: ../view/index.php?error=$error");
    }
    ?>
</div>
<div style="color: green">
    <?php
    if (isset($_GET['success'])) {
        echo $_GET['success'];
        // header("location: ../view/index.php?success=$success");
        // unset($_SESSION['success']);
    }
    ?>
</div>