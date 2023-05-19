<div class="component-content" id="component-transcript">
  <div class="component-header">
    <h2 class="component-title">Transcript</h2>
    <p><a href="https://keats.kcl.ac.uk/mod/book/view.php?id=6947646" target="_blank">Design System guidance and examples</a></p>
  </div>
  <div class="component-body container">
    <div class="row">
      <div class="options col-md-6">
        <section class="options">
          <h3>Options</h3>
          <p>Complete the following fields:</p>
          <form class="needs-validation" id="ts-form" novalidate>
            <div class="form-group">
              <label for="ts-body">Body</label>
              <textarea class="form-control" id="ts-body" placeholder="<h3>This is an optional title</h3>
<p>This is the first paragraph.</p>
<p>This is the second paragraph.</p>" rows="6"></textarea>
              <small id="ts-body-help" class="form-text text-muted">Copy and paste the body of the transcript text into the textarea.</small>
            </div>
          </form>
        </section>
      </div>
      <div class="col-md-6">
        <section class="preview">
          <h3 class="preview-title">Preview</h3>
          <div id="ts-preview-pane"></div>
        </section>
        <section class="component-code">
          <div class="code-header">
            <h3 class="code-title">Code</h3>
          </div>
          <div class="code-box">
            <pre class="code-text">
<span id="ts-print-code"><span class="code-open-tag">&lt;div&#32;class&#61;&#34;transcript&#45;container&#32;collapsed&#34;&gt;</span>
  <span class="code-open-tag">&lt;div&#32;class&#61;&#34;transcript&#45;button&#45;group&#34;&gt;</span>
    <span class="code-open-tag">&lt;<span class="code-ts-btn-tag">button</span>&#32;class&#61;&#34;btn<span id="code-ts-view-btn-class">&#32;btn&#45;primary&#32;view&#45;close&#45;transcript</span>&#34;&#32;aria-expanded&#61;&#34;false&#34;<span id="code-ts-id-1"></span><span class="code-ts-id"></span><span id="code-ts-id-2"></span><span class="code-ts-id"></span><span id="code-ts-id-3"></span>&gt;</span>View transcript<span class="code-close-tag">&lt;&#47;<span class="code-ts-btn-tag">button</span>&gt;</span>
  <span class="code-close-tag">&lt;&#47;div&gt;</span>
  <span class="code-open-tag">&lt;div&#32;class&#61;&#34;transcript&#45;card<span id="code-ts-card-collapse"></span>&#34;<span id="code-ts-id-4"></span><span class="code-ts-id"></span><span id="code-ts-id-5"></span>&gt;</span>
    <span class="code-open-tag">&lt;div&#32;class&#61;&#34;card&#45;body&#34;&gt;</span>
      <span id="code-ts-body-text">&lt;p&gt;Transcript body...&lt;&#47;p&gt;</span>
    <span class="code-close-tag">&lt;&#47;div&gt;</span>
  <span class="code-close-tag">&lt;&#47;div&gt;</span>
<span class="code-close-tag">&lt;&#47;div&gt;</span></pre>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
