<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="../../public/assets/css/googleSheets.css">
</head>

<body>
    <?php include_once "../sections/header.php"; ?>

    <p>Sheets API Quickstart</p>

    <!--Add buttons to initiate auth sequence and sign out-->
    <button id="authorize_button" onclick="handleAuthClick()">Authorize</button>
    <button id="signout_button" onclick="handleSignoutClick()">Sign Out</button>

    <pre id="content" style="white-space: pre-wrap;"></pre>
    <!-- Local scripts -->
    <script src="../../public/assets/js/googleSheets.js"></script>
    <!-- Google Sheets scripts -->
    <script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
    <script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>


    <table>
        <thead>
            <th></th>
        </thead>
        <tbody>
            <tr></tr>
        </tbody>
    </table>
</body>

</html>