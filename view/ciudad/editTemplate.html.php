<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<h1>EDITAR CIUDAD <?php echo $objCiudad[0]->desc_ciudad ?></h1>
<?php view::includePartial('ciudad/formCiudad', array('objCiudad' => $objCiudad, 'objDepto' => $objDepto )) ?>
