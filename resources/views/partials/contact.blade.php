    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(../img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h5 class="title-left">
                          Send Message Us
                        </h5>
                      </div>
                      <div>
                        
                      <form action="/contact" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nom</label>
                          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Sujet</label>
                          <input type="text" name="sujet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label>Message</label>
                          <textarea name="message" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                      </form>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left">
                          Get in Touch
                        </h5>
                      </div>
                      <div class="more-info">
                        <p class="lead">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                          expedita aperiam aliquid at.
                          Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                          mollitia inventore?
                        </p>
                        <ul class="list-ico">
                          <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                          <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                          <li><span class="ion-email"></span> contact@example.com</li>
                        </ul>
                      </div>
                      <div class="socials">
                        <ul>
                          <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                          <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                          <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                          <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->