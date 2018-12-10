@extends('layouts.app')

@section('content')

            <div class="content">
                <!-- Header -->
                <header class="masthead">
                    <div class="container">
                        <div class="intro-text">
                            <div class="intro-lead-in">Tavs uzticamākais partneris</div>
                            <div class="intro-heading text-uppercase">SIA BŪVGALDNIEKS</div>
                            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Uzzināt vairāk</a>
                        </div>
                    </div>
                </header>

                <!-- Services -->
                <section id="services">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Mūsu pakalpojumi</h2>
                                <h3 class="section-subheading text-muted">Mēs piedāvājam dažāda veida pakalpojumus.</h3>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-building fa-stack-1x fa-inverse"></i>
            </span>
                                <h4 class="service-heading">Celtniecība</h4>
                                <p class="text-muted">Mēs uzbūvēsim jums kaut vai māju, sākot no pamatiem līdz jumtam. Esam ar vairāk kā 10 gadu pieredzi celtniecības jomā.</p>
                            </div>
                            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
                                <h4 class="service-heading">Remonts</h4>
                                <p class="text-muted">Piedāvājam fasādes restaurāciju, mājokļa remontu, ēkas struktūras stiprināšanas darbus.</p>
                            </div>
                            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                                <h4 class="service-heading">Drošības sistēmas</h4>
                                <p class="text-muted">Aprīkosim jūsu īpašumu ar modernāko drošības sistēmu, lai jums nebūtu jauztraucās par zaudējumiem.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About -->
                <section id="about" class="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Par mums</h2>
                                <h3 class="section-subheading text-muted">Mūsu stāsts.</h3>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <img src="/img/logo.jpeg" alt="" class="img-fluid" style="width: 15%; height: 15%; padding-bottom: 50px">
                            <p style="text-align: justify">Uzņēmums "Būvgaldnieks" ir dibināts samērā nesen, 2005. gada janvārī , taču uzņēmumā strādājošo meistaru darba pieredze un rūdījums šajā nozarē ir mērojams 10 gadu garumā. Visi darbinieki profesionāli pārzina savus veicamos darbus. Pie mums arī strādā meistari, kuriem ir Latvija Amatniecības Kameras meistaru diplomi. Tāpat ir nodrošināts maksimāls tehniskais aprīkojums, kurš nodrošina ātrāku un kvalitatīvāku darbu izpildi. Ir nodibināta ilggadēja sadarbība ar kokapstrādes uzņēmumiem, kuri piegādā mums nepieciešamās sagataves un detaļas, tādējādi ir iespējams nodrošināt samērīgas kokmateriālu cenas, augstāku kvalitāti un garantijas.</p>


                        </div>
                        <div class="row">
                            <p><b>"Būvgaldnieks" piedāvā:</b></p>
                            <ul style="list-style-type:circle">
                                <li>Konsultāciju, uzmērīšanu un veicamo darbu tāmēšanu.</li>
                                <li>Pirts telpu, priekštelpu un atpūtas telpu izplānošanu.</li>
                                <li>Materiālu sagāde.</li>
                                <li>Piemērotas pirts krāsns piegāde un uzstādīšana.</li>
                                <li>Kvalitatīvu darbu izpildi ievērojot būvniecības normatīvus un pasūtītāju vēlmes.</li>
                                <li>Nodrošinām garantijas un pēc garantijas servisu.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Portfolio Grid -->
                <section class="bg-light" id="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Mūsu projekti</h2>
                                <h3 class="section-subheading text-muted">Šeit varat redzēt pēdējos, mūsu veidotos projektus.</h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($projects as $project)
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{ $project->id }}">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img width="400" height="300" class="img-fluid imgtype1" src="storage/{{ $project->image}}" alt="">
                                    </a>
                                    <div class="portfolio-caption">
                                        <h4>{{$project->name}}</h4>
                                        <p class="text-muted">{{$project->desc}}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Kontakti</h2>
                                <h3 class="section-subheading text-muted">Esam gatavi atbildēt uz jebkuru jūsu jautājumu.</h3>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-5">
                                 <p class="help-block text-primary">Mūsu e-pasts: ik.buvgaldnieks@inbox.lv</p>
                                 <p class="help-block text-primary">Mūsu tālrunis: +37129267620</p>
                                 <p class="help-block text-primary">Fax - 67470902</p>
                                 <p class="help-block text-primary">Firmas nosaukums - SIA ''Būvgaldnieks"</p>
                                 <p class="help-block text-primary">Vienotais reģistrācijas numurs: 40003913664</p>
                                 <p class="help-block text-primary">Adrese: Rīga, Lapu iela 23-2, LV-1002</p>
                                 <p class="help-block text-primary">Firmas īpašnieks: Jānis Cepurnieks - Cepurītis</p>
                             </div>
                             <div class="col-md-7">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2176.5410824632!2d24.065604516254712!3d56.93953048088729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed0178681639b%3A0xf4e91720405637ad!2sLapu+iela+23%2C+Zemgales+priek%C5%A1pils%C4%93ta%2C+R%C4%ABga%2C+LV-1002!5e0!3m2!1slv!2slv!4v1544453738381" width="100%" height="450" frameborder="1" style="border:0"></iframe>
                             </div>
                             <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
                <!-- Portfolio Modals -->

                <!-- Modal 1 -->
                @foreach($projects as $project)
                    <div class="portfolio-modal modal fade" id="portfolioModal{{ $project->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-dismiss="modal">
                                    <div class="lr">
                                        <div class="rl"></div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 mx-auto">
                                            <div class="modal-body">
                                                <h2 class="text-uppercase">{{$project->name}}</h2>
                                                <p class="item-intro text-muted">Dārzciema biroju centrs.</p>
                                                <img width="400" height="300" class="img-fluid d-block mx-auto" src="storage/{{ $project->image}}" alt="img">
                                                <p>{{$project->desc}}</p>
                                                <ul class="list-inline">
                                                    <li>Cena: {{$project->price}}</li>
                                                </ul>
                                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                    <i class="fas fa-times"></i>
                                                    Aizvērt</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



@endsection
