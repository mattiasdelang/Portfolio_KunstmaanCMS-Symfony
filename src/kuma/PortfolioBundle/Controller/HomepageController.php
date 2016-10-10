<?php

namespace kuma\PortfolioBundle\Controller;


use Doctrine\ORM\EntityManager;
use kuma\PortfolioBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route(service="app.controller.homepage")
 */
class HomepageController
{
    private $em;
    private $mailer;
    private $formFactory;
    private $templating;

    /**
     * homepageController constructor.
     */
    public function __construct(FormFactory $formFactory,EntityManager $em, \Swift_Mailer $mailer,TwigEngine $templating)
    {

        $this->em = $em;
        $this->mailer = $mailer;
        $this->formFactory = $formFactory;
        $this->templating = $templating;

    }


    public function projectAction()
    {
        $projects = $this->em->getRepository('kumaPortfolioBundle:Project')->findAll();

        //var_dump($projects);die;

        return ['projects' => $projects];

    }

    /**
     * @return JsonResponse
     *
     * @Route("/contactform", name="contact")
     */
    public function contactAction(Request $request)
    {

        $contact = $request->request->get('contact');

        try {
            $message = \Swift_Message::newInstance()
                ->setSubject('Contactform '.$contact['name'])
                ->setFrom('mattias@delang.com')
                ->setTo($contact['email'])
                ->setBody($contact['question']);
            $this->mailer->send($message);

        }catch (\Swift_RfcComplianceException $e)
        {
            $response = array("status" => false, "error"=>"Email address invalid");
            return new JsonResponse($response);

        } catch (\Exception $e)
        {
            $response = array("status" => false,"error"=>"error");
            return new JsonResponse($response);
        }

        $response = array("status" => true,"error"=> "nothing wrong");
        return new JsonResponse($response);

    }

    public function formAction()
    {

        $form = $this->formFactory->create(ContactType::class);


        return $this->templating->renderResponse('kumaPortfolioBundle:PageParts/ContactPagePart:form.html.twig',['form'=> $form->createView()]);
    }

}
