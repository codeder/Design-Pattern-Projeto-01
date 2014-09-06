<?php
DEFINE("SRC", "../src/ES/");
/* Autoloader */
require_once SRC . 'Autoloader/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../src');
$loader->register();

use ES\Form\FormBuilder;
use ES\Form\Interfaces\iRender;
use ES\Form\Interfaces\iOptions;
use ES\Form\Interfaces\iRadio;
use ES\Form\Fields\TextField;
use ES\Form\Fields\Select;
use ES\Form\Fields\TextArea;
use ES\Form\Fields\RadioButton;
use ES\Form\Fields\ButtonSubmit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário dinâmico</title>

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
    <body>

        <div class="container">

            <div class="page-title">
                <h1>Cadastro de usuário</h1>
            </div>

            <?php
            
            $form = new FormBuilder();
            
            $form->AddElements((new TextField("Nome", "nome", "Digite seu nome")));
            
            $form->AddElements(($uf = new Select("Qual o estado?", "uf")));
                                $uf->setOptions("São Paulo");
                                $uf->setOptions("Rio de Janeiro");
                                $uf->setOptions("Bahia");
                                
            $form->AddElements(new TextArea("mensagem", "Digite sua mensagem"));
            $form->AddElements($radio = new RadioButton("Sexo", "sexo"));
                               $radio->setValues("Feminino");
                               $radio->setValues("Masculino");
                                
            $form->AddElements(new ButtonSubmit("Enviar"));

            $form->setMethod("POST");
            $form->setAction("index.php");

            echo $form->Render();
            
            ?>

        </div>


    </body>
</html>

