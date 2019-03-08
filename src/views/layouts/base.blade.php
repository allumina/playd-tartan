<!doctype html>
<html>
  <body>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          @yield('content')
        </main>
          <aside class="sidebar">
          </aside>
      </div>
    </div>
  </body>
</html>
