<?php
mb_internal_encoding("utf-8");
$to="hanasakinana@gmail.com";
$subject=mb_encode_mimeheader("PHP自動發信","utf-8");
$message="有新會員註冊了gdem2016";
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n";
$headers.="From:".mb_encode_mimeheader("gdem2016","utf-8")."<email@anywhere.com>\r\n";
mail($to,$subject,$message,$headers);
?>