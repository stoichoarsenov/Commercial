<?php
/*
 * ToDo
 * Промяна на данните с мултиезични
 * Foreign key за взимане на потребителя разработващ задачата
 *
 *
 */

namespace AppBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\NewProduct;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;



class NewProductController extends Controller
{
    /**
     * @Route("{_locale}/product/new", name="newProduct")
     * requirements={
     *         "_locale": "en|bg",}
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newProductAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user->getUsername();


        $product = new NewProduct();
        $product->setName('');
        $product->setPrice(0);
        $product->setBoughtPrice(0);
        $product->setCategory('');
        $product->setQuantity(0);
        $product->setDescription('');
        $product->setAddedBy('');
        $product->setDateAdded(date('Y-m-d H:i'));

        $form = $this->createFormBuilder($product)

            ->add('image1', FileType::class, array('label' => 'Image'))
            ->add('image2', FileType::class, array('label' => 'Image'))
            ->add('image3', FileType::class, array('label' => 'Image'))
            ->add('image4', FileType::class, array('label' => 'Image'))
            ->add('image5', FileType::class, array('label' => 'Image'))


            ->add('name', TextType::class, array(
                'label' => 'product name',
                'required' => true,))


            ->add('price', MoneyType::class, array(
                'label' => 'price',
                'currency' => 'BGN',
                'required' => true,
                'empty_data' => '0.00'))


            ->add('boughtPrice', MoneyType::class, array(
                'label' => 'boughtPrice',
                'currency' => 'BGN',
                'required' => true,
                'empty_data' => '0.00'))


            ->add('category', ChoiceType::class, array(
                'choices' => array(
                    'Laptops' => array(
                        'Acer' => 'laptop_laptop_acer',
                        'Apple' => 'laptop_laptop_apple',
                        'Asus' => 'laptop_laptop_asus',
                        'Dell' => 'laptop_laptop_dell',
                        'HP' => 'laptop_laptop_hp',
                        'Lenovo' => 'laptop_laptop_lenovo',
                        'Toshiba' => 'laptop_laptop_toshiba',
                    ),
                    'Laptop accessories' => array(
                        'Laptop bags' => 'laptop_accessories_bags',
                        'Laptop cooler' => 'laptop_accessories_cooler',
                        'Computer cables' => 'laptop_accessories_cables',
                    ),
                    'Computer peripherals' => array(
                        'Mouses and pads' => 'computer_peripherals_mouse_and_pads',
                        'Web cameras' => 'computer_peripherals_web_cameras',
                        'PC speakers' => 'computer_peripherals_pc_speakers',
                        'PC headphones' => 'computer_peripherals_pc_headphones',
                        'Swtich' => 'computer_peripherals_switch',
                        'Routers' => 'computer_peripherals_routers',
                        'Keyboards' => 'computer_peripherals_keyboards',
                    ),
                    'HDD and USB flash drives' => array(
                        'USB Flash drives' => 'HDD_and_USB_flash_drives_USB_flash',
                        'External HDD' => 'HDD_and_USB_flash_drives_external_HDD',
                        'Discs' => 'HDD_and_USB_flash_drives_discs',
                        'Card readers and USB Hubs' => 'HDD_and_USB_flash_drives_card_reader_usb_hubs',
                    ),
                    'Computers' => array(
                        'Computers' => 'computers'
                    ),
                ),))
            ->add('quantity', NumberType::class, array('label' => 'Quantity',
                'empty_data' => '0'))


            ->add('description', TextareaType::class, array('label' => 'description',
                                                            'empty_data' => 'empty'))


            ->add('AddedBy', TextType::class, array(
                'attr' => array('readonly' => true)))


            ->add('DateAdded', DateTimeType::class, array('disabled' => 'disabled',
                'attr' => array('readonly' => true)))


            ->add('reset', ResetType::class,
                array('label' => 'Reset Product'))


            ->add('save', SubmitType::class,
                array('label' => 'Create Product'))->getForm();


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->saveImage1($product);
            $this->saveImage2($product);
            $this->saveImage3($product);
            $this->saveImage4($product);
            $this->saveImage5($product);

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            return new Response('Created product id' . $product->getId());

        }

        return $this->render('NewProduct/new_product.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    private function saveImage1($product){
        $fileArray = $product->getImage1();
        $file = $fileArray;
        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        $file->move($this->getParameter('image_directory'),$fileName);
        $product->setImage1($fileName);
    }
    private function saveImage2($product){
        $fileArray = $product->getImage2();
        if(!empty($fileArray)){
        $file = $fileArray;
        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        $file->move($this->getParameter('image_directory'),$fileName);
        $product->setImage2($fileName);}
    }
    private function saveImage3($product){
        $fileArray = $product->getImage3();
        if(!empty($fileArray)){
        $file = $fileArray;
        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        $file->move($this->getParameter('image_directory'),$fileName);
        $product->setImage3($fileName);}
    }
    private function saveImage4($product){
        $fileArray = $product->getImage4();
        if(!empty($fileArray)){
        $file = $fileArray;
        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        $file->move($this->getParameter('image_directory'),$fileName);
        $product->setImage4($fileName);}
    }
    private function saveImage5($product){
        $fileArray = $product->getImage5();
        if(!empty($fileArray)){
        $file = $fileArray;
        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        $file->move($this->getParameter('image_directory'),$fileName);
        $product->setImage5($fileName);}
    }


}

