{*
 * Dillion skin for CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2026. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Originally created by NiteFox (NiteTower Design) and
 * transferred to CubeCart Limited in 2022.
 * ========================================
 * Web:   https://www.cubecart.com
 * Email:  hello@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 *}

{if isset($PRODUCT) && $PRODUCT}

	<div>
		
		<form action="{$VAL_SELF}" method="post" class="add_to_basket">
			
			<div class="row">
				<div  class="col-xs-12 col-sm-6">
					{include file='templates/element.product.gallery.php'}
				</div>
				<div class="col-xs-12 col-sm-6">
				
					<h2 class="content-title product-title">{$PRODUCT.name}</h2>
					
					<div class="product-header">
						
						{include file='templates/element.product.review_score.php'}
				
						<div class="product-short-desc hidden-xs">
							{$PRODUCT.description_short|escape:"html"} <a href="javascript:" id="scrollToDesc"><i class="fas fa-plus-square"></i> {$LANG.common.more}</a>
						</div>
						
						<div class="product-code clearfix">
							<strong>{$LANG.catalogue.product_code} :</strong> {$PRODUCT.product_code}
							<div class="clearfix">
							{if ($CTRL_ALLOW_PURCHASE) && (!$CATALOGUE_MODE)}
								{if $PRODUCT.available <= 0}
									<span class="stock-availability unavailable">{$LANG.common.unavailable}</span>
								{else}
									<span class="stock-availability available">{$LANG.catalogue.stock_available}</span>
								{/if}
							{elseif $CTRL_OUT_OF_STOCK}
								<span class="stock-availability out-of-stock">{$LANG.catalogue.out_of_stock}</span>
							{/if}
							</div>
						</div>
					</div>

					{include file='templates/element.product.options.php'}
					
					{include file='templates/element.product.call_to_action.php'}
				</div>
			</div>
		
		</form>
	
		<br>
		<br>
		
		<div class="product_info_sec clearfix">
			{include file='templates/element.product.tabs_panel_group.php'}
		</div>
			
		{if $SHARE}
			<hr>
			{foreach from=$SHARE item=html}
				{$html}
			{/foreach}
		{/if}
			
		<br>
			
		{include file='templates/element.product_reviews.php'}
			
		<br>
			
		{foreach from=$COMMENTS item=html}
			{$html}
		{/foreach}
	</div>
	
	<div class="hide" id="validate_field_required">{$LANG.form.field_required}</div>

{else}
	<p class="alert alert-danger text-center">{$LANG.catalogue.product_doesnt_exist}</p>
{/if}