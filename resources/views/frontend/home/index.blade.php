@extends('frontend.welcome') 
@section('content')
<div class="header-spacer"></div>

<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <article class="hentry post post-standard has-post-thumbnail sticky">

        <div class="post-thumb">
          <img src="{{$first_post->featured}}" alt="seo">
          <div class="overlay"></div>
          <a href="app/img/post1.jpg" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
          <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
        </div>

        <div class="post__content">

          <div class="post__content-info">

            <h2 class="post__title entry-title ">
              <a href="{{route('detail.page',['id' => $first_post->id])}}">{{$first_post->title}}</a>
            </h2>

            <div class="post-additional-info">

              <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$first_post->created_at->diffforhumans()}}
                                            </time>

                                        </span>

              <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{$first_post->category->name}}</a>
                                        </span>

              <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

            </div>
          </div>
        </div>

      </article>
    </div>
    <div class="col-lg-2"></div>
  </div>

  <div class="row">
    @foreach ($second_post as $item)
    <div class="col-lg-6">
      <article class="hentry post post-standard has-post-thumbnail sticky">

        <div class="post-thumb">
          <img src="{{$item->featured}}" alt="seo">
          <div class="overlay"></div>
          <a href="app/img/2.png" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
          <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
        </div>

        <div class="post__content">

          <div class="post__content-info">

            <h2 class="post__title entry-title ">
              <a href="{{route('detail.page',['id' => $item->id])}}">{{$item->title}}</a>
            </h2>

            <div class="post-additional-info">

              <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$item->created_at->diffforhumans()}}
                                            </time>

                                        </span>

              <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{$item->category->name}}</a>
                                        </span>

              <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

            </div>
          </div>
        </div>

      </article>
    </div>
    @endforeach
  </div>
</div>


<div class="container-fluid">
  <div class="row medium-padding120 bg-border-color">
    <div class="container">
      <div class="col-lg-12">
        <div class="offers">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
              <div class="heading">
                <h4 class="h1 heading-title">Laravel 5.3</h4>
                <div class="heading-line">
                  <span class="short-line"></span>
                  <span class="long-line"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="case-item-wrap">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb">
                    <img src="app/img/3.jpg" alt="our case">
                  </div>
                  <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                </div>
              </div>

              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb">
                    <img src="app/img/1.png" alt="our case">
                  </div>
                  <h6 class="case-item__title">Claritas est etiam processus dynamicus</h6>
                </div>
              </div>

              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                    <img src="app/img/2.png" alt="our case">
                  </div>
                  <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="padded-50"></div>
        <div class="offers">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
              <div class="heading">
                <h4 class="h1 heading-title">Laravel 5.3</h4>
                <div class="heading-line">
                  <span class="short-line"></span>
                  <span class="long-line"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="case-item-wrap">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb">
                    <img src="app/img/2.png" alt="our case">
                  </div>
                  <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                </div>
              </div>

              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb">
                    <img src="app/img/3.jpg" alt="our case">
                  </div>
                  <h6 class="text-center case-item__title">Claritas est etiam processus dynamicus</h6>
                </div>
              </div>

              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                    <img src="app/img/4.jpg" alt="our case">
                  </div>
                  <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="padded-50"></div>
        <div class="offers">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
              <div class="heading">
                <h4 class="h1 heading-title">Laravel 5.3</h4>
                <div class="heading-line">
                  <span class="short-line"></span>
                  <span class="long-line"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="case-item-wrap">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb">
                    <img src="app/img/5.jpg" alt="our case">
                  </div>
                  <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                </div>
              </div>

              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb">
                    <img src="app/img/2.png" alt="our case">
                  </div>
                  <h6 class="case-item__title">Claritas est etiam processus dynamicus</h6>
                </div>
              </div>

              <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                <div class="case-item">
                  <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                    <img src="app/img/6.jpg" alt="our case">
                  </div>
                  <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="padded-50"></div>
      </div>
    </div>
  </div>
</div>

<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="subscribe scrollme">
          <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
            <h4 class="subscribe-title">Email Newsletters!</h4>
            <form class="subscribe-form" method="post" action="">
              <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
              <button class="subscr-btn">subscribe
                                <span class="semicircle--right"></span>
                            </button>
            </form>
            <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

          </div>

          <div class="images-block">
            <img src="app/img/subscr-gear.png" alt="gear" class="gear">
            <img src="app/img/subscr1.png" alt="mail" class="mail">
            <img src="app/img/subscr-mailopen.png" alt="mail" class="mail-2">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Subscribe Form -->
@endsection