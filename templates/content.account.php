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

<h2 class="content-title">{$LANG.account.your_account}</h2>

<ul class="list-unstyled account-menu-blocks">
	<li>
		<a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_details}" >
			<span class="menu-icon"><i class="fas fa-user"></i></span>
			<span class="menu-title">{$LANG.account.your_details}</span>
		</a>
	</li>
	<li>
		<a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.your_orders}" >
			<span class="menu-icon"><i class="fas fa-truck-moving"></i></span>
			<span class="menu-title">{$LANG.account.your_orders}</span>
		</a>
	</li>
	<li>
		<a href="{$STORE_URL}/index.php?_a=addressbook" title="{$LANG.account.your_addressbook}" >
			<span class="menu-icon"><i class="fas fa-address-book"></i></span>
			<span class="menu-title">{$LANG.account.your_addressbook}</span>
		</a>	
	</li>
	<li>
		<a href="{$STORE_URL}/index.php?_a=downloads" title="{$LANG.account.your_downloads}" >
			<span class="menu-icon"><i class="fas fa-cloud-download-alt"></i></span>
			<span class="menu-title">{$LANG.account.your_downloads}</span>
		</a>
	</li>
	<li>
		<a href="{$STORE_URL}/index.php?_a=newsletter" title="{$LANG.account.your_subscription}" >
			<span class="menu-icon"><i class="fas fa-envelope"></i></span>
			<span class="menu-title">{$LANG.account.your_subscription}</span>
		</a>
	</li>
		
	{foreach from=$ACCOUNT_LIST_HOOKS item=list_item}
		<li>
			<a href="{$list_item.href}" title="{$list_item.title}" >
				<span class="menu-icon">{if !empty($list_item.fa)}<i class="fas fa-{$list_item.fa}"></i>{else}<i class="fas fa-bars"></i>{/if}</span>
				<span class="menu-title">{$list_item.title}</span>
			</a>
		</li>
	{/foreach}
	
	<li>
		<a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}" >
			<span class="menu-icon"><i class="fas fa-power-off"></i></span>
			<span class="menu-title">{$LANG.account.logout}</span>
		</a>
	</li>
</ul>