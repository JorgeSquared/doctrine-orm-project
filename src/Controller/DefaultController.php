<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class DefaultController extends Controller
{
    public function homepage(Request $request, Response $response)
    {

    	// zobrazí všechny články na úvodní stránce
    	/*$articles = $this->ci->get('db')->getRepository('App\Entity\Article')->findBy([], [
			'published' => 'DESC'
		]);*/

		// chceme zobrazit jen články, které byly publikovány v minulosti
		$dql = "SELECT a FROM App\Entity\Article a
				WHERE a.published <= CURRENT_TIMESTAMP()
				ORDER BY a.published DESC";
		$query = $this->ci->get('db')->createQuery($dql);
		$articles = $query->getResult();


        return $this->renderPage($response, 'homepage.html', [
        	'articles' => $articles
		]);
    }
}
