
<div class="pos_logo product_block_container">

	<div class="container">
		<div class="logo-inner">
			<div class="pos_content">
				<div class="logo-slider owl-carousel">
						{foreach from=$logos item=logo name=myLoop}
							{if $smarty.foreach.myLoop.index % 1 == 0 || $smarty.foreach.myLoop.first }
							<div>
							{/if}
								<div class="item-banklogo">
									<a href ="{$logo.link}">
										<img class="replace-2x img-responsive" src ="{$logo.image}" alt ="{l s='Logo' mod='poslogo'}" />
									</a>
								</div>
							{if $smarty.foreach.myLoop.iteration % 1 == 0 || $smarty.foreach.myLoop.last  }
							</div>
							{/if}
						{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>
