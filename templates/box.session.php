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

{if $IS_USER}
	<a href="#" data-toggle="modal" data-target="#myAuthMenu" title="{$LANG.account.your_account}" class="main-link auth-menu-link">
		<i class="fas fa-user-circle"></i>
	</a>

	<div class="modal fade" id="myAuthMenu" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
				</div>
				<div class="modal-body clearfix">
					<ul class="list-unstyled auth-menu-list">
						<li><a href="{$STORE_URL}/index.php?_a=account" title="{$LANG.account.your_account}">{$LANG.account.your_account}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_details}">{$LANG.account.your_details}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.your_orders}">{$LANG.account.your_orders}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=addressbook" title="{$LANG.account.your_addressbook}">{$LANG.account.your_addressbook}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=downloads" title="{$LANG.account.your_downloads}">{$LANG.account.your_downloads}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=newsletter" title="{$LANG.account.your_subscription}">{$LANG.account.your_subscription}</a></li>
						{foreach from=$SESSION_LIST_HOOKS item=list_item}
							<li><a href="{$list_item.href}" title="{$list_item.title}">{$list_item.title}</a></li>
						{/foreach}
						<li><a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}">{$LANG.account.logout}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
{else}
	<div class="dropdown auth-menu-dropdown">
		<a href="#" class="main-link auth-menu-link dropdown-toggle" id="account_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-user-circle"></i>
		</a>
		<ul class="dropdown-menu dropdown-menu-right login-menu" aria-labelledby="account_dropdown">
			<a href="{$STORE_URL}/login{$CONFIG.seo_ext}" class="login-link">{$LANG.account.login}</a>
			<div class="text-center"><span class="act-or">{$LANG.common.or}</span></div>
			<a href="{$STORE_URL}/register{$CONFIG.seo_ext}" class="reg-link">{$LANG.account.register}</a>
		</ul>
	</div>
{/if}