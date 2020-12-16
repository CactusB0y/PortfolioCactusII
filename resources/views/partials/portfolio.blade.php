<!-- ======= Portfolio Section ======= -->
<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        {{-- ici --}}
        @foreach ($projets as $projet)
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('img/'.$projet->images->img)}}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{asset('img/'.$projet->images->img)}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{$projet->nom}}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{$projet->tags->tag}}</span> / <span class="w-date">{{$projet->date}}</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{$projet->link}}"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        @endforeach

      </div>
    </div>
  </section><!-- End Portfolio Section -->