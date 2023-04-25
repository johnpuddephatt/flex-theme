<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

    <?php if (carbon_get_theme_option("google_analytics")): ?>      
      <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo carbon_get_theme_option(
        "google_analytics"
      ); ?>"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo carbon_get_theme_option(
          "google_analytics"
        ); ?>');
      </script>
    <?php endif; ?>
    
  </head>

  <body <?php body_class(
    "tracking-wide border-t-[1.25rem] border-blue text-black"
  ); ?>>
    <?php wp_body_open(); ?>
    <?php do_action("get_header"); ?>

    <div id="app">
      <?php echo \Roots\view(
        \Roots\app("sage.view"),
        \Roots\app("sage.data")
      )->render(); ?>
    </div>

    <?php do_action("get_footer"); ?>
    <?php wp_footer(); ?>
  </body>
</html>
