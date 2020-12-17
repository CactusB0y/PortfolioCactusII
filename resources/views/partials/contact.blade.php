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
                      @foreach ($infos as $info)
                        <div class="more-info">
                          <div>
                            <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=rue%20du%20{{$info->adresseRue}}%20{{$info->numero}}+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                          <ul class="list-ico">
                            <li><span class="ion-ios-location"></span> {{$info->adresse}}</li>
                            <li><span class="ion-ios-telephone"></span> {{$info->tel}}</li>
                            <li><span class="ion-email"></span> {{$info->mail}}</li>
                          </ul>
                        </div>
                        <div class="socials">
                          <ul>
                            <li><a href="{{$info->facebook}}"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                            <li><a href="{{$info->instagram}}"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                            <li><a href="{{$info->twitter}}"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                          </ul>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->