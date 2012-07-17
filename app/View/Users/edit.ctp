<div class="page-header">
    <h1>
        <?php echo $title_for_layout; ?>
        <small><?php echo __('update your profile'); ?></small>
    </h1>
</div>
<?php echo $this->Form->create('User', array('class' => 'well')); ?>
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('email'); ?>
<?php echo $this->Form->submit(__('Save'), array('class' => 'btn btn-primary btn-large')); ?>
<?php echo $this->Form->end(); ?>