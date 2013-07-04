<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_last']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<?php

if (!$logged_in) { 
  $login_link = ' | <a href="/user">Login</a>.';
  }

?>
<div class="page blue simplymodern2 cellar">
   <?php if ($cellarbreadcrumbs): ?>
     <div class="breadcrumb-wrapper dark-region">
       <div class="breadcrumb-container container">
         <div class="breadcrumb-trail sixteen columns">
           <div class="breadcrumb-inner sixteen columns alpha omega">
             <div class="inner">
      <?php print $breadcrumb; ?>
             </div>
           </div>
         </div>
       </div>
      </div>
    <?php endif; ?>
  <div id="header-wrapper-outer">
           

    
           
    <div id="header-wrapper" class="header-wrapper fullwidth dark-region">
      <div id="header-container" class="container">
        <div id="header" class="header row sixteen columns clearfix">

         

          <div id="site-info" class="site-info row six columns alpha">
            <div id="logo" class="logo">

              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </div>

            <?php if ($site_name || $site_slogan): ?>
              <div id="name-and-slogan">
                <?php if ($site_name): ?>
                  <div id="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                  </div>
                <?php endif; ?>

                <?php if ($site_slogan): ?>
                  <div id="site-slogan"><?php print $site_slogan; ?></div>
                <?php endif; ?>
              </div> <!-- /#name-and-slogan -->
            <?php endif; ?>
          </div> <!-- /#site-info -->
 <?php if ($secondary_menu): ?>
          <div id="secondary-wrapper">
            <div id="secondary-inner">

                <div id="secondary-navigation" class="row ten columns omega"><div class="inner">
                  <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
                </div></div> <!-- /.inner, /#secondary-navigation -->

            </div><!-- #secondary-inner -->
            </div> <!-- /#secondary-wrapper -->
       <?php endif; ?>
      

          
          

        </div><!-- /#header -->
      </div>
  
  
 
  
  
      </div>
    </div>
    
    <?php if ($page['header'] || $main_menu || $page['main_nav']): ?>
      <div class="header-region-wrapper">
        <div class="header-region-inner container">
      <div id="header-region" class="region row sixteen columns"><div class="inner">
        <?php print render($page['header']); ?>
      </div></div>
              <?php if ($main_menu || $page['main_nav']): ?>               
       <div id="navigation-wrapper">           
                     <div id="navigation-container" class="container">
                       <div class="inner">
                <?php endif; ?>         
                         <?php if ($main_menu): ?>
                             <div id="main-navigation" class="main-navigation sixteen columns ">
                               <div class="inner">
                                 <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
                               </div>
                             </div><?php endif; ?>
                             <?php if ($page['main_nav']): ?>
                             <div id="main-navigation-region" class="sixteen columns main-navigation-region">
                               <div class="inner">
                                 <?php print render($page['main_nav'])?>
                                 </div>
                             </div><?php endif; ?>
               <?php if ($main_menu || $page['main_nav']): ?> 
                    </div>
                   </div>
     </div>
               <?php endif; ?>

               <!-- end main-navigation -->
      </div></div><!-- /.inner, /#header -->
    <?php endif; ?>
    
    
    
  <div id="content-area-wrapper">

    



       
               
               <?php if ($page['mobile_only']): ?>

                 <div id="mobile-only-container" class="container">
                     <div id="mobile-only" class="region row sixteen columns clearfix"><div class="inner">
                       <?php print render($page['mobile_only']); ?>
                     </div></div> <!-- /.inner, /#mobile -->
                 </div>

               <?php endif; ?>
               <?php if ($page['preface']): ?>
               <div id="preface-wrapper" class="preface-wrapper fullwidth">
                 <div id="preface-container" class="container">
                   <div id="preface-container-inner" class="clearfix">
                   <div id="inner">
                     <div id="preface" class="region row sixteen columns clearfix"><div class="inner clearfix">
                       <?php print render($page['preface']); ?>
                     </div></div></div> <!-- /.inner, /#preface -->
                 </div></div>
               </div>
               <?php endif; ?>
     
     
    <div id="content-wrapper" class="content-wrapper fullwidth">
      

       
      <div id="content-container" class="container <?php if ($page['preface']): ?>preface-yes<?php endif; ?>">
        
        
        
        
        <div class="inner content-container-inner clearfix">
          

          
          

          
          
          
        <div id="main-content-wrapper" class="main-content row sixteen columns clearfix <?php if ($main_menu || $page['main_nav']): ?>main-content-nav-yes<?php endif; ?>">




          <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-first" class=" region <?php print $firstclasses; ?> alpha"><div class="inner">
              <?php print render($page['sidebar_first']); ?>
            </div></div> <!-- /.section, /#sidebar-first -->
          <?php endif; ?>

          <div id="content-column" class="content-column <?php print $contentclass; ?>">

            <?php if ($page['content_top']): ?>
              <div id="content-top" class="region"><div class="inner">
                <?php print render($page['content_top']); ?>
              </div></div> <!-- /.inner, /#content-top -->
            <?php endif; ?>

            <div id="content" class="content">
              <a id="main-content"></a>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
              <?php print render($title_suffix); ?>

              <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

              <?php print render($page['help']); ?>
              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
            </div>

            <?php if ($page['content_bottom']): ?>
              <div id="content-bottom" class="region"><div class="inner">
                <?php print render($page['content_bottom']); ?>
              </div></div> <!-- /.inner, /#content-bottom -->
            <?php endif; ?>

          </div>

          <?php if ($page['sidebar_last']): ?>
            <div id="sidebar-last" class="region <?php print $secondclasses; ?> sidebar omega"><div class="inner">
              <?php print render($page['sidebar_last']); ?>
            </div></div> <!-- /#sidebar-second -->
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <?php if ($page['postscript']): ?>
    <div id="postscript-wrapper" class="postscript-wrapper fullwidth">
      
      <div id="postscript-container" class="container">
        <div id="postscript-container-inner" class="clearfix">
          <div id="postscript" class="region row sixteen columns clearfix">
            <div class="inner clearfix">
    
            <?php print render($page['postscript']); ?>
          </div></div> </div><!-- /.inner, /#postscript -->
      </div>
    </div>
    <?php endif; ?>
  </div> <!-- /#content-area-wrapper -->
<div id="footer-wrapper-outer" class="dark-region">
    <?php if ($page['footer']): ?>
    <div id="footer-wrapper" class="footer-wrapper fullwidth">
      <div id="footer-container" class="container">
          <div id="footer" class="region row sixteen columns clearfix">
   
            <?php print render($page['footer']); ?> 
  
            
          </div> <!-- /.inner, /#footer -->
      </div>
    </div>
    <?php endif; ?>
    
    <div id="attribution-line" class="fullwidth">
    <div id="attribution-line-inner" class="container">
      <div class="inner sixteen columns">
          <div class="attribution-line-inside">
            <div class="inner-inner">
      powered by Tribute Media - a <a href="http://www.tributemedia.com" target="_new" alt>web design &amp; marketing agency</a>.<?php if (!$logged_in) { 
        print $login_link;
        }
         ?>
      </div></div></div>
    </div></div><!-- #attribution-line -->
<!-- #attribution-line -->
</div> <!-- /#footer-wrapper-outer -->
    <div id="bottom-color"></div>
  </div> 
</div> <!-- /#page -->
