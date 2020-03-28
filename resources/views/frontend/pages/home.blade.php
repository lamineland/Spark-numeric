@extends('frontend.layouts.global')

@section('title', 'Accueil')

@section('content')
    
  <div class="site-blocks-cover overlay" style="background-image: url({{ asset('create/images/hero_1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                      
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1>We Love To Build <span class="typed-words"></span></h1>
              <p class="lead mb-5">La <a href="#" target="_blank">donnée</a> au coeur du numérique </p>
              <div><a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="btn btn-primary btn-md">Watch Video</a></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>  


  <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="p-3 box-with-humber">
            <div class="number-behind">01.</div>
            <h2 class="text-primary">Innovate</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
            <ul class="list-unstyled ul-check primary">
              <li>Customer Experience</li>
              <li>Product Management</li>
              <li>Proof of Concept</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="p-3 box-with-humber">
            <div class="number-behind">02.</div>
            <h2 class="text-primary">Create</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
            <ul class="list-unstyled ul-check primary">
              <li>Web Design</li>
              <li>Branding</li>
              <li>Web &amp; App Development</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="p-3 box-with-humber">
            <div class="number-behind">03.</div>
            <h2 class="text-primary">Scale</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
            <ul class="list-unstyled ul-check primary">
              <li>Social Media</li>
              <li>Paid Campaigns</li>
              <li>Marketing &amp; SEO</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Our work  --}}
  <section class="site-section" id="work-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-10 text-center">
          <h2 class="text-black h1 site-section-heading text-center">Nos réalisations</h2>
          <p class="lead">Spark Numeric place l’Homme au centre de ses missions. Ce qui lui permet
            d’assumer ses responsabilités et d’apporter sa contribution sociale afin répondre
            adéquatement à la confiance de nos clients, employés, fournisseurs et partenaires.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a href="{{ asset('create/images/img_1.jpg') }}" class="media-1" data-fancybox="gallery">
            <img src="{{ asset('create/images/img_1.jpg') }}" alt="Image" class="img-fluid">
            <div class="media-1-content">
              <h2>Bonzai Tree</h2>
              <span class="category">Web Application</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="{{ asset('create/images/img_2.jpg') }}" class="media-1" data-fancybox="gallery">
            <img src="{{ asset('create/images/img_2.jpg') }}" alt="Image" class="img-fluid">
            <div class="media-1-content">
              <h2>Simple Woman</h2>
              <span class="category">Branding</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="{{ asset('create/images/img_3.jpg') }}" class="media-1" data-fancybox="gallery">
            <img src="{{ asset('create/images/img_3.jpg') }}" alt="Image" class="img-fluid">
            <div class="media-1-content">
              <h2>Fruits</h2>
              <span class="category">Website</span>
            </div>
          </a>
        </div>

        {{-- <div class="col-md-6 col-lg-4">
          <a href="{{ asset('create/images/img_4.jpg') }}" class="media-1" data-fancybox="gallery">
            <img src="{{ asset('create/images/img_4.jpg') }}" alt="Image" class="img-fluid">
            <div class="media-1-content">
              <h2>Design Material</h2>
              <span class="category">Web Application</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="{{ asset('create/images/img_5.jpg') }}" class="media-1" data-fancybox="gallery">
            <img src="{{ asset('create/images/img_5.jpg') }}" alt="Image" class="img-fluid">
            <div class="media-1-content">
              <h2>Handy Food</h2>
              <span class="category">Branding</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="{{ asset('create/images/img_6.jpg') }}" class="media-1" data-fancybox="gallery">
            <img src="{{ asset('create/images/img_6.jpg') }}" alt="Image" class="img-fluid">
            <div class="media-1-content">
              <h2>Cat With Cup</h2>
              <span class="category">Website</span>
            </div>
          </a>
        </div> --}}
       
      </div>
    </div>
  </section>

  <section class="section ft-feature-1">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-12 bg-black w-100 ft-feature-1-content">
          <div class="row align-items-center">
            <div class="col-lg-5">
              
                <img src="{{ asset('create/images/about_1.jpg') }}" alt="Image" class="img-fluid mb-4 mb-lg-0">
              
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-5">
                <h3 class="d-flex align-items-center"><span class="icon icon-beach_access mr-2"></span><span>Strategy</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                <p><a href="#">Lire plus ..</a></p>
              </div>

              <div>
                <h3 class="d-flex align-items-center"><span class="icon icon-build mr-2"></span><span>Web Development</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                <p><a href="#">Lire plus ..</a></p>
              </div>

            </div>
            <div class="col-lg-3">
              <div class="mb-5">
                <h3 class="d-flex align-items-center"><span class="icon icon-format_paint mr-2"></span><span>Art Direction</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                <p><a href="#">Lire plus ..</a></p>
              </div>

              <div>
                <h3 class="d-flex align-items-center"><span class="icon icon-question_answer mr-2"></span><span>Copywriting</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                <p><a href="#">Lire plus ..</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Testimonials --}}
  {{-- <section class="site-section testimonial-wrap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="text-black h1 site-section-heading text-center">Testimonials</h2>
        </div>
      </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
        <div>
          <div class="testimonial">
            
            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>

            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="{{ asset('create/images/person_3.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>John Smith</p>
            </figure>
          </div>
        </div>
        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="{{ asset('create/images/person_2.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Christine Aguilar</p>
            </figure>
            
          </div>
        </div>

        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="{{ asset('create/images/person_4.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Robert Spears</p>
            </figure>

            
          </div>
        </div>

        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="{{ asset('create/images/person_5.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Bruce Rogers</p>
            </figure>

          </div>
        </div>

      </div>
  </section> --}}

  {{-- Our services --}}
  <section class="site-section border-bottom" id="services-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center" data-aos="fade-up">
          <h2 class="text-black h1 site-section-heading text-center">Nos Services</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
            <div>
              <h3>Administration &amp; Maintenance des Réseaux Téléinformatiques </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-shopping_cart"></span></div>
            <div>
              <h3>Business Intelligence</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
            <div>
              <h3>Data Science</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
            <div>
              <h3>Data Architecture</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
            <div>
              <h3>Intelligence Artificielle</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
            <div>
              <h3>Développement d’applications</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
            <div>
              <h3>Sondages &amp; Etudes de Marchés</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
            <div>
              <h3>Formation</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Lire plus ...</a></p>
            </div>
          </div>
        </div>
        

      </div>
    </div>
  </section>

  {{-- About us --}}
  <div class="site-section" id="about-section">
    <div class="container">
      <div class="row mb-5">
        
        <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
          <img src="{{ asset('create/images/about_1.jpg') }}" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-7 order-md-1" data-aos="fade">

          <div class="row">

            <div class="col-12">
              <div class="text-left pb-1">
                <h2 class="text-black h1 site-section-heading">A propos de nous</h2>
              </div>
            </div>
            <div class="col-12 mb-4">
              <p class="lead">Créé par des experts issus de grandes écoles et universités, Spark Numeric est
                un cabinet de consultance et de prestation de services s’activant dans les
                Nouvelles Technologies de l’Information et de la Communication à savoir la Data
                Science (Machine Learning, Deep Learning, L’Intelligence Artificielle), la Data
                Architecture (Big Data &amp; Cloud Computing), le Business Intelligence, le Génie
                Logiciel et l’Administration des Réseaux Téléinformatiques. A cela s’ajoute son
                intervention dans tous les domaines de l&#39;activité économique en appuyant les
                entreprises dans le but d&#39;orienter leur vision vers les préférences clients; ceci en
                se basant sur des résultats d&#39;enquêtes de satisfaction, de sondage d&#39;opinion et
                d&#39;élaboration de documents scientifiques adossés sur une modélisation
                économétrique adéquate.</p>
            </div>
            {{-- <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
              <div class="unit-4">
                <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
                <div>
                  <h3>Web &amp; Mobile Specialties</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                  <p class="mb-0"><a href="#">Lire plus ...</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
              <div class="unit-4">
                <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                <div>
                  <h3>Intuitive Thinkers</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                  <p class="mb-0"><a href="#">Lire plus ...</a></p>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- Our team --}}
  <div class="site-section border-bottom" id="team-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <h2 class="text-black h1 site-section-heading">Notre équipe</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <div class="person text-center">
            <img src="{{ asset('create/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3>John Rooster</h3>
            <p class="position text-muted">Un Data scientist</p>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <div class="person text-center">
            <img src="{{ asset('create/images/person_3.jpg') }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3>Tom Sharp</h3>
            <p class="position text-muted">Un Data Architect</p>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
          <div class="person text-center">
            <img src="{{ asset('create/images/person_4.jpg') }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3>Winston Hodson</h3>
            <p class="position text-muted">Un Ingénieur statisticien économiste</p>
            
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <div class="person text-center">
            <img src="{{ asset('create/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3>John Rooster</h3>
            <p class="position text-muted">Une responsable qualité</p>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <div class="person text-center">
            <img src="{{ asset('create/images/person_3.jpg') }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3>Tom Sharp</h3>
            <p class="position text-muted">3 développeurs d’applications</p>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
          <div class="person text-center">
            <img src="{{ asset('create/images/person_4.jpg') }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3>Winston Hodson</h3>
            <p class="position text-muted">Un technicien en réseaux</p>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>

  {{-- Blog --}}
  <section class="site-section" id="blog-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <a href="single.html"><img src="{{ asset('create/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
            <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
            <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            <p><a href="#">Lire plus...</a></p>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <a href="single.html"><img src="{{ asset('create/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
            <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            <p><a href="#">Lire plus...</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <a href="single.html"><img src="{{ asset('create/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
            <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            <p><a href="#">Lire plus...</a></p>
          </div> 
        </div>
        
      </div>
    </div>
  </section>

  {{-- Contact --}}
  <section class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="text-black h1 site-section-heading">Contactez-nous</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 mb-5">

        <form action="#" class="p-5 bg-white">
            <h2 class="h4 text-black mb-5">Contact Form</h2> 

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Prénom</label>
                    <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="text-black" for="lname">Nom</label>
                    <input type="text" id="lname" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" id="email" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="subject">Sujet</label> 
                    <input type="subject" id="subject" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Ecrivez votre message ou votre question ici ..."></textarea>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Envoyer" class="btn btn-primary btn-md text-white">
                </div>
            </div>
        </form>
        </div>
        <div class="col-md-5">
          
          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Addresse</p>
            <p class="mb-4">Cité Damel en face cité Mixta</p>

            <p class="mb-0 font-weight-bold">Téléphone</p>
            <p class="mb-4"><a href="#">+221 77 337 34 52</a></p>

            <p class="mb-0 font-weight-bold">Adresse email</p>
            <p class="mb-0"><a href="#">aminesane18@gmail.com</a></p>

          </div>
          
        </div>
      </div>
    </div>
  </section>

<a href="#" class="bg-primary py-5 d-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div>
        </div>
    </div>  
</a>

@endsection