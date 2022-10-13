<?php
  
if($_POST) {
    $nama = "";
    $email = "";
    $pesan = "";
    $email_body = "<div>";
      
    if(isset($_POST['nama'])) {
        $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Nama:</b></label>&nbsp;<span>".$nama."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
    if(isset($_POST['pesan'])) {
        $pesan = htmlspecialchars($_POST['pesan']);
        $email_body .= "<div>
                           <label><b>Pesan:</b></label>
                           <div>".$pesan."</div>
                        </div>";
    }
    $recipient = "fitra6751@gmail.com";
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($recipient, $email_body, $headers)) {
        echo "<p>Terima kasih telah menghubungi kami, $nama. </p>";
    } else {
        echo '<p>Pesan tidak terkirim</p>';
    }
      
} else {
    echo '<p>Error</p>';
}
?>