<?php require_once('../includes/config.php'); ?>
<?php require_once('../includes/conn.php'); ?>
<?php require_once('../includes/functions.php'); ?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Phronesis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body, #body_style {
			width: 100% !important;
			background: #ffffff;
			color: #ffffff;
			line-height: 1;
			}
			.ExternalClass {
			width: 100%;
			}
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
			line-height: 100%;
			}
			body {
			-webkit-text-size-adjust: none;
			-ms-text-size-adjust: none;
			}
			body, img, div, p, ul, li, span, strong, a {
			margin: 0;
			padding: 0;
			}
			table {
			border-spacing: 0;
			}
			table td {
			border-collapse: collapse;
			}
			a {
			color: #6A127A;
			text-decoration: underline;
			outline: none;
			}
			a:hover {
			text-decoration: none !important;
			}
			a[href^="tel"], a[href^="sms"] {
			text-decoration: none;
			color: #ffd204;
			}
			img {
			display: block;
			border: none;
			outline: none;
			text-decoration: none;
			}
			table {
			border-collapse: collapse;
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
			}
			/*Style for Page design Start Here*/
			@media screen and (max-width: 599px) {
			body[yahoo] .wrapper-section-one{
			width: 100% !important;
			}
			body[yahoo] .content-block img{
			width: 100% !important;
			}
			body[yahoo] .content-block a {
			width: 100% !important;
			}
			body[yahoo] .menu {
			width: auto !important;
			}
			body[yahoo] .content-block {
			width: 100% !important;
			display: block;
			}
			body[yahoo] .content-block-img img{
			width: auto !important;
			}
			}
			@media screen and (max-width: 479px) {
			body[yahoo] .bs_logo{
			width: 100% !important;
			text-align:center !important;
			}
			body[yahoo] .menu {
			width: 95% !important;
			}
			}
		</style>
	</head>
	<body style="font-family: 'PT Sans', sans-serif; font-size: 12px; color: #414042; background: #f5f5f5; margin: 0; width:100% !important;" yahoo="fix">
		<!--Section first  Starts here-->
		<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="wrapper-section-one bg-editable" style="background: #dadada; background: #6A127A;">
			<tr>
				<td height="35" colspan="3">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
				<td>
					<table class="bs_logo" cellpadding="0" cellspacing="0" border="0" width="190" align="left">
						<tr>
							<td align="center">
								<a class="editable-lni" href="<?php echo URL; ?>">
								<img src="<?php echo URL; ?>img/logoinv.png" height="50" alt=""/>
								</a>
							</td>
						</tr>
					</table>
				</td>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td height="33" colspan="3">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
		</table>
		
		<!--Section Fourth Start here-->
		<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" class="wrapper-section-one" style="background: #fff;">
			<tr>
				<td height="25">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
				<td width="570" style="padding: 0px 15px;" class="content-block">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td height="15">
								<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
							</td>
						</tr>
						<tr>
							<td style="color: #636363;font-size: 14px;line-height: 1.5em;margin-bottom: 20px;font-family:'PT Sans', sans-serif;" class="editable">
								{{contenido}}
							</td>
						</tr>
						<tr>
							<td height="15">
								<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
							</td>
						</tr>
					</table>
				</td>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td height="25">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td height="25">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
		</table>
		<!--Section Fourth End here-->	
		<!--Section Sixth Start here-->
		<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" class="wrapper-section-one" style="background:#fff;">
			<tr>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
				<td style="color: #373f4a;font-size: 18px;border-left: 4px double #373f4a;padding-left: 10px;font-weight:bold;font-family: 'Raleway', sans-serif;" class="editable content-block">
					La comunidad Phronesis te recomienda...
				</td>
			</tr>
			<tr>
				<td height="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
				<td class="content-block">
					<div class="editable" style="display: block;">
						<a target="_blank" href="<?php echo URL; ?>paquetes/1">
							<img src="<?php echo URL; ?>img/bannerPaqueteDesktop.jpg" width="100%" alt=""style="display: inline-block;"/>
						</a>
					</div>
				</td>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td height="15">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
			<tr>
				<td height="50">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
		</table>
		<!--Section Sixth End here-->
		<!--Section Fifteenth Start here-->
		<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" class="wrapper-section-one" style="background: #6A127A;">
			<tr>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
				<td class="content-block" colspan="3">
					<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-top: 1px solid #444c57;color: #fff;font-size: 14px;">
						<tr>
							<td class="content-block" valign="middle" width="200">
								<table align="left" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td height="20">
											<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
										</td>
									</tr>
									<tr>
										<td style="font-family:'PT Sans', sans-serif;color:#fff;font-size: 14px;text-align: center" class="editable">
											Copyright <?php echo date('Y'); ?> © Editorial Phronesis. 
											Para darse de baja haga click <a style="color: #F8C71A" href="<?php echo URL ?>index.php?content=darse-de-baja&email={{email}}">aquí</a>.
										</td>
									</tr>
									<tr>
										<td height="20">
											<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
										</td>
									</tr>
								</table>
							</td>
							<td width="20" height="20" class="content-block">
								<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
							</td>
						</tr>
					</table>
				</td>
				<td width="20">
					<img src="<?php echo URL; ?>email/images/blank.gif" width="1" height="1" alt="">
				</td>
			</tr>
		</table>
		<!--Section Fifteenth End here-->					
	</body>
</html>