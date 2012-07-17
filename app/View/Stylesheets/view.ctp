<div class="page-header">
    <div class="row">
        <div class="span8">
            <h1>
                <?php echo $stylesheet['Stylesheet']['name']; ?>
                <small><?php echo __('by %s', $this->Html->link($stylesheet['User']['name'], array('controller' => 'users', 'action' => 'view', $stylesheet['User']['id']))); ?></small>
            </h1>
        </div>
        <div class="span4">
            <div class="pull-right">
                <?php echo $this->Html->link(__('Preview'), array('action' => 'preview', $stylesheet['Stylesheet']['id']), array('class' => 'btn btn-primary')); ?>
                <?php if ((AuthComponent::user('id')) && (AuthComponent::user('id') == $stylesheet['User']['id'])): ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stylesheet['Stylesheet']['id']), array('class' => 'btn btn-primary')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stylesheet['Stylesheet']['id']), array('class' => 'btn btn-danger'), __('You better be sure. There is no going back!')); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <p><?php echo $stylesheet['Stylesheet']['description']; ?></p>
    </div>
    <div class="span6">
        <p class="pull-right">
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
        </p>
    </div>
</div>
<h2><?php echo __('Link to this stylesheet'); ?></h2>
<pre class="prettyprint linenums lang-html">&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; src=&quot;<a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a>&quot; /&gt;</pre>
<h2><?php echo __('Copy n\' paste this stylesheet'); ?></h2>
<pre class="prettyprint linenums lang-css"><?php echo $this->element('stylesheet', array('stylesheet' => $stylesheet)); ?></pre>