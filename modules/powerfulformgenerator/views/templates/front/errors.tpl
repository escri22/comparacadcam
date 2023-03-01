{**
* @package   Powerful Form Generator
* @author    Cyril Nicodème <contact@prestaddons.net>
* @copyright Copyright (C) June 2014 prestaddons.net <@email:contact@prestaddons.net>. All rights reserved.
* @since     2014-04-15
* @version   2.6.8
* @license   Nicodème Cyril
*}

{if isset($errors) && $errors}
	<div class="alert alert-danger">
		<p>{if $errors|@count > 1}{l s='There are %d errors' sprintf=$errors|@count mod='powerfulformgenerator'}{else}{l s='There is %d error' sprintf=$errors|@count mod='powerfulformgenerator'}{/if}</p>
		<ol>
		{foreach from=$errors key=k item=error}
			<li>{$error}</li>
		{/foreach}
		</ol>
		{if isset($smarty.server.HTTP_REFERER) && !strstr($request_uri, 'authentication') && preg_replace('#^https?://[^/]+/#', '/', $smarty.server.HTTP_REFERER) != $request_uri}
			<p class="lnk"><a class="alert-link" href="{$smarty.server.HTTP_REFERER|escape:'html':'UTF-8'}" title="{l s='Back' mod='powerfulformgenerator'}">&laquo; {l s='Back' mod='powerfulformgenerator'}</a></p>
		{/if}
	</div>
{/if}
