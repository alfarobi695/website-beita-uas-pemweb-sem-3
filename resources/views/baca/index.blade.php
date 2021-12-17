<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Tech Blog - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('public/baca/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('public/baca/images/apple-touch-icon.png') }}">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/baca/css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('public/baca/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('public/baca/style.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('public/baca/css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('public/baca/css/colors.css') }}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="{{ asset('public/baca/css/version/tech.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('public/baca/images/version/tech-logo1.png') }}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#author">Authors</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                @foreach($DataBerita as $key => $Berita)
                @if ($key === 0)
                <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img style="width: 788px; height: 443px;" src="{{asset('public/gambar_berita/'.$Berita->gambar_berita)}}"  alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange" style="pointer-events: none;"><a href="tech-category-01.html" title=""><td>{{ $Berita->kategori_berita->kategori_berita }}</a></span>
                                        <h4><a href="{{url('/index.'.$Berita->id_berita.'.single')}}" title="">{{ $Berita->judul }}</a></h4>
                                        <small><a href="" style="pointer-events: none;" title="">{{ $Berita->created_at }}</a></small>
                                        <small><a href="{{url('/index#author')}}" title="">by {{ $Berita->penulis->penulis }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->
                @endif
                @if ($key === 1)
                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img style="width: 394px; height: 449px;" src="{{asset('public/gambar_berita/'.$Berita->gambar_berita)}}" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                    <span class="bg-orange" style="pointer-events: none;"><a href="tech-category-01.html" title=""><td>{{ $Berita->kategori_berita->kategori_berita }}</a></span>
                                        <h4><a href="{{url('/index.'.$Berita->id_berita.'.single')}}" title="">{{ $Berita->judul }}</a></h4>
                                        <small><a href="" style="pointer-events: none;" title="">{{ $Berita->created_at }}</a></small>
                                        <small><a href="{{url('/index#author')}}" title="">by {{ $Berita->penulis->penulis }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                @endif
                @if ($key === 2)
                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img style="width: 394px; height: 449px;" src="{{asset('public/gambar_berita/'.$Berita->gambar_berita)}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                    <span class="bg-orange" style="pointer-events: none;"><a href="tech-category-01.html" title=""><td>{{ $Berita->kategori_berita->kategori_berita }}</a></span>
                                        <h4><a href="{{url('/index.'.$Berita->id_berita.'.single')}}" title="">{{ $Berita->judul }}</a></h4>
                                        <small><a href="" style="pointer-events: none;" title="">{{ $Berita->created_at }}</a></small>
                                        <small><a href="{{url('/index#author')}}" title="">by {{ $Berita->penulis->penulis }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                @endif
                @endforeach
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div id="home" class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                            @foreach($DataBerita as $key => $Berita)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{url('/index.'.$Berita->id_berita.'.single')}}" title="">
                                                <img style="width: 300px; height: 200px;" src="{{asset('public/gambar_berita/'.$Berita->gambar_berita)}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{url('/index.'.$Berita->id_berita.'.single')}}" title="">{{ $Berita->judul }}</a></h4>
                                        <p style="width: 450px;height:130px; overflow: hidden; text-overflow: inherit;">{{ $Berita->keterangan_berita }}</p>
                                        <small class="firstsmall"><a class="bg-orange" style="pointer-events: none;" title="">{{ $Berita->kategori_berita->kategori_berita }}</a></small>
                                        <small>{{ $Berita->updated_at }}</small>
                                        <small><a href="{{url('/index#author')}}" title="" >by {{ $Berita->penulis->penulis }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                            @endforeach
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                    {{ $DataBerita->links() }}
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis">

                        <div id="author" class="blog-top clearfix">
                                <h4 class="pull-left">Authors <a href="#"><i class="fa fa-rss"></i></a></h4>
                        </div><!-- end blog-top -->
                        @foreach($DataUser as $key => $User)
                            <div class="custombox authorbox clearfix"> 
                                <h4 class="small-title">About author</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="{{asset('public/foto/'.$User->foto)}}" alt="" class="img-fluid rounded-circle"> 
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#">{{ $User->name}}</a></h4>
                                        <p>{{ $User->email}}</p>
                                        <div class="topsocial">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div><!-- end social -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->
                            <hr class="invis">
                        @endforeach
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    @foreach($DataBerita as $key => $Berita)
                                        <a href="{{url('/index.'.$Berita->id_berita.'.single')}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{asset('public/gambar_berita/'.$Berita->gambar_berita)}}" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{ $Berita->judul }}</h5>
                                                <small>{{ $Berita->updated_at }}</small>
                                            </div>
                                        </a>
                                    @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Reviews</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    @foreach($DataBerita as $key => $Berita)
                                        <a href="{{url('/index.'.$Berita->id_berita.'.single')}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{asset('public/gambar_berita/'.$Berita->gambar_berita)}}" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{ $Berita->judul }}</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            <p>27k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                            <p>98k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            <p>17k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                            <p>22k</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="{{ asset('public/baca/upload/Logo2.png') }}" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->

                    </div><!-- end col -->
                </div><!-- end row -->
                <div id="contact" class="page-title lb single-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <h2><i class="fa fa-envelope-open-o bg-orange"></i> Contact us <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                            </div><!-- end col -->                 
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end page-title -->
                <hr class="invis">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h4>{{ $Service1->judul }}</h4>
                                    <p>{{ $Service1->isi }}</p>
                                    <h4>{{ $Service2->judul }}</h4>
                                    <p>{{ $Service2->isi }}</p>
                                    <h4>{{ $Service3->judul }}</h4>
                                    <p>{{ $Service3->isi }}</p>
                                </div>
                                <div class="col-lg-7">
                                    <form class="form-wrapper" method="post" 
                                    action="{{ url('/index') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                        <input type="text"  class="form-control @error('name_cus') is-invalid @enderror" 
                                        name="name_cus" id="name_cus" placeholder="Your name">
                                        @error('name_cus')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" class="form-control @error('email_cus') is-invalid @enderror" 
                                        name="email_cus" id="email_cus" placeholder="Email address">
                                        @error('email_cus')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <textarea  class="form-control @error('pesan_cus') is-invalid @enderror" 
                                        name="pesan_cus" id="pesan_cus" placeholder="Your message"></textarea>
                                        @error('pesan_cus')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="{{ asset('public/baca/images/version/tech-footer-logo1.png') }}" alt="" class="img-fluid"></a>
                                <p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>
                                <div class="social">
                                    <a href="https://www.instagram.com/_god.it/?hl=id" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="https://www.instagram.com/_god.it/?hl=id" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/_god.it/?hl=id" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.instagram.com/_god.it/?hl=id" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://www.instagram.com/_god.it/?hl=id" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <hr class="invis">
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Tech Blog. Design: <a href="https://www.instagram.com/_god.it/?hl=id">Copy Right 2021</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->
        <div class="dmtop">Scroll to Top</div>
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{ asset('public/baca/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/baca/js/tether.min.js') }}"></script>
    <script src="{{ asset('public/baca/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/baca/js/custom.js') }}"></script>


</body>
</html>