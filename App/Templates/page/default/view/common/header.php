<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Qaton Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php $this->isActive('/', 'active') ?>"><a href="<?php $this->baseUrl() ?>">Home</a></li>
                <li class="<?php $this->isActive($this->page_path, 'active') ?>">
                    <a href="<?php $this->pageUrl() ?>"><?php $this->pageName() ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>