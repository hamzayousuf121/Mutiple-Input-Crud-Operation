<?php require "db.php"; ?>
        <?php
        $query = "SELECT * FROM `customfield`";
        $result = mysqli_query($con, $query);
        if (isset($_POST["submit"])) {
            $dltquery = "DELETE FROM customfield";
            mysqli_query($con, $dltquery);
            if(!empty($_POST["key"])){
            foreach ($_POST["key"] as $key => $text_field) {
                $file_name = $text_field;
                $file_value = $_POST["value"][$key];
                $query1 = "INSERT INTO customfield (key1, value1)
                VALUES ('$file_name', '$file_value')";
                $result1 = mysqli_query($con, $query1);
                $query = "SELECT * FROM `customfield`";
                $result = mysqli_query($con, $query);
            }
            
            if ($result1 > 0) {
                echo "<div class='alert  alert-success alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Record has been inserted;
                    </div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Record!</strong> not inserted
                    </div>";
            }
        }
    }
        ?>