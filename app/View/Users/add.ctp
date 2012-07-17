<div class="page-header">
    <h1><?php echo $title_for_layout; ?></h1>
</div>
<?php echo $this->Form->create('User', array('class' => 'well', 'inputDefaults' => array('div' => array('class' => 'control-group')))); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('email'); ?>
<?php echo $this->Form->input('password', array('value' => '')); ?>
<?php echo $this->Form->submit(__('Sign Up'), array('class' => 'btn btn-primary btn-large')); ?>
<hr>
<p><?php echo __('Already a member? %s', $this->Html->link(__('Login'), array('action' => 'login'))); ?></p>
<?php echo $this->Form->end(); ?>