<h1>Featues Block</h1>
<?php
/** @var $form \TypeRocket\Elements\Form */
echo $form->checkbox('hide')->setLabel('Hide this block');

echo $form->text('Headline');

echo $form->image('Image')->setLabel('Image in the center of the block');


echo $form->repeater("left_items")->setFields([
    $form->image("Icon"),
    $form->text("Title"),
    $form->text("Description"),

])->setLabel("Left items");

echo $form->repeater("right_items")->setFields([
    $form->image("Icon"),
    $form->text("Title"),
    $form->text("Description"),

])->setLabel("Right items");