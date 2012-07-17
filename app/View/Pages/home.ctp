<div class="hero-unit">
    <h1>CSS Framework Generator</h1>
    <p>With a dose of OOCSS, a smidgen of YUI and bloody great dollop of HTML5!</p>
    <p><?php echo $this->Html->link(__('Get Started &raquo;'), array('controller' => 'stylesheets', 'action' => 'add'), array('class' => 'btn btn-primary btn-large', 'escape' => false)); ?></p>
</div>
<div class="row">
    <div class="span4">
        <?php echo $this->Html->image('oocss.png', array('alt' => 'OOCSS', 'width' => 126, 'height' => 80)); ?>
        <p>Scale CSS for thousands of pages with a revolutionary approach that's fast, maintainable, and standards-based.</p>
        <p><a class="btn" href="https://github.com/stubbornella/oocss/wiki">Learn more &raquo;</a></p>
    </div>
    <div class="span4">
        <?php echo $this->Html->image('yui.png', array('alt' => 'YUI Library', 'width' => 117, 'height' => 80)); ?>
        <p>YUI is a free, open source JavaScript and CSS framework for building richly interactive web applications.</p>
        <p><a class="btn" href="http://yuilibrary.com/">Learn more &raquo;</a></p>
    </div>
    <div class="span4">
        <?php echo $this->Html->image('html5.png', array('alt' => 'HTML5', 'width' => 145, 'height' => 80)); ?>
        <p>Giving meaning to structure, semantics are front and center with HTML5. A richer set of tags, RDFa, microdata, and microformats.</p>
        <p><a class="btn" href="http://www.w3.org/TR/html5/">Learn more &raquo;</a></p>
    </div>
</div>