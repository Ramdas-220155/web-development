<?php
session_start();
$clientID = getenv('GOOGLE_CLIENT_ID');
$clientSecret = getenv('GOOGLE_CLIENT_SECRET');
$redirect_uri = "http://localhost/web/oauth_lab/callback.php";

if (isset($_GET['code'])) {

    $token_url = "https://oauth2.googleapis.com/token";

    $post_fields = [
        'code' => $_GET['code'],
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    $access_token = $data['access_token'];

    // Get user info
    $userinfo_url = "https://www.googleapis.com/oauth2/v2/userinfo?access_token=" . $access_token;

    $userinfo = file_get_contents($userinfo_url);
    $user = json_decode($userinfo, true);

    echo "<h2>Welcome " . $user['name'] . "</h2>";
    echo "Email: " . $user['email'];
}
?>
