<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body>
   <!-- class="<?php print $body_classes; ?> show-grid" -->
  <div id="page" class="container-16 clear-block">
     
    <div id="site-header" class="clear-block">
      <div id="branding" class="grid-16 clear-block">
         <!-- removed site name, logo, and slogan from branding, inserted mission to print over logo-->
         
            
    <div id="links" class="grid-12"> <?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?></div>
             <div id="mission" class="grid-3">
                      <?php print variable_get('site_mission', '');?>
                  </div>
                 
                     
            <div id="imagesforheader" class="grid-15 prefix-1 alpha "></div>
             <!--images for header: define new content type to make this easier for client? or use random image print? -->
 
      </div>

  
    </div>

    <div id="site-subheader" class="prefix-1 suffix-1 clear-block">
       
            <!-- links added to header -->

    <?php if ($header): ?>
      <div id="header-region" class="region <?php print ns('grid-14', $mission, 7); ?> clear-block">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    </div>

    <div id="main" class="column <?php print ns('grid-16', $left, 5, $right, 3) . ' ' . ns('push-5', !$left, 5); ?>">
    <!--  <?php print $breadcrumb; ?> -->
      <?php if ($title): ?>
        <h1 class="title prefix-1" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region clear-block prefix-1 suffix-1">
        <?php print $node->content['body']['#value']; ?>
      </div>

      <?php print $feed_icons; ?>
    </div>
    
    <!-- <?php if ($left): ?>
        <div id="sidebar-left" class="alpha column sidebar region grid-3 prefix-1 suffix-1 <?php print ns('pull-11', $right, 3); ?>">
         <?php print $left; ?>
        </div>
      <?php endif; ?> -->

      <?php if ($right): ?>
      
        <div id="sidebar-right" class="column grid-3">
              <?php print $service_links; ?>
              <?php print $search_box; ?>
              <br/>
              <?php print $right; ?>
        </div>
      <?php endif; ?> 

    

      <div class="grid-15 push-1 clear-block alpha">
         <div id="border1" class="grid-4"> 
              <h4 id="subtitle">
                <?php print $node->content['field_who']['field']['#title'] ?> </h4>
                        <?php echo $node->field_who[0]['view'];?> </div>
         <div id="border2" class="grid-4">
            <h4 id="subtitle">
              <?php print $node->content['field_what']['field']['#title'] ?> </h4>
                       <?php echo $node->field_what[0]['view'];?></div>
         <div id="border3" class="grid-4">
            <h4 id="subtitle">
             <?php print $node->content['field_touch']['field']['#title'] ?> </h4>
                 <?php echo $node->field_touch[0]['view'];?></div

       </div>
       
 
 

  <div id="footer" class="clear-block grid-16 suffix-1 alpha">
   
    <br/>
        <span class="grid-4"><?php print $footer; ?></span>
        <span class="grid-9 push-3"><?php print $footer_message; ?></span>
     
  
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>