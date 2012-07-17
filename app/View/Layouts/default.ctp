<?php echo $this->Html->doctype('html5'); ?>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?> - <?php echo Configure::read('App.name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo $this->Html->meta('icon'); ?>
<?php echo $this->Html->css(array('bootstrap.min', 'prettify', 'style')); ?>
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <?php echo $this->Html->link(Configure::read('App.name'), '/', array('class' => 'brand')); ?>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><?php echo $this->Html->link(__('Home'), '/'); ?></li>
                    <li><?php echo $this->Html->link(__('Stylesheets'), array('controller' => 'stylesheets', 'action' => 'index')); ?></li>
                </ul>
                <ul class="nav pull-right">
                    <?php if (AuthComponent::user('id')): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo AuthComponent::user('name'); ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><?php echo $this->Html->image(AuthComponent::user('gravatar'), array('alt' => AuthComponent::user('name'), 'width' => 40, 'height' => 40, 'url' => array('controller' => 'users', 'action' => 'view', AuthComponent::user('id')))); ?></li>
                                <li class="divider"></li>
                                <li><?php echo $this->Html->link(__('Profile'), array('controller' => 'users', 'action' => 'view', AuthComponent::user('id'))); ?></li>
                                <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li><?php echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?></li>
                        <li><?php echo $this->Html->link(__('Sign Up'), array('controller' => 'users', 'action' => 'add')); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('sql_dump'); ?>
    <hr>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php echo Configure::read('App.name'); ?></p>
    </footer>
</div>
<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', 'bootstrap.min', 'prettify', 'lang-css', 'script')); ?>
</body>
</html>