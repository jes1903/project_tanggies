<?php

require "config.php";
$query ="select * from reservation";
$result = mysqli_query($conn,$query);

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.main.css">
    <title>Tanggies Reservation Page</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>

</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center" >TABLE BOOKINGS</h2>

                    </div>
                    <div class="card-body">
                        <table class="table table-border text-center">
                            <tr>
                                <td>Users ID</td>
                                <td>Name</td>
                                <td>Mobile</td>
                                <td>Email</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>People</td>
                                



                            </tr>
                            <tr>
                                <?php

                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['time'];?></td>
                                    <td><?php echo $row['people'];?></td>
                                    



                                    </tr>

                                    <?php

                                }

                                ?>


                            </tr>
                        </table>

                    </div>
                </div>


            </div>

</div>





</div>
</body>
</html>