<?php

    // autoload das classes via composer
    require_once("vendor/autoload.php");
    
    use \Slim\App;
    use \Revision\Page;
    use \Revision\Model\Car;
    use \Revision\Model\Person;
    use \Revision\Model\Revision;

    // instanciano o Slim e habilitando o debug
    $app = new App(array(

        'settings' => ['displayErrorDetails' => true],
        'debug' => true

    ));

    // configurando rota '/' e montando o template com Raintpl
    $app->get('/', function() {

        $page = new Page();

        $page->setTpl("index");
    
    });

    /*
    configurando rota '/persons', montando o template com Raintpl
    e passando um array de dados
    */
    $app->get('/persons', function() {

        $persons = Person::listAll('SELECT * FROM hoffmeister."tblPersons"');

        $page = new Page([

            'header' => false

        ]);

        $page->setTpl("persons", [

            'persons' => $persons

        ]);
    
    });

    /*
    configurando rota '/persons/create' e enviando dados para
    o método save()
    */
    $app->post('/persons/create', function() {

        $person = new Person();

        $person->setData($_POST);

        $person->save();

        header("Location: /car-revision/persons");
        exit;
    
    });

    /*
    configurando rota '/persons/update' e passando id a ser atualizado
    com o método update()
    */
    $app->post('/persons/update/{idperson}', function($request, $response, $args) {

        $person = new Person();

        $person->setData($_POST);

        $person->update($args['idperson']);

        header("Location: /car-revision/persons");
        exit;
    
    });

    /*
    configurando rota '/persons/delete' e passando id a ser excluido
    com o método delete()
    */
    $app->post('/persons/delete/{idperson}', function($request, $response, $args) {

        $person = new Person();

        $person->delete($args['idperson']);

        header("Location: /car-revision/persons");
        exit;
    
    });

    /*
    configurando rota '/persons', montando o template com Raintpl
    e passando um array de dados
    */
    $app->get('/vehicles', function() {

        $cars = Car::listAll('SELECT * FROM hoffmeister."tblCars"');

        $page = new Page([

            'header' => false

        ]);

        $page->setTpl("vehicles", [

            'cars' => $cars

        ]);
    
    });

    /*
    configurando rota '/vehicles/create' e enviando dados para
    o método save()
    */
    $app->post('/vehicles/create', function() {

        $car = new Car();

        $car->setData($_POST);

        $car->save();

        header("Location: /car-revision/vehicles");
        exit;
    
    });

    /*
    configurando rota '/vehicles/update' e passando id a ser atualizado
    com o método update()
    */
    $app->post('/vehicles/update/{idcar}', function($request, $response, $args) {

        $car = new Car();

        $car->setData($_POST);

        $car->update($args['idcar']);

        header("Location: /car-revision/vehicles");
        exit;
    
    });

    /*
    configurando rota '/vehicles/delete' e passando id a ser excluido
    com o método delete()
    */
    $app->post('/vehicles/delete/{idcar}', function($request, $response, $args) {

        $car = new Car();

        $car->delete($args['idcar']);

        header("Location: /car-revision/vehicles");
        exit;
    
    });

    /*
    configurando rota '/persons', montando o template com Raintpl
    e passando um array de dados
    */
    $app->get('/revisions', function() {

        $persons = Person::listAll('SELECT * FROM hoffmeister."tblPersons"');

        $cars = Car::listAll('SELECT * FROM hoffmeister."tblCars"');

        $revisions = Revision::listAll('SELECT idrevision, nrrevisions, nrkilometers, vlprice, A.dtregister, deslicenseplate, desperson, B.deslicenseplate, C.desperson
            FROM hoffmeister."tblRevisions" AS A
            INNER JOIN hoffmeister."tblCars" AS B
            ON A.idcar = B.idcar
            INNER JOIN hoffmeister."tblPersons" AS C
            ON A.idperson = C.idperson

        ');

        $page = new Page([

            'header' => false

        ]);

        $page->setTpl("revisions", [

            'persons' => $persons,
            'cars' => $cars,
            'revisions' => $revisions

        ]);
    
    });

    /*
    configurando rota '/revisions/create' e enviando dados para
    o método save()
    */
    $app->post('/revisions/create', function() {

        $revision = new Revision();

        $revision->setData($_POST);

        $revision->save();

        header("Location: /car-revision/revisions");
        exit;
    
    });

    /*
    configurando rota '/revisions/update' e passando id a ser atualizado
    com o método update()
    */
    $app->post('/revisions/update/{idrevision}', function($request, $response, $args) {

        $revision = new Revision();

        $revision->setData($_POST);

        $revision->update($args['idrevision']);

        header("Location: /car-revision/revisions");
        exit;
    
    });

    /*
    configurando rota '/vehicles/delete' e passando id a ser excluido
    com o método delete()
    */
    $app->post('/revisions/delete/{idrevision}', function($request, $response, $args) {

        $revision = new Revision();

        $revision->delete($args['idrevision']);

        header("Location: /car-revision/revisions");
        exit;
    
    });

    $app->run();

?>
