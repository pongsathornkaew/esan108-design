<?php
session_start();	//Set session start for every page
#SYSTEM configuration
		define("HOSTNAME", "localhost");												//Database host
		define("DBNAME", "xxxx");								//Database name.
		define("DBUSERNAME", "xxxx");								//Database user name
		define("DBPASS", "xxxx");														//Database password
		define("SITE_URL","http://localhost/esan108-design");						//URL หลักของไซต์ (ไม่ต้องใส่ / ต่อท้าย)
		define("MAIN_APP","/design");															//Folder name of main application
		define("SITE_TITLE","อีสานร้อยแปด");											//ไตเติ้ล หรือ ชื่อของเว็บไซต์
		define("SITE_SEPERATE"," - ");													//อักขระคั่นกลางระหว่างไตเติ้ลเพจ
		define("SITE_DESC","ทุกเรื่องราวของชาวอีสาน");							//Description of web site
		define("THEME","esan108");															//ใส่ชื่อธีมที่ต้องการเรียกใช้งาน (ชื่อโฟลเดอร์)
		define("SITE_LOGO","../theme/esan108/logo-esan108-small.png"); // Small lo go of web site
		define("FB_APP_ID","xxxx");
		define("FB_APP_SECRET","xxxx");
#Show header
function get_header($PAGE_TITLE,$DESC,$KEYWORD,$SPECAIL_TAG){
		if(isset($DESC) & trim($DESC) != ""){
			$DESC = '<meta name="description" content="'.$DESC.'">';
		}
		if(isset($KEYWORD) & trim($KEYWORD) != ""){
			$KEYWORD = '<meta name="keywords" content="'.$KEYWORD.'">';
		}
		include("../theme/".THEME."/header.php");								//Include filr header
}
#Show footer
function get_footer(){
		include("../theme/".THEME."/footer.php");								//Include filr footer
}
#Show footer
function get_sidebar($side=''){
	switch ($side) {
			case "topic":
					include("../theme/".THEME."/side_topic.php");
					break;
			case "dic":
					include("../theme/".THEME."/side_dic.php");
					break;
			case "gallery":
					include("../theme/".THEME."/side_gallery.php");
					break;
			case "user":
					include("../theme/".THEME."/side_user.php");
					break;
			case "wiki":
					include("../theme/".THEME."/side_wiki.php");
					break;
			default:
					include("../theme/".THEME."/side.php");								//Include filr footer
		}

}

//########################################### generateRandomString
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//########################################### Function send mail with PHPMailer-master.
function send_mail($to = "", $subject = "", $message = "", $from = "") {
    ##($to, $subject, $message, $headers);
    date_default_timezone_set('Etc/UTC');
    require '../includes/PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;

    $mail->CharSet = "UTF-8";
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "smtp-relay.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "admin@esan108.com";
//Password to use for SMTP authentication
    $mail->Password = "xxxx";
//Set who the message is to be sent from
    $mail->setFrom($from, 'แอดมิน อีสานร้อยแปด');
//Set an alternative reply-to address
    $mail->addReplyTo($from, 'แอดมิน อีสานร้อยแปด');
//Set who the message is to be sent to
    $mail->addAddress($to, '');
//Set the subject line
    $mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->msgHTML($message);
//Replace the plain text body with one created manually
    $mail->AltBody = $message;
//Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
    $error = 0;
    if (!$mail->send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
        $error = 0;
    } else {
        //echo "Message sent!";
        $error = 1;
    }
    return $error;
}
