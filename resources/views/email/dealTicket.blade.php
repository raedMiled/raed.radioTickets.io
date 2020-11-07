

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet" />
    <!--<![endif]-->
	<title>Email Template</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#001736; -webkit-text-size-adjust:none }
		a { color:#66c7ff; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }

				
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.text-header,
			.m-center { text-align: center !important; }
			
			.center { margin: 0 auto !important; }
			.container { padding: 20px 10px !important }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.m-br-15 { height: 15px !important; }
			.p30-15 { padding: 30px 15px !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 10px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#000000; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#001736">
		<tr>
			<td align="center" valign="top">
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;">
							<!-- Header -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 0px 30px 30px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
                                                            <td class="text-header" style="color:#475c77; font-family:'Muli', Arial,sans-serif; font-size:14px; line-height:16px; text-align:left;"><multiline><webversion class="link2" style="color:#475c77; text-decoration:none;"><?php echo date('d-m-Y');?></webversion></multiline></td>
														</tr>
													</table>
												</th>
												
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- END Header -->

							<repeater>
								<!-- Intro -->
								<layout label='Intro'>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td style="padding-bottom: 10px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="tbrr p30-15" style="padding: 60px 30px; border-radius:26px 26px 0px 0px;" bgcolor="#12325c">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
																	<td class="h1 pb25" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:40px; line-height:46px; text-align:center; padding-bottom:25px;"><multiline>RADIO<span style="color:#ea454b;"> TICKETS</span></multiline></td>
																</tr>
																<tr>
																	<td class="text-center pb25" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:30px; text-align:center; padding-bottom:25px;"><multiline>You have made a resrvation on <span style="color:#66c7ff;"> {{$deal->name}}</span> deal <span class="m-hide"><br /></span>Please show this ticket to get reduction this deal.</multiline></td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</layout>
								<!-- END Intro -->

								<!-- Article / Full Width Image + Title + Copy + Button -->
								<layout label='Article / Full Width Image + Title + Copy + Button'>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td style="padding-bottom: 10px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#12325c">
													<tr>
														<td class="p30-15" style="padding: 50px 30px;">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
																	<td class="h3 pb20" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:32px; text-align:left; padding-bottom:20px;"><multiline>Ticket Code : <span style="color:#66c7ff;">{{$random}}</span></multiline></td>
																</tr>
																<tr>
																	<td class="h3 pb20" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:32px; text-align:left; padding-bottom:20px;"><multiline>Time end of the deal : <span style="color:#66c7ff;">{{$deal->timeEnd}}</span></multiline></td>
																</tr>
																<tr>
                                                                    <td class="h3 pb20" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:32px; text-align:left; padding-bottom:20px;"><multiline>Date end of the deal : <span style="color:#66c7ff;">{{$deal->dateEnd}}</span></multiline></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="h3 pb20" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:32px; text-align:left; padding-bottom:20px;"><multiline>Address of the deal : <span style="color:#66c7ff;">{{$deal->address}}</span></multiline></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="h3 pb20" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:32px; text-align:left; padding-bottom:20px;"><multiline>discount of the deal : <span style="color:#66c7ff;">{{$deal->discount}}</span></multiline></td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</layout>
                                <!-- END Article / Full Width Image + Title + Copy + Button -->
                                <!-- Footer -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15 bbrr" style="padding: 50px 30px; border-radius:0px 0px 26px 26px;" bgcolor="#12325c">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="text-footer2" style="color:#8297b3; font-family:'Muli', Arial,sans-serif; font-size:12px; line-height:26px; text-align:center;"><multiline>Radio Tickets website </multiline></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td class="text-footer3 p30-15" style="padding: 40px 30px 0px 30px; color:#475c77; font-family:'Muli', Arial,sans-serif; font-size:12px; line-height:18px; text-align:center;">
										<unsubscribe class="link2-u" style="color:#475c77; text-decoration:underline;">Copyright DigiKod 2020.</unsubscribe>
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
