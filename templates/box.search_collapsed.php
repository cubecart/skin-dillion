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

<form action="{$STORE_URL}/search{$CONFIG.seo_ext}" class="search_form" method="get">
	<div class="input-group">
		<input name="search[keywords]" data-image="true" data-amount="15" type="text" class="form-control search_input collapsed_search_input{if $CONFIG.elasticsearch=='1'} es{/if}" autocomplete="off" placeholder="{$LANG.search.input_default}" required>
		<div class="input-group-btn">
			<button class="btn btn-default srch-btn" type="submit" value="{$LANG.common.search}"><i class="fas fa-search"></i><span>{$LANG.common.search}</span></button>
			<a href="{$STORE_URL}/search{$CONFIG.seo_ext}" class="adv-search-link btn btn-link" title="{$LANG.search.advanced}"><i class="fas fa-sliders-h"></i></a>
			<a href="javascript:" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="true" aria-controls="collapseSearch" title="{$LANG.common.click_to_close}" class="btn btn-link"><i class="fas fa-times"></i></a>
		</div>
	</div>
	<input type="hidden" name="_a" value="category">
</form>