<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fivem Server Status</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
</head>
<body>
    <div id="body-wrapper" class="container">
        <div id="header">
            <h1>Fivem Server Status</h1>
        </div>
        <h3>Server Status</h3>
        <div id="server_status">
            <div>icon: <img id="server_icon" src="" alt=""></div>
            <div id="server"></div>
            <div id="sv_maxClients"></div>
            <div id="banner_connecting"></div>
            <div id="banner_detail"></div>
            <div id="onesync_enabled"></div>
            <div id="sv_enhancedHostSupport"></div>
            <div id="sv_lan"></div>
            <!--<div id="sv_licenseKeyToken"></div>-->
            <div id="sv_scriptHookAllowed"></div>
            <div id="tags"></div>
            <div id="txAdmin_version"></div>
        </div>
        <h3>Players List</h3>
        <div id="players">
            <div id="players_count"></div>
            <div id="players_list"></div>
        </div>
    </div>

    <script src="src/main.js"></script>
</body>
</html>