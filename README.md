# MarkitUpWidget
Yii2 MarkitUp widget

Раскидываем по папкам MarkitupAsset.php и "markitup" в папку assets,
Makitup.php в папку "widget" и меняем пути к папке с редактором в $sourcePath в файле MarkitupAsset.php 

Использование <br>
<?php <br>
use happensit\markitup;

<?= $form->field($model, 'text')->widget(Markitup::className()) ?>
