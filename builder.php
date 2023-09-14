<html>
  <head>
    <title>KO Bootstrap Builder</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://git.iddkingsonline.com/designsystem-dev/css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <h1>King's Online Single-platform Bootstrap Builder (KO-BB)</h1>
      <div class="tooltip">
        <span class="tooltiptext">The KO-BB is a simple tool that uses
        visual selectors to generate frontend code for Bootstrap components
        and is designed for use with the King's Online Design System.</span>
      </div>
      <div>
        <div class="alert alert-btw hide-for-chrome" role="alert">
          <p>As the Builder performs best on Google Chrome, it would be
          advisable to switch to this browser if possible. If you continue
          to encounter any problems whilst on Chrome, view the FAQ tab to
          find out how to report an issue.</p>
          </div>
        </div>
        <p class="header select-intro">Select the component you wish to
        build:</p>
        <ul class="nav nav-tabs">
          <?php
            $components = array('Carousel', 'Collapse', 'Timeline', 'Table',
            'Transcript', 'Card', 'List', 'Blockquote', 'Infobox',
            'View/hide', 'Academic note', 'Audio', 'Video', 'Download',
            'Float box');
            sort($components);
            foreach ($components as $component) {
              $id = strtolower(str_replace(' ','',str_replace('/','',$component)));
              echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\" id=\"link-$id\">$component</a></li>";
            }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="#" id="link-faqs">FAQs</a>
          </li>
        </ul>
      </div>
      <section id="region-main">
       <div id="component-builder">
          <?php include('components/academicnote.php'); ?>
          <?php include('components/audio.php'); ?>
          <?php include('components/blockquote.php'); ?>
          <?php include('components/card.php'); ?>
          <?php include('components/carousel.php'); ?>
          <?php include('components/collapse.php'); ?>
          <?php include('components/download.php'); ?>
          <?php include('components/floatbox.php'); ?>
          <?php include('components/infobox.php'); ?>
          <?php include('components/list.php'); ?>
          <?php include('components/table.php'); ?>
          <?php include('components/timeline.php'); ?>
          <?php include('components/transcript.php'); ?>
          <?php include('components/video.php'); ?>
          <?php include('components/viewhide.php'); ?>
          <?php include('components/faqs.php'); ?>
        </div>
      </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ea529b88ed.js"></script>
    <script src="https://git.iddkingsonline.com/designsystem-dev/js/main.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
