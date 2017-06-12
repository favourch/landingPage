<?php include 'header.php' ?>

<!--page title start-->
        <section class="page-title ptb-30">
            <div class="container padding-top-40">
                <div class="row">
                    <div class="col-md-12">
                        <h6 style="float: right;margin-bottom: -5px;">Contact us</h6>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">contact us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        

        <!-- contact-form-section -->
        <section class="section-padding">
          
          <div class="container">

            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Get in Touch</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>

            <div class="row">
                <div class="col-md-8">
                		<h3><b>Contact Us</b></h3>
                        <div class="row">
                          <div class="col-md-12">
                          <form method="post" id="contactForm3" name="contact-form">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="input-field">
                                  <input type="text" name="name" class="validate" id="name">
                                  <label for="name">Name</label>
                                </div>
                              </div><!-- /.col-md-6 -->
                              <div class="col-md-6">
                                <div class="input-field">
                                  <label class="sr-only" for="email">Email</label>
                                  <input id="email" type="email" name="email" class="validate" >
                                  <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                              </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                              <div class="col-md-12">
                                <div class="input-field">
                                  <input id="subject" type="text" name="subject" class="validate" >
                                  <label for="subject">Subject</label>
                                </div>
                              </div><!-- /.col-md-6 -->
                            </div>
                            <div class="input-field">
                              <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                              <label for="message">Message</label>
                            </div>
                            <button type="submit" name="submit" class="btn-sm btnclass">Send Message</button>
                          </form>
                          </div>
                        </div>
                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info">

                <!-- map-section -->
                <div id="myMap" class="height-350"></div>
                <!-- /.map-section -->

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                        <p>1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103</p>
                      </div>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Phone: (123) 456-7890</p>
                      </div>

                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#">first.last@example.com</a><br>
                        <a href="#">www.yourdomain.com</a></p>
                      </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>
        </section>
        <!-- contact-form-section End -->

<?php include 'footer.php' ?>