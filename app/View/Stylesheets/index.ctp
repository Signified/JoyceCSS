<div class="page-header">
    <div class="row">
        <div class="span6">
            <h1><?php echo $title_for_layout; ?></h1>
        </div>
        <div class="span6">
            <div class="pull-right"><?php echo $this->Html->link(__('Create a New Stylesheet'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?></div>
        </div>
    </div>
</div>
<?php foreach ($stylesheets as $stylesheet): ?>
    <div class="well">
        <div class="row-fluid">
            <div class="span1">
                <?php echo $this->Html->image($stylesheet['User']['gravatar'], array('alt' => $stylesheet['User']['name'], 'width' => 80, 'height' => 80, 'url' => array('controller' => 'users', 'action' => 'view', $stylesheet['User']['id']))); ?>
            </div>
            <div class="span4">
                <h3>
                    <?php echo $this->Html->link($stylesheet['Stylesheet']['name'], array('action' => 'view', $stylesheet['Stylesheet']['id'])); ?>
                    <small><?php echo __('by %s', $this->Html->link($stylesheet['User']['name'], array('controller' => 'users', 'action' => 'view', $stylesheet['User']['id']))); ?></small>
                </h3>
                <p><?php echo h($stylesheet['Stylesheet']['description']); ?></p>
            </div>
            <div class="span4">
                <span class="label" rel="tooltip" title="<?php echo __('Background Color'); ?>"><?php echo $stylesheet['Stylesheet']['default_background_color']; ?></span>
                <span class="label" rel="tooltip" title="<?php echo __('Color'); ?>"><?php echo $stylesheet['Stylesheet']['default_color']; ?></span>
                <span class="label" rel="tooltip" title="<?php echo __('Font Size'); ?>"><?php echo $stylesheet['Stylesheet']['default_font_size']; ?>px</span>
                <span class="label" rel="tooltip" title="<?php echo __('Line Height'); ?>"><?php echo $stylesheet['Stylesheet']['default_line_height']; ?></span>
                <span class="label" rel="tooltip" title="<?php echo $stylesheet['Stylesheet']['default_font_family']; ?>"><?php echo __('Aa'); ?></span>
                <span class="label" rel="tooltip" title="<?php echo __('Border Radius'); ?>"><?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px</span>
                <span class="label" rel="tooltip" title="<?php echo __('Page Width'); ?>"><?php echo $stylesheet['Stylesheet']['template_page_width']; ?>px</span>
                <span class="label" rel="tooltip" title="<?php echo __('Left Column Width'); ?>"><?php echo $stylesheet['Stylesheet']['template_left_column_width']; ?>px</span>
                <span class="label" rel="tooltip" title="<?php echo __('Right Column Width'); ?>"><?php echo $stylesheet['Stylesheet']['template_right_column_width']; ?>px</span>
                <span class="label" rel="tooltip" title="<?php echo __('Grid Units'); ?>"><?php echo $stylesheet['Stylesheet']['grid_units']; ?></span>
                <span class="label" rel="tooltip" title="<?php echo __('Module Margin'); ?>"><?php echo $stylesheet['Stylesheet']['module_margin']; ?>px</span>
            </div>
            <div class="span3">
                <div class="btn-group pull-right">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $stylesheet['Stylesheet']['id']), array('class' => 'btn')); ?>
                    <?php echo $this->Html->link(__('Preview'), array('action' => 'preview', $stylesheet['Stylesheet']['id']), array('class' => 'btn')); ?>
                    <?php if ((AuthComponent::user('id')) && (AuthComponent::user('id') == $stylesheet['User']['id'])): ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stylesheet['Stylesheet']['id']), array('class' => 'btn')); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<div class="paging">
    <?php echo $this->Paginator->prev(); ?>
    <?php echo $this->Paginator->numbers(); ?>
    <?php echo $this->Paginator->next(); ?>
</div>