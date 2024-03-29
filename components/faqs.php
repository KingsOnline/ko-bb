<div class="component-content" id="component-faqs">
  <div class="component-header">
    <h2 class="component-title">FAQs</h2>
  </div>
  <div class="alert alert-btw hide-for-chrome" role="alert">
    <p>The Builder performs best on Google Chrome so it would be advisable
    to switch to this browser if possible. If you continue to encounter any
    problems on Chrome, view the FAQ tab to find out how to report an issue.</p>
  </div>
  <div class="component-body container">
    <div class="collapse-container">
      <div class="collapse-card collapsed">
        <div class="collapse-header">
          <button class="btn btn-link">
            <h4>What are the prerequisites for using the KO-BB?</h4>
          </button>
        </div>
        <div class="collapse-body">
          <p>The KO-BB is a simple tool that uses visual selectors to
          generate frontend code for Bootstrap components and is designed
          for use with the King's Online Design System. The Design System in
          turn, is compatible with Grid or Collapsed Topics format modules
          on Moodle 3.X installations (commonly known as KEATS within
          KCL).</p>
          <p>More information on <a
          href="https://keats.kcl.ac.uk/course/view.php?id=73004&section=2"
          target="_blank">how to set up the Design System</a> can be
          accessed here.</p>
        </div>
      </div>
      <div class="collapse-card collapsed">
        <div class="collapse-header">
          <button class="btn btn-link">
            <h4>How can I report an issue?</h4>
          </button>
        </div>
        <div class="collapse-body">
          <p>If something isn't working as expected, <a
          href="https://iddkingsonline.com/design-system/request-form.html"
          target="_blank">submit a bug report</a>.
        </div>
      </div>
      <div class="collapse-card collapsed">
        <div class="collapse-header">
          <button class="btn btn-link">
            <h4>Where can I find examples of all the different
            components?</h4>
          </button>
        </div>
        <div class="collapse-body">
          <p>The <a
          href="http://iddkingsonline.com/design-system/guide.html">King's
          Online Design System Guide</a> demonstrates all of the different
          components that can be built. This also contains examples of
          commonly used default pages and some of the different types of
          activities available.</p>
        </div>
      </div>
      <div class="collapse-card collapsed">
        <div class="collapse-header">
          <button class="btn btn-link">
            <h4>Looks good. What's coming next?</h4>
          </button>
        </div>
        <div class="collapse-body">
          <p>View the <a
          href="https://keats.kcl.ac.uk/course/view.php?id=73004&section=1">Release
          plan and changelog</a> for a breakdown of what's currently live
          and what's in store for future releases.</p>
        </div>
      </div>
      <div class="collapse-card collapsed">
        <div class="collapse-header">
          <button class="btn btn-link">
            <h4>Remind me of the snippet that goes into a Moodle
            Book actvitiy to make it print nicely?</h4>
          </button>
        </div>
        <div class="collapse-body">
          <p>Books currently need additional code added in order to make
          them printer-friendly. Simply add this code to the top of the
          first page of the book:</p>
          <pre><code>&lt;script type="text/javascript"&gt;
// Load external CSS file into Keats
loadcss("https://git.iddkingsonline.com/designsystem/css/print-book.css");
function loadcss(url) {
  var head = document.getElementsByTagName('head')[0],
  link = document.createElement('link');
  link.type = 'text/css';
  link.rel = 'stylesheet';
  link.href = url;
  head.appendChild(link);
  return link;
}
// Load external JS file into Keats
loadjs("https://git.iddkingsonline.com/designsystem/js/book.js");
function loadjs(url) {
  var body = document.getElementsByTagName('body')[0],
  script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = url;
  body.appendChild(script);
  return script;
}
&lt;/script&gt;</code></pre>
        </div>
      </div>
      <div class="collapse-card collapsed">
        <div class="collapse-header">
          <button class="btn btn-link">
            <h4>Remind me of frequently used custom classes that
            aren't available via this builder?</h4>
          </button>
        </div>
        <div class="collapse-body">
          <p>You can find a list of commonly used custom classes below:</p>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h4>Grid layout</h4>
                <p>Bootstrap’s grid system uses a series of containers,
                rows, and columns to layout and align content. More
                information can be found on their <a
                href="https://getbootstrap.com/docs/4.0/layout/grid/">documentation
                page</a>.</p>
              </div>
              <div class="col-md-3">
                <h4>Images</h4>
                <ul>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947632&chapterid=650895">Centered
                  images</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947632&chapterid=662572">Circular
                  images</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947632&chapterid=662573">Full
                  width images</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947632&chapterid=662575">Image
                  with horizontal scroll</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947632&chapterid=662577">Screenshots</a></p></li>
                </ul>
                <h4>Float box images</h4>
                <ul>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947622&chapterid=650853#right-aligned-images">Right
                  aligned images</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947622&chapterid=650853#small-images">Small
                  images</a></p></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4>Tables</h4>
                <ul>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650877">Tables
                  with horizontal scroll</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650879">Titles
                  and captions</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650880">Highlighting
                  cells</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650881">Diagonally
                  split header</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650882">Tables
                  without borders</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650883">Tables
                  with outer border only</a></p></li>
                  <li><p><a
                  href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947628&chapterid=650886">Tables
                  with right aligned text</a></p></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4>Typography</h4>
                <p><a
                href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947610">Captions</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
