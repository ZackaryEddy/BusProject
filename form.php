<?php
/**
 * Dev: Zack Eddy
 * Date: 11/3/2016
 */
$date = $busType = $boardingFrom = $boardingTo = $name = $age = $gender = $seatPref = $email = $cardNo = $termsRad = $offerRad = " "; //initialize variables
$nameErr = $emailErr = $genderErr = $websiteErr = $termsRadErr = $cardNoErr = $boardingFromErr = $boardingToErr  = $dateErr = ""; // initialize error message variables

if ($_SERVER["REQUEST_METHOD"] == "POST") { // if they click the submit button this happens

    $servername = "localhost";        // initialized DB
    $username = "guest";
    $password = "password";
    $dbname = 'bus';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully: <br />";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO busForm (firstname, age, gender, email, res_date, boardingT, boardingF, busType, seatP, cardNo, offer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"); // prepared statement
    $stmt->bind_param("sisssssssis", $name, $age, $gender, $email, $date, $boardingTo, $boardingFrom, $busType, $seatPref, $cardNo, $offerRad);   //parameter for prepared statement


    $offerRad = ($_POST["offerRad"]);       // pull values from form to variables
    $seatPref = ($_POST["seatPref"]);
    $busType = ($_POST["busType"]);
    $termsRad = ($_POST["termsRad"]);
    $cardNo = inputValid($_POST["cardNo"]);
    $age = inputValid($_POST["age"]);
    $boardingTo = inputValid($_POST["boardingTo"]);
    $name = inputValid($_POST["name"]);
    $email = inputValid($_POST["email"]);
    $gender = ($_POST["gender"]);
    $date = inputValid($_POST["date"]);
    $boardingFrom = inputValid($_POST["boardingFrom"]);
    $stmt->execute();

    $stmt->close();

}


function inputValid($data) // validates data, and strips away dangerous characters
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

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
            margin-right: 45vh;
        }
    </style>
</head>
<body>
<h1><span style="float: left;"><img src="assets/Logo.png" height="300" width="350"></span></h1>
<div class="content">
    <h1>Print this sheet out and bring it with you when you go to get on the bus.</h1>
    <form>
        <h2> Greetings
            <?php if ($gender == 'Male') {
                echo("Mr. ");
            } else {
                echo("Ms. ");
            }
            echo($name)
            ?>
            and thank you for buying a ticket.
        </h2>
        <table style=" width: 70%; margin-left: 20vh;">
            <tr>
                <td>
                    You will be leaving from <strong><?php echo($boardingFrom) ?> </strong> on <strong><?php echo($date) ?> </strong>
                </td>
            </tr>
            <tr>
                <td>
                    Heading towards <strong><?php echo($boardingTo) ?> </strong>
                </td>
            </tr>
            <tr>
                <td>
                    You will be riding in the <strong><?php echo $seatPref ?> </strong> side of the <strong><?php echo $busType ?></strong> section of the bus
                </td>
            </tr>
            <tr>
                <th>
                    <h3>
                        Passenger Info:
                    </h3>
                </th>
            </tr>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <?php echo($name) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Age:
                </td>
                <td>
                    <?php echo($age) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <?php echo $gender ?>
                </td>
            </tr>
            <tr>
                <td>
                    E-mail Address
                </td>
                <td>
                    <?php echo $email ?>
                </td>
            </tr>
            <tr>
                <td>
                    Card Number:
                </td>
                <td>
                    <?php echo $cardNo ?>
                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>