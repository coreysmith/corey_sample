
<style>h1.title{display:none;}
.topper-style {
  padding:10px;background:#e2e2e2;clear:both;
}
.dark-region .topper-style {
  padding:10px;background:#666;clear:both;
}</style>
<?php if($is_admin): ?>
<div class="topper-style">
<?php if($status==0):?>This page is not-published. If you'd like to publish it, please click the publish link in the tab above.<br />You can manage all your products at once <a href="/admin/product-catalog">here</a>.<?php elseif($status==1):?>This page is published. If you'd like to unpublish it, please click the unpublish link in the tab above.<br />You can manage all your products at once <a href="/admin/product-catalog">here</a>.<?php endif?>
  
</div>
<?php endif; ?>
<?php 
	$speed = field_get_items('node', $node, 'field_speed2');
	$family = field_get_items('node', $node, 'field_catalog_family');
	if (!empty($family)){
		$tid = $family[0]['tid'];
		$term = taxonomy_term_load($tid);
		$famName = $term->name;
	}else{
		$famName = "";
	}
	
	if ($famName == 'Scanner'){
		$action = 'scans';
	}else{
		$action = 'prints';
	}
?>
<div class="catalog-button">Return to <a href="javascript:history.go(-1)">previous search page</a></div>
<h1 class="product-catalog-title"><?php print ($node->title); ?></h1>
<?php // Print speed classification of product
	if (!empty($speed)) {
		if ($speed[0]['value'] != 0) { //if speed is N/A don't print anything
			if ($speed[0]['value'] < 101) { ?>
				<h3 class="product-catalog-speed"><?php print 'Up to '.$speed[0]['value'].' '.$action.'/minute'; ?></h3>
			<?php 
			}else{ //if speed is 100+ ?>
				<h3 class="product-catalog-speed"><?php print 'Over 100 '.$action.'/minute'; ?></h3>
			<?php 
			}
		}
	} ?>
<div class="catalog-page-left eight columns alpha">
  <div class="inner">
    <div class="primary-image">
    <?php
    $primary_image = field_get_items('node', $node, 'field_primary_image');

    if (!empty($primary_image)) {

      $image_item = array(
        'style_name' => 'catalog-product-primary', // just enter the style name you'd like
        'path' => $primary_image[0]['uri'],
        'width' => '',
        'height' => '',
        'alt' => $primary_image[0]['alt'], // optional
        'title' => $primary_image[0]['title'], // optional
      );

      $output =  theme('image_style', $image_item);

      print $output;
    }
    ?>
    
    </div>
    <div class="clear-all"></div>
    <div class="secondary-images-wrapper">
      <?php if ($node->field_secondary_image_1): ?><a class="colorbox" href="  <?php
      $secondary_image_1 = token_replace('[node:field_secondary_image_1]', array('node' => $node));
      print $secondary_image_1;
        ?>">
      <div class="secondary-images-first secondary-images">
        <?php
        $secondary_image_1 = field_get_items('node', $node, 'field_secondary_image_1');

        if (!empty($secondary_image_1)) {

          $image_item = array(
            'style_name' => 'catalog-product-secondary', // just enter the style name you'd like
            'path' => $secondary_image_1[0]['uri'],
            'width' => '',
            'height' => '',
            'alt' => $secondary_image_1[0]['alt'], // optional
            'title' => $secondary_image_1[0]['title'], // optional
          );

          $output =  theme('image_style', $image_item);

          print $output;
        }
        ?>
        
       </div></a><?php endif; ?><?php if ($node->field_secondary_image_2): ?><a class="colorbox" href="  <?php
        $secondary_image_2 = token_replace('[node:field_secondary_image_2]', array('node' => $node));
        print $secondary_image_2;
          ?>">
      <div class="secondary-images-second secondary-images">
        <?php
        $secondary_image_2 = field_get_items('node', $node, 'field_secondary_image_2');

        if (!empty($secondary_image_2)) {

          $image_item = array(
            'style_name' => 'catalog-product-secondary', // just enter the style name you'd like
            'path' => $secondary_image_2[0]['uri'],
            'width' => '',
            'height' => '',
            'alt' => $secondary_image_2[0]['alt'], // optional
            'title' => $secondary_image_2[0]['title'], // optional
          );

          $output =  theme('image_style', $image_item);

          print $output;
        }
        ?>
        
        </div></a><?php endif; ?>
     <?php if ($node->field_secondary_image_3): ?><a class="colorbox" href="  <?php
        $secondary_image_3 = token_replace('[node:field_secondary_image_3]', array('node' => $node));
        print $secondary_image_3;
          ?>">
      <div class="secondary-images-third secondary-images">

        <?php
        $secondary_image_3 = field_get_items('node', $node, 'field_secondary_image_3');

        if (!empty($secondary_image_3)) {

          $image_item = array(
            'style_name' => 'catalog-product-secondary', // just enter the style name you'd like
            'path' => $secondary_image_3[0]['uri'],
            'width' => '',
            'height' => '',
            'alt' => $secondary_image_3[0]['alt'], // optional
            'title' => $secondary_image_3[0]['title'], // optional
          );

          $output =  theme('image_style', $image_item);

          print $output;
        }
        ?>
        
        </div></a><?php endif; ?>
    </div>
    <div class="clear-all"></div>
    <div class="catalog-links">
        <?php $node_wrapper = entity_metadata_wrapper('node', $node); 
          if (!empty($node->field_catalog_brochure)){
            $manufacturer = reset($node_wrapper->field_catalog_manufacturer->value()); 
           $manufacturer_name = strtolower(str_replace(' ', '-', $manufacturer->name)); 
           $brochure = $node_wrapper->field_catalog_brochure->value(); 
           preg_match('/.*[\/](.*)$/', $brochure['url'], $matches);
	   $brochure['url'] = !empty($matches[1]) ? $matches[1] : $brochure['url'];
          print l('Download Brochure', 'http://brochure.copiercatalog.com/' . $manufacturer_name . '/' . $brochure['url'], array('attributes' =>array('target' => '_blank', 'class' => 'button-red-45'))); 
          }; ?>
      <?php if ($node->field_catalog_virtual_demo): ?><div class="product-watch-demo"><a target="_blank" href="<?php print $node->field_catalog_virtual_demo['und'][0]['url']; ?>" class="button-red-45">Watch Demo Video</a></div><?php endif; ?>
     
     <div class="product-request-quote"><a href="/request-quote" class="button-red-45">Request Quote</a></div>
      </div>
      
      
    <div class="catalog-info-line-wrapper"><div class="inner">      <ul class="catalog-info-line">
          <?php if ($node->field_color_or_black_white): ?><li><?php print $node->field_color_or_black_white['und'][0]['value']; ?></li><?php endif; ?>
          <?php if ($node->field_catalog_family): ?><li><?php print render($content['field_catalog_family' ]); ?></li><?php endif; ?>
          <li>Manufactured by: <?php print render($content['field_catalog_manufacturer' ]); ?></li>
    </ul>
    </div></div>
  </div>
</div>

<div class="catalog-page-right eight columns omega">
  <div class="inner">
    <?php if ($node->field_price): ?>
      <div class="catalog-srp"><div class="catalog-srp-title">Suggested Price</div><div class="catalog-srp-price"><?php print render($content['field_price' ]); ?></div></div><?php endif; ?>

      <div class="catalog-summary"><?php print $node->field_summary['und'][0]['value']; ?></div>
      <?php if ($node->field_highlights): ?>
      <h4>Highlights</h4>
<?php
$highlights = field_get_items('node', $node, 'field_highlights'); if(!empty($highlights)) { print '<ul>'; foreach($highlights as $highlight) { print '<li>' . $highlight['value'] . '</li>'; } print '</ul>'; } endif; ?>
      <div class="catalog-body"><?php print $node->body['und'][0]['value']; ?></div>
      
  </div>  
</div>









