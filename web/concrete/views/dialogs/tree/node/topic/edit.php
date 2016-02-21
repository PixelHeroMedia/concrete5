<?php
defined('C5_EXECUTE') or die("Access Denied.");
$form = Loader::helper('form');
    ?>

<div class="ccm-ui">
	<form method="post" data-topic-form="update-topic-node" class="form-horizontal" action="<?=$controller->action('update_topic_node')?>">
		<?=Loader::helper('validation/token')->output('update_topic_node')?>
		<input type="hidden" name="treeNodeID" value="<?=$node->getTreeNodeID()?>" />
		<div class="form-group">
			<?=$form->label('treeNodeTopicName', t('Topic'))?>
			<?=$form->text('treeNodeTopicName', $node->getTreeNodeName(), array('class' => 'span4'))?>
		</div>
		<div class="dialog-buttons">
			<button class="btn btn-default" onclick="jQuery.fn.dialog.closeTop()"><?=t('Cancel')?></button>
			<button class="btn btn-primary pull-right" type="submit"><?=t('Update')?></button>
		</div>
	</form>
</div>

