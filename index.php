<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IP Address</title>
    </head>

    <body>
        <?php
            function getUserIpAddr(){
                if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                    //ip from share internet
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    //ip pass from proxy
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }else{
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                return $ip;
            }
            
            echo 'User Real IP - '.getUserIpAddr();        
        ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>