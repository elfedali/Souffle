<h1>Cards Block</h1>
<?php
/** @var $form \TypeRocket\Elements\Form */
echo $form->checkbox('hide')->setLabel('Hide this block');

echo $form->text('Headline');

echo $form->repeater("cards")->setFields([
    $form->image("Icon"),
    $form->text("description"),
])->setLabel('Cards');
