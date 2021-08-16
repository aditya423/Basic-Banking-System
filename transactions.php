<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="nav-head">Punjab National Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">Our Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="transactions.php">Transfer History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Converter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="container">
        <h2 class="text-center pt-4" style="background-color: lightcyan; padding-bottom: 30px;" id="our-class">Transfer History</h2><br>
        <div class="table-responsive-sm">
            <table class="table table-striped table-condensed table-bordered" style="margin-bottom: 30px; background-color: #f1f5fb;">
                <thead style="background-color: #ff7272;">
                    <tr>
                        <th id="table-head">S.No.</th>
                        <th id="table-head">Sender</th>
                        <th id="table-head">Receiver</th>
                        <th id="table-head">Amount</th>
                        <th id="table-head">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include 'config.php';

                    $sql ="select * from transaction";

                    $query =mysqli_query($conn, $sql);

                    while($rows = mysqli_fetch_assoc($query))
                    {
                ?>

                    <tr style="color : white;">
                    <td id="table-content"><?php echo $rows['sno']; ?></td>
                    <td id="table-content"><?php echo $rows['sender']; ?></td>
                    <td id="table-content"><?php echo $rows['receiver']; ?></td>
                    <td id="table-content"><?php echo $rows['balance']; ?> </td>
                    <td id="table-content"><?php echo $rows['datetime']; ?> </td>
            
                <?php
                    }

                ?>
                </tbody>
            </table>

        </div>
    </div>

    <footer class="panel-footer">
        <div class="container">
            <div class="text-center">&copy; Copyright Punjab National Bank India 2021</div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>