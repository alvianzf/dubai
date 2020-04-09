<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<title><?php echo $site_info_data['siteinfo_title']; ?></title>
<meta name="description" content="<?php echo $site_info_data['siteinfo_desc']; ?>">
<meta name="keyword" content="<?php echo $site_info_data['siteinfo_keyword']; ?>">
<script type="text/javascript" >
	window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
	ga('create', '<?php echo $site_info_data['siteinfo_analitics']; ?>', 'auto');
	// Plugins
	
	ga('send', 'pageview');
</script>
<script async src="https://www.google-analytics.com/analytics.js"></script>
<?php echo $site_info_data['siteinfo_verification']; ?>
<link rel="icon" href="<?php echo $site_info_data['siteinfo_favicon']; ?>" sizes="192x192" />
<link itemprop rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar&subset=arabic,latin-ext,vietnamese" />
<?php 
		include 'config.php';
		$sql = 'SELECT * FROM content LIMIT 0,1';
		$qsql = $koneksi->query($sql);
		$rsql = $qsql->fetch_assoc();
?>


<!-- End Site Info -->

<link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/heroic-features.css" rel="stylesheet">
<link rel='stylesheet' id='layers-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Fira+Sans%3Aregular%2Citalic%2C700%2C300%2C300italic%2C500%2C500italic%2C700italic%7CLato%3Aregular%2Citalic%2C700%2C100%2C100italic%2C300%2C300italic%2C700italic%2C900%2C900italic&amp;ver=2.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='layers-framework-css'  href='<?php echo base_url(); ?>wp-content/themes/layerswp/assets/css/framework6471.css?ver=2.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='layers-components-css'  href='<?php echo base_url(); ?>wp-content/themes/layerswp/assets/css/components6471.css?ver=2.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='layers-responsive-css'  href='<?php echo base_url(); ?>wp-content/themes/layerswp/assets/css/responsive6471.css?ver=2.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='layers-icon-fonts-css'  href='<?php echo base_url(); ?>wp-content/themes/layerswp/assets/css/layers-icons6471.css?ver=2.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css'  href='<?php echo base_url(); ?>wp-content/tablepress-combined.min544b.css?ver=9' type='text/css' media='all' />
<link rel='stylesheet' id='layers-pro-pro-css'  href='<?php echo base_url(); ?>wp-content/plugins/layers-pro-extension/assets/css/layers-pro7406.css?ver=2.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='layers-pro-animations-css'  href='<?php echo base_url(); ?>wp-content/plugins/layers-pro-extension/assets/css/animations7406.css?ver=2.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='layers-font-awesome-css'  href='<?php echo base_url(); ?>wp-content/themes/layerswp/core/assets/plugins/font-awesome/font-awesome.min6471.css?ver=2.0.10' type='text/css' media='all' />
<link rel='stylesheet' id='layers-style-css'  href='<?php echo base_url(); ?>wp-content/themes/layerswp/style6471.css?ver=2.0.10' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo base_url(); ?>wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>wp-content/themes/layerswp/assets/js/plugins6471.js?ver=2.0.10'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var layers_script_settings = {"header_sticky_breakpoint":"270"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url(); ?>wp-content/themes/layerswp/assets/js/layers.framework6471.js?ver=2.0.10'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>wp-content/plugins/layers-pro-extension/assets/js/layers-pro7406.js?ver=2.0.1'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>wp-content/plugins/layers-pro-extension/assets/js/jquery.plugins.min7406.js?ver=2.0.1'></script>
<link rel='https://api.w.org/' href='<?php echo base_url(); ?>wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo base_url(); ?>xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo base_url(); ?>wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.9" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="<?php echo base_url(); ?>wp-json/oembed/1.0/embed62ef.json?url=https%3A%2F%2Fdubaipoolstoday.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="<?php echo base_url(); ?>wp-json/oembed/1.0/embed39fa?url=https%3A%2F%2Fdubaipoolstoday.com%2F&amp;format=xml" />
<script type="text/javascript">
	window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/dubaipoolstoday.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.9"}};
	!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<style>
#wp-admin-bar-layers-edit-layout .ab-icon:before{
	font-family: "layers-interface" !important;
	content: "\e62f" !important;
	font-size: 16px !important;
}
table td {
    text-align: center !important;
}
table th {
    text-align: center !important;
}
</style>
<style id="custom-logo-css" type="text/css">
.sitetitle, .tagline {
	position: absolute;
	clip: rect(1px, 1px, 1px, 1px);
}
</style>
<!-- Custom Style -->
<style>
<?php echo $rsql['custom_site']; ?>
@media only screen and (max-width: 456px) {
  .td_mobile, .th_mobile {
    display: none;
  }
}

@media only screen and (max-width: 357px) {
  .td_date, .ball_result_page {
    font-size:14px;
  }
}

@media only screen and (max-width: 357px) {
  .ball_result_page {
    font-size:14px;
    width:20px;
    line-height:20px;
  }
}

@media only screen and (max-width: 333px) {
  .td_date, .ball_result_page {
    font-size:12px;
  }
}

@media only screen and (max-width: 333px) {
  .ball_result_page {
    font-size:12px;
    width:18px;
    line-height:18px;
  }
}


@media only screen and (max-width: 414px) {
  .td_mobile_result, .th_mobile_result  {
    display: none;
  }
}


.h2_result{
	font-family: 'Lalezar', cursive;
    font-size: 20px;
    letter-spacing: 2px;
    margin-bottom: 10px;
    border-radius: 50px;
   /* background: linear-gradient(to bottom, #f7f7f791 0%, #9e7fbd 100%);*/
}

</style>
<!-- End of Custom Style -->


<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>wp-content/uploads/2018/10/cropped-favico-dpt-180x180.jpg" />
<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>/wp-content/uploads/2018/10/cropped-favico-dpt-270x270.jpg" />


	</style>
	</head>
