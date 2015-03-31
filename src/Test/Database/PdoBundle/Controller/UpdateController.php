<?php

namespace Test\Database\PdoBundle\Controller;

use Lia\KernelBundle\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;


class UpdateController
    extends ControllerBase
{
    public function indexAction()
    {
        $pdo = $this->get('lia.factory.database.pdo')->getConnection();

        $q = $pdo->updateTable('test')
            ->set('name=:name')
            //->whereInline('id=:id')
            ->where()
                ->equal('id','toto')
            ->end()
            ->getQuery(['name'=> 'toto', 'toto'=> [14,12]]);

        return new Response($q);
    }
}