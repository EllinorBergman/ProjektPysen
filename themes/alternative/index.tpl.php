<!doctype html>
<html lang='en'> 
<head>
  <meta charset='utf-8'/>
  <title><?=$title?></title>
  <link rel='shortcut icon' href='<?=theme_url($favicon)?>'/>
  <link rel='stylesheet' href='<?=theme_url($stylesheet)?>'/>
  <?php if(isset($inline_style)): ?><style><?=$inline_style?></style><?php endif; ?>
</head>
<body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
           <?=render_views('navbar')?>
        </ul>
        <ul class="login">
          <?=login_menu()?>
        </ul>
        <h3 class="text-muted"><a href="<?=base_url()?>"><?=$header?></a></h3>
      </div>
      
      <hr>

      <div class="jumbotron">
        <?=get_messages_from_session()?><?=@$main?><?=render_views('primary')?><?=render_views()?>
      </div>
      
      <?php if(region_has_content('sidebar')): ?>
      <div class="sidebar">
        <?=render_views('sidebar')?>
      </div>
      <?php endif; ?>
      
      <div class="clear"></div>
      


      <div class="footer">
        <p>Pysen &copy; Ellinor Bergman</p>
        <p><?=render_views('footer')?><?=$footer?><?=get_tools()?><?=get_debug()?></p>
      </div>

    </div>

</body>
</html>