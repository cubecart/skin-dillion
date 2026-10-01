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

{if $GALLERY|@count gt 1}
	<div class="product-imgs-container">
		<ul id="imageGallery">
			{foreach from=$GALLERY item=image}
				<li {if $image@total lt 2} style="display:none"{/if} data-thumb="{$image.small}" data-src="{$image.large}">
					<a href="{$image.large}" rel="gallery-2" class="swipebox" title="{$PRODUCT.name}">
						<img class="gallery-img" src="{$image.large}" alt="{$LANG.catalogue.click_enlarge}">
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
{else}
	<div class="product-imgs-container">
		<ul id="imageGallery">
			<li data-thumb="{$PRODUCT.large}" data-src="{$PRODUCT.large}">
				<a href="{$PRODUCT.large}" rel="gallery-2" class="swipebox" title="{$PRODUCT.name}">
					<img class="gallery-img" src="{$PRODUCT.large}" alt="{$LANG.catalogue.click_enlarge}">
				</a>
			</li>
		</ul>
	</div>
{/if}