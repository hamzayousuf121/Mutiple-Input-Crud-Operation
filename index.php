<?php require "file.php"; ?>
<!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <style>a {color: white;}</style>
        </head>

        <body>
            <div id="div1"></div>
            <div class="container">
                <form method="post" action="">
                    <table id="myTable" class=" table order-list">
                        <thead>
                            <tr>
                                <td><b>Key</b></td>
                                <td><b>Value</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td class="col-sm-4">
                                        <input type="mail" required name="key[]" id="key" class="form-control" value="<?php echo $data['key1']; ?>" />
                                    </td>
                                    <td class="col-sm-4">
                                        <input type="text" required name="value[]" id="value" value="<?php echo $data['value1']; ?>" class="form-control" />
                                    </td>
                                    <td class="col-sm-2 ibtnDel"><button id="ibtnDel" class="btn btn-danger ibtnDel text-white"><a class="deleteRow">Delete</button>
                                    </td>
                                </tr>
                             <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" style="text-align: left;">
                                    <input type="submit" name="submit" class="btn btn-lg btn-success btn-block " value="Submit" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align: left;">
                                    <input type="button" id="addrow" class="btn btn-lg btn-danger btn-block" value="Add Row" />
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>