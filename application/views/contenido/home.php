<!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="<?php echo base_url().'img/mariposas/Img0.jpg'; ?>" alt="img">
                   <div class="slider_caption">
                    <h2>Museo Hermanas Mirabal</h2>
                    <p>Amén de Mariposas.</p>
                    <a class="slider_btn" href="<?php echo base_url().'HomeController/historia'; ?>">Mas detalles</a>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?php echo base_url().'img/mariposas/Img2.jpg'; ?>" alt="img">                   
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?php echo base_url().'img/mariposas/Img3.jpeg'; ?>" alt="img">
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->
    
    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">MUSEO HERMANAS MIRABAL</h2>
            <p>La Casa Museo de las Hermanas Mirabal es un legado histórico-cultural que está adornado de un gigantesco jardín impregnado con el aroma de sentimientos patrióticos.</p>
            <p>Una construcción de Madera, -con el estilo arquitectónico “vernácula”, por el uso de este elemento natural- y la cual se conserva en su estado original de principios del siglo XX, albergaba a la familia de las que se convertirían en heroínas del derrocamiento del último dictador de la República Dominicana y que son conocidas hoy día con el nombre de “Las Mariposas”</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">Noticias</a></li>
              <li><a href="#notice" data-toggle="tab">Eventos</a></li>      
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url().'img/mariposas/Img34.jpg'; ?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="<?php echo base_url().'HomeController/noticias'; ?>">Hipólito Mejía visita museo de las Hermanas Mirabal y exhorta a seguir el ejemplo.</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>                    
                  </li>
                </ul>                
                <a class="see_all" href="<?php echo base_url().'HomeController/noticias'; ?>">Ver Todos</a>
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">                
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Evento 1</a>
                       <span class="feed_date">28.02.15</span>                
                      </div>
                    </div>
                  </li>                  
                </ul>
                <a class="see_all" href="<?php echo base_url().'HomeController/eventos'; ?>">Ver Todos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    
    <!--=========== BEGIN SOBRE NOSOTROS SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" src="<?php echo base_url().'img/mariposas/Img10.jpg'; ?>">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="#"> Sobre Nosotros</a></h2>
                    <p>La Casa Museo tiene como misión el rescate de la memoria de estas tres mujeres, sus vida, sus pensamiento, los principios e ideales que enarbolaron las tres hermanas, así como las actividades de resistencia durante su lucha por la libertad, la justicia y los derechos humanos en la República Dominicana.</p>
                    <p>Las Hermanas Mirabal representan la resistencia y la represión, son el símbolo de la esperanza del pueblo dominicano y de todos los pueblos del mundo que han sufrido la represión y supresión de sus derechos fundamentales.</p>                                     
                    <a class="slider_btn" href="<?php echo base_url().'HomeController/historia'; ?>">Mas detalles</a>
                  </div>                 
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Eventos <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?php echo base_url().'img/mariposas/Img35.jpg'; ?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Participación Museo Hermanas Mirabal en el Museo Memorial de la Resistencia</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>  
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?php echo base_url().'img/mariposas/Img36.jpg'; ?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Inician la ruta para la V edición del Festival Cultural Hermanas Mirabal</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li> 
                </ul>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Categorías <span class="fa fa-angle-double-right"></span></h2>
                <ul>
                  <li><a href="#">Historia Dominicana</a></li>
                  <li><a href="#">Tecnologías</a></li>
                  <li><a href="#">Redes Sociales</a></li>
                  <li><a href="#">Empleos</a></li>
                  <li><a href="#">Etc...</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END SOBRE NOSOTROS SECTION ================--> 
    
    
        <!--=========== BEGIN SOBRE NOSOTROS SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
           <!-- start single blog archive -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp">
                    <div class="blogimg_container">
                        <iframe width="854" height="510" src="https://www.youtube.com/embed/kH5L4DSGAko" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h2 class="blog_title"><a href="events-single.html">Reportaje a provincia Hermanas Mirabal</a></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-clock-o"></i>Fecha: 7pm</p>
                      <p><i class="fa fa-map-marker"></i>Lugar: Salcedo</p>                      
                    </div>
                    <p class="blog_summary">Se muestra la experiencia del desarrollo, inclusión y participación de los ciudadanos de Salcedo sobre el Museo Hermanas Mirabal...</p>                    
                  </div>
                </div>
                <!-- End single blog archive -->   
            <!-- End course content -->
        </div>
      </div>
    </section>
