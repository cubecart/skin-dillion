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

<div class="product-price-box">
	{if $PRODUCT.ctrl_sale}
		<div class="price-group">
			<span class="old_price" id="fbp"{if !$CTRL_HIDE_PRICES} data-price="{$PRODUCT.full_base_price}"{/if}>{$PRODUCT.price} </span>
			<span class="sale_price" id="ptp"{if !$CTRL_HIDE_PRICES} data-price="{$PRODUCT.price_to_pay}"{/if}> {$PRODUCT.sale_price}</span>
		</div>
	{else}
		<span id="ptp"{if !$CTRL_HIDE_PRICES} data-price="{$PRODUCT.price_to_pay}"{/if}>{$PRODUCT.price}</span>
	{/if}
</div>

<div>
	{if ($CTRL_ALLOW_PURCHASE) && (!$CATALOGUE_MODE)}
	
		{if $PRODUCT.available <= 0}
			<div>
				<input type="submit" value="{$LANG.common.unavailable}" class="btn btn-default btn-block disabled" disabled>
			</div>
		{else}
			<div class="row">
				<div class="col-xs-6 col-sm-6">
					<input type="hidden" name="add" value="{$PRODUCT.product_id}">
					
					<div class="input-group">
						<span class="input-group-addon">{$LANG.common.quantity_abbreviated}</span>
						<input type="number" name="quantity" value="{if $PRODUCT.minimum_quantity}{$PRODUCT.minimum_quantity}{else}1{/if}" min="{if $PRODUCT.minimum_quantity}{$PRODUCT.minimum_quantity}{else}1{/if}" maxlength="4" class="quantity required text-center pull-left form-control">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6">
					<div class="clearfix">
						<button type="submit" value="{$LANG.catalogue.add_to_basket}" class="btn btn-success pull-right"><i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}</button>
					</div>
				</div>
				<div class="col-xs-12">
					<br>
					{if $PRODUCT.minimum_quantity && $PRODUCT.minimum_quantity>1}
						<div class="text-muted"><small><i class="fas fa-info-circle"></i> {$LANG.catalogue.min_purchase_quantity|replace:'%s':$PRODUCT.minimum_quantity}</small></div>
					{/if}					
					{if isset($PRODUCT.discounts)}
						<div class="hidden-xs hidden-sm">
							<small><a href="#product_discounts" class="product_discounts_show_tab"><i class="fas fa-info-circle"></i> {$LANG.catalogue.bulk_discount}</a></small>
						</div>
						<div class="hidden-md hidden-lg">
							<small><a href="#product_discounts" class="product_discounts_show_panel"><i class="fas fa-info-circle"></i> {$LANG.catalogue.bulk_discount}</a></small>
						</div>
					{/if}
				</div>
			</div>
		{/if}
	
	{else}
	
		{if $CTRL_HIDE_PRICES}
			<div class="alert alert-info text-center">
				<strong>{$LANG.catalogue.login_to_view}</strong>
			</div>
		{else if $CTRL_OUT_OF_STOCK}
			<div class="alert alert-info text-center">
				<strong>{$LANG.catalogue.out_of_stock}</strong>
			</div>
		{/if}

	{/if}
</div>