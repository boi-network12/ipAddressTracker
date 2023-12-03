<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function getUserData($ip) {
    $api_url = "https://ipinfo.io/{$ip}/json"; // Replace {ip} with $ip
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    return $data;
}

$user_ip = "76.251.184.38";
$user_data = getUserData($user_ip);
?>

    
    <h2>user information</h2>
    <p>ip Address: <?php echo $user_ip; ?> </p>
    <p>country: <?php echo $user_data['country']; ?> </p>
    <p>region: <?php echo $user_data['region']; ?> </p>
    <p>city: <?php echo $user_data['city']; ?> </p>
    <p>location: <?php echo $user_data['loc']; ?> </p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/UAParser.js/0.7.28/ua-parser.min.js">
        let parser = new UAParser();
        let result = parser.getResult();

        document.write('<h2>Device information</h2>');
        document.write('Device Name: ' + result.device.model + '<br>');
        document.write('Device Type: ' + result.device.type + '<br>');
        document.write('Device Vendor: ' + result.device.vendor + '<br>');
        document.write('Device cpu Architecture: ' + result.cpu.architecture + '<br>');
        document.write('Device Screen Resolution: ' + window.screen.width + 'x' + window.screen.height + '<br>');
        document.write('Browser Name: ' + result.browser.name + '<br>');
        document.write('Browser version: ' + result.browser.version + '<br>');
        document.write('operating system: ' + result.os.name + '<br>');
    </script>

</body>
</html>
