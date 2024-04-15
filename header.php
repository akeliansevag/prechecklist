<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>

	<!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
	<link href="<?= get_field('favicon', 'options'); ?>" rel="shortcut icon">
	<link href="<?= get_field('favicon', 'options'); ?>" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- <script type="text/javascript">
			window.zESettings = {
				webWidget: {
					color: { theme: '#1EAAE6', launcherText: "#ffffff",button: '#1EAAE6', },
						position: { horizontal: 'right', vertical: 'bottom' },
						zIndex: 200
				}
			};
		</script> -->

	<!-- Start of montypay Zendesk Widget script -->
	<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1a9d73de-8e1c-43cc-9727-38219b99a105"> </script> -->

	<!-- End of montypay Zendesk Widget script -->

	<!-- Google tag (gtag.js) -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-CHKJLBF8TX"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-CHKJLBF8TX');
		</script> -->
	<!-- Google tag (gtag.js) -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10796570798"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'AW-10796570798');
            </script> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<?php if (!is_page('Pre-Check Application')) : ?>
			<?= get_template_part("template-parts/search"); ?>
			<?= get_template_part("template-parts/header"); ?>
		<?php endif; ?>