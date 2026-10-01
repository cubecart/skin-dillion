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

<h2 class="content-title">{$category.cat_name}</h2>

<div class="category-header">
	{if isset($category.image)}
		<div class="cat-hdr-img text-center">	
			<img src="{$category.image}" alt="{$category.cat_name}" class="img-responsive">
		</div>
	{/if}

	{if !empty($category.cat_desc)}
		<div class="cat-desc">
			{$category.cat_desc}
		</div>
	{/if}
</div>

<br>
{if $PRODUCTS}
	<div class="row">
		<div class="col-xs-12">
			<div class="cat-sorting">
				<div class="row">
					<div class="col-xs-5 col-sm-4">
						{if isset($SORTING)}
							<div class="dropdown sortingOpts">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<i class="fas fa-sort"></i> {$LANG.form.sort_by}</a>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<form action="{$VAL_SELF}" class="autosubmit pull-left" method="post">
										<div>
											<select name="sort" id="product_sort" class="form-control">
												<option value="" disabled>{$LANG.form.please_select}</option>
												{foreach from=$SORTING item=sort}
													<option value="{$sort.field}|{$sort.order}" {$sort.selected}>{$sort.name} ({$sort.direction})</option>
												{/foreach}
											</select>
											<input type="submit" value="{$LANG.form.sort}" class="hidden">
										</div>
									</form>			
								</div>
							</div>
						{/if}
					</div>

					{if $TOTAL_RESULTS}
						<div class="hidden-xs col-sm-4">
							<div class="cat-total text-center">
								<span class=""> {$TOTAL_RESULTS} {$LANG.common.items}</span>
							</div>
						</div>
					{/if}

					<div class="col-xs-7 {if $TOTAL_RESULTS}col-sm-4{else}col-sm-8{/if}">
						{if isset($SUBCATS) && $SUBCATS}
							<div class="pull-right cat-filter">		
								<div>
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle" type="button" id="dropdownCats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="{$LANG.common.filter}">
											<i class="fas fa-sliders-h"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCats">
											{foreach from=$SUBCATS item=subcat}
												<li>
													<a href="{$subcat.url}" title="{$subcat.cat_name}"><span class="badge pull-right">{$subcat.products_number}</span><i class="fas fa-chevron-right"></i> {$subcat.cat_name} </a>
												</li>
											{/foreach}
										</ul>
									</div>
								</div>
							</div>
						{/if}
						<div class="pull-right">
							<div class="btn-group" id="layout_toggle">
								<a href="javascript:" class="btn btn-default active grid_view_tog" title="{$LANG.common.display}"><i class="fas fa-th-large"></i></a>
								<a href="javascript:" class="btn btn-default list_view_tog" title="{$LANG.common.display}"><i class="fas fa-th-list"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/if}


<div id="ccScroll">

{if $PRODUCTS}

	<ul class="product_list grid_view">
		
		{foreach from=$PRODUCTS item=product}
			<li class="product_list_item">

				<div class="product_list_item_wrapper clearfix">

					<div class="product_image_wrapper">
						<a href="{$product.url}" class="th" title="{$product.name}">
							<div class="product_image_grid" style="background-image:url({$product.thumbnail});"></div>
							<img src="{$product.thumbnail}" class="product_image_list" alt="{$product.name}">
						</a>
						{if $product.available <= 0}
							<span class="product_availability unavailable">{$LANG.common.unavailable}</span>
						{* ctrl_stock True when a product is considered 'in stock' for purposes of allowing a purchase, either by actually being in stock or via certain settings *}
						{elseif $product.ctrl_stock && !$CATALOGUE_MODE}
						{elseif !$CATALOGUE_MODE}
							<span class="product_availability out_of_stock">{$LANG.catalogue.out_of_stock_short}</span>
						{/if}
					</div>
					
					<div class="product_info">
						<h3 class="pr_name lv_name"><a href="{$product.url}" title="{$product.name}">{$product.name}</a></h3>
						<h3 class="pr_name gv_name"><a href="{$product.url}" title="{$product.name}">{$product.name|truncate:38:"..."}</a></h3>
						{if $product.review_score}
							<div class="pr_score">
								<div class="review-stars-display">
								{for $i = 1; $i <= 5; $i++}
									{if $product.review_score >= $i}
										<span class="star"><i class="fas fa-star"></i></span>
									{elseif $product.review_score > ($i - 1) && $product.review_score < $i}
										<span class="star half-rate"><i class="fas fa-star-half-alt"></i></span>
									{else}
										<span class="star empty-rate"><i class="far fa-star"></i></span>
									{/if}
								{/for}
								</div>
								<span class="pr_info text-muted small">{$product.review_info}</span>
								
							</div>
						{else}
							<div class="pr_score">
								<div class="review-stars-display">
									{for $i = 1; $i <= 5; $i++}
										<span class="star empty-rate"><i class="far fa-star"></i></span>
									{/for}
								</div>
							</div>
						{/if}
						<div class="pr_description clearfix text-muted">
							{$product.description_short|escape:"html"}
						</div>
						<div class="product_pricing clearfix">
							{if $product.ctrl_sale}
								<span class="old_price">{$product.price}</span> <span class="sale_price">{$product.sale_price}</span>
							{else}
								<div><span>{$product.price}</span></div>
							{/if}
						</div>
												
						{*
						<form action="{$VAL_SELF}" method="post" class="add_to_basket atb_2">
							{if $product.available <= 0}
								<button type="submit" value="{$LANG.common.unavailable}" title="{$LANG.common.unavailable}" class="btn btn-default btn-block disabled" disabled><i class="fas fa-ban"></i> {$LANG.common.unavailable}</button>
							{elseif $product.ctrl_stock && !$CATALOGUE_MODE}
								<input type="hidden" name="add" value="{$product.product_id}">
								{if $product.minimum_quantity && $product.minimum_quantity>1}
									<div class="dropup cat-min-qty-dropup">
										<button class="btn btn-default btn-block dropdown-toggle" type="button" id="mq{$product.product_id}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}
										</button>
										<div class="dropdown-menu" aria-labelledby="mq{$product.product_id}">
											<div class="text-muted text-center">
												<label class="clearfix">{$LANG.common.quantity} : <span class="pull-right">X</span></label>
												<div class="text-muted"><small>{$LANG.catalogue.min_purchase_quantity|replace:'%s':$product.minimum_quantity}</small></div>
												<input type="number" name="quantity" value="{$product.minimum_quantity}" min="{$product.minimum_quantity}" maxlength="4" class="form-control qty-input text-center">
												<button type="submit" value="{$LANG.catalogue.add_to_basket}" title="{$LANG.catalogue.add_to_basket}" class="btn btn-default btn-block"><i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}</button>
											</div>
										</div>
									</div>
								{else}
									<input type="hidden" name="quantity" value="1" maxlength="4" class="form-control text-center">
									<button type="submit" value="{$LANG.catalogue.add_to_basket}" title="{$LANG.catalogue.add_to_basket}" class="btn btn-default btn-block"><i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}</button>
								{/if}
							{elseif !$CATALOGUE_MODE}
								<button type="submit" value="{$LANG.catalogue.out_of_stock_short}" title="{$LANG.catalogue.out_of_stock_short}" class="btn btn-default btn-block disabled" disabled><i class="fas fa-ban"></i> {$LANG.catalogue.out_of_stock_short}</button>
							{else}
								<a class="btn btn-default btn-block" href="{$product.url}" title="{$product.name}">{$LANG.common.more_info}</a>	
							{/if}
						</form>

						<form action="{$VAL_SELF}" method="post" class="add_to_basket">
							{if $product.available <= 0}
								<button type="submit" value="{$LANG.common.unavailable}" title="{$LANG.common.unavailable}" class="btn btn-default disabled" disabled><i class="fas fa-ban"></i> {$LANG.common.unavailable}</button>
							{elseif $product.ctrl_stock && !$CATALOGUE_MODE}
								<input type="hidden" name="add" value="{$product.product_id}">
								{if $product.minimum_quantity && $product.minimum_quantity>1}
									<div class="clearfix">
										<button type="submit" value="{$LANG.catalogue.add_to_basket}" title="{$LANG.catalogue.add_to_basket}" class="btn btn-default pull-right"><i class="fas fa-shopping-basket"></i></button>
										<input type="number" name="quantity" value="{$product.minimum_quantity}" min="{$product.minimum_quantity}" maxlength="4" style="width:80px;" class="form-control text-center pull-right">
									</div>
								{else}
									<div class="clearfix">
										<button type="submit" value="{$LANG.catalogue.add_to_basket}" title="{$LANG.catalogue.add_to_basket}" class="btn btn-default pull-right"><i class="fas fa-shopping-basket"></i></button>
										<input type="number" name="quantity" value="1" min="1" maxlength="4" style="width:80px;" class="form-control text-center pull-right">
									</div>
								{/if}
							{elseif !$CATALOGUE_MODE}
								<button type="submit" value="{$LANG.catalogue.out_of_stock_short}" title="{$LANG.catalogue.out_of_stock_short}" class="btn btn-default disabled" disabled><i class="fas fa-ban"></i> {$LANG.catalogue.out_of_stock_short}</button>
							{else}
								<a class="btn btn-default" href="{$product.url}" title="{$product.name}">{$LANG.common.more_info}</a>	
							{/if}
						</form>
						*}
						
						
						{*
						<div class="more_info">
							<a class="mi-link small text-muted" href="{$product.url}" title="{$product.name}">{$LANG.common.more_info}</a>	
						</div>
						*}

					</div>

				</div>
           
			</li>
		{/foreach}
	</ul>

	{if $PAGINATION}
		<hr>
	{/if}
	
{else}
		
	{if isset($SUBCATS) && $SUBCATS}
		<ul class="list-group altern-cats">
			{foreach from=$SUBCATS item=subcat}
				<li class="list-group-item">
					<a href="{$subcat.url}" title="{$subcat.cat_name}">
						<span class="acname">
							{$subcat.cat_name}
						</span>
					</a>
				</li>
			{/foreach}
		</ul>
	{else}
		<div class="alert alert-info text-center">{$LANG.category.no_products}</div>
	{/if}
		
{/if}
   	
	{*
	<div class="row">
		<div class="col-xs-12 split-pagination">
			{$PAGINATION}
		</div>
	</div>
	*}

	<div class="hide" id="ccScrollCat">{$category.cat_id}</div>
	
	{if $page!=='all' && ($page < $total)}
		{$params[$var_name] = $page + 1}
		{* Add "hidden" to the class attribute to not display the more button *}
		<a href="{$current}{http_build_query($params)}{$anchor}" data-next-page="{$params[$var_name]}" data-cat="{$category.cat_id}" class="btn btn-default btn-block ccScroll-next">{$LANG.common.more}</a>
	{/if}
	
	<div class="text-center hidden loading-block" id="loading"><i class="fas fa-sync fa-spin"></i></div>
	
	<br><br>

</div>