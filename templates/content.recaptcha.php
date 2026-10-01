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
{if in_array($RECAPTCHA, array('2','4','5'))}
	<div class="row">
	   <div class="col-xs-12 text-center">
        {if $RECAPTCHA=='2'}
        {include file='templates/element.recaptcha.php' ga_fid=$ga_fid}
        {else if $RECAPTCHA=='4'}
        {include file='templates/element.hcaptcha.php' ga_fid=$ga_fid}
        {else if $RECAPTCHA=='5'}
        {include file='templates/element.turnstile.php' ga_fid=$ga_fid}
        {/if}
		</div>
	</div>
{/if}