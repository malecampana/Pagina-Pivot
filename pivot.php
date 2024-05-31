<?php?
/*
Template Name: Pagina HTML inicio
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
    <title>pivot</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://cdn.jsdelivr.ney/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"> </script>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Kanit', sans-serif;
}
:root {
  --theme-color: rgb(253, 249, 249);
  --primary-color: #124f88;
  --secundary-color: #f4590b;
  --text-color-inverse: white;
  --text-color: black;
  --navbar-shallow-color: #e5e5e5;
  --menu-mobile-background-color: rgb(15, 15, 16);;
}
html{
    height: 100%;
}
body {
  height: 300vh;
  font-family: 'Kanit', sans-serif;
  background-color: var(--theme-color);
  color: var(--text-color);
 
}

a {
  text-decoration: none;
  color: var(--text-color);
}
.topheader {
  box-shadow: 0 4px 5px var(--navbar-shallow-color);
  position: fixed;
  background-color: var(--theme-color);
  left: 0;
  top: 0;
  width: 100%;
  font-family: 'Kanit', sans-serif;
  z-index: 1000;
}

.topnav {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  max-width: 980px;
  margin: 0 auto;
}

/* Logo */

.logo {
  display: flex;
  align-items: center;
  font-size: 18px;
  font-weight: 500;
  color: var(--primary-color);
}

.logo img {
  border-radius: 50%;
}

/* Menu */
.menu {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 0 15px;
}

.menu a {
  color: var(--text-color);
  font-size: 18px;
  font-weight: 500;
  line-height: 50px;
font-family: 'Kanit', sans-serif;
  position: relative;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.menu a::after {
  content: "";
  background-color: var(--secundary-color);
  position: absolute;
  left: 0;
  top: calc(100% + 4px);
  width: 100%;
  height: 4px;

  opacity: 0;
  transition: opacity 0.3s;
}

.menu a.selected::after,
.menu a:hover::after {
  opacity: 0.8;
}



.open-menu,
.close-menu {
  display: none;
}

.logotype {
  display: flex;
  justify-content: center;
}

@media (max-width: 950px) {
  /* Menu */
  .menu {
    flex-direction: column;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    align-items: center;
    background-image: linear-gradient(rgba(5,7,12, 0.75), rgba(5,7,12, 0.75));
    
    height: 100%;
    overflow-y: auto;
     opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s;
  }
 

  .menu li {
    padding: 0;
  }

  .menu a {
    color: var(--text-color-inverse);
    line-height: 70px;
    font-size: 25px;
  }

  .open-menu,
  .close-menu {
    display: block;
    border: none;
    background: none;
    cursor: pointer;
  }

  .close-menu {
    align-self: flex-end;
    padding: 20px 15px;
  }

  .menu_opened {
    opacity: 1;
    pointer-events: all;
  }

  .open-menu:focus:not(:focus-visible),
  .close-menu:focus:not(:focus-visible) {
    outline: none;
  }

  .menu a::after {
    content: none;
  }

  .menu a:hover,
  .menu a.selected {
    color: var(--secundary-color);
  }
}
/* Hero */
.hero{
    min-height: 195vh;
    background-image: url(fondo\ pivot.jpg);
    background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  align-items: center;
  font-family: 'Kanit', sans-serif;
}
h1{
    text-align: center;
color: #e5e5e5;
font-size: 30px;
font-weight: bold;
font-family: 'Kanit', sans-serif;

}
/* Rectangulo */
.box-1{


   width: 70%;
    margin: 50px;
    box-sizing: border-box;
    font-size: 20px;
    text-align: left;
    height: auto;
    margin-top: -50px;
    flex-grow: 1;
padding: 30px; 
padding-bottom: 40px;


   
}
.box-2{

width: 30%;

 margin: -60px;
    box-sizing: border-box;
    font-size: 17px;
    text-align: left;
    padding: 6px;
margin-right: 30px;
    height: auto;

}
 .columns{
  display: block;
    text-align: left;
    width: 700px;

    

 }
.columna1{
    padding: 30px;
    margin: 0px;
  color: #e5e5e5;
  display: block;
  flex-wrap: wrap;
  gap: 2rem;
  font-size: 17px;
    
}
.columna2{
    padding: 30px;
    margin: 0 10px;
    color: #e5e5e5;
    flex-wrap: wrap;
    font-size: 17px;
   
}



   
    



footer{
  
  height: auto;
}
.wrapper{

width: 100%;
height: 40vh;
max-width 1200px;
height: auto;
background-image: url(f\ formu.png);
margin-bottom: ;
padding: 100px 50px;
height: auto;

}
.wrapper .title h1{
  color: #f2f6f7;
  text-align: left;
  letter-spacing: 3px;
  margin-bottom: 20px;
 
}

.contact-form{
  display: flex;
  margin: -20px;
  margin-left: 20px;
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}


.msg{
  width: 48%;
  
 
}
.input-fields{
    width: 45%;
    margin-left: 20px;

}
input{
    width: 100%;

}
.input-fields input,
.msg textarea{
  margin: 10px 0;
  background: #fff;
  border: 0px;
  border-bottom: 2px solid #ecf1f3;
  padding: 10px;
  color: #020202;
  width: 100%;
}
textarea{
    border-radius: 30px;
}
.msg textarea{
    
  height: 312px;
}
label{
  color: #e5e5e5;
}
input::placeholder{
    color: #fcfdfe;
    display: none;
}
textarea::placeholder{
    color: #124f88;
    font-weight: bold;
    font-size: 18px;
}
::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
}

.btn {
    background: #e15c03;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
    width: 30%;
    float: right;
}
.contenedor-input{
    margin: 10px;
}
label{
    text-transform: uppercase;
}

@media screen and (max-width: 600px){
  .link-footer{
    width: 100%;
    height: auto;
   
  }
  .icon-social{
    display: none;
  }
  
  .figura-img{
    width: 40%;
    margin-top: 0px;
  }
  .hr-hr{
    display: none;
  }
  .div-linea{
 display: none;
  }
  .quienessomos{
    justify-content: center;
    margin: 0 auto;
    text-align: center;
    padding-left: 20px;

  }
  .section-accordion{
max-width: 1200px;
min-width: 700px;
margin: 0 auto;
justify-content: center;

  }
  
  .contact-form{
    margin: 0 auto;
    justify-content: center;
    text-align: center;
    align-items: center;
    max-width: 100%;
  }
  .input-fields{
    width: 90%;
  }

  .flecha-txt-columns .flecha-txt{
    margin:0 20px;
    flex-direction: column;
    flex-wrap: wrap;
    text-align: center;
    font-size: 9px;
    padding: 0;

    

  }
  .column-1, .column-2{
    font-size: 13px;
    margin: 0 20px;
    flex-direction: column;
    text-align: left;
  }

  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    flex-direction: column;
    width: 80%;
  }
  .label{
display: none;
  }


@media screen and (max-width: 850px){
  .hero{
    width: 100%;
    height: auto;
    flex-direction: column;
  }
  .contact-form{
    flex-direction: column;
  }
  

   
}



}
@media screen  and (max-width:992px){
  .label{
display: none;
  }
  
 .msg {
width: 55%;

justify-content: center;
margin: 0 auto;
  }
  input{
width: 100%;
  }
  input::placeholder{
    display: flex;
    color: #124f88;
    text-transform: uppercase;
    transition: 0.2s ease;
   
}

  
  .section-accordion{
    text-align: center;
    width: 100%;
    margin: 40px 0px;
    height: auto;
    margin-left: 50px;
  }
  .accordion-item{
    width: 120%;
  }

  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 100px;
  }
  .input-fields,
  .msg{
    width: 130%;
    margin: 0 auto;
  }
  .label{
display: none;
  }
  .input input{
 width: 100%;
  }
 .msg {
width: 90%;

justify-content: center;
margin: 0 auto;
  }
  input::placeholder{
    color: #124f88;
    text-transform: uppercase;
   
}


  .contact-form{
    flex-direction: column;
    flex-wrap: wrap;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
  .label{
display: none;
  }
  .input input{
 width: 100%;
  }
 .msg {
width: 90%;

justify-content: center;
margin: 0 auto;
  }
  input::placeholder{
    color: #124f88;
    text-transform: uppercase;
   
}




  .contact-form{
    flex-direction: column;
    flex-wrap: wrap;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
  .label{
display: none;
  }
  .input input{
 width: 130%;
  }

 .msg {
width: 100%;

justify-content: center;
margin: 0 auto;
  }
  input::placeholder{
    color: #124f88;
    text-transform: uppercase;
   
}



  
}
/* ********************************** */
/*               go-top             */
/* ********************************** */

@media only screen and (min-width:320px) and (max-width:768px){
  .titulo-pivot img{
    width: 100%;
    margin-top: 180px;

  }
  
  .accordion{
    width: 100%;
    height: auto;
    margin: 80px;
    padding: 20px;
  }
 
 
    .img-arrow{
margin: 0px;
margin-top: 100px;

    }
    .nombre{
        width: 50%;
    }
    .columnas-txt{
      display: block;
      height: auto;
    }
    .txt-columns{
      display: block;
      margin: 0;
    }
    .txt-columns p{
      text-align: center;
      
    }
    .panel-column p{
      display: block;
      margin: 0;
      text-align: center;
    }
}




.section{
    width: 200px;
    padding: 3px;
    margin: auto;
    margin-top: -25px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-left: 2px;
    color: #e5e5e5;
    transition: padding .3s;
 z-index: 100
 ;
box-sizing: border-box;
white-space: nowrap;
    padding-bottom: 0px;
   
min-height: auto;
    border: 1px solid transparent;

}

.columnas-txt{
  display: block;
}
.img-pivot img{
  display: none;
}
			

.accordion {
  width: 65%;

  max-width: 900px;
  margin: 2rem auto;
  margin-left: ;
}
.accordion-item {
  background-color: #fff;
  color: #111;
  margin: 1rem 0;
  border-radius: 0.5rem;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.25);
}
.accordion-item-header {
  padding: 0.5rem 3rem 0.5rem 1rem;
  min-height: 3.5rem;
  line-height: 1.25rem;
  font-weight: bold;
  display: flex;
  align-items: center;
  position: relative;
  cursor: pointer;
}
.accordion-item-header::after {
  content: "\002B";
  font-size: 2rem;
  position: absolute;
  right: 1rem;
}
.accordion-item-header.active::after {
  content: "\2212";
}

.accordion-item-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.accordion-item-body-content {
  padding: 1rem;
  line-height: 1.5rem;
  border-top: 1px solid;
  border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
}

@media(max-width:767px) {
  .columna-2-2{
   margin: 0 auto;
   justify-content: center;
   margin-right: 100px;
  }
  .accordion{
    margin-left: -10px;
  }
  .columna-2{
    margin: 0 auto;
    margin-left: -100px;
  }
 
  .linea-quienes {
    
  }
  .column-1{
    display: none;
  }
  .section-accordion{
    width: 100%;
    margin: 40px 0px;
    height: auto;
  }
  .accordion-item{
    width: 100%;
  }
  .columns{
    text-align: center;
  }


 
  
  html {
    font-size: 14px;
  }
  .cajas{
    width: 90%;
    flex-direction: column;
    flex-wrap: wrap;
    font-size: 12px;
    margin: 0;
  }
  .cont-cajas p{
    flex: 1;
    font-size: 14px;
    flex-direction: row;
    flex-wrap: wrap;
    text-align: center;
    padding: 0;
    margin-left: -110px;
    margin-top: 100px;

  }
  .box-2{
    flex-direction: column;
    margin-top: 90px;
    margin-left: 1px;
   text-align: center;
   margin: 0 auto;
  }
}

.wpper{
    max-width: 1100px;
    width: 100%;
   
    margin: 50px auto;
    float: right;
    background-image: url(rectangulo.png);
 
   object-fit: cover;
   height: max-content;
    font-family: 'Kanit', sans-serif;
}
   .columns{
    width: 100%;
    height: auto;
    display: flex;
    flex-flow: row wrap;
    margin: 5px 0;
   }
   .column{
    width: 100%;
    height: auto;
    flex-direction: column;
   }
   .column-1,.column-2{
    flex: 1;
   
   
    transition: 0.3s;
    color: #fbfeff;
   }
   .column-1{
    width: 60%;
    height: auto;
    flex: 1;
   }
   .column-2{
    width: 40%;
    height: auto;
   }
   .column-1,.column-2:first-child{
    margin-left: 0;
    
   }
   .column-1,.column-2:last-child{
    margin-left: 0;
 
   }
  
  


.formulario__grupo-input {
	position: relative;
}


.formulario__input:focus {
	border: 3px solid #0075FF;
	outline: none;
	box-shadow: 3px 0px 30px rgba(163,163,163, 0.4);
}

.formulario__input-error {
	font-size: 12px;
	margin-bottom: 0;
	display: none;
}

.formulario__input-error-activo {
	display: block;
}

.formulario__validacion-estado {
	position: absolute;
	right: 10px;
	bottom: 15px;
	z-index: 100;
	font-size: 16px;
	opacity: 0;
}

.formulario__checkbox {
	margin-right: 10px;
}

.formulario__grupo-terminos, 
.formulario__mensaje,
.formulario__grupo-btn-enviar {
	grid-column: span 2;
}



.formulario__mensaje-activo {
	display: block;
}

.formulario__mensaje p {
	margin: 0;
}

.formulario__grupo-btn-enviar {
	display: flex;
	flex-direction: column;
	align-items: center;
}


.btn:hover {
	box-shadow: 3px 0px 30px rgb(146, 146, 146);
}

.formulario__mensaje-exito {
	font-size: 14px;
	color: #119200;
	display: none;
}

.formulario__mensaje-exito-activo {
	display: block;
}

/* ----- -----  Estilos para Validacion ----- ----- */
.formulario__grupo-correcto .formulario__validacion-estado {
	color: #1ed12d;
	opacity: 1;
}

.formulario__grupo-incorrecto .formulario__label {
	color: #bb2929;
}

.formulario__grupo-incorrecto .formulario__validacion-estado {
	color: #bb2929;
	opacity: 1;
}

.formulario__grupo-incorrecto .formulario__input {
	border: 3px solid #bb2929;
}


/* ----- -----  Mediaqueries ----- ----- */
@media screen and (max-width: 800px) {
	.formulario {
		grid-template-columns: 1fr;
	}

	.formulario__grupo-terminos, 
	.formulario__mensaje,
	.formulario__grupo-btn-enviar {
		grid-column: 1;
	}

	.formulario__btn {
		width: 100%;
	}
  #telefono{
display: flex;
margin:  0 auto;
margin-right: 20px;
  }
  .formulario__input{
    margin-right: 0px;
    margin: 0 auto;

  }
  .hr-resp, hr{
   
  }
 

 
  label{
    text-align: center;
    margin-left: -10px;
    margin-right: 5px;
    margin-top: 10px;
    
  }
   
  .txt-formulario{
    margin-top: 10px;
  }
  input::placeholder{
    color: white;
  }
}
.formulario__btn {
	height: 45px;
	line-height: 45px;
	width: 30%;
	background: #e84b08;
	color: #fff;
	font-weight: bold;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	transition: .1s ease all;
  float: right;
}

.formulario__btn:hover {
	box-shadow: 3px 0px 30px rgba(163,163,163, 1);
}


form{

  width: 100%;

}

  </style>
</head>
<body>

<div class="hero">
    <header class="topheader">
        <nav class="topnav">
          <a href="#" class="logo">
            <img style="margin-top: px;"
           width="60%"
              src="logo final.png"
              alt=""
            />
            
            <div class="logotype">
              <span style="font-weight: bold;"></span><br />
              
            </div>
          </a>
          <button class="open-menu" aria-label="Abrir menú">
            <img src="menu-regular-24.png" alt="abrir menú" />
          </button>
          <ul class="menu">
            <button style="width: 15%;"  class="close-menu" aria-label="Cerrar menú" >
              <img src="cerrar.svg" width="40px" style="margin-top: -5px; background-color: #faf5f3;border-radius: 10px;"  alt="cerrar menú" />
            </button>
           
            <li><a href="#qsomos">Quienes somos</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li class="icon-social"><a href=" https://www.linkedin.com/in/pivot-consultor%C3%ADa-174577310/ :"><img width="15px" style="margin-top: 14px;" src="in.png" alt=""></a></li>
            <li class="icon-social"><a href="https://www.instagram.com/pivot_digitalworld/"><img width="27px" style="margin-top: 10px;" src="igheader.png" alt=""></a></li>
          </ul>
        </nav>
      </header>
   <br>
  

<br>
   <br>
   <br>
   <br>
<br>
<br>
<br>
<br>
<br>
   <br>
  
  <br>
  
<br>
<br>
<br>
<br>
<div class="titulo-pivot" style="margin: 0 auto; justify-content: center; text-align: center;">
  <img src="titulo pivot s fondo.png" alt="">
</div>
<br>
<br>
<br>
<br>
<div id="qsomos"></div>
<br>
<br>
<br>
<br>

<div style="width: 50px;" ></div>

<div class="wpper" style="width: 100%; margin-top: 20px;"  >

<br>
       <h2  style=" font-size: 27px; float: right; color: #fff; letter-spacing: 2px; text-transform: uppercase;margin-top: -15px; margin-right: 90px;">quienes somos</h2>
   

  <section class="columns" style="width: 100%; height: auto;margin-top: 40px;">
    
      
      <div class="column-1" style="padding-left: 5px; text-align: left; width: 60%;height: auto;">
          <div style="margin: 20px;padding:px; display: flex;">
              
         <p style="; font-size: 18.6px; text-align: left;margin:20px;a"> En <span style="font-weight: bold;">Pivot</span> reunimos a un equipo de profesionales con una sólida experiencia en consultoría estratégica, especializados en transformación digital, marketing y comunicación. Hemos trabajado tanto en el ámbito privado como en el público acumulando valiosas experiencias en Argentina y la región.</p>
          </div>
    
        <div style="margin-left: 40px;">
          <img  width="90%" src="linea punteada.png" alt="">
        </div>
    

         <div class="flecha-txt-columns" style="display: flex;" style="margin: 0px; ">
          <div class="flecha-txt" style="margin: 30px 40px;">
              <img width="16px" style="margin-left: 6px;" src="flecha naranja.png" alt="">
              <p style="font-size: 14px; margin: px;margin-top: 10px; padding-left: 10px;">
                Nos consideramos socios estratégicos de las organizaciones y empresas 
                
                con las que colaboramos,  ofreciendo soluciones  integrales que enriquecen la toma de decisiones y  promueven un crecimiento sostenible.</p>
          </div>
          <div class="flecha-txt" style="margin:30px; 10px; margin-top: 6px;">
            <br>
              <img  width="16px" style="margin-left: 5px;
              ;" src="flecha naranja.png" alt="">
              <p style="font-size: 14.5px;margin-top: 10px;padding-left: 10px;">Nuestro compromiso radica en acompañar a las organizaciones en la adaptación e integración de sus procesos e infraestructuras  a la era de las plataformas digitales.</p>
          </div>
         </div>
        
      </div>
      <div class="column-2" style="margin: 10px;width: 40%;height: auto; margin: 0;">
          <br>
          <div class="div-figura" style=" margin-right: 140px;margin:0px;margin-bottom:100px;">
              
              <img class="figura-img" width="220px" style="float:left; margin-left: 120px ;margin-top: px;" src="figura pivot.png" alt="">
              
          </div>
        
      
          <div class="columna-2-2" style="margin: 0px; margin-top: 40px;margin-left: 30px;">
            
          
            <P style="margin:  40px 70px; font-size: 15px; padding-left: 15px;"><span style="color: coral;">Potenciamos</span> las marcas de empresas e instituciones para mejorar la relación con sus clientes, profesionalizar su comunicación y expandir sus oportunidades de venta en el mercado, impulsando así su posicionamiento estratégico.</P>
            
           
              <P style="margin:  40px 70px; font-size: 15px;padding-left: 15px;"><span style="color: coral;">Desarrollamos</span> proyectos de triple impacto que promueven la sustentabilidad comercial, organizacional y ambiental, contribuyendo al desarrollo sostenible de la sociedad.</P>
  
       

          
   
             <div class="desplegable" style="margin-top:px;">
            
              <div class="faq" style="l;width: 220px; margin-left: 85px; text-align: center;padding: 0px;margin-top: 10px;">
                <details style="text-align: center;">
                  <summary style="color: #041677;margin-bottom: -8px;border: 2px solid transparent;" ><img src="queres saber mas img.jpg" alt=""></summary>
                <div style="width: 300px; margin-top: -30px;  background-color: #4c5fa8; display: flex;margin:0px;border: 2px solid transparent; border-radius: 1px;">
             <a href="https://www.linkedin.com/in/ignacioargonz/">   <img style="background-color: #4c5fa8;" width="280px" src="boton nd 2.png" alt=""></a>
                </div>
                </details>
              </div>
              </div>
             
               </div>
      
      </div>
      </div>
    </div>
      




         
                 
        


           </div>
         </div>
        </div>
        </div>
       </div>
       <div id="servicios"></div>
       
       <h2 class="servicios" style="margin-left: 100px;letter-spacing: 2.5px;text-transform: uppercase;margin-top:100px;color: #252570;"> Servicios</h2>
<br>
<br>
<br>
<br>
       <section class="section-accordion" style="margin-top: 100px; display: flex;">
  

  <div class="accordion" style="margin-top: -110px;">
  
    
    <div class="accordion-item">
      
      <div class="accordion-item-header">
        <img width="15px" src="flecha naranja.png" style="margin: 5px;" alt=""> <h4 style="color: rgb(252, 71, 5);">CONSULTORÍA ESTRATÉGICA</h4>
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
         <p style="color:#252570 ;"> Enfocados en diagnósticos rápidos y planes de acción, impulsamos mejoras organizacionales y empresariales. Nuestra misión es facilitar la toma de decisiones y fortalecer el vínculo con clientes e interesados. Hacemos estudios e investigaciones.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        <img width="15px" src="flecha naranja.png" style="margin: 5px;" alt="">  <h4 style="color: rgb(252, 69, 2);"> COMUNICACIÓN Y MARKETING DIGITAL 360</h4>
      </div>
      <div class="accordion-item-body"  >
        <div class="accordion-item-body-content">
       <span style="font-weight: bold;color:rgb(237, 68, 6);">   Gestión Integral de Redes Sociales</span>
          <p style="margin-top: 10px;color :#252570;">Desde la creación de contenido hasta la interacción con la audiencia, nuestro equipo especializado ofrece un servicio completo: producción de contenido, diseño, edición audiovisual, guionado, y Community Management, todo adaptado a la identidad de tu marca.</p>
         <br>
         <span style="font-weight: bold; color: rgb(239, 69, 7)"> Diagnóstico Comunicacional Profundo</span>
  <p style="margin-top: 10px; color: #252570;">Analizamos la presencia de tu empresa en el mercado a través de entrevistas, observación de datos y documentos, para ofrecerte un estado de situación inicial detallado.</p>
  <br>
  <span style="font-weight: bold; color: rgb(240, 70, 7);">Estrategia de Comunicación Personalizada</span>
  <p style="margin-top: 10px; color: #252570;">A partir de un diagnóstico sólido, diseñamos estrategias de comunicación y marketing precisas, con líneas de acción claras y efectivas.</p>
  <br>
  <spa style="font-weight: bold; color: rgb(241, 68, 5);">Gestión de Prensa y Relaciones Públicas</spa>
  <p style="margin-top: 10px; color: #252570;">Desarrollamos estrategias para aumentar la visibilidad y reputación de tu marca en medios de comunicación tradicionales y digitales.</p>
  <br>
  <span style="font-weight: bold; color: rgb(242, 68, 4);">Optimización de Venta Digital</span>
  <p style="margin-top: 10px; color: #252570;">Creamos sitios web y plataformas de comercio electrónico a medida, para potenciar tus ventas online y conectar con tu audiencia de manera efectiva.</p>
  <br>
  <span style="font-weight: bold; color: rgb(249, 70, 5);">Publicidad Inteligente</span>
  <p style="margin-top: 10px; color:  #252570;">Ejecutamos campañas publicitarias en Meta y Google, dirigidas a audiencias específicas para maximizar el retorno de inversión.</p>
  <br>
  <span style="font-weight: bold; color: rgb(251, 72, 7);">Capacitación en Herramientas Digitales</span>
  <p style="margin-top: 10px; color: #252570;">Ofrecemos formación y apoyo en el uso de plataformas digitales clave como Meta, Google y TikTok, para optimizar el rendimiento de tu empresa en línea.</p>
  <br>
  <span style="font-weight: bold; color:rgb(253, 71, 4);">Automatización de Atención al Cliente</span>
  <p style="margin-top: 10px; color: #252570;">Implementamos bots de WhatsApp y sistemas de email marketing personalizados para mejorar la comunicación con tus clientes y aumentar la eficiencia operativa.</p>
  
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        <img width="15px" src="flecha naranja.png" style="margin: 5px;" alt="">   <h4 style="color: rgb(252, 70, 4);">TERMÓMETRO SOCIAL</h4>
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
         <p style="color:  #252570;"> Mantenemos tu presencia en internet actualizada, detectamos tendencias y te posicionamos estratégicamente en línea.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        <img width="15px" src="flecha naranja.png" style="margin: 5px;" alt="">   <h4 style="color: rgb(252, 70, 4);">MEDICIÓN Y ANÁLISIS</h4>
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
         <p style="color:  #252570;"> Proporcionamos datos clave a través de mediciones, encuestas y análisis detallados para impulsar decisiones informadas y convertirte en el eje del éxito de tu comunidad.</p>
          <br>
          <br>
          <span style="font-weight: bold;color: rgb(255, 73, 6);">Encuestas Telefónicas y Online</span>
          <p style="color:  #252570;">Realizamos encuestas telefónicas precisas y rápidas, así como encuestas online segmentadas, para obtener información valiosa sobre tu audiencia.
            Focus Groups y Relevamientos Territoriales
            </p>
            <br>
            <p style="color:  #252570;">Organizamos focus groups para entender a fondo las necesidades de tu mercado objetivo, y llevamos a cabo relevamientos territoriales con encuestas domiciliarias para obtener datos precisos y confiables.</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        <img width="15px" style="margin: 5px;" src="flecha naranja.png" alt=""> <h4 style="color: rgb(252, 70, 4);">  CAPACITACIONES </h4>
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <p style="color:  #252570;">Ofrecemos entrenamientos personalizados en discursos, media coaching y oratoria para potenciar tus habilidades de liderazgo y comunicación.</p>
        </div>
      </div>
      
      
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        <img width="15px" style="margin: 5px;" src="flecha naranja.png" alt=""> <h4 style="color: rgb(252, 70, 4);">  INTELIGENCIA ARTIFICIAL
        </h4>
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <p style="color:  #252570;">Desarrollos, capacitaciones, hackatones, ideaciones en la utilización de la IA.</p>
        </div>
      </div>
  </div>
  
</section>


      <br>
      <br>
      
<br>
<br>
   
<section class="form_wrap">
  <div class="wrapper" id="contacto" style="margin-bottom: 0;">
    
 
        
        <div class="" style="margin-left: 60px;">
         
         
         
         
            <h2 id="contacto" style="margin-left:-10px;color: #f2f6f7; letter-spacing: 2.5px;">CONTACTO</h2>
            <br>
            <br>
        
          <br>
         
          <br>
          
          <br>
          <br>
        <div class="txt-formulario" style="margin-left: -10px;">
          <p  style="margin-top: -100px;color: #e5e5e5">Dejanos tu mensaje y nos <br> pondremos en contacto a la brevedad.</p>
         
        </div>
        
        </div>
        <br>
        <br>
        <br>
        <div class="contact-form" style="">
          <div class="input-fields " style="width: 90%;">
            <p style="margin-left:50px;color: #e5e5e5;">Los campos con * son obligatorios.</p>
        <div class="contenedor-input" style="display: block;">
            <hr width="72%">
            <form action="https://formsubmit.co/malu.malenacampana@gmail.com" method="POST" class="formulario form" id="formulario"  >
            
             <div style="form-container">
               <!-- Grupo: Nombre -->
               <div class="formulario__grupo form__group" id="grupo__nombre" style="display: flex;">
                <label style="margin-top: 20px; display: flex; margin-right: 3px;" for="nombre" class="formulario__label">Nombre/Empresa</label>
                <div class="formulario__grupo-input" style="width: 50%; margin-left: 24px;">
                  
                  <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre/Empresa">
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                
                <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
              
              </div>
              <hr class="hr-resp" style="width: 72%;">
        
             
        
           
                <!-- Grupo: Correo Electronico -->
                <div class="formulario__grupo form__group" id="grupo__correo" style="display: flex; width: 100%;">
                  
                  <div style >
                   <label  style="margin-top: 8px; display: flex; margin-right:7 px;margin-top: 20px;" for="correo" class="formulario__label">Correo Electronico </label>
              
   
                 </div>
                   <div class="formulario__grupo-input"  style="width: 50%;margin-left: 5px;">
                     <input style="margin-top: 12px;margin-bottom: -10px;"  type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  
                   </div>
                  
                 </div>
               >
                
                 </div>
                  <hr width="72%">
      
       
                 <!-- Grupo: Teléfono -->
                 <div class="formulario__grupo form-group" id="grupo__telefono" style="display: flex;margin-top: 10px;">
   
                   <label  style="width: 20%;margin-left:px;margin-top: 10px;" for="telefono" class="formulario__label" id="telefono" >Teléfono</label>
                 
                   <div class="formulario__grupo-input" style="width: 50%; ;margin-top: -10px;margin-left: 10px;">
                   
                     <input maxlength="10" minlength="5" style="margin-left: px; ;" type="number" class="formulario__input" name="telefono" id="input-telefono" placeholder="1122334455">
                  
                   </div>
                
                 
                 </div>
           <hr width="72%">
          </div>
          </div>
      
        <div>
          <div  class="msg " style="float: left;">
            <textarea cols="200" style="float: right;position: relative;; margin: 0 auto; width: 380px;" style="font-weight: bold; font-size: 15px;" placeholder="Por favor escribe tu consulta aqui"  name="Por favor escribe tu consulta aqui" id=""></textarea>
           </div>
          <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
              <input class="formulario__checkbox" style="visibility: hidden;" type="" name="terminos" id="terminos">
             
            </label>
          </div>
    
          <div class="formulario__mensaje" id="formulario__mensaje">
           <p></p>
          </div>
    
          <div class="formulario__grupo formulario__grupo-btn-enviar form__submit">
            <button type="submit" class="formulario__btn">Enviar</button>
         
          </div>
        </div>
        
            
           
            </form>
   
      </div>
      
    </div>
    </section>
    <footer style="margin-bottom:0; ">
        <div style="list-style: none;display: flex; background-image: url(rectangulo.png);">
         <div style="display: flex; margin: 10p;">
            <li style="margin-top: 5px;"><img src="pivot.net.ar-removebg.png" alt=""></li>
           
         </div>
         <div class="link-footer" style="display: flex;list-style: none;margin-left: 80px;">
           
            <li><a href="https://www.instagram.com/pivot_digitalworld/"><img width="20px" style="margin-top: 5px" src="ig footer.png" alt=""></li></a>
            <li><a href="https://www.linkedin.com/in/ignacioargonz/"><img width="20px" style="margin-top: 5px" src="linkfooterr.png" alt=""></li></a>
            <li style="margin-left: 10px;margin-top: 0px;"><a style="color: #4c5fa8;" href="">Todos los derechos reservados</a></li>
           
        
        </div>
    
    </footer>
    
    
    
</section>


<script>
    const menu = document.querySelector(".menu");
const openMenuBtn = document.querySelector(".open-menu");
const closeMenuBtn = document.querySelector(".close-menu");

function toggleMenu() {
menu.classList.toggle("menu_opened");
}

openMenuBtn.addEventListener("click", toggleMenu);
closeMenuBtn.addEventListener("click", toggleMenu);
  </script>


</script>

<script>
  const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});

</script>

<script src="formulariopivot.js"></script>
	

  <script src="pivotslider.js"></script>
  <script src="pivotquestions.js"></script>

  <script src="acordeon.js"></script>
</body>
</html>