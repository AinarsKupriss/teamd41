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

                <!-- About -->
                <section id="about">
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
                            <p>"Būvgaldnieks" piedāvā:</p>
                            <ul style="list-style-type:circle">
                                <li>Konsultāciju, uzmērīšanu un veicamo darbu tāmēšanu.</li>
                                <li>Pirts telpu, priekštelpu un atpūtas telpu izplānošanu.</li>
                                <li>Materiālu sagāde.</li>
                                <li>Piemērotas pirts krāsns piegāde un uzstādīšana.</li>
                                <li>Kvalitatīvu darbu izpildi ievērojot būvniecības normatīvus un pasūtītāju vēlmes.</li>
                                <li> Nodrošinām garantijas un pēc garantijas servisu.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Team -->
                <section class="bg-light" id="team">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Mūsu komanda</h2>
                                <h3 class="section-subheading text-muted">Mūsu draudzīgais kolektīvs.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="/images/team/1.jpg" alt="">
                                    <h4>Krišjānis</h4>
                                    <p class="text-muted">Valdes priekšsēdētājs</p>
                                    <ul class="list-inline social-buttons">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="/images/team/2.jpg" alt="">
                                    <h4>Ainārs</h4>
                                    <p class="text-muted">Projektu vadītājs</p>
                                    <ul class="list-inline social-buttons">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="/images//team/3.jpg" alt="">
                                    <h4>Emīls</h4>
                                    <p class="text-muted">Būvinženieris</p>
                                    <ul class="list-inline social-buttons">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Clients -->
                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/kursi.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/bosch.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/eilaj.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/upb.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Sazinies ar mums</h2>
                                <h3 class="section-subheading text-muted">Esam gatavi atbildēt uz jebkuru jūsu jautājumu.</h3>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                                  <p class="help-block text-primary">Mūsu e-pasts: info@buvnesis.lv</p>
                                 <p class="help-block text-primary">Mūsu tālrunis: +37125634245</p>
                                 <p class="help-block text-primary">Mūsu birojs: Krišjāņa Valdemāra iela 1c</p>
                             </div>
                             <div class="col-md-6">
                                 <img class="img-fluid d-block mx-auto" src="/images/map.png" alt="">
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

                <!-- Modal 2 -->
                {{--<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="close-modal" data-dismiss="modal">--}}
                                {{--<div class="lr">--}}
                                    {{--<div class="rl"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="container">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-8 mx-auto">--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<h2 class="text-uppercase">Bibliotēka</h2>--}}
                                            {{--<p class="item-intro text-muted">Vidzemes bibliotēka.</p>--}}
                                            {{--<img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/02-thumbnail.jpg" alt="">--}}
                                            {{--<p>Šī ir Vidzemes lielākā bibliotēka. Tās platība ir 5500cm3.</p>--}}
                                            {{--<ul class="list-inline">--}}
                                                {{--<li>Datums: Marts 2015</li>--}}
                                                {{--<li>Pasūtītājs: Valmieras pašvaldība</li>--}}
                                                {{--<li>Kategorija: Celtniecība</li>--}}
                                            {{--</ul>--}}
                                            {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                                                {{--<i class="fas fa-times"></i>--}}
                                                {{--Aizvērt</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Modal 3 -->--}}
                {{--<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="close-modal" data-dismiss="modal">--}}
                                {{--<div class="lr">--}}
                                    {{--<div class="rl"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="container">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-8 mx-auto">--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<h2 class="text-uppercase">Uzņēmuma galvenā mītne</h2>--}}
                                            {{--<p class="item-intro text-muted">Rīga, Krišjāņa Valdemāra iela 1c.</p>--}}
                                            {{--<img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/03-thumbnail.jpg" alt="">--}}
                                            {{--<p>Šī ir mūsu galvenā mītne(HQ). Tā sastāv no 5 stāviem un tās kopējā platība ir 3500cm3.</p>--}}
                                            {{--<ul class="list-inline">--}}
                                                {{--<li>Datums: Jūnijs 2012</li>--}}
                                                {{--<li>Kategorija: Celtniecība</li>--}}
                                            {{--</ul>--}}
                                            {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                                                {{--<i class="fas fa-times"></i>--}}
                                                {{--Aizvērt</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Modal 4 -->--}}
                {{--<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="close-modal" data-dismiss="modal">--}}
                                {{--<div class="lr">--}}
                                    {{--<div class="rl"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="container">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-8 mx-auto">--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<h2 class="text-uppercase">Guļbaļķu māja</h2>--}}
                                            {{--<p class="item-intro text-muted">Pirts un māja zem viena jumta.</p>--}}
                                            {{--<img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/04-thumbnail.jpg" alt="">--}}
                                            {{--<p>Šī ir ģimenes māja. Tā sastāv no pirts un dzīvojamajām telpām. Tās platība ir 1700cm3.</p>--}}
                                            {{--<ul class="list-inline">--}}
                                                {{--<li>Datums: Augusts 2010</li>--}}
                                                {{--<li>Pasūtītājs: Privātpersona</li>--}}
                                                {{--<li>Kategorija: Celtniecība</li>--}}
                                            {{--</ul>--}}
                                            {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                                                {{--<i class="fas fa-times"></i>--}}
                                                {{--Aizvērt</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Modal 5 -->--}}
                {{--<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="close-modal" data-dismiss="modal">--}}
                                {{--<div class="lr">--}}
                                    {{--<div class="rl"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="container">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-8 mx-auto">--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<h2 class="text-uppercase">Dzīvokļu ēka</h2>--}}
                                            {{--<p class="item-intro text-muted">Valmiera, Skolas iela 2.</p>--}}
                                            {{--<img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/05-thumbnail.jpg" alt="">--}}
                                            {{--<p>Šī ir moderna dzīvokļu ēka Valmierā. Tās platība ir 5700cm3.</p>--}}
                                            {{--<ul class="list-inline">--}}
                                                {{--<li>Datums: Septembris 2018</li>--}}
                                                {{--<li>Pasūtītājs: Valmieras pašvaldība</li>--}}
                                                {{--<li>Kategorija: Celtniecība</li>--}}
                                            {{--</ul>--}}
                                            {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                                                {{--<i class="fas fa-times"></i>--}}
                                                {{--Aizvērt</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Modal 6 -->--}}
                {{--<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="close-modal" data-dismiss="modal">--}}
                                {{--<div class="lr">--}}
                                    {{--<div class="rl"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="container">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-8 mx-auto">--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<h2 class="text-uppercase">Privātmāja</h2>--}}
                                            {{--<p class="item-intro text-muted">Ģimenes māja.</p>--}}
                                            {{--<img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/06-thumbnail.jpg" alt="">--}}
                                            {{--<p>Šī ir pavisam vienkārša privātmāja. Tās platība ir 600cm3.</p>--}}
                                            {{--<ul class="list-inline">--}}
                                                {{--<li>Datums: Septembris 2009</li>--}}
                                                {{--<li>Pasūtītājs: Privātpersona</li>--}}
                                                {{--<li>Kategorija: Celtniecība</li>--}}
                                            {{--</ul>--}}
                                            {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                                                {{--<i class="fas fa-times"></i>--}}
                                                {{--Aizvērt</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

@endsection
