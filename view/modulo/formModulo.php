<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>

<form method="post" action="<?php echo routing::getInstance()->getUrlWeb('modulo', ((isset($objModulo)) ? 'update' : 'create' )) ?>">
  <?php if(isset($objModulo) == true): ?>
    <input name="<?php echo moduloTableClass::getNameField(moduloTableClass::ID, true) ?>" value="<?php echo $objModulo[0]->id ?>" type="hidden">
  <?php endif ?>
  <?php echo i18n::__('name', null, 'credencial') ?>: <input placeholder="<?php echo ((isset($objModulo) == true) ? $objModulo[0]-> desc_modulo : '') ?>" type="text" name="<?php echo moduloTableClass::getNameField(moduloTableClass::DESCRIPCION, true) ?>">
  <br>
  <?php echo i18n::__('location', null, 'modulo') ?>: <input placeholder="<?php echo ((isset($objModulo) == true) ? $objModulo[0]-> ubic_modulo : '') ?>" type="text" name="<?php echo moduloTableClass::getNameField(moduloTableClass::UBICACION, true) ?>">
  <br>
  <?php echo i18n::__('size', null, 'modulo') ?>: <input placeholder="<?php echo ((isset($objModulo) == true) ? $objModulo[0]-> tamaño_modulo : '') ?>" type="text" name="<?php echo moduloTableClass::getNameField(moduloTableClass::TAMAÑO, true) ?>">
  <br>
 
  <input type="submit" value="<?php echo i18n::__(((isset($objModulo)) ? 'update' : 'register')) ?>">
</form>

