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

{if isset($CONTENTS) && count($CONTENTS) > 0}
	<div class="shopping-basket" id="basket-detail">
		<ul class="shopping-basket-items list-unstyled">
			{foreach from=$CONTENTS item=item name=items}
				{if $smarty.foreach.items.index == 5}
					{assign var=extra_items value=$CART_ITEMS-5}
					<li><div class="text-center"><span class="badge">&hellip;</span></div></li>
					{break}
				{/if}
				<li class="clearfix row">
					<div class="col-xs-3 text-center">
						<img class="thmb" src="{$item.image}" alt="{$item.name}">
					</div>
					<div class="col-xs-9">
						<span class="item-name"><a href="{$item.link}" title="{$item.name}">{$item.name|truncate:35:"&hellip;"}</a></span>
						{if $item.options}
							<div class="item-options">
								{foreach from=$item.options item=option}
									<div class="item-options-opt">
										<strong>{$option.option_name}</strong>: {$option.value_name|truncate:45:"&hellip;":true}{if !empty($option.price_display)} ({$option.price_display}){/if}
									</div>
								{/foreach}
							</div>
						{/if}
						<span class="item-price">{$item.total}</span>
						<span class="item-quantity"> &times; {$item.quantity}</span>
					</div>
				</li>
			{/foreach}
		</ul>
		<div class="shopping-basket-sum">
			{$LANG.common.item_plural}: <span class="badge">{$CART_ITEMS}</span>
			<div class="shopping-basket-total">
				<span class="lighter-text">{$LANG.basket.total}:</span>&nbsp;
				<span class="main-color-text">{$CART_TOTAL}</span>
			</div>
		</div>
		
		{if !$HIDE_CHECKOUT_BUTTON || $IS_USER}
			<div><a href="{$STORE_URL}/index.php?_a=checkout" class="btn btn-block btn-success" title="{if $CONFIG.ssl == 1}{$LANG.basket.basket_secure_checkout}{else}{$LANG.basket.basket_checkout}{/if}">{if $CONFIG.ssl == 1}<i class="fas fa-lock"></i> {$LANG.basket.basket_secure_checkout}{else}{$LANG.basket.basket_checkout} <i class="fas fa-arrow-right"></i>{/if}</a></div>
		{/if}
		<br>
		{if !$IS_USER}
			<div><a href="{$STORE_URL}/index.php?_a=basket" class="btn btn-block btn-default" title="{$LANG.basket.view_basket}">{$LANG.basket.view_basket} <i class="fas fa-arrow-right"></i></a></div>
		{/if}

	</div>
{else}
	<div class="basket-empty text-center">
		<div class="basket-empty-icon"><i class="fas fa-shopping-basket"></i></div>
		<h2>{$LANG.basket.basket_is_empty}</h2>
		<a href="{$STORE_URL}" class="btn btn-default">{$LANG.basket.continue_shopping}</a>
	</div>
{/if}