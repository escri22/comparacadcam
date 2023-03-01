{$count=0}
{foreach from=$productCates item=productCate name=poslistcateproduct}
	<div class="poslistcateproduct poslistcateproduct_{$count} product_container"
		data-items="{$slider_options.number_item}" 
		data-speed="{$slider_options.speed_slide}"
		data-autoplay="{$slider_options.auto_play}"
		data-time="{$slider_options.auto_time}"
		data-arrow="{$slider_options.show_arrow}"
		data-pagination="{$slider_options.show_pagination}"
		data-move="{$slider_options.move}"
		data-pausehover="{$slider_options.pausehover}"
		data-md="{$slider_options.items_md}"
		data-sm="{$slider_options.items_sm}"
		data-xs="{$slider_options.items_xs}"
		data-xxs="{$slider_options.items_xxs}">
		<div class="pos_title">
				
				<h2>
					{$productCate.category_name}
				</h2>
			
				
				{if $productCate.list_subcategories}
				<ul class="subcategories-list ">
					{foreach from=$productCate.list_subcategories item=subcategories}
					<li><a href="{$link->getCategoryLink($subcategories['id_category'])}" target="_blank">{$subcategories.name}</a></li>
					{/foreach}
				</ul>
				
				{/if}
			
				
		</div>
		 
		
			<div class="listcateproduct-products">
					
					<div class="listcateSlide owl-carousel">		
						{foreach from=$productCate.product item=product name=myLoop}					
							{if $smarty.foreach.myLoop.index % $slider_options.rows == 0 || $smarty.foreach.myLoop.first }
							<div class="item-product">
							{/if}
								{include file="catalog/_partials/miniatures/product.tpl" product=$product}
							{if $smarty.foreach.myLoop.iteration %  $slider_options.rows == 0 || $smarty.foreach.myLoop.last}
								</div>
							{/if}
						{/foreach}
					</div>
				
			</div>
			{if $productCate.description}
			  <div class="description-list">
				{$productCate.description nofilter}
			  </div>
			  {/if}
						
	</div>
	{$count= $count+1}
{/foreach}
