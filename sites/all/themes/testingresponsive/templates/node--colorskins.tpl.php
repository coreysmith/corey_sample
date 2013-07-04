<h1>Color ID: <?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></h1>

<p>Go back to the <a href="/color-buttons-skins">main colors page</a>.</p>
  
  
  

	<div class="five columns">For the round corner button, use the skinr class of <strong>button-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></strong><br /><a class="button-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>" href="#" style="margin: 10px 0;">button-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></a></p></div>
		<div class="five columns">For the square corner button, use the skinr class of <strong>button-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square</strong><br /><a class="button-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square" href="#" style="margin: 10px 0;">button-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square</a></p></div>
<div class="clear-all" style="height:0px;border-top: 1px solid #ccc;"></div>
<div class="clearfix" style="margin: 10px 0;">
	<div class="clearfix block block-views three columns link-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>" style="margin-bottom: 20px;">
		<div class="block-inner">
			<h4>
				Link</h4>
			<div class="content">
				<p>For this block styling, use <strong>link-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></strong> in the skinr style. If you'd like this link to be square, use the skinr class of <strong>link-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square</strong>.</p>
				<p><a href="http://%3Cfront%3E">Link</a></p>
			</div>
		</div>
	</div>
	<div class="clearfix block block-views three columns border-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>" style="margin-bottom: 20px;">
		<div class="block-inner">
			<h4>
				Border</h4>
			<div class="content">
				<p>For this block styling, use <strong>border-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></strong> in the skinr style. The links will pull from theme defaults.</p>
				<p><a href="http://%3Cfront%3E">Link</a></p>
			</div>
		</div>
	</div>
	
	<div class="clearfix block block-views three columns color-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>" style="margin-bottom: 20px;">
		<div class="block-inner">
			<h4>
				Color</h4>
			<div class="content">
				<p>For this block styling, use <strong>color-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></strong> in the skinr style. The links will pull from theme defaults.</p>
				<p><a href="http://%3Cfront%3E">Link</a></p>
			</div>
		</div>
	</div>
	<div class="clearfix block block-views three columns background-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>" style="margin-bottom: 20px;">
		<div class="block-inner">
			<h4>
				Background</h4>
			<div class="content">
				<p>For this block styling, use <strong>background-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></strong> in the skinr style. The links will pull from theme defaults.</p>
				<p><a href="http://%3Cfront%3E">Link</a></p>
			</div>
		</div>
	</div>
	
	<div class="clearfix block block-views three columns gradient-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>" style="margin-bottom: 20px;">
		<div class="block-inner">
			<h4>
				Gradient</h4>
			<div class="content">
				<p>For this block styling, use <strong>gradient-<?php 
print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?></strong> in the skinr style. The links will pull from theme defaults.</p>
				<p><a href="http://%3Cfront%3E">Link</a></p>
			</div>
		</div>
	</div>
	
	


</div>
<div class="clear-all" style="height:0px;border-top: 1px solid #333;border-bottom: 1px solid #bbb;">
	&nbsp;</div>
<textarea readonly name="form-text" cols="20" rows="6" wrap="off" style="width:90%;">
/**** <?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> styles ***/

a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>,
a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square {
<?php print $node->field_button_link_color['und'][0]['value']; ?>
 }

a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>:hover,
a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>:active,
.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>.full-width,
a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square:hover,
a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square:active,
.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square.full-width {
<?php print $node->field_button_link_color_hover_ac['und'][0]['value']; ?>
 }


.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a,
.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content a {
<?php print $node->field_button_link_color['und'][0]['value']; ?>
 }

.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a:hover,
.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a:active,
.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content a:hover,
.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content a:active {
<?php print $node->field_button_link_color_hover_ac['und'][0]['value']; ?>
 }
 
 .link-slideshow-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content .slideshow-url-inner a,
 .link-slideshow-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content a {
 <?php print $node->field_button_link_color['und'][0]['value']; ?>
  }

 .link-slideshow-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content .slideshow-url-inner a:hover,
 .link-slideshow-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content .slideshow-url-inner a:active,
 .link-slideshow-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content .slideshow-url-inner a:hover,
 .link-slideshow-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content .slideshow-url-inner a:active {
 <?php print $node->field_button_link_color_hover_ac['und'][0]['value']; ?>
  }

a.button-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square,
.link-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?>-square .content a {
  -moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
 }

.border-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .block-inner,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .block-inner,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .block-inner {
  padding: 10px;
 }

.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> {
<?php print $node->field_button_link_color_hover_ac['und'][0]['value']; ?>
overflow:hidden;
 }
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> {   
  background:#<?php print $node->field_background_color['und'][0]['value']; ?>;
 }
  
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h1,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h1.title,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2.title,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2 a,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h3,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h4,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h5,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h6,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> div,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> p,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> ol,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> ul,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> dl,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> blockquote,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> fieldset,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> label,
.background-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .fieldset-legend,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h1,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h1.title,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2.title,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2 a,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h3,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h4,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h5,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h6,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> div,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> p,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> ol,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> ul,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> dl,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> blockquote,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> fieldset,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> label,
.gradient-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .fieldset-legend {
  color:#<?php print $node->field_color_against_background_c['und'][0]['value']; ?>;
 }

.border-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .block-inner {
  border: 1px solid #<?php print $title; ?>;
 }

.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h1,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h1.title,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2.title,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h2 a,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h3,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h4,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h5,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> h6,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> div,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> p,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> ol,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> ul,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> dl,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> blockquote,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> fieldset,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> label,
.color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .fieldset-legend {
  color: #<?php print $title; ?>;
 }

.link-color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a,
.link-color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a:hover,
.link-color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a:active,
.link-color-<?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> .content a.focus {
  color: #<?php print $title; ?>;
}
/**** end <?php print $node->field_color_group['und'][0]['value']; ?>-<?php print $nid; ?> styles ***/
</textarea>
