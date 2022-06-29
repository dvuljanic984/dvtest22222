<div id="hireus-form" class="reveal-content">
	
	<section class="reveal-content-body">
		<div class="row">
			<form  name="hireUsFormForm" id="contactForm-hireus" action="/sendmail.php" class="project-form form small-12" data-abide="ajax" novalidate>

				<input type="hidden" name="contact[type]" value="hireus">

				<header class="reveal-content-header">
					<p class="subtext">HIRE US</p>
					<h2 class="section-title">Tell us something about the project</h2>
				</header>


				<ul class="project-form-steps">
					<li class="form-step">
						<label for="personName">What your name?</label>

						<input type="text" id="personName" name="contact[name]" required placeholder="John Smith">
						<span class="form-error">
				          Required field !
				        </span>

					</li>
					<li class="form-step ">
						<label for="comapanyContact">How can we contact your?</label>
						<input type="text" id="comapanyContact" name="contact[companyContact]" required placeholder="Phone or E-mail">
						<span class="form-error">
				          Required field !
				        </span>
					</li>
					<li class="form-step ">
						<label for="comapanyName">Your company name?</label>
						<input type="text" id="comapanyName" name="contact[companyName]" required placeholder="Best company in the world">
						<span class="form-error">
				          Required field !.
				        </span>
					</li>
					<li class="form-step">
						<label for="yes-no">What services do you need?</label>
						<small>You can choose more the one.</small>
						<div class="form-row row align-spaced">

							<div class="switch">
								<input class="switch-input" id="yes-no" name="contact[serviceType][0]" value="Design" type="checkbox" >
								<label class="switch-paddle" for="yes-no">
									<span class="show-for-sr">Design</span>
									<span class="" aria-hidden="true">DESIGN</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no1" name="contact[serviceType][1]" value="Development" type="checkbox" >
								<label class="switch-paddle" for="yes-no1">
									<span class="show-for-sr">Development</span>
									<span class="" aria-hidden="true">DEVELOPMENT</span>
								</label>
							</div>

							<div class="switch">
								<input class="switch-input" id="yes-no3" name="contact[serviceType][3]" value="Consulting" type="checkbox" >
								<label class="switch-paddle" for="yes-no3">
									<span class="show-for-sr">Consulting</span>
									<span class="" aria-hidden="true">CONSULTING</span>
								</label>
							</div>


						</div>


						<div class="form-row row align-spaced">
							<div class="switch">
								<input class="switch-input" id="yes-no4" name="contact[serviceType][4]" value="Web site" type="checkbox" >
								<label class="switch-paddle" for="yes-no4">
									<span class="show-for-sr">Web site</span>
									<span class="" aria-hidden="true">WEB SITE</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no5" name="contact[serviceType][5]" value="Web shop" type="checkbox" >
								<label class="switch-paddle" for="yes-no5">
									<span class="show-for-sr">E-commerce</span>
									<span class="" aria-hidden="true">E-COMMERCE</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no6" name="contact[serviceType][6]" value="Web application" type="checkbox" >
								<label class="switch-paddle" for="yes-no6">
									<span class="show-for-sr">Web application</span>
									<span class="" aria-hidden="true">WEB APPLICATION</span>
								</label>
							</div>
							<div class="switch">
								<input class="switch-input" id="yes-no7" name="contact[serviceType][7]" value="Mobile application" type="checkbox">
								<label class="switch-paddle" for="yes-no7">
									<span class="show-for-sr">Mobile application</span>
									<span class="" aria-hidden="true">MOBILE APPLICATION</span>
								</label>
							</div>
						</div>

					</li>
					<li class="form-step">
						<label for="companyBudget">Do you have a budget ?</label>
						<input type="number" id="companyBudget" name="contact[companyBudget]" required placeholder="Price is dependent on the services you need"  >
						<span class="form-error">
				          Required field !.
				        </span>
					</li>
					<li class="form-step">
						<label for="projectInfo">Tell us something about the project</label>
						<textarea id="projectInfo" name="contact[projectInfo]" required placeholder="What it's about ?"></textarea>
						<span class="form-error">
				          Required field !.
				        </span>
					</li>
				</ul>
				<div class="form-footer row align-center">
										
					<div class="project-form-submit columns shrink">
						<button type="submit" class="button hollow iconed">
							<span>Submit</span>
							<i class="fa fa-paper-plane"></i>
						</button>
					</div>
					
					<div class="status-spinner form-processing">
						<i class='fa fa-spinner fa-spin text-success  fa-2x'></i>
					</div>
					
					
					<div class="callout message alert-box alert error" >
						Error occurred, please try again.
					</div>

					<div class="callout message alert-box success">
						Your message was sent successfully :)
					</div>
					
				</div>
				
			</form>
			


		</div>
	
	</section>

</div>
