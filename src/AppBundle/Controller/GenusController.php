<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class GenusController extends Controller
{
    /**
     * @Route ("/genus/{genusName}")
     */
    public function showAction($genusName)
    {

        return $this->render('genus/show.html.twig',[
            'name'=>$genusName,

            ]);
    }

    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */

    public function getNotesAction()
    {
        $notes = [
          ['id'=>1, 'username'=>'AquaPelham',
              'avatrUri'=>'https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg',
              'note'=>'Inked!', 'date'=>'Aug. 20, 2015'],
            ['id'=>1, 'username'=>'AquaPelham2',
                'avatrUri'=>'https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg',
                'note'=>'Inked!', 'date'=>'Aug. 20, 2015'],
            ['id'=>1, 'username'=>'AquaPelham3',
                'avatrUri'=>'https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg',
                'note'=>'Inked!', 'date'=>'Aug. 20, 2015'],
        ];

        $data = [
            'notes'=>$notes,
        ];

        return new Response(json_encode($data));

    }

}
