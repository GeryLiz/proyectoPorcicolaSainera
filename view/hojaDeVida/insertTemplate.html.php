<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<h1>NUEVA HOJA DE VIDA</h1>
<?php view::includePartial('hojaDeVida/formHojaDeVida', array('objRaza' => $objRaza, 'objModulo' => $objModulo, 'objUsuario' => $objUsuario)) ?>


