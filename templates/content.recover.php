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

<h2 class="content-title">{$LANG.account.recover_password}</h2>

<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<p class="well well-sm page-info">{$LANG.account.recover_password_text}</p>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				
				<div class="panel">
					<div class="panel-body">
						<form action="{$VAL_SELF}" method="post" id="recover_password">
							<dl>
								<dt><label for="email">{$LANG.common.email}</label></dt>
								<dd><input type="text" name="email" id="email" class="form-control required" placeholder="{$LANG.common.email} {$LANG.form.required}"></dd>
							</dl>
							{include file='templates/content.recaptcha.php' ga_fid='recover'}
							<dl class="clearfix text-center">
								<input type="submit" value="{$LANG.form.submit}" class="btn btn-success btn-block">
							</dl>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>


<div class="hide" id="validate_email">{$LANG.common.error_email_invalid}</div>