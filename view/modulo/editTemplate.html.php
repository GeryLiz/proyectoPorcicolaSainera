<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<h1>EDITAR MODULO <?php echo $objModulo[0]->desc_modulo ?></h1>
<?php view::includePartial('modulo/formModulo', array('objModulo' => $objModulo)) ?>


