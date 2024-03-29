<?php 
   include 'header.php';
?>
<script>
window.onload = function () {
var el = document.getElementById('fecha');

  el.addEventListener("click", function () {
    el.parentNode.parentNode.classList.add("hidden");
});

};
</script>

<style>
html, body {
  padding: 0px;
  margin: 0px;
}

.modal-whapper {
  position: fixed;
  top: 0px;
  left: 0px;
  bottom: 0px;
  right: 0px;
  z-index: 1003;
  
  animation: show 1s linear;
  -webkit-animation: show 1s linear;
}

.hidden {
  display: none;
}

@keyframes show {
  0% { opacity: 0 }
  100% { opacity: 1 }
}

@-webkit-keyframes show {
  0% { opacity: 0 }
  100% { opacity: 1 }
}

.modal-overlay {
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  right: 0px;
  opacity: 0.4;
  background-color: black;
}

.modal-container {
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  right: 0px;
  margin: auto;
  height: 300px;
  width: 560px;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0px 0px 10px black;  
}

.modal-close {
  position: absolute;
  top: -16px;
  right: -16px;
  width: 32px;
  height: 32px;
  cursor: pointer;
  background-image: url('https://irriagro.com.br/images/cancel.png');
  background-color: white;
  background-size: calc(100% - 10px);
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 50%;
  border: 3px solid black;
  box-shadow: 0px 0px 10px black;
}

video {
  height: 100%;
  width: 100%;
  border-radius: 5px;
  overflow: hidden;
}
.vid{


  max-height:30% !important;
  max-width:90%;
	

}

</style>
<!--  -->
<!--  -->



<div class="modal-whapper ">
  <div class="modal-overlay">

  </div>
  <div class="modal-container vid wrapper row3 wow fadeInUp">
    <div class="modal-content">
       <div id="fb-root"></div>
       <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0" nonce="frOuarNc"></script>

  <!-- Your embedded video player code -->
       <div class="fb-video" data-href="https://www.facebook.com/Irriagrors/videos/183555203523372"  data-show-text="false"><blockquote cite="https://developers.facebook.com/Irriagrors/videos/183555203523372/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/Irriagrors/videos/183555203523372/">Irriagro sistemas de irrigação</a><p>Empresa especializada em irrigação. Nosso objetivo é atender com excelência nossos clientes a partir de soluções racionais e altamente rentáveis, aliando qualidade e gerando riqueza de forma sustentável.</p>Publicado por <a href="https://www.facebook.com/Irriagrors/">Irriagro sistemas de irrigação</a> em Sábado, 30 de janeiro de 2021</blockquote></div>

    </div>
    <div id ="fecha" class="modal-close">

    </div>
  </div>
</div>
  


<div class="owl-carousel owl-theme">
  <div class="item wrapper bgded overlay" style="background-image:url('images/drop.jpg');">
    <div id="pageintro" class="hoc clear"> 
  
      <article>
        <h3 class="heading">SEJA BEM VINDO A IRRIAGRO</h3>
        <p>mover a água conscientemente é o nosso negócio!</p>
        <footer><a class="btn" href="quero">Saiba mais <i class="fas fa-angle-right"></i></a></footer>
      </article>
  
    </div>
  </div>
  <div class="item wrapper bgded overlay" style="background-image:url('images/folder1.jpeg');">
    <div id="pageintro" class="hoc clear"> 
  
      <article>   
        <h3 class="heading">Atendimento especializado </h3>
        <p>informe-se sobre nossos serviços.</p>
        <footer><a class="btn" href="contato">Saiba Como<i class="fas fa-angle-right"></i></a></footer>
      </article>
  
    </div>
  </div>
  <div class="item wrapper bgded overlay" style="background-image:url('images/bg5.jpg');">
    <div id="pageintro" class="hoc clear"> 
  
      <article>
 
        <h3 class="heading">Aumente Seu Rendimento</h3>
        <p>Chuva com hora marcada e Quantidade EXATA</p>
        <footer><a class="btn" href="porque">Saiba mais <i class="fas fa-angle-right"></i></a></footer>
      </article>
  
    </div>
  </div>
  
 
</div>
<div class="wrapper row3 wow fadeInUp">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!--  -->
    <div class="sectiontitle">
      <h6 class="heading">POR QUE IRRIGAR? </h6>

    </div>
    <div class="group center btmspace-80">
      <article class="one_third first"><span class="ringcon btmspace-50" href="#"><i class="fas fa-seedling"></i></span>
        <h6 class="heading">AUMENTO DE PRODUTIVIDADE EM ATÉ 300%</h6>
        <p>Em média, a produtividade nas áreas irrigadas é 2,5 a 3,0 vezes maior do que a das áreas não irrigadas.</p>
      </article>
      <article class="one_third"><span class="ringcon btmspace-50" href="#"><i class="fas fa-chart-bar"></i></span>
        <h6 class="heading">AUMENTE O VALOR DA PROPRIEDADE E O LUCRO</h6>
        <p>Em média, o valor bruto da produção nas áreas irrigadas é 5,0 vezes maior do que a das áreas não irrigadas.</p>
      </article>
      <article class="one_third"><span class="ringcon btmspace-50" href="#"><i class="fas fa-hand-holding-usd"></i></span>
        <h6 class="heading">ECONOMIZE<br> RECURSOS</h6>
        <p>Proporciona redução na mão de obra, sendo necessário apenas uma pessoa para operar o sistema de irrigação.</p>
      </article>
      <article class="one_third first"><span class="ringcon btmspace-50" href="#"><i class="fas fa-clock"></i></span>
        <h6 class="heading">ECONOMIZE TEMPO</h6>
        <p>Permite ajuste das janelas de plantio. Mais safras por ano.</p>
      </article>
      <article class="one_third"><span class="ringcon btmspace-50" href="#"><i class="fas fa-tractor"></i></span>
        <h6 class="heading">MELHORE SUA PRODUÇÃO</h6>
        <p>Permite fornecimento constante e uniforme de alimentos para vacas leiteiras, evitando a “quebra “na produção do leite</p>
      </article>
      <article class="one_third"><span class="ringcon btmspace-50" href="#"><i class="fas fa-leaf"></i></span>
        <h6 class="heading">AUMENTE SUA PRODUÇÃO</h6>
        <p>Amplia o período de produção e permite o escalonamento</p>
      </article>
    </div>
     <p class="center"><a class="btn" href="porque">Veja Mais motivos <i class="fas fa-angle-right"></i></a></p>

    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<!--  -->
<!--  -->
<!--  -->
<div class="wrapper row2 wow fadeInUp">
  <section class="hoc container clear"> 
    <!--  -->
    <article class="one_third first">
      <h6 class="heading">Quero irrigar! Por onde começar?</h6>
     <h3>1.	Projeto</h3>
      <p>Nossa equipe vai até sua propriedade para conhecer as características de sua área e os recursos disponíveis como, agua, energia e a planialtimetria. Faremos um levantamento com GPS para a realização do Pré-projeto, estudo de viabilidade, qual melhor tipo de irrigação para sua necessidade e orçamento.</p>
      <p>  Com base no pré-projeto vamos iniciar os seguintes passos:</p>
      <p class="btmspace-30">...</p>
      <p><a class="btn" href="quero">Leia mais <i class="fas fa-angle-right"></i></a></p>
    </article>
    <figure class="two_third"><a class="imgover" href="quero"><img id="quero" src="images/bg3.jpg" alt=""></a></figure>

    <!--  -->
  </section>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ 
    <div class="sectiontitle">
      <h6 class="heading">Facilidades para adquirir seu sistema</h6>
      <p></p>
    </div>
    <ul class="nospace group btmspace-80 overview">
      <li class="one_third">
        <article><a href="#"><i class="fas fa-smile"></i></a>
          <h6 class="heading"><a href="#">Parcelas Anuais Acessiveis</a></h6>
          
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-trash"></i></a>
          <h6 class="heading"><a href="#">Facil Instalação independente do tipo de energia</a></h6>
         
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-life-ring"></i></a>
          <h6 class="heading"><a href="#">Uso e manutenção simples</a></h6>
        
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class=" fas fa-low-vision"></i></a>
          <h6 class="heading"><a href="#">SSistema para qualquer tamanho de area e qualquer tipo de terreno</a></h6>
          <p>Donec cursus sapien neque gravida nulla cursus lorem ut tempor massa &hellip;</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-bug"></i></a>
          <h6 class="heading"><a href="#">Porta libero at scelerisque</a></h6>
          <p>Lorem ipsum et arcu mauris consequat semper vivamus lobortis consequat&hellip;</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-bicycle"></i></a>
          <h6 class="heading"><a href="#">Purus fusce consectetuer</a></h6>
          <p>Nisl in massa phasellus feugiat arcu sed lacinia egestas augue lorem posuere&hellip;</p>
          <footer><a href="#">View Details</a> <i class="fas fa-angle-right"></i></footer>
        </article>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">Vestibulum suspendisse <i class="fas fa-angle-right"></i></a></footer>
    ################################################################################################ -->
  </section>
</div>
<div class="wrapper row3 wow fadeInUp">
  <section class="hoc container clear"> 
    <!--  -->
    <div class="sectiontitle">
      <h6 class="heading">Tipos de serviço oferecido</h6>
      <p>Texto sobre o produto</p>
    </div>
    <div id="latest" class="group">
      <article class="one_third first"><a class="imgover" href="#"><img src="images/aspersao.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">Aspersão</h6>
          <p>A irrigação por aspersão automatizada tem se mostrado altamente eficiente em culturas como pastagem em função de algumas características</p>
          <footer><a href="aspersao">Leia Mais <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
      <article class="one_third"><a class="imgover" href="#"><img src="images/gotejamento.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">Gotejamento</h6>
          <p>A irrigação por gotejamento é uma das técnicas que são fundamentais na agropecuária brasileira. Ela é conhecida por aumentar a eficiência da produção e contribuir para a preservação do meio ambiente.</p>
          <footer><a href="gotejamento">Leia Mais <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
      <article class="one_third"><a class="imgover" href="#"><img src="images/bg2.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">Pivos</h6>
          <p>A irrigação por pivô permite aplicar, de maneira precisa, a quantidade necessária de água e fertilizantes em cada cultura, reduzindo os custos operacionais e de mão de obra, e dando resultados excelentes para o produtor.</p>
          <footer><a href="pivo">Leia Mais <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
    </div>
    <footer class="center"><a class="btn" href="lista_produtos">Veja mais produtos<i class="fas fa-angle-right"></i></a></footer>
  </section>
</div>
<?php 
   include 'footer.php'; 

?>