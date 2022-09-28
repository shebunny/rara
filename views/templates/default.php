<!DOCTYPE html>
 <?php $_SESSION['Chave_Arquivo_script'] = '101000001110111010';?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $this->config['site_title'];?></title>
	<link rel="sortcut icon" href="<?php echo BASE_PASTA;?>assets/imagens/logo/<?php echo $this->config['ico'];?>" type="image/png" />
	<link rel="stylesheet" href="<?php echo BASE_PASTA;?>assets/css/template.css" />
	<link rel="stylesheet" href="<?php echo BASE_PASTA;?>assets/css/user_interpolarizadosks.css" />
	<script type="text/javascript" src="<?php echo BASE_PASTA;?>assets/js/script.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo BASE_PASTA;?>assets/js_php/home.js.php'></script>
	<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <link rel="manifest" href="<?php echo BASE_PASTA;?>manifest.webmanifest">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $this->config['site_title'];?>">
    <link rel="apple-touch-startup-image" href ="<?php echo BASE_PASTA;?>assets/imagens/logo/logo_192.png">
    <link rel="apple-touch-icon" href="<?php echo BASE_PASTA;?>assets/imagens/logo/logo_192.png">
    <script src="//use.typekit.net/aqb7rox.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</head>
<style onload="">
    
#btn_email{
    background:none;
    border:1px solid #fff;
    color:#fff;padding:8px;
    cursor:pointer;
}
    
#btn_email:hover{
    color:#000;
    background:#fff;
}
.boxcontato{
  margin-left: 50%;
    font-family:
    Arial;color:#000;
}  
.boxcontato a  {
    text-decoration: none;
    color:#000;
    
}
.boxcontato_itens{
     display:none;
    
     background-color: #f9f9f9;
     width: 80%;
     min-width:180px;
     left: 100px;
     top:40px;
     box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   
}
.boxcontato:hover .boxcontato_itens{display:block;}

.listacontato {
  float: left;
  width: 100%;
  padding: 10px;
  background-color: blue;
  height: 250px;
  z-index: 4;
  position:relative;
} 
.contato_itens{
    border-bottom:1px dotted;
    background:#fff;
    position:relative;
    height: 40px;
}
#box_politc{
    position: fixed;bottom: 0;
    background: #ffa500;
    padding: 15px;
    line-height: 21px;
    font-size: 14px;
    color: #ffffff;
    box-shadow: 0 5px 12px 14px rgba(0, 0, 0, .06);
    z-index: 999;
    font-weight: bold;
}
#box_politc a{
    /*text-decoration:none;*/
    color:#ffffff;
}
#btn_politc{
    margin: 5px 0;
padding: 5px 30px;
border-radius: 6px;
color: #ffa500;
font-size: 12px;
cursor: pointer;
border: 1px solid;
width:100px;
margin-left: 40%;
font-weight: bold;
background: #ffffff;
}

#btn_politc:hover{
    background: #ffa500;
color: #ffffff;
font-weight: bold;
}
.add-button {
  position: absolute;
  top: 1px;
  left: 1px;
}
.loref_icons{
    width:28px;
    border-radius:50%;
    background:#000;
    text-align:center;
    line-height:36px;
    height:28px;
}
.add-button:hover {
    opacity:0.7;
}
.add-button {
     position:relative;
    top: 1px;
     left: 1px;
     background: #ce0a26;
    border-radius: 7px;
    padding: 10px 14px;
    color: #fff;
    font-weight: bold;
    cursor:pointer;
}
.m_close{
    cursor:pointer;
    margin-top:1%;
    color:#aaa2a2;
    float:right;
    padding-right:3%;
    margin-bottom: 3%;
    font-size: 20px;
    font-weight: bold;
}
.m_close:hover{
 color:red;   
}
#gif_block{
    position: fixed;
    z-index: 999999;
    background:#fff;
   
    left: 0;
    
    width: 100%;
    height: 100%;
    overflow: auto;  
}
#soc_menu{}
#soc_menu a{margin-right:10px;}
</style>
<script>


</script>




<div class="row gaf-12 a" style="min-width: 333px;background:#fff;positon:relative;">
   <div id="gif_block" >
    <div  class="zf-3"  >
         <div class="gaf-12"style="position:relative;margin-top:75%;">
                <div class="zf-4">
                <!--div class="gaf-12"style="width:80px;height:80px;border-radius:50%;position:relative;z-index:2;">
                     <img src="<?php echo BASE_PASTA;?>assets/imagens/gifs/suar_to.gif" style="width:100%;border-radius:50%;">
                </div-->
                
                <div class="gaf-12" >
                    <div style="width:100px;height:50px;position:relative;bottom:40px;left:-10px;">
                        <img src="<?php echo BASE_PASTA;?>assets/imagens/gifs/load.gif" style="width:100%;" >
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
   
    <?php $_SESSION['Chave_Arquivo_script'] = '101000001110111010';?>
        <!------------left_drop--------------------------------------------------->
        <div id="mySidebar" class=" sidebar" >
            <div class="gaf-12">
                <div class="fl"style="width:125px;padding:2%;"><img src="<?php echo BASE_PASTA;?>/assets/imagens/logo/logo.png"style="width:100%;border-radius: 8px;"></div>
           <div style="float: right;position: relative;top: 0;padding:1%;"> <a style="font-size:40px;"href="javascript:void(0)" class="" onclick="closeNav()">&#10006;</a></div></div>
           <div class="item_m"></div>
        </div>
         <!------------resaponsive_navmenu--------------------------------------------->
        <header>
            <div class="row gaf-12" style="position:relative">
                <div class=" row ">
                    <div class="fb-like" style ="z-index:99;position:fixed;right:15%;"data-href="<?php echo $this->config['facebook'];?>" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>
                    <!--div class=""style="width:100%;">
                        <div  class=""> <img style="width:100%;max-height: 27vw;" src="<?php echo BASE_PASTA;?>/assets/imagens/default_img/<?php echo $this->config['home_header'];?>"></div>
                    </div-->
                      <!--------------------main_menu-------------------------------------------------------->
    	                  
    	           <div class="gaf-12" style="margin-bottom: 6.5%;">
                    <div class="gaf-12 boxmenu" style="position:fixed;z-index:9999999;"></div>
                    
                    
        
    	          </div>
    	          	
    	       </div>
    	                  
          </div>
                   <!--------- ---------------------------------------------------------------------------->                        
        </header>
        <div id="myModal_pwa" class="modal-pwa" style="">
                
                      <div class=" modal-content-pwa"style="height:auto;" >
                            <div class="gaf-12" style="border-radius: 20px;border: 8px solid #bfb9b9;background:#fff;position:relative;min-height:200px;min-width:380px;">
                               <div class="gaf-12" style="border-radius: 12px;border: 1px solid #151515;position:relative;min-height:200px;min-width:380px;">
                           <div class="gaf-12"style="background:;border-radius: 10px 10px 0 0;"><div class="m_close" onclick="closeBtnPwa();"&times;>X</div>
                           </div>
                           
                           
                    
                            <div class="gaf-12 modal-header-pwa" style="position:relative;">
                                <div class="fl" style="line-height: 33px;font-weight:bold;margin-left:5%;position:relative;color: #6a645c;">ADICIONE O APP <span style="font-size:25px;font-style: italic;font-weight: normal;color: #000;"></span><span style="font-style: italic;color: #000;"><?php echo $this->config['fantasia'];?></span> EM SEU SMARTFONE!</div>
                                                              <div class="fl" style="margin-left:5%;text-align:center;"><button class="add-button">ADD à tela inicial</button></div>
                            </div>
                       
                        <div class="gaf-12" style="bottom:0;display:table;position:absolute;">
                          
                              <div style="float:right;padding:1%;bottom:1%;height:70px;"><div style="width:150px;"><img src="<?php echo BASE_PASTA;?>assets/imagens/logo/logo.png" style="width:80%;"></div></div>
                          
                        </div>
                        
                        
                        <div class="modal-footer-pwa">
                            <div id="notifica"><div id="print_sucss"></div></div>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
        <div class="gaf-12 ">
    	   <div class=""> 
    	        <div class="gaf-12 logo_app" >
    	            <div class="gaf-12 header_app" style="position:relative;">
    	            <div class="gafnm-3 "style="padding:2%;"><img src="<?php echo BASE_PASTA;?>/assets/imagens/logo/logo.png"style="width:100%;border-radius: 8px;"></div>
    	            
    	            <div class="gafnm-9" id="loc_app" style="bottom: 5%;position: absolute;right: 5%;"><div class="fr" style="">
				        <div class="fl loref_icons">
				            <img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/localizacao4.png" style="width:100%;">
				        </div>
				        
				        <div class="fl" style="font-size:12px;margin-top: 10px;cursor:pointer;color:#000;" title="click e veja o endereço" >
				       <div class="" style="position:relative;"><?php echo $this->config['endereco'];?></div>
				       <div class="fr">
				       <div class="" style="position:relative;"><div class="fr"><?php echo $this->config['num'];?></div></div>
				        <div class="" style="position:relative;"><div class="fr"><?php echo $this->config['uf'];?></div></div></div>
				        </div>
			        </div></div>
			        
				</div>
    	       <button class=" openbtn" onclick="openNav();"><a>☰ Menu</a></button> 
            </div>
             </div>
        </div>
        
        
        
        <div class=""> 
            <div class="gaf-12">
                
            </div>
        </div>
        
    	<div class="gaf-12">	
    	    <div style="display:none;float:right;">
        	</div>
    	</div>
    	  <div class="social-bar" id="mySidenav">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $this->config['whatsapp'];?>&text=Olá%20<?php echo $this->config['fantasia'];?>.%20Poderia%20me%20passar%20algumas%20informações?" class="whatsapp">
            <img style="border-radius:10px;width:25px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/whatsapp.svg"></a> 
            <a href="<?php echo $this->config['facebook'];?>" target="_blank" class="facebook">
            <img style="width:25px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/facebook.svg"></a> 
            <a href="https://www.instagram.com/<?php echo $this->config['instagram'];?>/" target="_blank" class="instagram">
            <img style="width:25px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/instagram-sketched.svg"></a> 
            <!--a href="#" class="twitter" target="_blank">
            <img style="width:25px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/twitter_icon.png"></a> 
            <a href="https://discord.gg/YrNySq" target="_blank" class="discord">
            <img style="width:25px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/icon-discord.png"></a--> 
        </div>
        <!---------------main_body------------------------------------------------------------->    		    	
    	<div class="row  gaf-12" style="padding:0;"> 
<!---------------social_bar----------------------------------------------------------------------------------->    		
      
        <!-------------------views------------------------------------------------------------------------------------------------------------------>
    	<div id="main">	
	        <div class="gaf-12">
        	<?php
	        	$this->loadViewInTemplate($viewName, $viewData);
		//$this->loadPagina($viewName, $viewData);
	            ?>
	        </div></div>
	
		</div>  
<!-----------------end views----------------------------------------------------------------------------------------------------------------->
        <!-----------------------rodape-------------------------------------------------------->
         <button onclick="topFunction()" id="myBtn" title="Voltar ao Topo">&#10506;</button>
       
<!------------------------------------------------------------------------------------->
  <!-----------------------------------------roda novo da hafleuki----------------------------------------------------->
  
    <div class="gaf-12 r_bot" style="background:#fff;">
	
		<div class=" row a" style="color:;font-family:Arial;">
		    	<div class="gaf-12" style="background-image: -moz-linear-gradient(top,#f49494 10%,#ca3a3a 55%,#822727 85%);min-height:15px;"></div>
		    <div class="gaf-12 rodape" style="margin-bottom: 60px;">
			<div class="gaf-12 " style="min-height:120px;">
			
			  <div class="gaf-12" style="padding-top:5%;">
			        <!--div class="fl loref_icons" ><img src="<?php echo BASE_PASTA;?>/assets/imagens/logo/logo.png" style="width:100%;"></div-->
			  <div class="zf-9" style="width:360px;position:relative;"><img src="<?php echo BASE_PASTA;?>assets/imagens/logo/logo.png" style="width:100%;border:2px solid black;border-radius:20px;"></div>
			  	</div>
		
		
		 </div>
           
            
	<div class="gaf-8 gaf-s-7"> 
		        <div class="gaf-12">
		            <div class=" poliroda" style="padding-left:20px;">   
		            <div style="font-size:18px;color:#fff;font-family:Inter,sans-serif;font-weight: 600;margin-top:2%;">TRATAMENTOS</div>
			            <div> <a href="<?php echo BASE_URL;?>/index.php/servicos">HOME</a></div>
			                <div> <a href="<?php echo BASE_URL;?>/index.php/politicaprivacidade">MASSAGENS MANUAIS</a></div>
			                    <div><a href="<?php echo BASE_URL;?>/index.php/politicas/vendas">MICRO PIGMENTAÇÂO</a></div>
                                     <div> <a href="<?php echo BASE_URL;?>/index.php/politicas/trocas">CORTE DE CABELO</a></div>
                                        <div><a href="<?php echo BASE_URL;?>/index.php/politicas/entregas">MANICURE</a></div>
                                            <div><a href="<?php echo BASE_URL;?>/index.php/politicas/garantia">CURSOS</a></div>
                                                <div><a href="<?php echo BASE_URL;?>/index.php/politicas/dicas">PEDRAS QUENTES</a></div>
            </div></div>
                    </div>
			<div class="gaf-4  gaf-s-5 poliroda" style="padding-left:20px;min-height: 200px;font-size: 17px;color:#fff;">
			    	 <div class="gaf-12 mennedi" style="margin-bottom:5%;margin-top: 2%;margin-left: 2%;">
			 	     <div class="gaf-12" style="font-size: 18px;color: #fff;font-family: Inter,sans-serif;font-weight: 600;margin-bottom: 5%;">REDES SOCIAIS</div>
			 	    <div class="fl" style="width:45px;"> <a href="<?php echo BASE_URL;?>/index.php/servicos"><img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/g2266.png" style="width:100%;"></a></div>
                         <div class="fl" style="width:45px;"><a href="<?php echo BASE_URL;?>/index.php/servicos"><img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/g2233.png" style="width:100%;"></a></div>
                            <div class="fl" style="width:45px;"><a href="<?php echo BASE_URL;?>/index.php/servicos"><img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/g2196.png" style="width:100%;"></a></div>
                                <div class="fl" style="width:45px;"><a href="<?php echo BASE_URL;?>/index.php/servicos"><img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/g2297.png" style="width:100%;"></a></div>
			    </div>
			    
			    
			    
			    
			    
			    
			    
		
			    	<div class="gaf-12" style="">
				        
				        <!--div class="fl loref_icons">
				           
				            <img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/localizacao4.png" style="width:100%;">
				        </div-->
				        <div class="fl" style="font-size:17px;margin-left:2%;">
				              <div style="font-size:18px;color:#fff;font-family:Inter,sans-serif;font-weight: 600;margin-bottom: 5%;">MATRIZ CAMOBI</div>
				       <div class="" style="position:relative;margin-top2%;"><?php echo $this->config['endereco'];?></div>
				        <div class="" style="position:relative;"><?php echo $this->config['uf'];?></div>
				        <div class="" style="position:relative;">CEP: <?php echo $this->config['cep'];?></div></div>
			                    
			        </div>
			        	 <div class="gaf-12" style="margin-bottom:3%;">
			    <!--div class="fl loref_icons" >
			        <img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/celular4.png" style="width:100%;"></div-->
			            <div class="fl" style="margin-left:2%;padding-top:3%;font-size: 20px;font-weight: 600;margin-bottom: 5%;"><?php echo $this->config['telefone'];?></div>
			    </div>
			        <div class="gafnm-12 " style="height:45px;color:;font-family:Arial;font-size:12px;">
            	     <div style="padding-top:3%;">
            	    <!--div class="fl loref_icons" style="">
            	        <img src="<?php echo BASE_PASTA;?>/assets/imagens/icones/email4.png" style="width:100%;"></div-->
            	        <div class="fl" style="margin-left: 2%;margin-top:3%;font-size: 17px;"> <div class="fl"></div> 
	                <span style="font-size:14px;"><a style="color:#fff;font-size:17px;" href="mailto:<?php echo $this->config['email'];?>?subject=Como podemos ajudar?"><?php echo $this->config['email'];?></a></span></div>
	                </div>
	            </div>
			</div>
	             
	             
	             
	        <div class="gaf-s-12  " style="color:#fff;margin-top:2%;">
	            <div style="line-height:30px;height:60px;margin:auto;text-align:center;color:#fff;font-family:Arial;font-size:14px;font-weight:bold;border-top: 3px solid #fff;">
	                <?php echo $this->config['copyright'];?>®<?php echo date ("Y");?> Todos os direitos reservados</div>
	       </div>

</div></div></div>
  
  
  
  
<!--------------------------menresp------------------------------------------------------------------->
<div class="gaf-12">
<div class="gaf-12 soc_menu" style="position:fixed;color:blue;height:70px;float:bottom;bottom:0px;z-index:99999;">
    <div class="z-9"style="color:blue;height:70px;bottom:0px;background: #a4a3a1b3;">
    <div class="gafnm-2">    
    <button class=" openbtn" onclick="openNav();" style="width:40px;font-size:35px;cursor:pointer;color:#000;padding:10px 15px;border:none;background:none;margin-left:20px;margin-right:2%;">
        ☰</button> 
    </div>
        <div class="gafnm-9" id="soc_menu"style="padding-top:2%;margin-left: 7%;">
           
                <a href="https://api.whatsapp.com/send?phone=<?php echo $this->config['whatsapp'];?>&text=Olá%20<?php echo $this->config['fantasia'];?>.%20Poderia%20me%20passar%20algumas%20informações?" class="whatsapp1">
                     <img style="border-radius:10px;width:50px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/whatsapp.svg"></a> 
                <a href="<?php echo $this->config['facebook'];?>" class="facebook1">
                     <img style="width:50px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/facebook.svg"></a> 
                 <a href="https://www.instagram.com/<?php echo $this->config['instagram'];?>/" class="instagram1">
                     <img style="width:50px;" src="<?php echo BASE_PASTA;?>/assets/imagens/icones/instagram-sketched.svg"></a> 
            </div>
       
    </div></div>
  <div class="gaf-12"> <div class="z-9"></div></div>
  
  </div>

 </div> 
</div>


<!--div class="gaf-12" id="print_politc"></div-->

<!--------------------------------------------------------------------------------------------------------->
<script>
//Get the top  button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
//window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!--sdk curtir facebook-->
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0&appId=398075521126834" nonce="js6FeDu8"></script>

</html>















