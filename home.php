
  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img style="opacity: 0.3;" src="<?php echo web_root; ?>plugins/home-plugins/img/slides/img1.jpg" alt="" />
                <div  class="flex-caption">
                    <h3 style="color: white;" >Apply For Jobs Here</h3> 
          <p style="color: white;">Opportunities at your disporsal</p> 
           
                </div>
              </li>
              <li>
              <img style="opacity: 0.3;" src="<?php echo web_root; ?>plugins/home-plugins/img/slides/img2.jpg" alt="" />
                
              
                
                <div class="flex-caption">
                    <h3 style="color: white;">Advertise Here</h3> 
          <p style="color: white;">Get the best candidate for your gig</p> 
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 

 
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Job Categories</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
  <img src="http://tny.im/rXh" alt="image here">
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Developers</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
        

         

          &nbsp;&nbsp; <strong><a href="#"> <i>PataJob</i> </a></strong> website was designed and developed by <strong>Polycarp Etyang Mubweka</strong></strong>.
        

        </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
             
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Google Big Launch In Kenya
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                    The new hub, Google said, will help to create transformative products and services for people in Africa and around the world.

Among the new employees sought by the firm include engineering managers, product managers, software engineers, and developer relations engineers.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Top Hiring Sector Currently
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    The number of nationwide job openings is now more than 60% higher than it was before the pandemic. Here are the companies that posted the largest numbers of jobs in March and are actively hiring at a particularly rapid pace in April.* They include gig platforms, retail businesses, home improvement stores, financial institutions, healthcare providers, and restaurants.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Robots Replacing Humans
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    In an interview with the New York Times, the tech avantgarde Elon Musk said that artificial intelligence would take over humans in the next five years.

In this blog, we shall discuss which jobs AI or robots may take over in the future.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> Highest Paying Jobs
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    If a good salary is important to you, check out our list of the highest-paying jobs. These are the best-paying jobs from our 2022 Best Jobs list, each with an average salary of more than $100,000. We've ranked them by median salary. 
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>From Our Clients...</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p> On top of being legitimate, <b>PataJob</b> is a straight forward and easy-to-use platform, for basically any user. I got my job as a Senior Developer via this platform. I endorse and recommend it for anyone out there seeking a job.</p></blockquote>
                      <div class="carousel-info">
                      <a target="_blank" href="https://linktr.ee/polycarpdev"> 
                        
                      <div class="pull-right">
                        <span class="testimonials-name">Polycarp </span>
                        <span class="testimonials-post">Senior Developer</span>
                      </div>
                      <img  src="https://d1fdloi71mui9q.cloudfront.net/pWEkRlUsTsmQB8MizT8P_LW91daWm5palEv01" class="pull-right">
                      </a>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>