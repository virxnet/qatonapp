<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="//qaton.virx.net/">Qaton - The Elemental PHP MVC Framework</a> <button aria-controls="navbarsMainDefault" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarsMainDefault" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarsMainDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php $this->isActive('/', 'active') ?>">
                    <a class="nav-link" href="<?php $this->baseUrl() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php $this->isActive($this->page_path, 'active') ?>">
                    <a class="nav-link" href="<?php $this->pageUrl() ?>"><?php $this->pageName() ?> <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>