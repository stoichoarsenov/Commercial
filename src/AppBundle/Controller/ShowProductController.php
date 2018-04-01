<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\NewProduct;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class ShowProductController extends Controller
{
    /**
     * @Route("{_locale}/product/show", name= "showProduct")
     * requirements={
     *         "_locale": "en|bg",}
     */
    public function ShowProductAction()
    {
        $product = $this -> getDoctrine() -> getRepository('AppBundle:NewProduct') -> findAll();

        if (!$product){
            throw $this-> createNotFoundException('No product found for id');
        }


        return $this->render('ShowProduct/show_product.html.twig', [
            'products' => $product
        ]);


        //return $this->render('ShowProduct/show_product.html.twig');
    }

}
