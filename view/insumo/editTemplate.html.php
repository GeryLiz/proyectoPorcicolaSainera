<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<h1>EDITAR INSUMO <?php echo $objInsumo[0]->desc_insumo ?></h1>
<?php view::includePartial('insumo/formInsumo', array('objInsumo' => $objInsumo)) ?>

