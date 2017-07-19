<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FolhaSenadoService;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @NamePrefix("senado_")
 * @Prefix("/senado")
 */
class SenadoController extends FOSRestController
{
    /**
     * 
     * @param Request $request
     * @return Response
     *
     * @Get("/folha")
     */
    public function getFolhaAction(Request $request): Response
    {
        $filters = $request->query->getIterator()->getArrayCopy();

        /** @var FolhaSenadoService $folhaSenadoService */
        $folhaSenadoService = $this->get('app.folha.senado.service');
        $remuneracoes = $folhaSenadoService->search($filters);

        /** @var Serializer $serializer */
        $serializer = $this->get('jms_serializer');
        $json = $serializer->serialize($remuneracoes, 'json');

        return new JsonResponse($json, 200, ['Access-Control-Allow-Origin' => '*'], true);
    }
}
