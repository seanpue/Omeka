<tr class="new-element-row">
    <td class="element-name"><?php echo $this->formText($elementNameId, $elementNameValue, array('class'=>'textinput')); ?></td>
    <td><?php echo $this->formTextarea($elementDescriptionId, $elementDescriptionValue, array('class'=>'textinput', 'rows'=>'10', 'cols'=>'30')); ?></td>
    <td class="element-order"><?php echo $this->formText( $elementOrderId, $elementOrderValue, array('size'=>2)); ?></td>
    <?php if (has_permission('ItemTypes', 'delete-element')): ?>
        <td><a href="" class="delete-element"><?php echo __('Remove'); ?></a></td>
    <?php endif; ?>
</tr>