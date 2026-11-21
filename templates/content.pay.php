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
 *
 * OPTIONAL, new in CubeCart 6.9.0. Cubecart::_pay() draws this page for an order
 * that is paid exactly as it stands: from a payment link the merchant sent, or
 * from Complete Payment on an order that kept no basket (one raised in the admin).
 * Without this file core shows content.gateway.php with the amount due above it.
 *
 * $PAY.state decides what is drawn: 'payable' shows the order, the payment
 * methods and the Pay button; anything else shows $PAY.title and $PAY.message.
 *
 * The form MUST post back to $PAY.action, which carries the link's key. Nothing
 * here is editable: the customer pays the order as the merchant raised it.
 *
 * $SUM, $ITEMS, $TAXES and $DISCOUNT are as content.receipt.php has them, and
 * $GATEWAYS is as content.gateway.php has it (FALSE when no payment method is
 * open to the order). $PAY.amount_due and $gateway.description are HTML.
 *}

<div class="order-receipt-content">

{if $PAY.state != 'payable'}

	<h2 class="text-center">{$PAY.title}</h2>

	<p class="alert alert-warning text-center">{$PAY.message}</p>

	<div class="text-center">
		{if !empty($PAY.order_url)}
			<a href="{$PAY.order_url}" class="btn btn-success">{$LANG.common.view_details}</a>
		{/if}
		<a href="{$STORE_URL}" class="btn btn-default">{$LANG.basket.continue_shopping}</a>
	</div>

{else}

	<h2 class="text-center">{$LANG.orders.pay_title}</h2>

	<p class="alert alert-info text-center">{$PAY.amount_due}</p>

	{if !empty($PAY.attempted)}
		<p class="alert alert-warning text-center">{$PAY.attempted}</p>
	{/if}

	<h3 class="text-center"><i class="fas fa-shopping-basket"></i> {$LANG.basket.order_summary}</h3>

	<br>

	<ul class="list-group order-product-list">
		{foreach from=$ITEMS item=item}
		<li class="list-group-item ri-item">
			<div class="row ">
				<div class="ri-col-1 col-xs-9">
					<div class="ri-name">
						<strong>{$item.name}{if !empty($item.product_code)} ({$item.product_code}){/if}</strong>
					</div>
					<div class="ri-options">
						{if !empty($item.options)}
							{foreach from=$item.options item=option}
								<div class="text-muted">
									{$option}
								</div>
							{/foreach}
						{/if}
						<div class="ri-quantity text-muted"><strong>{$item.quantity}</strong> x <strong>{$item.price}</strong></div>
					</div>
				</div>
				<div class="ri-col-2 col-xs-3 text-muted">
					<div class="ri-quantity"><strong>{$item.quantity}</strong> x <strong>{$item.price}</strong></div>
					<span class="ri-price">
						{$item.price_total}
					</span>
				</div>
			</div>
		</li>
		{/foreach}
	</ul>

	<div class="row">
		<div class="col-xs-12 col-sm-6">
			{if !empty($SUM.note_to_customer)}
				<div class="panel panel-default">
					<div class="panel-body">{$SUM.note_to_customer}</div>
				</div>
			{/if}
		</div>
		<div class="col-xs-12 col-sm-6">
			<table class="table table-bordered" style="font-size:12px;">
				<tbody>
					<tr>
						<td>{$LANG.basket.total_sub}</td>
						<td class="text-right">{$SUM.subtotal}</td>
					</tr>
					<tr>
						<td>{if !empty($SUM.ship_method)}{$SUM.ship_method|replace:'_':' '}{if !empty($SUM.ship_product)} ({$SUM.ship_product}){/if}{else}{$LANG.basket.shipping}{/if}</td>
						<td class="text-right">{$SUM.shipping}</td>
					</tr>
					{foreach from=$TAXES item=tax}
					<tr>
						<td>{if $tax.included}{$LANG.common.includes} {/if}{$tax.name}</td>
						<td class="text-right">{$tax.value}</td>
					</tr>
					{/foreach}
					{if $DISCOUNT}
					<tr class="ri-discount-row">
						<td>{$LANG.basket.total_discount}</td>
						<td class="text-right">{$SUM.discount}</td>
					</tr>
					{/if}
					{if $SUM.show_credit}
					<tr>
						<td>{$LANG.common.credit}</td>
						<td class="text-right">({$SUM.credit_used})</td>
					</tr>
					{/if}
					<tr class="ri-total-row">
						<td>{$LANG.basket.total_grand}</td>
						<td class="text-right">{$SUM.total}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<br>

	<div class="panel panel-default">
		<div class="panel-heading"><i class="fas fa-user"></i> {$LANG.basket.customer_info}</div>
		<div class="panel-body">
			<div class="row">
				<div class="ri-billing-col col-xs-12 col-sm-6">
					<strong>{$LANG.address.billing_address}</strong><br>
					{$SUM.first_name|capitalize} {$SUM.last_name|capitalize}<br>
					{if $SUM.company_name}{$SUM.company_name}<br>{/if}
					{$SUM.line1|capitalize}<br>
					{if $SUM.line2}{$SUM.line2|capitalize}<br>{/if}
					{$SUM.town|upper}<br>
					{if !empty($SUM.state)}{$SUM.state|upper}, {/if}{$SUM.postcode}{if $CONFIG['store_country_name']!==$SUM['country']}<br>
					{$SUM.country}{/if}
					<br>
					<br>
				</div>
				{if !empty($SUM.line1_d)}
				<div class="ri-delivery-col col-xs-12 col-sm-6">
					<strong>{$LANG.address.delivery_address}</strong><br>
					{$SUM.first_name_d|capitalize} {$SUM.last_name_d|capitalize}<br>
					{if $SUM.company_name_d}{$SUM.company_name_d}<br>{/if}
					{$SUM.line1_d|capitalize}<br>
					{if $SUM.line2_d}{$SUM.line2_d|capitalize}<br>{/if}
					{$SUM.town_d|upper}<br>
					{if !empty($SUM.state_d)}{$SUM.state_d|upper}, {/if}{$SUM.postcode_d}{if $CONFIG['store_country_name']!==$SUM['country_d']}<br>
					{$SUM.country_d}{/if}
					<br>
				</div>
				{/if}
			</div>
		</div>
	</div>

	<form id="pay-order" action="{$PAY.action}" method="post">
	{if $GATEWAYS}
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				{if count($GATEWAYS) > 1}
					<h3 class="text-center">{$LANG.gateway.select}</h3>
					<ul class="list-group">
						{foreach from=$GATEWAYS item=gateway}
							<li class="list-group-item">
								<input name="gateway" type="radio" value="{$gateway.folder}" id="pay_{$gateway.folder}" required {$gateway.checked}>

								<label for="pay_{$gateway.folder}">{$gateway.description}</label>

								{if !empty($gateway.help)}
									<a href="{$gateway.help}" class="info" title="{$LANG.common.information}"><i class="fas fa-info-circle"></i></a>
								{/if}

							</li>
						{/foreach}
					</ul>
				{else}
					{* One payment method: no choice to offer, but core still wants its name. *}
					{foreach from=$GATEWAYS item=gateway}
						<input type="hidden" name="gateway" value="{$gateway.folder}">
					{/foreach}
				{/if}
				<br>
				<div class="text-center">
					<input type="submit" value="{$LANG.checkout.pay_now}" class="btn btn-success btn-block">
				</div>
			</div>
		</div>
	{else}
		<p class="alert alert-danger text-center">{$LANG.gateway.none_defined}</p>
	{/if}
	</form>

{/if}

</div>

<br>
<br>
