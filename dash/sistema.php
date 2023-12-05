<?php

    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('location: ../index.php');
    }
    $logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title> techland </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/44/44973.png" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

    <!-- cart-icon -->
    
    <!-- cart -->
    <div class="cart">
        <h2 class="cart-title">Your cart </h2>
        <div class="cart-content">
         
       <!-- remove cart -->
           </div>
           <div class="total">
             <div class="total-title">Total</div>
             <div class="total-price">0</div>
            </div>
  
  <!--buy  -->
  <button type="button" class="btn-buy">Buy Now</button>
  <!-- cart close -->
  <i class="bx bx-x" id="close-cart"></i>
      
        </div>
        <!--total  -->

     <div class="banner">
     <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="/index.html">
                <img src="/assets/img/vandal png.png" alt="" width="125px">
            </a>
            </div>
            <nav>
                <ul id="MenuItens">
                    <li><a href="index.html" title="">Inicio</a></li>
                    <li><a href="produtos.html" title="">Produtos</a></li>
                    <li><a href="/contatos.html" title="">Contatos</a></li>
                    <li><a href="/minha-conta.html" title="">Minha conta</a></li>

                </ul>
            </nav>
            <i class="bx bx-shopping-bag carrinho-color"  id="cart-icon"></i>
            <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

        </div>
        <div class="linha">
            <div class="col-2">
                <h1>Chegando com o pé na porta!</h1>
                <p>Lorem ipsum, <br> dolor sit amet consectetur adipisicing elit.</p>
                <br><a href=""class="btn">Mais informações &#8594;</a>
            </div>
            
            <div class="col-2">
                <img src="/assets/img/banner-1.png" alt="">
            </div>
        </div>
        </div>
    </div>
    <br><br><br>
        <div class="corpo-categorias">

            <div class="linha">
                
                <div class="categorias">
                    <div class="corpo-categorias">
                       <div class="linha">
                            <div class="col-3">
                                <img src="/assets/img/categoria-1.jpg" alt="">
                            </div>
        
                            <div class="col-3">
                                <img src="/assets/img/categoria-2.jpg" alt="">
                            </div>
        
                            <div class="col-3">
                                <img src="/assets/img/categoria-3.jpg" alt="">
                            </div>
                       </div> 
                    </div>
        </div>

            <section class="shop container">
                <h2  class="section-title">Produtos em destaques</h2>
           <div class="shop-content">
               <!--box1  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                   <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                   <h2 class="product-title">iphone 12 pro</h2>
                   <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
              <span class="price">28$</span>
              <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
                </div>
                  <!--box2  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
            </a>
           <span class="price">100$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
               <!--box3  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">45$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
               <!--box4  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">24.04$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
            </section>
            

            <section class="shop container">
                <h2  class="section-title">Novidades</h2>
           <div class="shop-content">
               <!--box1  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                   <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                   <h2 class="product-title">iphone 12 pro</h2>
                   <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
              <span class="price">28$</span>
              <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
                </div>
                  <!--box2  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
            </a>
           <span class="price">100$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
               <!--box3  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">45$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
               <!--box4  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">24.04$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
            <!--box5  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">50$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
        
               <!--box6  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">50$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
               <!--box7  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">70$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
             </div>
               <!--box8  -->
               <div class="col-4">
                <a href="/ver-produto.html">
                <img src="/assets/img/VandalGB.jpg" alt="" class="product-img">
                <h2 class="product-title">iphone 12 pro</h2>
               
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </a>
                </div>
           <span class="price">45$</span>
           <i class="bx bx-shopping-bag add-cart buttom-carrinho"></i>
        
             </div>
           </div>
            </section>
    <div class="ofertas">

        <div class="corpo-categorias">
            <div class="linha">
                <img src="/assets/img/Banner-4.png" alt="">
                <div class="col-2">
                   
                </div>

                

            </div>
        </div>

    </div>
</div>

<div class="depoimentos">
    <div class="corpo-categorias">
        <div class="linha">
            <div class="col-3">
                <ion-icon name="ribbon" class="depoimentos-icone"></ion-icon>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut amet iusto odit incidunt corrupti optio animi voluptates. A provident quos nam placeat, dolor, adipisci ipsam atque, non excepturi sunt autem!</p>
            <div class="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>

                <img src="/assets/img/cliente-1.png" alt="">
            <h3>Lesher calvo</h3>
            </div>
            <div class="col-3">
                <ion-icon name="ribbon" class="depoimentos-icone"></ion-icon>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut amet iusto odit incidunt corrupti optio animi voluptates. A provident quos nam placeat, dolor, adipisci ipsam atque, non excepturi sunt autem!</p>
            <div class="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>

                <img src="/assets/img/cliente-2.png" alt="">
            <h3>Lesher calvo</h3>
            </div>
            <div class="col-3">
                <ion-icon name="ribbon" class="depoimentos-icone"></ion-icon>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut amet iusto odit incidunt corrupti optio animi voluptates. A provident quos nam placeat, dolor, adipisci ipsam atque, non excepturi sunt autem!</p>
            <div class="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>

                <img src="/assets/img/cliente-3.png" alt="">
            <h3>Lesher calvo</h3>
            </div>
            
        </div>
    </div>
</div>

    <div class="marcas">
        <div class="corpo-categorias">
            <div class="linha">
                <div class="col-5">
                    <img src="assets/img/sansung.png" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/realme.png" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/motorola.png" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/xiaomi.png" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/iphone.png" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
 
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="/assets/img/vandal png.png" alt="" width="150px">
                <p>It's all about your dreams.</p>
    
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
    
                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
    
                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>redes sociais</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">@Techland</a>
                </li>
                <li>
                    <a href="#" class="footer-link">@Techland</a>
                </li>
                <li>
                    <a href="#" class="footer-link">@Techland</a>
                </li>
            </ul>
    
            <ul class="footer-list">
                <li>
                    <h3>Produtos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Inicio</a>
                </li>
                <li>
                    <a href="#" class="footer-link">celulares</a>
                </li>
                <li>
                    <a href="#" class="footer-link">cloud</a>
                </li>
            </ul>
    
            <div id="footer_subscribe">
                <h3>Cadastre-se</h3>
    
                <p>
                    Cadastre-se para para ganhar 10% de desconto na primeira compra
                </p>
    
                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
    
        <div id="footer_copyright">
            &#169
            2023 all rights reserved
        </div>
    </footer>






<script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
<script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>

    <script src="/assets/js/carrinho.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="script.js"></script>

</body>
</html>
