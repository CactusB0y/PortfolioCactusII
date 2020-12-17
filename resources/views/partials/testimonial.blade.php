<!-- ======= Testimonials Section ======= -->
<div class="testimonials paralax-mf bg-image" style="background-image: url(../img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            @foreach ($projets as $projet)
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="{{asset('img/'.$projet->images->img)}}" alt="" style="border-radius: 1%" height="700px" width="700px">
                  <span class="author">{{$projet->nom}}</span>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Testimonials Section -->
