<?php echo webHelper::renderLayout("pageHeader",array("headerClass"=>"contact-header","headerTitle"=>"CONTACT","subheaderText"=>"Our name sasy it all. We’re into software."));?>


<section class="page-content">

	<section class="content-section">
		<header class="text-center">
			<h2 class="section-title">Contact info</h2>
		</header>
		<div class="row small-up-1 medium-up-3 text-center">
			<div class="columns">
				<dl class="contact-info-list">
					<dt>Address:</dt>
					<dd>Trg Josipa Broza Tita 4,</dd>
					<dd>47000 Karlovac, Hrvatska(Croatia)</dd>
				</dl>
			</div>
			<div class="columns">
				<dl class="contact-info-list">
					<dt>Mobile:</dt>
					<dd>+385 (0) 91 252 2793</dd>
					<dd>+385 (0) 99 399 3401</dd>
				</dl>
			</div>
			<div class="columns">
				<dl class="contact-info-list">
					<dt>E-mail:</dt>
					<dd>
						<a href="mailto:info@insoft.hr">info@insoft.hr</a></dd>
				</dl>
			</div>
		</div>
	</section>

	<section class="content-section">
		
		<header class="text-center">
			<h2 class="section-title">Contact us</h2>
			<p class="">
				In case you have a project for us, you can fill out detailed form
				<button class="hire-us-text" data-toggle="fullScreenForm">Here</button>
			</p>
		</header>

		<form id="contactForm" class="contact-form form" name="contactForm" action="/sendmail.php" data-abide="ajax" novalidate>

			<input type="hidden" name="contact[type]" value="contact">
			
			<div class="form-row row">
				<div class="small-12 medium-6 columns">
					<label for="personName">Your name?</label>
					<input type="text" id="personName" name="contact[name]" required placeholder="John Smith">
					<span class="form-error">
						Please enter your first and last name
			        </span>
				</div>
				<div class="small-12 medium-6 columns">
					<label for="personPhone">Contact phone?</label>
					<input type="text" id="personPhone" name="contact[phone]" required placeholder="+385 98 765 4321">
					<span class="form-error">
						Enter your phone or mobile (only numbers)
			        </span>
				</div>
			</div>

			<div class="form-row row">
				<div class="small-12 medium-6 columns">
					<label for="personMail">E-mail address</label>
					<input type="email" id="personMail" name="contact[email]" required placeholder="vasa.mail@adresa.hr">
					<span class="form-error">
			          Enter valid email address (npr. john.smith@tvrtka.hr)
			        </span>
				</div>
				<div class="small-12 medium-6 columns">
					<label for="comapanyName">Company?</label>
					<input type="text" id="comapanyName" name="contact[company]" placeholder="Your company">
				</div>
			</div>

			<div class="form-row row">
				<div class="small-12 columns">
					<label for="enquireSubject">Subject ?</label>
					<input type="text" id="enquireSubject" name="contact[subject]" required placeholder="What to you want to ask us ?">
					<span class="form-error">
			          Required field.
			        </span>
				</div>
			</div>

			<div class="form-row row">
				<div class="small-12 columns">
					<label for="enquireText">Your inquiry</label>
					<textarea id="enquireText" name="contact[message]" required placeholder="Enter your detailed question"></textarea>
					<span class="form-error">
			          Required field.
			        </span>
				</div>
			</div>

            <div class="form-row row">
                <div class="small-12 columns">
                    <div id="recapctcha_el"  style="margin: 20px 0"></div>
                </div>
            </div>

			<div class="form-footer row align-center">
				<button type="submit" class="button hollow iconed">
					<span>Submit</span>
					<i class="fa fa-paper-plane"></i>
				</button>
				<div class="form-processing">
					<i class='fa fa-spinner fa-spin text-success fa-2x'></i>
				</div>


				<div class="callout message alert-box success">
					Your message was sent successfully :)
				</div>

				<div class="callout message alert-box alert error">
					Error occurred, please try again.
				</div>
			</div>



		</form>
	</section>

	<section class="company-info-section content-section darkgreen-bg">
		<header class="text-center">
			<h2 class="section-title">Company info</h2>
		</header>
		<div class="row small-up-1 medium-up-3 text-center">
			<dl class="columns">
				<dt>Company name :</dt>
				<dd>InSoft d.o.o.
				</dd>
				<dt>HQ Address:</dt>
				<dd>Matoševa 14B, 47000 Karlovac<br />Hrvatska(Croatia)</dd>

				<dt>Office address:</dt>
				<dd>Josipa Broza Tita 4, 47000 Karlovac<br />Hrvatska(Croatia)</dd>
			</dl>
			<dl class="columns">
				<dt>OIB :</dt>
				<dd>34678478293</dd>
				<dt>IBAN :</dt>
				<dd>HR3524840081106626935</dd>

			</dl>

			<dl class="columns">

				<dt>VAT :</dt>
				<dd>HR34678478293</dd>
				<dt>SWIFT :</dt>
				<dd>RZBHHR2X</dd>
			</dl>

		
		</div>
	</section>


	<div class="map-section">
		<?php webHelper::renderGmap(array('45.48889,15.54752'),"",'45.48889,15.54752',9);?>
	</div>



</section>