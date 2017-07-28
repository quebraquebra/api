<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FolhaSenadoService;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class SenadoController
 * @package AppBundle\Controller
 */
class SenadoController extends FOSRestController
{
    /**
     * 
     * @param Request $request
     * @return Response
     */
    public function folhaAction(Request $request): Response
    {
        try {
            $filters = $request->query->getIterator()->getArrayCopy();

            /** @var FolhaSenadoService $folhaSenadoService */
            $folhaSenadoService = $this->get('app.folha.senado.service');
            $remuneracoes = $folhaSenadoService->search($filters);

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
