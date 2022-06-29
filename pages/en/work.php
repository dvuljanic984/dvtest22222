<?php echo webHelper::renderLayout("pageHeader",array("headerClass"=>"work-header","headerTitle"=>"WORK","subheaderText"=>"Our name says it all. We’re into software."));?>

<?php

$workList = json_decode(file_get_contents(WDIR_DATA."/work.json"));
?>

<section class="page-content">
	<div class="case-studies-slider">

		<header class="text-center">
			<h2 class="section-title">Case studies</h2>
		</header>

		<div id="workSlider" class="owl-carousel">
			<div class="item case-slide text-center">
				<div class="work-case case-lin-trgovina">
					<div class="row">
						<header class="case-slide-header">
							<h2>LIN TRGOVINA</h2>
							<h5 class="subheader">Website & E-commerce</h5>
						</header>
						<div class="case-slide-image">
							<img src="images/case_studies/lin_trgovina/homepage.jpg" alt="">
						</div>
						<div class="case-buttons button-group align-center row small-12">
							<button class="button hollow" data-toggle="caseStudyLin">View Case</button>
							<a href="http://svezakucuidom.com" class="button hollow" target="_blank">View Page</a>
						</div>

						<div class="reveal full reveal-case-study lin-trgovina-case-reveal" id="caseStudyLin" data-reveal data-close-on-click="true" >
							<button class="close-button" data-close aria-label="Close reveal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>

							<?php echo webHelper::renderLayout("case-studies-en/case-lin");?>

						</div>

					</div>
				</div>
			</div>

			<div class="item case-slide text-center">
				<div class="work-case case-aquaestil">
					<div class="row">
						<header class="case-slide-header">
							<h2>AQUAESTIL</h2>
							<h5 class="subheader">Website, design, custom application</h5>
						</header>
						<div class="case-slide-image">
							<img src="images/case_studies/aquaestil/homepage.jpg" alt="">
						</div>
						<div class="case-buttons button-group align-center row small-12">
							<button class="button hollow" data-toggle="caseStudyAquaestil">View Case</button>
							<a href="http://aquaestil.hr" class="button hollow" target="_blank">View Page</a>
						</div>

						<div class="reveal full reveal-case-study aquaestil-case-reveal" id="caseStudyAquaestil" data-reveal data-close-on-click="true" >
							<button class="close-button" data-close aria-label="Close reveal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>

							<?php echo webHelper::renderLayout("case-studies-en/case-aquaestil");?>

						</div>

					</div>
				</div>
			</div>

			<div class="item case-slide text-center">
				<div class="work-case case-centar">
					<div class="row">
						<header class="case-slide-header">
							<h2>PORTAL ZA MLADE</h2>
							<h5 class="subheader">Website, design, custom application</h5>
						</header>
						<div class="case-slide-image">
							<img src="images/case_studies/centar_za_mlade/homepage.jpg" alt="">
						</div>
						<div class="case-buttons button-group align-center row small-12">
							<button class="button hollow" data-toggle="caseStudyCentar">View Case</button>
							<a href="http://portalzamlade.info" class="button hollow" target="_blank">View Page</a>
						</div>

						<div class="reveal full reveal-case-study centar-za-mlade-case-reveal" id="caseStudyCentar" data-reveal data-close-on-click="true" >
							<button class="close-button" data-close aria-label="Close reveal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>

							<?php echo webHelper::renderLayout("case-studies-en/case-centar");?>

						</div>

					</div>
				</div>
			</div>

			<div class="item case-slide text-center">
				<div class="work-case case-viac">
					<div class="row">
						<header class="case-slide-header">
							<h2>DRAFT DOBROVOLNIKOV</h2>
							<h5 class="subheader">Website, design, custom application</h5>
						</header>
						<div class="case-slide-image">
							<img src="images/case_studies/viac/homepage.jpg" alt="">
						</div>
						<div class="case-buttons button-group align-center row small-12">
							<button class="button hollow" data-toggle="caseStudyViac">View Case</button>
							<a href="http://www.draftdobrovolnikov.sk/" class="button hollow" target="_blank">View Page</a>
						</div>

						<div class="reveal full reveal-case-study viac-case-reveal" id="caseStudyViac" data-reveal data-close-on-click="true">
							<button class="close-button" data-close aria-label="Close reveal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>

							<?php echo webHelper::renderLayout("case-studies-en/case-viac");?>


						</div>

					</div>
				</div>
			</div>

			<div class="item case-slide text-center">
				<div class="work-case case-jobclub">
					<div class="row">
						<header class="case-slide-header">
							<h2>JOB CLUB FOR YOUTH</h2>
							<h5 class="subheader">Website, design, custom application</h5>
						</header>
						<div class="case-slide-image">
							<img src="images/case_studies/jobclub/homepage.jpg" alt="">
						</div>
						<div class="case-buttons button-group align-center row small-12">
							<button class="button hollow" data-toggle="caseStudyJobClub">View Case</button>
							<a href="http://jobclub.carpediem.hr/" class="button hollow" target="_blank">View Page</a>
						</div>

						<div class="reveal full reveal-case-study jobclub-case-reveal" id="caseStudyJobClub" data-reveal data-close-on-click="true">
							<button class="close-button" data-close aria-label="Close reveal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>

							<?php echo webHelper::renderLayout("case-studies-en/case-jobclub");?>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="content-section">
		<header class="text-center">
			<h2 class="section-title">Web sites with advanced backend</h2>
		</header>
		<div class="client-grid row small-up-1 large-up-2" >

			<?php foreach ($workList->special as $item) { ?>

				<div class="client-grid-box columns">
					<div class="row client-page-preview" data-siteimg="<?php echo $item->siteImg;?>">
						<div class="client-logo columns">
							<img ng-src="<?php echo $item->logo;?>" alt="">
						</div>
						<div class="client-details columns">
							<h5><?php echo $item->name;?></h5>
							<ul class="check-list">

								<?php foreach ($item->desc as $desc) { ?>

									<li>
										<?php echo $desc;?>
									</li>
								<?php } ?>
							</ul>
						</div>
						<a href="<?php echo $item->link;?>" target="_blank" class="client-site-link">
							<span>Visit page</span>
							<i> &rarr;</i>
						</a>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>




	<div class="content-section">
		<header class="text-center">
			<h2 class="section-title">We also did...</h2>
		</header>
		<div class="client-logo-grid row small-up-2 medium-up-4 large-up-6">

			<?php foreach ($workList->ordinary as $item) { ?>

				<div class="logo-grid-box columns">
				<figure>
					<a href="<?php echo $item->link;?>" target="_blank">
						<img src="<?php echo $item->logo;?>" alt="<?php echo $item->name;?>">
					</a>
					<figcaption>
						<?php echo $item->name;?>
					</figcaption>
				</figure>
			</div>

			<?php } ?>

		</div>
	</div>

</section>