<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\NewProduct;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class showExactProductController extends Controller
{
    /**
     * @Route("{_locale}/product/show/{id}", name="showExactProduct")
     * * requirements={
     *         "_locale": "en|bg",}
     */
    public function showExactProductAction($id)
    {
        $product = $this->getDoctrine()->getRepository('AppBundle:NewProduct')->find($id);

        $name = $product -> getName();
        $price = $product -> getPrice();
        $category = $product -> getCategory();
        $description = $product -> getDescription();
        $image1 = $product -> getImage1();
        $image2 = $product -> getImage2();
        $image3 = $product -> getImage3();
        $image4 = $product -> getImage4();
        $image5 = $product -> getImage5();
        $file_exists = file_exists($image1);
;
        if (!$product) {
            throw $this->createNotFoundException('No product found for id');
        }


        return $this->render('showExactProduct/show_exact_product.html.twig', [
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'description' => $description,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'image5' => $image5,
            'file_exists' => $file_exists
        ]);


    }
}

