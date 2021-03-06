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
 * Class CamaraController
 * @package AppBundle\Controller
 */
class CamaraController extends FOSRestController
{
    /**
     * 
     * @param Request $request
     * @return Response
     */
    public function folhaAction(Request $request): Response
    {
        try {
            $filters = $request->query->all();

            /** @var FolhaCamaraService $folhaCamaraService */
            $folhaCamaraService = $this->get('app.folha.camara.service');
            $remuneracoes = $folhaCamaraService->search($filters);

            /** @var Serializer $serializer */
            $serializer = $this->get('jms_serializer');
            $json = $serializer->serialize($remuneracoes, 'json');

            $response = new JsonResponse($json, Response::HTTP_OK, [], true);
        } catch (\Exception $exception) {
            $response = new JsonResponse(
                ['message' => 'Erro durante a solicitação'],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        } finally {
            return $response;
        }
    }
}
