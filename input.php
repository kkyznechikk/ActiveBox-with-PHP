<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"] && isset($_POST["submit"])) 
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
 
    $myCurl = curl_init();

    $sendData = array(
        'name' => $name,
        'email' => $email,
        'message' => $message,
    );

    $options = array(
        CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
        CURLOPT_POST => 1, // True
        CURLOPT_RETURNTRANSFER => $sendData,
        CURLOPT_RETURNTRANSFER => 1
    );

    curl_setopt_array($myCurl, $options)

    $result = curl_exec($myUrl)

    curl_close($myCurl)

    print_r($result)
}
else
{   
    echo "Fill out the form please";
}
?>