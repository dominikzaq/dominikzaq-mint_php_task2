<?php

namespace App\Controller;

use App\Entity\User;
use App\Enum\AccountEnum;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{

    /**
     * @Route("/user/", name="user_home", methods={"GET", "POST"})
     */
    public function homeUser()
    {
        return $this->render('user/index.html.twig');
    }

    /**
     * @Route("/test/", name="admin_home", methods={"GET", "POST"})
     */
    public function homeAdmin()
    {
        $i = 10;
        $test = "dsadas";
        $witaj = $test.$i;
        dump($witaj);
        die();
    }

    /**
     * @Route("register", name="user_new", methods={"GET", "POST"})
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setAccountDisabled(AccountEnum::ENABLED);
            $user->setRoles(['ROLE_USER']);
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/new.html.twig', [
            "form" => $form->createView(),
        ]);
    }
}
