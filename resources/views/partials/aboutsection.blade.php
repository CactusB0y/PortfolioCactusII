<!-- ======= About Section ======= -->
<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  @foreach ($abouts as $about)
                      <div class="col-sm-6 col-md-5">
                        <div class="about-img">
                          <img src="{{asset('img/'.$about->src)}}" class="img-fluid rounded b-shadow-a" alt="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{$about->nom}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$about->profil}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$about->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{$about->phone}}</span></p>
                      </div>   
                    @endforeach
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skill</p>
                  @foreach ($skills as $skill)
                    <span>{{$skill->nom}}</span> <span class="pull-right">{{$skill->maitrise}}%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{$skill->maitrise}}%;" aria-valuenow="{{$skill->maitrise}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>  
                  @endforeach
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                    imperdiet et, porttitor
                    at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                    porttitor accumsan tincidunt.
                  </p>
                  <p class="lead">
                    Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                    porttitor volutpat. Vestibulum
                    ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                  </p>
                  <p class="lead">
                    Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Nulla porttitor accumsan
                    tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->