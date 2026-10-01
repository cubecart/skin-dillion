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
 
<div id="box-documents">
	<div class="panel panel-default">
		<div class="panel-heading" onclick="toggleFooterContent('docs-list-fc')"><i class="fas fa-file"></i> {$LANG.common.information} <a href="javascript:" class="fc-tog-docs-list-fc hidden-sm hidden-md hidden-lg pull-right"><i class="fas fa-plus"></i></a></div>
		<ul class="list-group" id="docs-list-fc">
			{foreach from=$DOCUMENTS item=document}
				<li class="list-group-item">
					<a href="{$document.doc_url}" title="{$document.doc_name}" {if $document.doc_url_openin}target="_blank"{/if}>
						{$document.doc_name}
					</a>
				</li>
			{/foreach}
			{foreach from=$DOCUMENTS_LIST_HOOKS item=list_item}
				<li class="list-group-item">
					<a href="{$list_item.href}" title="{$list_item.title}">{$list_item.title}</a>
				</li>
			{/foreach}
		</ul>
	</div>
</div>