<?php

class MyClassTest extends \PHPUnit_Framework_TestCase {
    
    private $user ;
    
    /**
     * @dataProvider nomProvider
     */
    public function testNom($a)
    {
        $user = new User();
        $user->setNom($a);
    }
    
       public function nomProvider()
    {
        return array(
          array("0"),
          array("1fggfg"),
          array("fggfg"),
          array("cesd")
        );
    }
    
    /**
     * @dataProvider prenomProvider
     */
    public function testPrenom($a)
    {
        $user = new User();
        $user->setNom($a);
    }
    
       public function prenomProvider()
    {
        return array(
          array("0"),
          array("1fggfg"),
          array("fggfg"),
          array("cesd")
        );
    }

    
    /**
     * @dataProvider adresseProvider
     */
    public function testAdresse($rue, $nom, $cp)
    {
        $adresse = new Adresse($rue, $nom, $cp);
//        $adresse  = $this->getMock('Adresse');
            
        $user = new User();
        $user->setAdresse($adresse );
        $this->assertEquals($adresse, $user->getAdresse());
    }
    
       public function adresseProvider()
    {
        return array(
          array(2,"gghhh",5100),
          array(3,"fghgf",645),
          array(4,"f",2111),
          array(564,"fdffk",5456)
        );
    }
    /**
     * @dataProvider cartProvider
     */
    public function testCart($nom,$prix)
    {
        $product = new Product($nom,$prix);
        $cart = Cart::getInstance();
        $cart->addProduct($product);
        $this->assertEquals($nom,$cart->getOneProduct(0)->getNom());
    }
    
       public function cartProvider()
    {
        return array(
          array("gghhh",5100),
          array(45555,645),
          array("first",2111),
          array("fdffk",5456)
        );
    }

}
