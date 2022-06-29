
<?php

$languages  = webHelper::getLanguages();


?>

<?php foreach ($languages as $language){ ?>

		<a href="<?php echo webHelper::getLink(null,WLANG)?>" class="active prevent-link">
			<?php echo strtoupper(WLANG);?>
		</a>
		<a href="<?php echo webHelper::getLink(null,$language)?>">
			<?php echo strtoupper($language);?>
		</a>


<?php } ?>

<?php

/*
<div class="top-bar-right">
	<ul class="language-menu menu dropdown" data-dropdown-menu id="languageMenu" data-hover-delay="0" data-closing-time="0">
		<li class="active">
			<a href="<?php echo webHelper::getLink(null,WLANG)?>">
				<?php echo strtoupper(WLANG);?>
			</a>
			<ul class="menu">

				<?php foreach ($languages as $language){ ?>

					<li>
						<a href="<?php echo webHelper::getLink(null,$language)?>">
							<?php echo strtoupper($language);?>
						</a>
					</li>

				<?php } ?>


			</ul>
		</li>
	</ul>
</div>

*/ ?>