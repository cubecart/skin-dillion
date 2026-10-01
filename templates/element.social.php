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

{if $SOCIAL_LINKS}
	 {include file='images/icon-sprites.svg'}
	<div class="element-social">
		<div class="panel panel-default">
			<div class="panel-heading" onclick="toggleFooterContent('social-list-fc')"><i class="fas fa-plus-square"></i> {$LANG.common.follow_us} <a href="javascript:" class="fc-tog-social-list-fc hidden-sm hidden-md hidden-lg pull-right"><i class="fas fa-plus"></i></a></div>
			<ul class="list-group" id="social-list-fc">
				{foreach from=$SOCIAL_LINKS item=link}
					<li class="list-group-item">
						<a href="{$link.url}" title="{$link.name}" target="_blank" rel="noopener noreferrer">
							<svg class="icon"><use xlink:href="#icon-{$link.icon}"></use></svg>
						</a>
					</li>
				{/foreach}
			</ul>
		</div>
	</div>
{/if}