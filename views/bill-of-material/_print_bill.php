<?php
$prodCode = Yii::$app->getRequest()->getQueryParam('prod_code');

$product = \app\models\ProductMaster::find()->where(['product_code' => $prodCode])->one();

?>

<table width="100%" style="border-collapse: collapse; border: 1px solid black; text-align: left;">
    <tr>
        <td colspan="6" align="center">
            <b>Bill Of Material</b>
        </td>
    </tr>
    <tr>
        <td colspan="6">
            <b>Product Name: </b> <span><?= $product->product_name; ?></span>
        </td>
    </tr>
    <tr>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Raw Material</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            <p>Quantity</p>
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            Unit
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            Product Code
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            Document
        </td>
        <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
            Procuring By
        </td>
    </tr>

    <?php foreach ($billofmaterial as $key => $bom): ?>


        <tr>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <?= getExactField($bom->rawMaterial->product_name) ?>
            </td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <?= getExactField($bom->qty) ?>
            </td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <?= getExactField($bom->unit->name) ?>
            </td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <?= getExactField($bom->product_code) ?>
            </td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <?= getExactField($bom->document->name_of_document) ?>
            </td>
            <td style=" border: 1px solid black; padding: 0px 0px 0px 5px;margin: 0px 0px 0px 0px;">
                <?= getExactField($bom->procuring_by) ?>
            </td>
        </tr>

    <?php endforeach; ?>
</table>