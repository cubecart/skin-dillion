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
   
	<body>
		
		{foreach from=$BODY_JS_TOP item=js}{$js}{/foreach}

		{if $STORE_OFFLINE}
			<div class="alert alert-danger" style="margin:0px;">
				<div class="container text-center">
					{$LANG.common.warning_offline}
				</div>
			</div>
		{/if}
		
		
		
		<div class="page-top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 logo-col">
						<div class="main-logo-container">
							<a href="{$STORE_URL}" class="main-logo"><img src="{$STORE_LOGO}" class="main-logo-img" alt="{$CONFIG.store_name}"></a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-8 col-md-9 col-lg-9 links-col">
						<div class="ptb-links clearfix">
							<a href="javascript:" class="main-link search-link" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
								<i class="fas fa-search"></i>
							</a>
							{include file='templates/box.basket.php'}
							{include file='templates/box.session.php'}
							<a href="javascript:" class="main-link site-nav-link collapsed" data-toggle="collapse" data-target="#sitenav-navbar-collapse-1" aria-expanded="false">
								<i class="fas fa-bars"></i>
							</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="site-navigation-wrapper">
			<div class="container">
				<div class="site-navigation">
					{include file='templates/box.navigation.php'}
				</div>	
			</div>
		</div>
		
		<div class="collapse" id="collapseSearch">
			<div class="container">
				<div class="row">
					<div class="search-block">
						{include file='templates/box.search_collapsed.php'}
					</div>
				</div>
			</div>
		</div>
		
		<div class="pre-page-wrapper">

		{include file='templates/element.breadcrumb.php'} 


		<div class="container page-wrapper">
			<div class="page-body {$SECTION_NAME}_wrapper">
				{include file='templates/box.progress.php'}
				{include file='templates/box.errors.php'}
			
				{if $SECTION_NAME =="home"}
					<div class="row">
						<div class="hidden-xs hidden-sm col-md-3" id="main-sidebar">
							
							{include file='templates/box.featured.php'}
							{if $PRODUCTS && $CONFIG['catalogue_sale_mode']>0 && $POPULAR}
								{include file='templates/box.popular.php'}
								{include file='templates/box.sale_items.php'}
							{/if}
						
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9">
							<div class="page-body-content">
								{$PAGE_CONTENT}
							</div>
						</div>
					</div>
				{else}
					<div class="page-body-content">
						{$PAGE_CONTENT}
					</div>
				{/if}
			</div>
		</div>		
	
		<a href="#"title="{$LANG.common.top}" class="back-to-top">
			<i class="fas fa-arrow-up"></i>
		</a>
		
		</div>

		<div class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						{include file='templates/box.documents.php'}
					</div>
					<div class="col-xs-12 col-sm-4">
						{include file='templates/box.newsletter.php'}
					</div>
					<div class="col-xs-12 col-sm-4">
						{$SOCIAL_LIST}
						
						
						<div class="panel panel-default">
							<div class="panel-heading" onclick="toggleFooterContent('prefs-list-fc')"><i class="fas fa-cog"></i> {if $LANGUAGES}{$LANG.common.language} / {/if}{$LANG.common.currency} <a href="javascript:" class="fc-tog-prefs-list-fc hidden-sm hidden-md hidden-lg pull-right"><i class="fas fa-plus"></i></a></div>
							<ul class="list-group site-pref-list" id="prefs-list-fc">
								<li class="list-group-item clearfix">{include file='templates/box.currency.php'}</li>
								{if $LANGUAGES}
									<li class="list-group-item clearfix">{include file='templates/box.language.php'}</li>
								{/if}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-copyright text-center">
			{$COPYRIGHT} {if !empty($CONFIG.tax_number)}{$LANG.settings.tax_vat_number}: {$CONFIG.tax_number}{/if}
			{include file='templates/ccpower.php'}
		</div>

		{include file='templates/element.js_foot.php'}
		{$DEBUG_INFO}
		{$LIVE_HELP}
		{$SKIN_SELECT}

		{include file='templates/element.markup.json-ld.php'}
		{include file='templates/modal.exit.php'}
		{$ACP_WIDGET}
	</body>
		
</html>