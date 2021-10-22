<?php
// File which contains the body of the mail and the function for sending mail according to the desired information
include("../PHPMailer-FE_v4.11/_lib/class.phpmailer.php");

class Mail {

  public function BodyMail($title, $message, $nom, $entreprise) {
    return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
    	<!--[if gte mso 9]>
    	<xml>
    		<o:OfficeDocumentSettings>
    		<o:AllowPNG/>
    		<o:PixelsPerInch>96</o:PixelsPerInch>
    		</o:OfficeDocumentSettings>
    	</xml>
    	<![endif]-->
    	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="format-detection" content="date=no" />
    	<meta name="format-detection" content="address=no" />
    	<meta name="format-detection" content="telephone=no" />
    	<meta name="x-apple-disable-message-reformatting" />
        <!--[if !mso]><!-->
    	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700,700i" rel="stylesheet" />
        <!--<![endif]-->
    	<title>Email Template</title>
    	<!--[if gte mso 9]>
    	<style type="text/css" media="all">
    		sup { font-size: 100% !important; }
    	</style>
    	<![endif]-->


    	<style type="text/css" media="screen">
    		/* Linked Styles */
    		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#111111; -webkit-text-size-adjust:none }
    		a { color:#ffffff; text-decoration:none }
    		p { padding:0 !important; margin:0 !important }
    		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
    		.mcnPreviewText { display: none !important; }


    		/* Mobile styles */
    		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
    			.mobile-shell { width: 100% !important; min-width: 100% !important; }
    			.bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }

    			.text-header,
    			.m-center { text-align: center !important; }

    			.center { margin: 0 auto !important; }
    			.container { padding: 20px 10px !important }

    			.td { width: 100% !important; min-width: 100% !important; }

    			.p30-15 { padding: 30px 15px !important; }

    			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

    			.column,
    			.column-top,
    			.column-empty2 { float: left !important; width: 100% !important; display: block !important; }

    			.column-empty2 { padding-bottom: 10px !important; }
    		}
    	</style>
    </head>
    <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#111111; -webkit-text-size-adjust:none;">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="teal">
    		<tr>
    			<td align="center" valign="top">
    				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
    					<tr>
    						<td class="td container" style="width:650px; min-width:650px; font-size:0pt; margin:0; font-weight:normal; padding:55px 0px 0px 0px;">
    							<!-- Header -->
    							<table width="100%" border="0" cellspacing="0" cellpadding="0">
    								<tr>
    									<td class="p30-15 tbrr" style="padding: 30px 0px 20px 0px; border-radius:12px 12px 0px 0px;">
    										<table width="100%" border="0" cellspacing="0" cellpadding="0">
    											<tr>
    												<th class="column-top" width="145" style="font-size:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
    													<table width="100%" border="0" cellspacing="0" cellpadding="0">
    														<tr>
    															<td class="img m-center" style="font-size:16pt; text-align:left; color: #ff7b74; font-family: \'Poppins\', Arial, sans-serif;">Victor Louvet</td>
    														</tr>
    													</table>
    												</th>
    												<th class="column-empty2" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
    												<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
    													<table width="100%" border="0" cellspacing="0" cellpadding="0">
    														<tr>
    															<td class="text-header" style="color:#a5a5a5; font-family:\'Poppins\', Arial, sans-serif; font-size:11px; line-height:18px; text-align:right; text-transform:uppercase; font-weight:bold;"><a href="#" target="_blank" class="link2" style="color:#a5a5a5; text-decoration:none;"><span class="link2" style="color:#a5a5a5; text-decoration:none;">Open in your browser</span></a></td>
    														</tr>
    													</table>
    												</th>
    											</tr>
    										</table>
    									</td>
    								</tr>
    								<tr>
    									<td style="padding-bottom: 40px;">
    										<table width="100%" border="0" cellspacing="0" cellpadding="0">
    											<tr>
    												<td width="126" bgcolor="#ff74c3" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    												<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    												<td width="126" bgcolor="#7474ff" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    												<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    												<td width="126" bgcolor="#74ffd0" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    												<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    												<td width="126" bgcolor="#fff474" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    												<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    												<td width="126" bgcolor="#ff7b74" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    											</tr>
    										</table>
    									</td>
    								</tr>
    							</table>
    							<!-- END Header -->

    							<!-- Hero Image -->
    							<table width="100%" border="0" cellspacing="0" cellpadding="0">
    								<tr>
    									<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="http://victorlouvet.fr/public/IMG/victorlouvet-image-mail.jpg" border="0" width="650" height="366" alt="" /></td>
    								</tr>
    							</table>
    							<!-- END Hero Image -->

    							<!-- Intro -->
    							<table width="100%" border="0" cellspacing="0" cellpadding="0">
    								<tr>
    									<td style="padding-bottom: 40px;">
    										<table width="100%" border="0" cellspacing="0" cellpadding="0">
    											<tr>
    												<td class="p30-15" style="padding: 40px 0px 40px 0px;">
    													<table width="100%" border="0" cellspacing="0" cellpadding="0">
    														<tr>
    															<td class="h3 pb25" style="color:#ff7b74; font-family:\'Poppins\', Arial, sans-serif; font-size:26px; line-height:32px; text-align:center; font-weight:bold; padding-bottom:25px;"> '. $nom .' - '. $title .' - '. $entreprise .'</td>
    														</tr>
    														<tr>
    															<td class="text white pb25" style="font-family:\'Poppins\', Arial,sans-serif; font-size:14px; line-height:26px; text-align:center; color:#ffffff; padding-bottom:25px;">'. $message .'</td>
    														</tr>
    														<!-- Button -->
    														<tr>
    															<td align="center">
    																<table border="0" cellspacing="0" cellpadding="0">
    																	<tr>
    																		<td class="text-button" style="background:#ff7b74; color:#ffffff; font-family:\'Poppins\', Arial, sans-serif; font-size:14px; line-height:18px; padding:12px 25px; text-align:center; text-transform:uppercase; cursor:pointer;"><a href="victorlouvet.fr" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">VOIR LE SITE WEB</span></a></td>
    																	</tr>
    																</table>
    															</td>
    														</tr>
    														<!-- END Button -->
    													</table>
    												</td>
    											</tr>
    											<tr>
    												<td>
    													<table width="100%" border="0" cellspacing="0" cellpadding="0">
    														<tr>
    															<td width="126" bgcolor="#ff74c3" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    															<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    															<td width="126" bgcolor="#7474ff" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    															<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    															<td width="126" bgcolor="#74ffd0" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    															<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    															<td width="126" bgcolor="#fff474" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    															<td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
    															<td width="126" bgcolor="#ff7b74" height="3" class="img" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
    														</tr>
    													</table>
    												</td>
    											</tr>
    										</table>
    									</td>
    								</tr>
    							</table>
    							<!-- END Intro -->

    							<!-- Footer -->
    							<table width="100%" border="0" cellspacing="0" cellpadding="0">
    								<tr>
    									<td class="p30-15 bbrr" style="padding: 30px; border-radius:0px 0px 12px 12px;">
    										<table width="100%" border="0" cellspacing="0" cellpadding="0">
    											<tr>
    												<td class="text-footer1 pb10" style="color:#999999; font-family:\'Poppins\', Arial,sans-serif; font-size:14px; line-height:20px; text-align:center; padding-bottom:10px;">Victor Louvet - Mon site web CV</td>
    											</tr>
    											<tr>
    												<td class="text-footer2" style="color:#999999; font-family:\'Poppins\', Arial,sans-serif; font-size:12px; line-height:26px; text-align:center;"><a href="victorlouvet.fr" target="_blank" class="link-grey-u" style="color:#999999; text-decoration:underline; cursor:pointer;"><span class="link-grey-u" style="color:#999999; text-decoration:underline;">victorlouvet.fr</span></a>, visiter mon site web !</td>
    											</tr>
    										</table>
    									</td>
    								</tr>
    							</table>
    							<!-- END Footer -->
    						</td>
    					</tr>
    				</table>
    			</td>
    		</tr>
    	</table>
    </body>
    </html>
';
  }

  public function SendMail($from, $to, $sujet, $title, $message, $nom, $entreprise) {

    $mail = new PHPmailer();
    //$mail->IsSMTP();
    $mail->IsHTML(true);
    //$mail->Host='hote_smtp';
    $mail->CharSet = "UTF-8";
    $mail->Encoding = 'base64';
    $mail->From= $from;
    $mail->AddAddress($to);
    $mail->AddReplyTo($from);
    $mail->Subject= $sujet;
    $mail->Body= $this->BodyMail($title, $message, $nom, $entreprise);

    if(!$mail->Send()){
      echo $mail->ErrorInfo;
      return false;
    }
    //$mail->SmtpClose();
    unset($mail);

    return true;
  }

}
