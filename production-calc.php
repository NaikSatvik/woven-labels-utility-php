<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="header">
        <a href="#default" class="logo">AREX Industries Ltd.</a>
        <div class="header-right">
            <a href="index.php">Home</a>
            <a>|</a>
            <a class="active" href="production-calc.php">Production Calculator</a>
            <a href="mix-design-calc.php">Mix Design Calculator</a>
            <a href="proportion.php">Proportion</a>
            <a href="wl-utility.php">WL Utility</a>
        </div>
    </div>
    <br>
    <div class="main-body">
        <h2>Input Elements</h2><br>
        <form action="production-calc.php" method="post">
            <div class="mb-3">
                <label class="form-label">Label Length</label>
                <input type="text" class="form-control" name="LabelLength">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Tapes</label>
                <input type="text" class="form-control" name="TotalTapes">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Quantity</label>
                <input type="text" class="form-control" name="TotalQuantity">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>

    <div class="results">
        <?php
            if (isset($_POST['submit'])) {
                $labelLength = $_POST["LabelLength"];
                $totalTapes = $_POST["TotalTapes"];
                $totalQuantity = $_POST["TotalQuantity"];

                $tq_in_one_meter = $totalTapes * (1000 / $labelLength);
                $PreSelect = 1000 / $labelLength;
                $QuantitySingleTape = 1000 / $labelLength;
                $TotalQuantityMeter = $tq_in_one_meter;
                $TotalPreSelect = $totalQuantity / $totalTapes;
        ?>
                <h2>Results</h2><br>
                <table>
                    <tr>
                        <td>Label Length: <span class="badge bg-info text-dark"><?php echo $labelLength ?></span></td>
                        <td>Pre-Select for 1 meter: <span class="badge bg-success"><?php echo $PreSelect ?></span></td>
                    </tr>
                    <tr>
                        <td>Total Tapes: <span class="badge bg-info text-dark"><?php echo $totalTapes ?></span></td>
                        <td>Quantity in Single Tape: <span class="badge bg-success"><?php echo $QuantitySingleTape ?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total Quantity in 1 meter: <span class="badge bg-success"><?php echo $TotalQuantityMeter ?></span></td>
                    </tr>
                    <tr>
                        <td>Total Quantity: <span class="badge bg-info text-dark"><?php echo $totalQuantity ?></span></td>
                        <td>Total Pre - Select: <span class="badge bg-success"><?php echo $TotalPreSelect ?></span></td>
                    </tr>
                </table>
        <?php
                
            } else {
        ?>
                <span class="badge bg-danger"><?php echo "Enter inputs to calculate results !!"; ?></span>
        <?php
            }
        ?>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>