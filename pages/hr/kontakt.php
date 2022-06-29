<?php echo webHelper::renderLayout("pageHeader",array("headerClass"=>"contact-header","headerTitle"=>"KONTAKT","subheaderText"=>"Our name sasy it all. We’re into software."));?>


<section class="page-content">

	<section class="content-section">
		<header class="text-center">
			<h2 class="section-title">Kontakt podaci</h2>
		</header>
		<div class="row small-up-1 medium-up-3 text-center">
			<div class="columns">
				<dl class="contact-info-list">
					<dt>Adresa:</dt>
					<dd>Trg Josipa Broza Tita 4,</dd>
					<dd>47000 Karlovac, Hrvatska(Croatia)</dd>
				</dl>
			</div>
			<div class="columns">
				<dl class="contact-info-list">
					<dt>Mobitel:</dt>
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
			<h2 class="section-title">Kontaktirajte nas</h2>
			<p class="">Ukoliko imate upit vezan za projekt, možete ispuniti specijalizirani obrazac
				<button class="hire-us-text" data-toggle="fullScreenForm">ovdje</button>
			</p>
		</header>

		<form id="contactForm" class="contact-form form" name="contactForm" action="/sendmail.php" data-abide="ajax" novalidate>

			<input type="hidden" name="contact[type]" value="contact">
			
			<div class="form-row row">
				<div class="small-12 medium-6 columns">
					<label for="personName">Vaše ime?</label>
					<input type="text" id="personName" name="contact[name]" required placeholder="Ivan Horvat">
					<span class="form-error">
			          Unesite svoje puno ime i prezime (Ivan Horvat)
			        </span>
				</div>
				<div class="small-12 medium-6 columns">
					<label for="personPhone">Kontakt broj?</label>
					<input type="text" id="personPhone" name="contact[phone]" required placeholder="+385 98 765 4321">
					<span class="form-error">
			          Unesite broj telefona ili mobitela (samo znamenke)
			        </span>
				</div>
			</div>

			<div class="form-row row">
				<div class="small-12 medium-6 columns">
					<label for="personMail">E-mail adresa</label>
					<input type="email" id="personMail" name="contact[email]" required placeholder="vasa.mail@adresa.hr">
					<span class="form-error">
			          Unesite ispravnu e-mail adresu (npr. ivan.horvat@tvrtka.hr)
			        </span>
				</div>
				<div class="small-12 medium-6 columns">
					<label for="comapanyName">Ime Vaše tvrtke?</label>
					<input type="text" id="comapanyName" name="contact[company]" placeholder="Najbolja firma">
				</div>
			</div>

			<div class="form-row row">
                <div class="small-12 columns">
                    <label for="enquireSubject">Tema Vašeg upita?</label>
                    <input type="text" id="enquireSubject" name="contact[subject]" required placeholder="Što Vas zanima?">
                    <span class="form-error">
			          Molimo da popunite ovo polje.
			        </span>
                </div>
            </div>

			<div class="form-row row">
                <div class="small-12 columns">
                    <label for="enquireText">Vaš upit</label>
                    <textarea id="enquireText" name="contact[message]" required placeholder="Opišite svoj upit"></textarea>
                    <span class="form-error">
			          Molimo da popunite ovo polje.
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
					<span>Pošalji</span>
					<i class="fa fa-paper-plane"></i>
				</button>
				<div class="form-processing">
					<i class='fa fa-spinner fa-spin text-success fa-2x'></i>
				</div>


				<div class="callout message alert-box success">
					Vaš upit je uspješno poslan :)
				</div>

				<div class="callout message alert-box alert error">
					Ups! Došlo je do greške. Pokušajte ponovo.
				</div>
			</div>



		</form>
	</section>

	<section class="company-info-section content-section darkgreen-bg">
		<header class="text-center">
			<h2 class="section-title">Podaci o poduzeću</h2>
		</header>
		<div class="row small-up-1 medium-up-3 text-center">
			<dl class="columns">
				<dt>Naziv firme :</dt>
				<dd>InSoft d.o.o.<br /><em>InSoft društvo s ograničenom odgovornošću za trgovinu i usluge</em>
				</dd>
				<dt>Adresa sjedišta:</dt>
				<dd>Matoševa 14B, 47000 Karlovac<br />Hrvatska(Croatia)</dd>

<!--				<dt>Adresa ureda:</dt>-->
<!--				<dd>Josipa Broza Tita 4, 47000 Karlovac<br />Hrvatska(Croatia)</dd>-->
			</dl>
			<dl class="columns">
				<dt>Godina osnutka :</dt>
				<dd>2013.</dd>
				<dt>MBS</dt>
				<dd>080865025</dd>
				<dt>Upis u sudski registar</dt>
				<dd>Trgovački sud u Zagrebu - Stalna služba u Karlovcu</dd>
				<dt>Temeljni kapital :</dt>
				<dd>20.000,00 kn - uplaćen u cijelosti</dd>
			</dl>
			<dl class="columns">
				<dt>OIB :</dt>
				<dd>34678478293</dd>
				<dt>IBAN :</dt>
				<dd>HR3524840081106626935</dd>
				<dt>VAT :</dt>
				<dd>HR34678478293</dd>
				<dt>SWIFT :</dt>
				<dd>RZBHHR2X</dd>
				<dt>Uprava :</dt>
				<dd>Denis Vuljanić - direktor</dd>
			</dl>
		
		</div>
	</section>


	<div class="map-section">
		<?php webHelper::renderGmap(array('45.48889,15.54752'),"",'45.48889,15.54752');?>
	</div>



</section>