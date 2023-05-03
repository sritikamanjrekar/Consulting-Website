<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>


    <style>
        table td,
        table th {
            vertical-align: middle;
            text-align: right;
            padding: 20px !important;
        }
    </style>
</head>

<body>


    <header style="background-color:#143A52;">

        <link rel="icon" type="image/x-icon" href="images/tc_logo.jpg">

        <img src="images/tc-logo.png" style="width: 8%; height: 100%;background-color:#fff">

        <span class="sign"><a href="logout.php" onmouseover="this.style.color = '#C8D6DF'"
                onmouseout="this.style.color = '#fff'">Sign Out</a></span>

        <span class="sign"><a href="index.php" onmouseover="this.style.color = '#C8D6DF'"
                onmouseout="this.style.color = '#fff'">Home</a></span>

        <span class="sign"><a href="#" onmouseover="this.style.color = '#fff'" onmouseout="this.style.color = '#fff'"
                style="pointer-events: none;">Tech Con Consulting
                Portal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome
                to Admin Dashboard</a></span>
        <!-- <span class="sign"><a href="#">About</a></span> -->





    </header>

    <br><br>

    <section>
        <div class="container my-4">
            <div class="d-flex justify-content-between my-4">
                <h1>Project List</h1>
                <div>
                    <a href="create.php" class="btn btn-outline-dark">Add New Project</a>
                </div>
            </div>
            <?php
        //session_start();
        if (isset($_SESSION["create"])) {
        ?>
            <div class="alert alert-success">
                <?php 
            echo $_SESSION["create"];
            ?>
            </div>
            <?php
        unset($_SESSION["create"]);
        }
        ?>
            <?php
        if (isset($_SESSION["update"])) {
        ?>
            <div class="alert alert-success">
                <?php 
            echo $_SESSION["update"];
            ?>
            </div>
            <?php
        unset($_SESSION["update"]);
        }
        ?>
            <?php
        if (isset($_SESSION["delete"])) {
        ?>
            <div class="alert alert-success">
                <?php 
            echo $_SESSION["delete"];
            ?>
            </div>
            <?php
        unset($_SESSION["delete"]);
        }
        ?>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Project Name</th>
                        <th>Project Address</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM projects";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td>
                            <?php echo $data['id']; ?>
                        </td>
                        <td>
                            <?php echo $data['project_name']; ?>
                        </td>
                        <td>
                            <?php echo $data['project_address']; ?>
                        </td>

                        <td>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-dark">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-dark">Delete</a>
                        </td>
                    </tr>
                    <?php
        }
        ?>
                </tbody>
            </table>
        </div>

    </section>


</body>

</html>