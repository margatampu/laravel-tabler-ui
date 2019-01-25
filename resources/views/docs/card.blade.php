@extends('layouts.app')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Documentation
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-3 order-lg-1 mb-4">
                @include('docs._nav')
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="text-wrap p-lg-6">
                            <h2 class="mt-0 mb-4">Cards</h2>
                            <p>A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>
                            <p>The <code class="highlighter-rouge">.card</code> element is simply a container with a shadow, a border, a radius, and some padding. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components.</p>
                            <h3 id="default-card">Default card</h3>
                            <div class="example example-bg">
                                <div class="example-column example-column-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Card title</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="advanced-card">Advanced card</h3>
                            <div class="example example-bg">
                                <div class="example-column example-column-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Card title</h3>
                                            <div class="card-options">
                                                <a href="#" class="btn btn-primary btn-sm">Action 1</a>
                                                <a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                                        </div>
                                        <div class="card-footer">
                                            This is standard card footer
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-options"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Action 1<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm ml-2"</span><span class="nt">&gt;</span>Action 2<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-footer"</span><span class="nt">&gt;</span>
    This is standard card footer
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="blog-post-card">Blog post card</h3>
                            <p>The best way to make your post eye-catching is adding an image to it. To do so, just add the image with the <code class="highlighter-rouge">.card-img-top</code> class. We’ve added the <code class="highlighter-rouge">.d-flex .flex-column</code> classes to the <code class="highlighter-rouge">.card-body</code> to have the author details be on the bottom of the card.</p>
                            <div class="example example-bg">
                                <div class="example-column example-column-1">
                                    <div class="card">
                                        <a href="#"><img class="card-img-top" src="../demo/photos/david-klaasen-54203-500.jpg" alt="And this isn&#39;t my nose. This is a false one." /></a>
                                        <div class="card-body d-flex flex-column">
                                            <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                                            <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar avatar-md mr-3" style="background-image: url(../demo/faces/female/18.jpg)"></div>
                                                <div>
                                                    <a href="../profile.html" class="text-default">Rose Bradley</a>
                                                    <small class="d-block text-muted">3 days ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"./demo/photos/david-klaasen-54203-500.jpg"</span> <span class="na">alt=</span><span class="s">"And this isn&amp;#39;t my nose. This is a false one."</span><span class="nt">&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body d-flex flex-column"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>And this isn't my nose. This is a false one.<span class="nt">&lt;/a&gt;&lt;/h4&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center pt-5 mt-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar avatar-md mr-3"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/18.jpg)"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"./profile.html"</span> <span class="na">class=</span><span class="s">"text-default"</span><span class="nt">&gt;</span>Rose Bradley<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"d-block text-muted"</span><span class="nt">&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"ml-auto text-muted"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"icon d-none d-md-inline-block ml-3"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-heart mr-1"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="row-deck">Row deck</h3>
                            <p>If you want to create a couple of posts next to each other, add the <code class="highlighter-rouge">.row-deck</code> class to <code class="highlighter-rouge">.row</code>—then they will all have the same height.</p>
                            <div class="example example-bg">
                                <div class="example-column example-column-2">
                                    <div class="row row-cards row-deck">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">Short content</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">Extra long content of card. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">Short content</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row row-cards row-deck"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>Short content<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>Extra long content of card. Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>Short content<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="post-card-with-aside-image">Post card with aside image</h3>
                            <p>You can also add the image on the left side of the card. All you need do to is: add the <code class="highlighter-rouge">.card-aside</code> class to the element with the <code class="highlighter-rouge">.card</code> class. Then add the image in the <code class="highlighter-rouge">.card-aside-column</code> element. No worries, tabler will automatically center it and scale to right size:</p>
                            <div class="example example-bg">
                                <div class="example-column example-column-2">
                                    <div class="card card-aside">
                                        <a href="#" class="card-aside-column" style="background-image: url(../demo/photos/david-klaasen-54203-500.jpg)"></a>
                                        <div class="card-body d-flex flex-column">
                                            <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                                            <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                                            <div class="d-flex align-items-center pt-5 mt-auto">
                                                <div class="avatar avatar-md mr-3" style="background-image: url(../demo/faces/female/18.jpg)"></div>
                                                <div>
                                                    <a href="../profile.html" class="text-default">Rose Bradley</a>
                                                    <small class="d-block text-muted">3 days ago</small>
                                                </div>
                                                <div class="ml-auto text-red">
                                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-aside"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-aside-column"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/photos/david-klaasen-54203-500.jpg)"</span><span class="nt">&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body d-flex flex-column"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>And this isn't my nose. This is a false one.<span class="nt">&lt;/a&gt;&lt;/h4&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center pt-5 mt-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar avatar-md mr-3"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/18.jpg)"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"./profile.html"</span> <span class="na">class=</span><span class="s">"text-default"</span><span class="nt">&gt;</span>Rose Bradley<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"d-block text-muted"</span><span class="nt">&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"ml-auto text-red"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"icon d-none d-md-inline-block ml-3"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-heart mr-1"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="color-variations">Color variations</h3>
                            <div class="example example-bg">
                                <div class="example-column example-column-2">
                                    <div class="row row-cards row-deck">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-status bg-purple"></div>
                                                <div class="card-header">
                                                    <h3 class="card-title">Card status</h3>
                                                </div>
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-status card-status-left bg-blue"></div>
                                                <div class="card-header">
                                                    <h3 class="card-title">Card status on left side</h3>
                                                </div>
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row row-cards row-deck"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-status bg-purple"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card status<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-status card-status-left bg-blue"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card status on left side<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="card-with-switch">Card with switch</h3>
                            <div class="example example-bg">
                                <div class="example-column example-column-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Card with switch</h3>
                                            <div class="card-options">
                                                <label class="custom-switch m-0">
                                                <input type="checkbox" value="1" class="custom-switch-input" checked="" />
                                                <span class="custom-switch-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card with switch<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-options"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-switch m-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">"1"</span> <span class="na">class=</span><span class="s">"custom-switch-input"</span> <span class="na">checked</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-switch-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="card-with-loader">Card with loader</h3>
                            <div class="example example-bg">
                                <div class="example-column example-column-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Card with loader</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="dimmer active">
                                                <div class="loader"></div>
                                                <div class="dimmer-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card with loader<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dimmer active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"loader"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dimmer-content"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection