

	<div class="pos_bestseller_product product_block_container">

		<div class="block-content">
			<div class="pos_title">
				
			<h2>{l s='BESTSELLER PRODUCTS' mod='posbestsellers'}</h2>
				
			</div>
			<div class="pos_content">
			{if count($products) > 0 && $products != null}
				{$rows= $config['POS_HOME_SELLER_ROWS']}
				<div class="bestsellerSlide owl-carousel">
					{foreach from=$products item=product name=myLoop}
						{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
							<div class="item-product">
						{/if}
							<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
								<div class="img_block">
								  {block name='product_thumbnail'}
									<a href="{$product.url}" class="thumbnail product-thumbnail">
									  <img
										src = "{$product.cover.bySize.home_default.url}"
										alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
										data-full-size-image-url = "{$product.cover.large.url}"
									  >
									</a>
								  {/block}
									{block name='product_flags'}
									<ul class="product-flag">
										{if $product.show_price}
										   {if $product.has_discount}
											   {if $product.discount_type === 'percentage'}
												  <li class="discount-percentage">{$product.discount_percentage}</li>
												{/if}
											{/if}
										{/if}
										{foreach from=$product.flags item=flag}
											<li class=" {$flag.type}">{$flag.label}</li>
										{/foreach}
									</ul>
								  {/block}
									<ul class="add-to-links">
										<li>
											<a href="#" class="quick-view" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">{l s='Quick view' d='Shop.Theme.Actions'}</a>
										</li>
										
										<li>
											{hook h='displayProductListFunctionalButtons' product=$product}
										</li>
									</ul>
								</div>
								
								<div class="product_desc">

									{block name='product_name'}
									  <h1 itemprop="name"><a href="{$product.url}" class="product_name">{$product.name|truncate:40:'...'}</a></h1>
									{/block}
									{block name='product_reviews'}
										<div class="hook-reviews">
											{hook h='displayProductListReviews' product=$product}
										</div>
									{/block}
									{block name='product_price_and_shipping'}
									  {if $product.show_price}
										<div class="product-price-and-shipping">
										  {if $product.has_discount}
											{hook h='displayProductPriceBlock' product=$product type="old_price"}

											<span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
											<span class="regular-price">{$product.regular_price}</span>
										  {/if}

										  {hook h='displayProductPriceBlock' product=$product type="before_price"}

										  <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
										   <span itemprop="price" class="price {if $product.has_discount} price_sale {/if}">{$product.price}</span>
										  <!-- {if $product.has_discount}
											{if $product.discount_type === 'percentage'}
											  <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
											{elseif $product.discount_type === 'amount'}
											  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
											{/if}
										  {/if} -->
										  {hook h='displayProductPriceBlock' product=$product type='unit_price'}

										  {hook h='displayProductPriceBlock' product=$product type='weight'}
										</div>
									  {/if}
									{/block}
									
									<div class="cart">
											{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
									</div>
									{block name='product_description_short'}
										<div class="product-desc" itemprop="description">{$product.description_short nofilter}</div>
									{/block}
									
									{block name='product_variants'}
									{if $product.main_variants}
									{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
									{/if}
									{/block}
								</div>
							  </article>
						{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
							</div>
						{/if}
					{/foreach}
				</div>
			{else}
				<p>{l s='No best sellers at this time' mod='posbestsellers'}</p>	
			{/if}	
			</div>
		</div>

	</div>

