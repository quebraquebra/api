<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FolhaCamaraService;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @NamePrefix("camara_")
 * @Prefix("/camara")
 */
class CamaraController extends FOSRestController
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

        /** @var FolhaCamaraService $folhaCamaraService */
        $folhaCamaraService = $this->get('app.folha.camara.service');
        $remuneracoes = $folhaCamaraService->search($filters);

        /** @var Serializer $serializer */
        $serializer = $this->get('jms_serializer');
        $json = $serializer->serialize($remuneracoes, 'json');

        return new JsonResponse($json, 200, ['Access-Control-Allow-Origin' => '*'], true);
    }
}
