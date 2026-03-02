<?php
session_start();

$client_id = "900264547076-7kgv4hbrfq892liti2tv58e0j3d7atnn.apps.googleusercontent.com";
$redirect_uri = "http://localhost/web/oauth_lab/callback.php";

$scope = "email profile";

$auth_url = "https://accounts.google.com/o/oauth2/v2/auth?" .
    http_build_query([
        'client_id' => $client_id,
        'redirect_uri' => $redirect_uri,
        'response_type' => 'code',
        'scope' => $scope,
        'access_type' => 'offline'
    ]);
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Support - OAuth Lab</title>
<style>
body::before {
content: "Ram Angothu";
position: fixed;
top: 40%;
left: 20%;
font-size: 80px;
opacity: 0.05;
transform: rotate(-30deg);
}
</style>
</head>
<body>

<h2>RA101 - Customer Support</h2>
<a href="<?php echo $auth_url; ?>">
    <button>Login with Google</button>
</a>

</body>
</html>
