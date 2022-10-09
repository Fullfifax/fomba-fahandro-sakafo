<?php

namespace App\Controller;

use App\Form\RecipesFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipesController extends AbstractController
{
    #[Route('/recipes', name: 'app_recipes')]
    public function index(): Response
    {
        return $this->render('recipes/index.html.twig', [
            
        ]);
    }
    #[Route('/add_recipe', name: 'app_add_recipe')]
    public function add(Request $request): Response
    {

        $form = $this->createForm(RecipesFormType::class);

        $form->handleRequest($request);

        return $this->render('recipes/add_recipe.html.twig', [
            'recipesFormType' => $form->createView(),
        ]);
    }
}
