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
         
            
          <div id="links" class="grid-10 prefix-1 alpha"><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?>   </div><div id="service" class="grid-4 push-1">    <?php print $service_links; ?> </div>

                   <div id="mission" class="clear-block grid-4">
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

  
      <div id="main-content" class="grid-13 alpha push-1">
         
       <?php print $content; ?>
      </div>

      <?php print $feed_icons; ?>
    </div>
    
    <div id="sidebar-right" class="grid-3">
      <div id="search"> <?php print $search_box; ?></div>
           
      </div>
  
  


<!--      
     <div class="grid-16 push-1 clear-block alpha">
        <div id="linkimage" class="grid-4">
            <?php echo $node->field_imagea[0]['view'];?></div>
        <div id="border" class="grid-10"> 
             <h4 id="subtitle"> Consulting </h4>
               <?php echo $node->field_who[0]['view'];?> </div>
                       
         <div id="linkimage" class="grid-4">
         <?php echo $node->field_imageb[0]['view'];?></div>
          <div id="border" class="grid-10">
           <h4 id="subtitle">Training </h4>
                      <?php echo $node->field_what[0]['view'];?></div>
                      
          <div id="linkimage" class="grid-4">
              <?php echo $node->field_imagec[0]['view'];?></div>
             <div id="border" class="grid-10">
             <h4 id="subtitle">Training Trainers </h4>
               <?php echo $node->field_touch[0]['view'];?></div>

      </div> -->


  
  <div id="footer" class="clear-block grid-16 suffix-1 alpha">
   
    <br/>
        <span class="grid-4"><?php print $footer; ?></span>
        <span class="grid-9 push-3"><?php print $footer_message; ?></span>
     
  
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>
