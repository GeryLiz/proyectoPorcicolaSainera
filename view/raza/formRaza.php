<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>

<form method="post" action="<?php echo routing::getInstance()->getUrlWeb('raza', ((isset($objRaza)) ? 'update' : 'create' )) ?>">
  <?php if(isset($objRaza) == true): ?>
    <input name="<?php echo razaTableClass::getNameField(razaTableClass::ID, true) ?>" value="<?php echo $objRaza[0]->id ?>" type="hidden">
  <?php endif ?>
  <?php echo i18n::__('name', null, 'credencial') ?>: <input placeholder="<?php echo ((isset($objRaza) == true) ? $objRaza[0]->desc_raza : '') ?>" type="text" name="<?php echo razaTableClass::getNameField(razaTableClass::DESCRIPCION, true) ?>">
  <br>
  <input type="submit" value="<?php echo i18n::__(((isset($objRaza)) ? 'update' : 'register')) ?>">
</form>

