
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus Ticket</title>
    <style type="text/css">
        body {
            background: url(assets/background2.jpg) no-repeat fixed center;
        }

        div.content {
            background-image: url("assets/pix2.png");
            margin-left: 45vh;
            margin-right: 45vh;}

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>

<h1><span style="float: left;"><img src="assets/Logo.png" height="300" width="350"></span></h1>
<div class="content">
    <form action="form.php" id="form.php" method="post">
        <table style=" width: 50%; margin-left: 20vh;">
            <tr>
                <th>
                    <h1> Travel info: </h1>
                </th>
            </tr>
            <tr>
                <td>
                    <h2>
                        Date
                    </h2>
                </td>
                <td>
                    <h3>
                        <input maxlength="10" type="date" name="date" required autofocus placeholder="MM/DD/YYYY"> <span class="error" > <?php echo $dateErr;?></span>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Bus Type: </h2>
                </td>
                <td>
                    <h3>
                        <input type="radio" name="busType" checked="checked" value="Sleeper"> Sleeper <br/>
                    </h3>
                    <h3>
                        <input type="radio" name="busType"  value="Seat"> Seat <br/>
                    </h3>
                    <h3>
                        <input type="radio" name="busType" value="Semi-Sleeper"> Semi-Sleeper <br/>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Boarding From:
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="text" maxlength="40"  name="boardingFrom" required> <span class="error" > <?php echo $boardingFromErr;?></span>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Boarding to:
                    </h2>
                </td>
                <td>
                    <h2>
                        <input type="text" maxlength="40" name="boardingTo" required> <span class="error"> <?php echo $boardingToErr;?></span>
                    </h2>
                </td>
            </tr>
            <tr>
                <th>
                    <h1>
                        Passenger Details:
                    </h1>
                </th>
            </tr>
            <tr>
                <td>
                    <h2>
                        Name:
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="text" maxlength="40"  name="name" required> <span class="error"> <?php echo $nameErr;?> </span>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Age:
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="number"  maxlength="3" min="1" max="200" name="age"  required> <span class="error"> <?php echo $ageErr;?></span>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Gender:
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="radio" name="gender" value="Male"> Male<br/>
                        <span class="error"> <?php echo $genderErr;?></span>
                        <input type="radio" name="gender" value="Female"> Female<br/>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Seat Preference: Leave blank for no preference.
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="radio" name="seatPref"  value="Aisle"> Aisle <br/>
                        <input type="radio" name="seatPref" value="Window"> Window <br/>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Email:
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="email" maxlength="40"  name="email" required> <span class="error"><?php echo $emailErr;?></span>
                    </h3>
                </td>
            </tr>
            <tr>
                <th>
                    <h1>
                        Payment:
                    </h1>
                </th>
            </tr>
            <tr>
                <td>
                    <h2>
                        Card Number:
                    </h2>
                </td>
                <td>
                    <input type="text" maxlength="16"  name="cardNo" required> <span class="error"> <?php echo $cardNoErr;?></span>
                </td>
            </tr>
            <tr>
                <th>
                    <h1>
                        Terms & Agreements:
                    </h1>
                </th>
            </tr>
            <tr>
                <td>
                    <h2>
                        Do you agree with the terms:
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="checkbox" name="termsCheck" value="Yes" required> Yes <br/>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        Would you like to receive personalized offers
                    </h2>
                </td>
                <td>
                    <h3>
                        <input type="radio" name="offerRad" checked="checked" value="Yes"> Yes <br/>
                        <input type="radio" name="offerRad" value="No"> No <br/>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <div style="text-align: center;">
                            <input type="submit" value="Submit">
                            &nbsp; &nbsp; &nbsp;
                            <input type="reset" value="Clear">
                        </div>
                    </h3>
                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>