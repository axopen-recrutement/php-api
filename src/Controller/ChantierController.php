<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Repository\ChantierRepository;
use App\Service\ChantierService;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ChantierController
{

    #[Route('/chantier/random', name: 'app_chantier_random_get', methods: ['GET'])]
    public function getRandomChantier(SerializerInterface $serializer, ChantierService $chantierService): Response
    {
        return new Response($serializer->serialize($chantierService->getRandomChantier(), 'json'));
    }

    #[Route('/api/chantier/{numero}', name: 'app_chantier_get', methods: ['POST'])]
    public function getChantier(SerializerInterface $serializer, ChantierService $chantierService, int $numero): Response
    {
        return new Response($serializer->serialize($chantierService->getChantier($numero), 'json'));
    }

    #[Route('/api/chantier/by/current/year', name: 'app_chantier_by_current_year_get', methods: ['GET'])]
    public function getChantiersByCurrentYear(SerializerInterface $serializer, ChantierService $chantierService): Response
    {
        return new Response($serializer->serialize($chantierService->getChantiersByCurrentYear(), 'json'));
    }

    #[Route('/api/chantier', name: 'app_chantier_post', methods: ['POST'])]
    public function saveChantier(SerializerInterface $s, Request $r1, ChantierRepository $cr): Response
    {
        $c1 = $s->deserialize($r1->getContent(), Chantier::class, 'json');
        
        $c2 = new Chantier();
        $c2->setNumero($c1->getNumero());
        $c2->setDescription($c1->getDescription());
        $c2->setCity($c1->getCity());
        $c2->setCityCp($c1->getCityCp());
        $c2->setDateDebut($c1->getDateDebut());
        $c2->setDateFin($c1->getDateFin());
        $c2->setStatus($c1->getStatus());
        $c2->setLienSharepoint($c1->getLienSharepoint());
        $c2->setLienFiles($c1->getLienFiles());
        $c2->setLienGearth($c1->getLienGearth());
        $c2->setPrixMoyenMoeJour($c1->getPrixMoyenMoeJour());
        $c2->setPrixMoyenMoeNuit($c1->getPrixMoyenMoeNuit());
        $c2->setPrixMoyenMateriel($c1->getPrixMoyenMateriel());
        $c2->setJournalPointageErp($c1->getJournalPointageErp());

        $cr->persist($c2);

        return new Response($s->serialize(['numero' => $c2->getNumero()], 'json'));
    }

    #[Route('/api/chantier/{numero}/random', name: 'app_chantier_post', methods: ['PUT'])]
    public function updateRandomChantier(SerializerInterface $serializer, ChantierService $chantierService, int $numero): Response
    {
        return new Response($serializer->serialize(['numero' => $chantierService->updateRandomChantier($numero)], 'json'));
    }
}
