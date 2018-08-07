@extends("Frontend::layouts.default")

@section('content')
    <!--======= WELCOME AREA =======-->
    <div id="home" class="welcome-area" data-stellar-background-ratio="0.6" style="background-image: url({!! asset('public/assets/frontend') !!}/img/creative_two.jpg);">
        <div class="welcome-table">
            <div class="welcome-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-text">
                                <h2 class="theme-color">Liem Phan</h2>
                                <h1 class="cd-headline clip">
                                    <span class="bct-text">I am</span>
                                    <span class="cd-words-wrapper">
                                            <b class="is-visible">Developer.</b>
                                            <b>Photographer.</b>
                                            <b>Freelancer.</b>
                                        </span>
                                </h1>
                                <div class="about-btn">
                                    <a class="smoth-scroll" href="#work"><i class="fa fa-briefcase"></i>my projects</a>
                                    <a class="btn-black smoth-scroll" href="#contact"><i class="fa fa-rocket"></i>Hire Me</a>
                                </div>

                            </div>
                        </div>
                    </div> <!--/.row-->
                </div> <!--/.container-->
            </div>
        </div>
        <div class="bg-shape-2" style="background-image: url({!! asset('public/assets/frontend') !!}/img/banner-wave-2.png)"></div>
    </div>
    <!--===== END WELCOME AREA =====-->

    <!--===== ABOUT AREA =====-->
    <div id="about" class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="author-image" style="background-image: url({!! asset('public/assets/frontend') !!}/img/profile-pic-bg.png);">
                        <img src="{!! asset('public/assets/frontend') !!}/img/author.jpg" alt="Author Image"> <!--=== about image ===-->
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-text">
                        <h2><span>About</span> me</h2>
                        <h4>A Creative Full Stack Web Developer.</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <div class="social-links"> <!--=== social-links ===-->
                            <ul>
                                <li><a href="https://www.facebook.com/xRuaSieuTocx"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/liem-phan-63903611b/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!--/.row-->
            <div class="row margin-top-80">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title wow zoomIn" data-wow-delay="0.2s">
                        <span class="title-bg">skills</span>
                        <h2>
                            <span class="first-part">my</span>
                            <span class="second-part">skills</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(!$skills->isEmpty())
                    @foreach($skills->chunk(3) as $skill_chunk)
                <div class="col-md-6">
                    <div class="skills">
                        @foreach($skill_chunk as $skill)
                        <div class="single-skill"> <!-- Single Skill -->
                            <div class="skill-info">
                                <h4>{!! $skill->name !!}</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{!! $skill->power !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $skill->power !!}%;"><span>{!! $skill->power !!}%</span></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div> <!--/.container-->
    </div>
    <!--===== END ABOUT AREA =====-->

    <!--===== SERVICES AREA =====-->
    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title wow zoomIn" data-wow-delay="0.2s">
                        <span class="title-bg">service</span>
                        <h2>
                            <span class="first-part">my</span>
                            <span class="second-part">services</span>
                        </h2>
                    </div>
                </div>
            </div> <!--/.row-->

            <div class="row">
                <div class="col-md-12 service-list">
                    @if(!$services->isEmpty())
                        @foreach($services as $k=>$service)
                    <div class="single-service">
                        <div class="service-img" style="background-image: url({!! asset('public/assets/frontend') !!}/img/service/{!! $k+1 !!}.png)"></div>
                        <h3>{!! $service->name !!}</h3>
                        <p>{!! Str::words($service->description, 25) !!}</p>

                    </div>
                        @endforeach
                    @endif
                </div>
            </div> <!--/.row-->
        </div> <!--/.container-->
    </div>
    <!--====== END SERVICES AREA ======-->

    <!--====== WORK AREA ======-->
    <div id="work" class="work-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title wow zoomIn" data-wow-delay="0.2s">
                        <span class="title-bg">works</span>
                        <h2>
                            <span class="first-part">client</span>
                            <span class="second-part">projects</span>
                        </h2>
                    </div>
                </div>
            </div> <!--/.row-->

            <div class="work-inner">
                <div class="row">
                    @if(!$projects->isEmpty())
                        @foreach($projects as $project)
                    <div class="col-md-4 col-sm-6 col-xs-12 mix medias"> <!-- Single Work -->
                        <div class="single-work">
                            <img src="{!! $project->img_url !!}" class="img-fluid" alt="">
                            <div class="item-hover">
                                <div class="work-table">
                                    <div class="work-tablecell">
                                        <div class="hover-content">
                                            <h4>{!! $project->name !!}</h4>
                                            <a href="{!! asset('public/assets/frontend') !!}/img/work/1.jpg" class="work-popup"><i class="fa fa-search-plus"></i></a>
                                            <a href="creative_two.html#"><i class="fa fa-chain-broken"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div> <!--/.row-->
            </div>
        </div><!--/.container-->
    </div>
    <!--====== END WORK AREA ======-->

    <!--====== STAT AREA ======-->
    <div class="stat-area section-padding" style="background-image: url({!! asset('public/assets/frontend') !!}/img/stat-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-stat">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="count-stat">
                            <h3><span class="count">40</span></h3>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-stat">
                        <div class="icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="count-stat">
                            <h3><span class="count">5</span></h3>
                            <h4>years of experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-stat">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="count-stat">
                            <h3><span class="count">87</span></h3>
                            <h4>Projects done</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--====== END STAT AREA ======-->

    <!--==== CTA AREA =====-->
    <div class="cta-area section-padding" style="background-image: url({!! asset('public/assets/frontend') !!}/img/cta-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="wow fadeInLeft" data-wow-delay="0.4s">Do you have any project?</p>
                    <h2 class="wow fadeInRight" data-wow-delay="0.8s">Let's work together indeed!</h2>
                    <a href="#contact" class="wow fadeInDown smoth-scroll" data-wow-delay="1.2s"><i class="fa fa-user"></i>hire me</a>
                </div>
            </div>
        </div>
    </div>
    <!--==== END CTA AREA =====-->

    <!--====== CONTACT INFO AREA ======-->
    <div id="contact" class="contact-info-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title wow zoomIn" data-wow-delay="0.2s">
                        <span class="title-bg">contact</span>
                        <h2>
                            <span class="first-part">Contact</span>
                            <span class="second-part">me</span>
                        </h2>
                    </div>
                </div>
            </div> <!--/.row-->

            <div class="row margin-bottom-60">
                <div class="col-md-4">
                    <div class="single-info"> <!-- Single Info -->
                        <div class="info-icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="info-content">
                            <h5>my location:</h5>
                            <p>{!! $homestay->address !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-info"> <!-- Single Info -->
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5>Phone number:</h5>
                            <p>{!! $homestay->phone !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-info"> <!-- Single Info -->
                        <div class="info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h5>email address:</h5>
                            <p>{!! $homestay->email !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="{!! route('frontend.contact.post') !!}"> <!-- Start Contact From -->
                            {!! Form::token() !!}
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name*" required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email*" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject*" required="required" data-error="Subject is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="7" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-effect btn-sent" value="Send message">
                                    </div>
                                </div>
                            </div>
                        </form> <!-- End Contact From -->
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="map"></div>
                </div>
            </div> <!--/.row-->
        </div> <!--/.container-->
    </div>
    <!--===== END CONTACT INFO AREA ======-->
@stop

@section('script')
    <!-- POPUP -->
    <link rel="stylesheet" href="{!! asset('public/assets/frontend') !!}/js/popup/sweetalert.css">
    <script src="{!! asset('public/assets/frontend') !!}/js/popup/sweetalert.js"></script>


    <script>
        $(document).ready(function () {
            $('#contact-form').validator();

            /*SCROLL*/
            @if(Session::has('success'))
             swal({!! Session::get('success') !!}, '', "success");
            @endif

        })
    </script>
@stop

