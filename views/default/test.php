<?= \deluxcms\media\widgets\TinyMceWidget::widget(['name' => 'test', 'id' => 'test1'])?>
<?= \deluxcms\media\widgets\TinyMceWidget::widget(['model' => $model, 'attribute' => 'url', 'id' => 'test2'])?>


<?= \deluxcms\media\widgets\FileInputWidget::widget(['model' => $model, 'attribute' => 'url', 'id' => 'test3'])?>