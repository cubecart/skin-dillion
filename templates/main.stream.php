{*
 * Dillion CubeCart Template
 * ========================================
 * Dillion is a template developed by NiteFox 
 * also known as NiteTower Design.
 * ========================================
 * Web:        https://www.facebook.com/CubeCartThemes
 * Email:      nitetowerdesign@gmail.com
 * License:    http://nitefox.x10host.com/license.html
 * Disclaimer: http://nitefox.x10host.com/disclaimer.html
 *}
 
<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">
	<head>
		<title>{$META_TITLE}</title>
		{include file='templates/element.meta.php'}
		<link href="{$CANONICAL}" rel="canonical">
		<link href="{$ROOT_PATH}favicon.ico" rel="shortcut icon" type="image/x-icon">
		{include file='templates/element.css.php'}
		{include file='templates/content.recaptcha.head.php'}
		{include file='templates/element.google_analytics.php'}
		{include file='templates/element.js_head.php'}
	</head>
	<body class="stream">
		<div>
			<div class="container">
			
			{if $DATA}
				<h1>{$DATA.title}</h1>
				<p>{$DATA.description|nl2br}</p>
				
				<{$TYPE} width="100%" controls autoplay>
					<source src="{$STREAM_URL}" type="{$DATA.mimetype}">
				</{$TYPE}>
			{else}
				<div class="alert alert-danger text-center">
					<span class="dwnld-expired">{$LANG.account.download_expired}</span>
				</div>
			{/if}

			</div>
		</div>
		
		{$STREAM_HOOK}
	</body>
</html>