<div id="hireus-form" class="reveal-content">

	<section class="reveal-content-body">
		<div class="row">
			<form  name="hireUsFormForm" id="contactForm-hireus" action="/sendmail.php" class="project-form form small-12" data-abide="ajax" novalidate>

				<input type="hidden" name="contact[type]" value="hireus">

				<header class="reveal-content-header">
					<p class="subtext">ANGAŽIRAJTE NAS</p>
					<h2 class="section-title">Recite nam neke osnovne informacije</h2>
				</header>


				<ul class="project-form-steps">
					<li class="form-step">
						<label for="personName">Kako se zovete?</label>

						<input type="text" id="personName" name="contact[name]" required placeholder="Ivan Smith">
						<span class="form-error">
				          OJ! Ovo je obvezno polje. Ispunite ga.
				        </span>

					</li>
					<li class="form-step ">
						<label for="comapanyContact">Kako da Vas kontaktiramo?</label>
						<input type="text" id="comapanyContact" name="contact[companyContact]" required placeholder="Telefon ili E-mail">
						<span class="form-error">
				          OJ! Ovo je obvezno polje. Ispunite ga.
				        </span>
					</li>
					<li class="form-step ">
						<label for="comapanyName">Koje je ime Vaše tvrtke?</label>
						<input type="text" id="comapanyName" name="contact[companyName]" required placeholder="Najbolja Tvrtka">
						<span class="form-error">
				          OJ! Ovo je obvezno polje. Ispunite ga.
				        </span>
					</li>
					<li class="form-step">
						<label for="yes-no">Koje usluge Vam možemo ponuditi?</label>
						<small>Možete odabrati više od jedne.</small>
						<div class="form-row row align-spaced">

							<div class="switch">
								<input class="switch-input" id="yes-no" name="contact[serviceType][0]" value="Design" type="checkbox" >
								<label class="switch-paddle" for="yes-no">
									<span class="show-for-sr">Dizajn</span>
									<span class="" aria-hidden="true">DIZAJN</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no1" name="contact[serviceType][1]" value="Development" type="checkbox" >
								<label class="switch-paddle" for="yes-no1">
									<span class="show-for-sr">Progrmiranje</span>
									<span class="" aria-hidden="true">PROGRMIRANJE</span>
								</label>
							</div>

							<div class="switch">
								<input class="switch-input" id="yes-no3" name="contact[serviceType][3]" value="Consulting" type="checkbox" >
								<label class="switch-paddle" for="yes-no3">
									<span class="show-for-sr">Savjetovanje</span>
									<span class="" aria-hidden="true">SAVJETOVANJE</span>
								</label>
							</div>


						</div>


						<div class="form-row row align-spaced">
							<div class="switch">
								<input class="switch-input" id="yes-no4" name="contact[serviceType][4]" value="Web site" type="checkbox" >
								<label class="switch-paddle" for="yes-no4">
									<span class="show-for-sr">Web stranica</span>
									<span class="" aria-hidden="true">WEB STRANICA</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no5" name="contact[serviceType][5]" value="Web shop" type="checkbox" >
								<label class="switch-paddle" for="yes-no5">
									<span class="show-for-sr">Internet trgovina</span>
									<span class="" aria-hidden="true">INTERNET TRGOVINA</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no6" name="contact[serviceType][6]" value="Web application" type="checkbox" >
								<label class="switch-paddle" for="yes-no6">
									<span class="show-for-sr">Web aplikacija</span>
									<span class="" aria-hidden="true">WEB APLIKACIJA</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no7" name="contact[serviceType][7]" value="Mobile application" type="checkbox" >
								<label class="switch-paddle" for="yes-no7">
									<span class="show-for-sr">Mobilne aplikacije</span>
									<span class="" aria-hidden="true">MOBILNE APLIKACIJE</span>
								</label>
							</div>
						</div>

					</li>
					<li class="form-step">
						<label for="companyBudget">Da li imate budžet?</label>
						<input type="number" id="companyBudget" name="contact[companyBudget]" required placeholder="cijena varira ovisno o projektu i uslugama"  >
						<span class="form-error">
				          OJ! Ovo je obvezno polje. Ispunite ga.
				        </span>
					</li>
					<li class="form-step">
						<label for="projectInfo">Recite nam par riječi o projektu</label>
						<textarea id="projectInfo" name="contact[projectInfo]" required placeholder="O čemu se radi u Vašem projektu"></textarea>
						<span class="form-error">
				          OJ! Ovo je obvezno polje. Ispunite ga.
				        </span>
					</li>
				</ul>
				<div class="form-footer row align-center">


					<div class="project-form-submit columns shrink">
						<button type="submit" class="button hollow iconed">
							<span>Pošalji</span>
							<i class="fa fa-paper-plane"></i>
						</button>
					</div>

					<div class="status-spinner form-processing">
						<i class='fa fa-spinner fa-spin text-success  fa-2x'></i>
					</div>


					<div class="callout message alert-box alert error" >
						Ups! Došlo je do greške. Pokušajte ponovo.
					</div>

					<div class="callout message alert-box success">
						Vaš upit za projekt je uspješno poslan :)
					</div>

				</div>
				
			</form>
	

		</div>
	
	</section>

</div>
