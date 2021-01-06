<h1>Featues Horizontal Block</h1>
<?php
/** @var $form \TypeRocket\Elements\Form */
echo $form->checkbox('hide')->setLabel('Hide this block');

echo $form->text('Headline');

echo $form->repeater("items")->setFields([
    $form->image("Icon"),
    $form->text("Title"),
])->setLabel('Items');
