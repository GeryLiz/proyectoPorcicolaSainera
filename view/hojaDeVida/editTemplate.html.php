<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php use mvc\view\viewClass as view ?>
<h1>EDITAR HOJA DE VIDA <?php echo $objHojaDeVida[0]->genero_porcino ?></h1>
<?php view::includePartial('hojaDeVida/formHojaDeVida', array('objHojaDeVida' => $objHojaDeVida)) ?>


