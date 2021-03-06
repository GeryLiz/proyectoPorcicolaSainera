<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of ejemploClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

          $desc_modulo = request::getInstance()->getPost(moduloTableClass::getNameField(moduloTableClass::DESCRIPCION, true));
$ubic_modulo = request::getInstance()->getPost(moduloTableClass::getNameField(moduloTableClass::UBICACION, true));
$tamaño_modulo = request::getInstance()->getPost(moduloTableClass::getNameField(moduloTableClass::TAMAÑO, true));

        $data = array(
            moduloTableClass::DESCRIPCION => $desc_modulo,
             moduloTableClass::UBICACION => $ubic_modulo,
                moduloTableClass::TAMAÑO => $tamaño_modulo
        );

        moduloTableClass::insert($data);
                routing::getInstance()->redirect('modulo', 'index');
      } else {
        routing::getInstance()->redirect('modulo', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}





