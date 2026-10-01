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
 
<div class="row">

	<div class="col-xs-12 col-sm-6 col-md-5">
		
		<h2 class="content-title clearfix" style="padding-left:0px;padding-right:0px;"><span class="pull-left">{$LANG.account.login}</span></h2>
		
		<div id="login-panel">
			<form action="{$VAL_SELF}" id="login_form" method="post">			
				{foreach from=$LOGIN_HTML item=html}
					{$html}
				{/foreach}
				
				<dl>
					<dt><label for="login-username"><i class="fas fa-envelope"></i> {$LANG.user.email_address}</label></dt>
					<dd><input type="text" autocomplete="off" name="username" id="login-username" class="form-control" placeholder="{$LANG.user.email_address} {$LANG.form.required}" value="{$USERNAME}" required></dd>
				</dl>
				<dl>
					<dt><label for="login-password"><i class="fas fa-lock"></i> {$LANG.account.password}</label></dt>
					<dd><input type="password" autocomplete="off" name="password" id="login-password" class="form-control" placeholder="{$LANG.account.password} {$LANG.form.required}" required></dd>
				</dl>
				<dl class="clearfix">
					<span><input type="checkbox" name="remember" id="login-remember" value="1" {if $REMEMBER}checked{/if}><label for="login-remember"> {$LANG.account.remember_me}</label></span>
				</dl>
				<dl>
					<button name="submit" type="submit" class="btn btn-success btn-block">
						{$LANG.account.log_in}
					</button>
				</dl>
				<div class="text-center"><a href="{$URL.recover}">{$LANG.account.forgotten_password}</a></div>
				<input type="hidden" name="redir" value="{$REDIRECT_TO}">
			</form>
		</div>

	</div>
	
	<div class="hidden-xs hidden-sm col-md-2">
		<br>&nbsp;<br>
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-5">
		<div class="hidden-sm hidden-md hidden-lg"><br><br><hr></div>
		
		<h2 class="content-title clearfix" style="padding-left:0px;padding-right:0px;"><span class="pull-left">{$LANG.account.register}</span></h2>
		
		<p>{$LANG.account.register_welcome}</p>
		
		<br>
		
		<a href="{$URL.register}" class="btn btn-default">{$LANG.account.register}</a>
	</div>

</div>

<div class="hide" id="validate_email">{$LANG.common.error_email_invalid}</div>
<div class="hide" id="empty_password">{$LANG.account.error_password_empty}</div>