<?php

namespace DarkRises\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Collection;

include_once __DIR__.'/../Facebook/facebook.php';

class DefaultController extends Controller
{
	var $facebookArray = array(
    	'appId'  => 215555631900581,
		'secret' => '10b407375d68227eb7ae1943dd28d3c3'
	);
	
	public function wallpaperAction($number, $address)
    {
    	$userInfo = $this->setFacebook();

    	if($userInfo != null){
			return $this->render('DarkRisesWebBundle:Default:seen-wallpaper.html.twig', 
        		array(
        			'wallpaper' => "img/wallpaper/highres/".$number."/".$address
        		)
        	);
		}else{
        	return $this->render('DarkRisesWebBundle:Default:inicio.html.twig', 
        		array(
        			'facebook' => $userInfo, 
        			'breadcrums' => array( 
        				0 => array('crum' => "Dark Rises", 'address' => "/" )
        			)
        		)
        	);
        }
			 
    }
   	public function registerAction(Request $request)
   	{
   		 if (!$request->isXmlHttpRequest()) {// isn't it an Ajax request?
            return new Response('', 404,
                            array('Content-Type' => 'application/json'));
        }
        
        $restUrl = "http://developers.darkrises.com/fmartinez/backend.php/userinfo/preregisterweb";
        $method = "POST";
        $userinfo = $this->setFacebook();
       	if($userinfo["gender"] == 'female')
        	$userinfo["gender"] = 1;
        else
        	$userinfo["gender"] = 0;
        	
        $info = array ( "id" => $userinfo["id"], "name" => 'Cazador '.$userinfo["last_name"].'_'.$userinfo["id"], "gender"=> $userinfo["gender"], "callback" => 'Put your secret key here');
        
        $request->request->get('info');
        $contentType = 'application/json';
        
        session_write_close();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $restUrl);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($info));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        $requestCookies = $request->cookies->all();
   
		// Prepare and set multiple cookies to curl handle
		$cookieArray = array();
		foreach ($requestCookies as $cookieName => $cookieValue) {
			$cookieArray[] = "{$cookieName}={$cookieValue}";
		}
	
		// Be sure to set whitespace after '; ' when creating cookie string
		$cookie_string = implode('; ', $cookieArray);
		curl_setopt($ch, CURLOPT_COOKIE, $cookie_string);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        error_log($response);
        
       list($headers, $response) = explode("\r\n\r\n",$response,2);
        preg_match_all('/Set-Cookie: (.*)\b/', $headers, $cookies);
        $cookies = $cookies[1];
           
        if ($response === false) {
            return new Response('', 404, array('Content-Type' => $contentType));
        } else {
            $response = new Response($response, 200,
                                             array('Content-Type' => $contentType));
            foreach($cookies as $rawCookie) {
                $cookie = \Symfony\Component\BrowserKit\Cookie::fromString($rawCookie);
                $value = $cookie->getValue();
                if (!empty($value)) {
                    $value = str_replace(' ', '+', $value);
                }
                $customCookie = new Cookie($cookie->getName(), $value, $cookie->getExpiresTime()==null?0:$cookie->getExpiresTime(), $cookie->getPath());
                $response->headers->setCookie($customCookie);
            }
            return $response;
        }
        
   	}
    
    public function indexAction($name, $second)
    {	
		$userInfo = $this->setFacebook();

		$session = $this->get("session");
			
		$breadcrums0 = "Dark Rises";
		
		if($name == "media"){
			$breadcrums1 = "Media";
			 
			 if($userInfo == null){
				$second = "empty";
			 }
			 
			 if($second == "wallpaper"){
				$breadcrums2 = "Wallpapers";
				return $this->render('DarkRisesWebBundle:Default:wallpaper.html.twig', 
					array(
							'facebook' => $userInfo, 
							'breadcrums' => array( 
								0 => array('crum' => $breadcrums0, 'address' => "/" ), 
								1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" ), 
								2 => array('crum' => $breadcrums2, 'address' => "/".$name."/".$second."/" )
							)
						)
					);
			}else if($second == "artwork"){
				$breadcrums2 = "Artwork";
				return $this->render('DarkRisesWebBundle:Default:artwork.html.twig', 
					array(
							'facebook' => $userInfo, 
							'breadcrums' => array( 
								0 => array('crum' => $breadcrums0, 'address' => "/" ), 
								1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" ), 
								2 => array('crum' => $breadcrums2, 'address' => "/".$name."/".$second."/" )
							)
						)
					);
			}else if($second == "empty"){
			 	return $this->render('DarkRisesWebBundle:Default:media.html.twig', 
					array(
						'facebook' => $userInfo, 
						'breadcrums' => array( 
							0 => array('crum' => $breadcrums0, 'address' => "/" ), 
							1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
						)
					)
				 );
			}
        }else if($name == "guia"){
			$breadcrums1 = "Guia del Juego";
			if($second == "quees"){
				$breadcrums2 = "¿Qué es Dark Rises?";
				return $this->render('DarkRisesWebBundle:Default:quees.html.twig', 
					array('facebook' => $userInfo, 
							'breadcrums' => array( 
								0 => array('crum' => $breadcrums0, 'address' => "/" ), 
								1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" ), 
								2 => array('crum' => $breadcrums2, 'address' => "/".$name."/".$second."/" )
							)
						)
					);
			}else{
				 return $this->render('DarkRisesWebBundle:Default:quees.html.twig',
					array(
						'facebook' => $userInfo, 
						'breadcrums' => array( 
							0 => array('crum' => $breadcrums0, 'address' => "/" ), 
							1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
						)
					)
				 );
			}
        }else if($name == "inicio"){
			$breadcrums1 = "Inicio";
			 return $this->render('DarkRisesWebBundle:Default:inicio.html.twig',
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" ), 
						1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
					)
				)
			 );
        }else if($name == "eventos"){
        	
        	if($session->has("eventos1"))
        		$session->set('eventos1', 'passed'); 
        	else{
        		$session->start();
        		$session->set('eventos1', 'first'); 
        	}
        
			$breadcrums1 = "Eventos";
			 return $this->render('DarkRisesWebBundle:Default:evento-sello.html.twig',
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" ), 
						1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
					),
					'session' => $session->get('eventos1')
				)
			 );
        }else{
        	if($session->has("eventos1"))
        		$session->set('eventos1', 'passed'); 
        	else{
        		$session->set('eventos1', 'first'); 
        	}
			return $this->render('DarkRisesWebBundle:Default:evento-sello.html.twig', 
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" )
					),
					'session' => $session->get('eventos1')
				)
			);		
        }
    }
    
    public function fanartpersonalAction($autor, $id){
    
    	$userInfo = $this->setFacebook();
    
    	$breadcrums0 = "Dark Rises";
    	$breadcrums1 = "Fan Art";
    	
    	$repository = $this->getDoctrine()->getRepository('DarkRisesWebBundle:Fanart');
    	$fanart = $repository->find($id);
    	
    	$smallGallery = $repository->smallGallery($id);

    	return $this->render('DarkRisesWebBundle:Default:fanart-single.html.twig', 
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" ),
						1 => array('crum' => $breadcrums1, 'address' => "/fanart/" )
					),
					'imagen' => array(
						'path' => "/".$fanart->getUploadDir()."/".$fanart->getId().$fanart->getPath(),
						'autor' => $fanart->getAutor(),
						'agregado' => $fanart->getAgregado()
					),
					'address' => $this->get('request')->server->get('HTTP_HOST')."/fanart/".$autor."/".$id."/",
					'appId' => $this->facebookArray["appId"],
					'gallerySmall' => $smallGallery,
					'next' => $repository->next($id),
					'prev' => $repository->prev($id)
				)
			);		
    }
    
    public function fanartgalleryAction($filter){
    
    	$userInfo = $this->setFacebook();
    
    	$breadcrums0 = "Dark Rises";
    	$breadcrums1 = "Fan Art";
    
    	$repository = $this->getDoctrine()->getRepository('DarkRisesWebBundle:Fanart');
    	$count = $repository->count();
    	
    	return $this->render('DarkRisesWebBundle:Default:fanart-gallery.html.twig', 
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" ),
						1 => array('crum' => $breadcrums1, 'address' => "/fanart/" )
					),
					'count' => $count
				)
			);
    }
    
    public function galleryAction(Request $request){
    	
    	if (!$request->isXmlHttpRequest()) {// isn't it an Ajax request?
            return new Response('', 404,
                            array('Content-Type' => 'application/json'));
        }
        
        $filter = $request->request->get('filter');
        $from = $request->request->get('from');
        $amount = $request->request->get('amount');
        
        $repository = $this->getDoctrine()->getRepository('DarkRisesWebBundle:Fanart');
    	$gallery = $repository->galleryPage($filter, $from, $amount);
    	
    	return $this->render('DarkRisesWebBundle:Default:fanart-gallery-page.html.twig', 
    			array(
    				'gallery' => $gallery 
    			)
    		);
    	
    }
    
    public function sendfanartAction(Request $request){
        
        $userInfo = $this->setFacebook();
    
    	$breadcrums0 = "Dark Rises";
    	$breadcrums1 = "Fan Art";
    	$breadcrums2 = "Enviar Fan Art";
    	
        $defaultData = array('Comentarios' => 'Type your message here');
        
        $collectionConstraint = new Collection(array(
			'Nombre' => new NotBlank(array('message' => 'Nombre no puede ser vacío' )),
			'E-Mail' => new Email(array('message' => 'Dirección de E-Mail no Válida')),
			'Imagen' => new Image()//array('message' => 'La imagen debe ser formato .jpg, .png o .gif y menos de 25 Mgs')),
		));
   		
   		$form = $this->createFormBuilder($defaultData, array('validation_constraint' => $collectionConstraint))
        ->add('Nombre', 'text')
        ->add('E-Mail', 'email')
        ->add('Imagen','file')
        ->add('Comentarios', 'textarea')
        ->getForm();
 
 		$errorMessage = "";
 		
        if ($request->getMethod() == 'POST') {
            
            $validateImage = new Image();
            $form->bindRequest($request);
			
            $data = $form->getData();
            
            $errorList = $this->get('validator')->validateValue($data["Imagen"], $validateImage);

    		if (count($errorList) == 0) {
				$message = \Swift_Message::newInstance()
					->setSubject('FanArt')
					->setTo(array('darkrisesfanart1@gmail.com'))
					->setFrom(array($data["E-Mail"] => $data["Nombre"]))
					->setBody('Autor:'.$data["Nombre"]."</br> Comentarios:".$data["Comentarios"])
					->attach(\Swift_Attachment::fromPath($data["Imagen"]->getPathName() , $data["Imagen"]->getMimeType()));
	
				$this->get('mailer')->send($message);
			} 
        }
        
    	
    	return $this->render('DarkRisesWebBundle:Default:send-fanart.html.twig',
    		array(
				'form' => $form->createView(),
				'facebook' => $userInfo, 
				'breadcrums' => array( 
					0 => array('crum' => $breadcrums0, 'address' => "/" ),
					1 => array('crum' => $breadcrums1, 'address' => "/fanart/" ),
					2 => array('crum' => $breadcrums2, 'address' => "/sendFanart/" )
				)
			)
		);
    	
    }
    
    private function setFacebook(){
    	$facebook = new \Facebook($this->facebookArray);
		
		$userId = $facebook->getUser();
		
		if($userId)
			$userInfo = $facebook->api('/' + $userId);
		else
			$userInfo = null;
		
		return $userInfo;
    }
}
