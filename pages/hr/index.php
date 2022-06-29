<section class="intro-header">
	<div class="intro-header-content">

		<h1>Design & development agency</h1>
		<h2 >Specialized for design & development @ web & mobile </h2>		<hr>
		<button type="button" class="hire-us-button iconed button hollow round inverted" data-toggle="fullScreenForm">
			<span>Angažirajte nas</span>
			<i class="fa fa-paper-plane"></i>
		</button>
	</div>
</section>

<section class="work-preview content-section">
	<header class="text-center">
		<h2 class="section-title">Izdvojeni referentni radovi</h2>
	</header>
	<div class="work-preview-grid row expanded collapse small-up-1 medium-up-3">
		<div class="work-preview-box columns">
			<div class="centar-za-mlade polygon polygon-start">
				<a class="preview-box-link" data-toggle="caseStudyCentar">
					<img src="images/logos/centar_za_mlade.svg" alt="">
				</a>
			</div>
			<button type="button" class="show-case-study button"  data-toggle="caseStudyCentar">
				<i class="fa fa-eye"></i>
			</button>
			<div class="reveal full reveal-case-study centar-za-mlade-case-reveal" id="caseStudyCentar" data-reveal data-close-on-click="true" >
				<button class="close-button" data-close aria-label="Close reveal"  type="button">
					<span aria-hidden="true">&times;</span>
				</button>


				<?php echo webHelper::renderLayout("case-studies-hr/case-centar");?>

			</div>
		</div>
		<div class="work-preview-box columns" >
			<div class="aquaestil polygon polygon-middle">
				<a class="preview-box-link" data-toggle="caseStudyAquaestil">
					<img src="images/logos/aquaestil.svg" alt="">
				</a>
			</div>
			<button type="button" class="show-case-study button"   data-toggle="caseStudyAquaestil">
				<i class="fa fa-eye"></i>
			</button>
			<div class="reveal full reveal-case-study aquaestil-case-reveal" id="caseStudyAquaestil" data-reveal data-close-on-click="true" >
				<button class="close-button" data-close aria-label="Close reveal"  type="button">
					<span aria-hidden="true">&times;</span>
				</button>

				<?php echo webHelper::renderLayout("case-studies-hr/case-aquaestil");?>

			</div>
		</div>
		<div class="work-preview-box columns">
			<div class="lin-trgovina polygon polygon-end">
				<a class="preview-box-link" data-toggle="caseStudyLin">
					<img src="images/logos/lin_trgovina.svg" alt="">
				</a>
			</div>
			<button type="button" class="show-case-study button"  data-toggle="caseStudyLin">
				<i class="fa fa-eye"></i>
			</button>
			<div class="reveal full reveal-case-study lin-trgovina-case-reveal" id="caseStudyLin" data-reveal data-close-on-click="true">
				<button class="close-button" data-close aria-label="Close reveal"   type="button">
					<span aria-hidden="true">&times;</span>
				</button>

				<?php echo webHelper::renderLayout("case-studies-hr/case-lin");?>
				
			</div>
		</div>
	</div>

	<div class="row align-center">
		<div class="columns shrink">
			<a href="hr/reference.html" class="button hollow">Pogledaj sve projekte</a>
		</div>
	</div>
</section>

<section class="company-services content-section">
	<header class="text-center">
		<h2 class="section-title">Usluge koje pružamo</h2>
	</header>
	<section class="company-services-grid row expanded small-up-1 medium-up-1 large-up-2">

		<section class="company-service-box columns">
			<div class="row">
				<section class="company-service-icon small-12 medium-5 large-4 columns">
					<img src="images/icons/web_design.png" alt="">
				</section>
				<section class="company-service-content small-12 medium-7 large-8 columns">
					<h3 class="box-title">Web stranice</h3>
					<p>Web stranice su danas sigurno najvažniji način prezentacije tvrtke u svijetu. Kontinuirana dostupnost i mogućnost interakcije s klijentima čini ih daleko najboljim marketinškim ulaganjem koje možete napraviti. U izradi web stranica vodimo se najvišim standardima i posebnu pozornost  posvećujemo korisničkom iskustvu. Svaka izrada web stranica je jedinstvena i za svakog klijenta izrađujemo originalan i unikatni web dizajn. Tijekom izrade web stranica najveću moguću pozornost posvećujemo i optimizacijama, kako bi Vaša web stranica postigla što je moguće bolje rezultate na pretraživačima.
					</p>
				</section>
			</div>
		</section>

		<section class="company-service-box columns">
			<div class="row">
				<section class="company-service-icon small-12 medium-5 large-4 columns">
					<img src="images/icons/web_apps.png" alt="">
				</section>
				<section class="company-service-content small-12 medium-7 large-8 columns">
					<h3 class="box-title">Web aplikacije</h3>
					<p>Web aplikacije su programska rješenja vrlo slična standardnim windows, linux ili mac programima, no pristupa im se putem Internet preglednika (Firefox, chrome, IE..itd) i nalaze se na web poslužitelju (web serveru). Zbog svega toga web aplikacije su sve popularnije jer su dostupne s bilo kojeg računala, bilo gdje u svijetu. Primjeri web aplikacija su sustavi narudžbi i plaćanja proizvoda ili usluga, rezervacije raznih usluga, razmjena dokumenata, knjigovodstveni sustavi i drugo
					</p>
				</section>
			</div>
		</section>

		<section class="company-service-box columns">
			<div class="row">
				<section class="company-service-icon small-12 medium-5 large-4 columns">
					<img src="images/icons/mobile_apps.png" alt="">
				</section>
				<section class="company-service-content small-12 medium-7 large-8 columns">
					<h3 class="box-title">Mobilne aplikacije</h3>
					<p >
						Suvremeno tržište zahtijeva stalno prilagođavanje. Jedna od stvari koju korisnici očekuju bez izuzetka su zasigurno mobilne aplikacije. Mobilne aplikacije su suvremeni alat koji Vam omogućavama da budete na dohvat ruke Vašim postojećim i potencijalnim kupcima, te da Vaši kupci na jednstavan i brz način dođu do Vas i Vaših usluga. U svojoj ponudi imamo uslugu izrade mobilnih aplikacija za uređaje na Android platformi, te izradu hibridnih mobilnih aplikacija za sve platforme iOS, Android, Windows Phone, temeljeneh na najnovijim tehnologijama.
					</p>
				</section>
			</div>
		</section>

		<section class="company-service-box columns">
			<div class="row">
				<section class="company-service-icon small-12 medium-5 large-4 columns">
					<img src="images/icons/consulting.png" alt="">
				</section>
				<section class="company-service-content small-12 medium-7 large-8 columns">
					<h3 class="box-title">Savjetovanje</h3>
					<p >

						Imate potrebu za web stranicom, internet trgovinom, mobilnom aplikacijom, ali ne znate što Vam treba. Željeli bi napravit Internet trgovinu, ali ne znate otkuda krenuti, na što sve morate paziti? Potrebna Vam je mobilna aplikacija, ali ne znate koju platformu, što sve stavit u mobilnu aplikaciju. Željeli bi automatizirati dio poslovnog procesa i tako ubrzati rad, povećati prihode, smanjiti troškove, ali ne znate kako iskoristiti moderne tehnologije. Tu smo da Vam pomognemo, odgovorimo na Vaša pitanja. Odabrat ćemo za Vas platforme i tehnologije koje Vas najmanje koštaju, a najviše donose. U konačnici omogućit ćemo Vam da se bavite svojim poslom i njemu se posvetite, a web i mobilne tehologije prepustite nama na brigu.


						<!-- NE DIRAJ Imate potrebu za web stranicom, Internet dučanom, mobilnom aplikacijom, ali ne znate što Vam točno od toga treba. Što bi Vam najviše koristilo, povečalo prihode, dovelo nove kupce ? Željeli bi napravit Internet dučan, ali ne znate od kuda krenuti, što sve morate pripremiti, na što sve morate paziti, koje su sve opcije pri izradi ? Potrebna Vam je mobilna aplikacija, ali ne znate za koju platformu, što sve stavit u mobilnu aplikaciju. Željeli bi automatizirati dio poslovnog procesa i tako ubrzati rad, povečati prihode, smanjiti troškove, ali ne znate kako iskoristiti moderne tehnologije u te svrhe. Dobro došli u InSoft, tu smo da Vam pomognemo u tim problemima, odgovorimo na Vaša pitanja. Vi čete nama reći što želite postići, mi čemo Vas savjetovati kako to postići. Savjetovat čemo Vas da li je bolje napraviti web stranicu, Internet dučan, mobilnu aplikaijcu ili poslovnu aplikaciju ili možda kombinaciju toga. Odabrat čemo za Vas platforme i tehnologije koje Vas najmanje koštaju, a najviše donose. Pomoći čmo Vam da implementirate navedene tehnologije u Vaš poslovni proces. Bit čemo uz Vas kada zapnete pri korištenju istih. U konačnici omogučit čemo Vam da se bavite svojim poslom i njemu se posvetite, a web i mobilne tehologije prepustite nama na brigu.-->
					</p>
				</section>
			</div>
		</section>

	</section>
</section>

<div class="joomla-experts content-section darkgreen-bg">
	<div class="joomla-experts-header row expanded align-center">
		<div class="small-12 medium-6 columns text-center">
			<img src="images/joomla_logo.png" alt="">
			<h3>Joomla experti</h3>
			<p class="lead">Dugogodišnje iskustvo u radu s Joomla sustavom nas čini expertima, te uz preko 50 vlastitih predložaka (templatea) možemo se pohvaliti i s nekoliko dodataka:</p>
		</div>
	</div>
	
	<div class="joomla-extensions row small-up-1 medium-up-3">


		<div class="joomla-extension-box text-center columns">
			<?php echo webHelper::renderLayout("joomlaExtensionCount",array("title"=>"Komponente","exstensionType"=>"components","counted"=>"30","countingDelay"=>"50"));?>
		</div>

		<div class="joomla-extension-box text-center columns">
			<?php echo webHelper::renderLayout("joomlaExtensionCount",array("title"=>"Moduli","exstensionType"=>"modules","counted"=>"40","countingDelay"=>"40"));?>

		</div>

		<div class="joomla-extension-box text-center columns">
			<?php echo webHelper::renderLayout("joomlaExtensionCount",array("title"=>"Plugins","exstensionType"=>"plugins","counted"=>"25","countingDelay"=>"50"));?>
		</div>

	</div>

</div>

<div class="company-departments content-section">

	<header class="text-center">
		<h2 class="section-title">InSoft Odjeli</h2>
		<!--<h6 class="subheader">Sure, we're small, but we can handle it</h6>-->
	</header>

	<div class="company-departments-grid">
		<div class="row small-up-1 medium-up-3">
			<div class="columns department-box">

				<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="300px" height="300px" version="1.1" viewBox="0 0 92507 105424"
					 xmlns:xlink="http://www.w3.org/1999/xlink">
					<g>
						<clipPath id="id0">
							<polygon points="0,4584 10834,105424 79172,105424 92507,0 "/>
						</clipPath>
					</g>
					<image clip-path="url(<?php echo WURL_CURRENT;?>#id0)" height="100%" width="100%" xlink:href="images/dev_department.jpg" />
				</svg>
				<h4 class="department-title">
					Development
				</h4>

			</div>
			<div class="columns department-box">
				<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="300px" height="300px" version="1.1" viewBox="0 0 92507 105424"
					 xmlns:xlink="http://www.w3.org/1999/xlink">
					<g>
						<clipPath id="id0">
							<polygon points="0,4584 10834,105424 79172,105424 92507,0 "/>
						</clipPath>
					</g>
					<image clip-path="url(<?php echo WURL_CURRENT;?>#id0)" height="100%" width="100%" xlink:href="images/design_department.jpg" />
				</svg>
				<h4 class="department-title">
					Dizajn
				</h4>

			</div>
			<div class="columns department-box">
				<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="300px" height="300px" version="1.1" viewBox="0 0 92507 105424"
					 xmlns:xlink="http://www.w3.org/1999/xlink">
					<g>
						<clipPath id="id0">
							<polygon points="0,4584 10834,105424 79172,105424 92507,0 "/>
						</clipPath>
					</g>
					<image clip-path="url(<?php echo WURL_CURRENT;?>#id0)" height="100%" width="100%" xlink:href="images/sales_department.jpg" />
				</svg>
				<h4 class="department-title">
					Marketing
				</h4>

			</div>
		</div>
	</div>

</div>

