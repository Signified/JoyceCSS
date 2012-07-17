<div class="page-header">
    <h1><?php echo $title_for_layout; ?></h1>
</div>
<?php echo $this->Form->create('User', array('class' => 'well', 'inputDefaults' => array('div' => array('class' => 'control-group')))); ?>
<?php echo $this->Form->input('email'); ?>
<?php echo $this->Form->input('password'); ?>
<?php echo $this->Form->submit(__('Login'), array('class' => 'btn btn-primary btn-large')); ?>
<hr>
<p><?php echo __('Not a member yet? %s', $this->Html->link(__('Sign Up'), array('action' => 'add'))); ?></p>
<?php echo $this->Form->end(); ?>