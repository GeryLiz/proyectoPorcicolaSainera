<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $nombreRaza = razaTableClass::DESCRIPCION ?>
<?php $idRaza = razaTableClass::ID ?>
<?php $nombreModulo = moduloTableClass::DESCRIPCION ?>
<?php $idModulo = moduloTableClass::ID ?>
<?php $nombreUsuario = usuarioTableClass::USER ?>
<?php $idUsuario = usuarioTableClass::ID ?>

<form method="post" action="<?php echo routing::getInstance()->getUrlWeb('hojaDeVida', ((isset($objHojaDeVida)) ? 'update' : 'create')) ?>">
    <?php if (isset($objHojaDeVida) == true): ?>
        <input name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::ID, true) ?>" value="<?php echo $objHojaDeVida[0]->id ?>" type="hidden">
    <?php endif ?>
    <?php echo i18n::__('age', null, 'hojaDeVida') ?>: <input placeholder="<?php echo ((isset($objHojaDeVida) == true) ? $objHojaDeVida[0]->edad_porcino : '') ?>" type="text" name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::EDAD, true) ?>">
    <br>
    <?php echo i18n::__('weight', null, 'hojaDeVida') ?>: <input placeholder="<?php echo ((isset($objHojaDeVida) == true) ? $objHojaDeVida[0]->peso_porcino : '') ?>" type="text" name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::PESO, true) ?>">
    <br>
    <?php echo i18n::__('gender', null, 'hojaDeVida') ?>: <input placeholder="<?php echo ((isset($objHojaDeVida) == true) ? $objHojaDeVida[0]->genero_porcino : '') ?>" type="text" name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::GENERO, true) ?>">
    <br>
    <?php echo i18n::__('quantity_births', null, 'hojaDeVida') ?>: <input placeholder="<?php echo ((isset($objHojaDeVida) == true) ? $objHojaDeVida[0]->cant_partos : '') ?>" type="text" name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::PARTOS, true) ?>">
    <br>
    <?php echo i18n::__('date_entry', null, 'hojaDeVida') ?>: <input placeholder="<?php echo ((isset($objHojaDeVida) == true) ? $objHojaDeVida[0]->fecha_ingreso : '') ?>" type="date" name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::INGRESO, true) ?>">
    <br>
    <?php echo i18n::__('state', null, 'montar') ?>: <input placeholder="<?php echo ((isset($objHojaDeVida) == true) ? $objHojaDeVida[0]->id_estado : '') ?>" type="text" name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::ESTADO, true) ?>">
    <br>
    <?php echo i18n::__('race', null, 'montar') ?>: 
    <select name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::RAZA, true) ?>">
        <?php foreach ($objRaza as $key): ?>
            <option value="<?php echo $key->$idRaza ?>">
                <?php echo $key->$nombreRaza ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <?php echo i18n::__('module', null, 'hojaDeVida') ?>: 

    <select name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::MODULO, true) ?>">
        <?php foreach ($objModulo as $key): ?>
            <option value="<?php echo $key->$idModulo ?>">
                <?php echo $key->$nombreModulo ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <?php echo i18n::__('user_id', null, 'hojaDeVida') ?>: 
    <select name="<?php echo hojaDeVidaTableClass::getNameField(hojaDeVidaTableClass::USUARIO_ID, true) ?>">
        <?php foreach ($objUsuario as $key): ?>
            <option value="<?php echo $key->$idUsuario ?>">
                <?php echo $key->$nombreUsuario ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="<?php echo i18n::__(((isset($objHojaDeVida)) ? 'update' : 'register')) ?>">
</form>
