<div class="page-header">
    <div class="row">
        <div class="span6">
            <h1><?php echo $title_for_layout; ?></h1>
        </div>
        <div class="span6">
            <?php if ($user['User']['id'] == AuthComponent::user('id')): ?>
                <div class="pull-right"><?php echo $this->Html->link(__('Update Profile'), array('action' => 'edit'), array('class' => 'btn btn-primary')); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<p><?php echo $this->Html->image($user['User']['gravatar'], array('alt' => $user['User']['name'], 'width' => 80, 'height' => 80)); ?></p>
<hr>
<h2><?php echo __('%s\'s Stylesheets', $user['User']['name']); ?></h2>
<?php if (!empty($user['Stylesheet'])): ?>
    <?php foreach ($user['Stylesheet'] as $stylesheet): ?>
        <div class="well">
            <div class="row-fluid">
                <div class="span5">
                    <h3>
                        <?php echo $this->Html->link($stylesheet['name'], array('controller' => 'stylesheets', 'action' => 'view', $stylesheet['id'])); ?>
                        <small><?php echo __('by %s', $user['User']['name']); ?></small>
                    </h3>
                    <p><?php echo h($stylesheet['description']); ?></p>
                </div>
                <div class="span4">
                    <span class="label" rel="tooltip" title="<?php echo __('Background Color'); ?>"><?php echo $stylesheet['default_background_color']; ?></span>
                    <span class="label" rel="tooltip" title="<?php echo __('Color'); ?>"><?php echo $stylesheet['default_color']; ?></span>
                    <span class="label" rel="tooltip" title="<?php echo __('Font Size'); ?>"><?php echo $stylesheet['default_font_size']; ?>px</span>
                    <span class="label" rel="tooltip" title="<?php echo __('Line Height'); ?>"><?php echo $stylesheet['default_line_height']; ?></span>
                    <span class="label" rel="tooltip" title="<?php echo $stylesheet['default_font_family']; ?>"><?php echo __('Aa'); ?></span>
                    <span class="label" rel="tooltip" title="<?php echo __('Border Radius'); ?>"><?php echo $stylesheet['default_border_radius']; ?>px</span>
                    <span class="label" rel="tooltip" title="<?php echo __('Page Width'); ?>"><?php echo $stylesheet['template_page_width']; ?>px</span>
                    <span class="label" rel="tooltip" title="<?php echo __('Left Column Width'); ?>"><?php echo $stylesheet['template_left_column_width']; ?>px</span>
                    <span class="label" rel="tooltip" title="<?php echo __('Right Column Width'); ?>"><?php echo $stylesheet['template_right_column_width']; ?>px</span>
                    <span class="label" rel="tooltip" title="<?php echo __('Grid Units'); ?>"><?php echo $stylesheet['grid_units']; ?></span>
                    <span class="label" rel="tooltip" title="<?php echo __('Module Margin'); ?>"><?php echo $stylesheet['module_margin']; ?>px</span>
                </div>
                <div class="span3">
                    <div class="btn-group pull-right">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'stylesheets', 'action' => 'view', $stylesheet['id']), array('class' => 'btn')); ?>
                        <?php echo $this->Html->link(__('Preview'), array('controller' => 'stylesheets', 'action' => 'preview', $stylesheet['id']), array('class' => 'btn')); ?>
                        <?php if ((AuthComponent::user('id')) && (AuthComponent::user('id') == $user['User']['id'])): ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'stylesheets', 'action' => 'edit', $stylesheet['id']), array('class' => 'btn')); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="alert alert-block alert-info">
        <?php if (AuthComponent::user('id') == $user['User']['id']): ?>
            <p><?php echo __('You haven\'t created any stylesheets yet :('); ?></p>
            <p><?php echo $this->Html->link(__('Create a New Stylesheet'), array('controller' => 'stylesheets', 'action' => 'add'), array('class' => 'btn btn-primary')); ?></p>
        <?php else: ?>
            <p><?php echo __('%s hasn\'t created any stylesheets yet :(', $user['User']['name']); ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>