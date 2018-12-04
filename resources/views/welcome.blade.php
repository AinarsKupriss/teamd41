@extends('layouts.app')

@section('content')

            <div class="content">
                <!-- Header -->
                <header class="masthead">
                    <div class="container">
                        <div class="intro-text">
                            <div class="intro-lead-in">Tavs uzticamākais partneris</div>
                            <div class="intro-heading text-uppercase">SIA BŪVNESIS</div>
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
                                <h3 class="section-subheading text-muted">Strādājam jau vairāk kā 10 gadus.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img width="400" height="300" class="img-fluid" src="/images/portfolio/01-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Biroju ēka</h4>
                                    <p class="text-muted">Dārzciema biroju centrs</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img width="400" height="300" class="img-fluid" src="/images/portfolio/02-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Bibliotēka</h4>
                                    <p class="text-muted">Vidzemes bibliotēka</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img width="400" height="300" class="img-fluid" src="/images/portfolio/03-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Uzņēmuma galvenā mītne</h4>
                                    <p class="text-muted">Rīga, Krišjāņa Valdemāra iela 1c</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img width="400" height="300" class="img-fluid" src="/images/portfolio/04-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Guļbaļķu māja</h4>
                                    <p class="text-muted">Pirts un māja zem viena jumta</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img width="400" height="300" class="img-fluid" src="/images/portfolio/05-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Dzīvokļu ēka</h4>
                                    <p class="text-muted">Valmiera, Skolas iela 2</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img width="400" height="300" class="img-fluid" src="/images/portfolio/06-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Privātmāja</h4>
                                    <p class="text-muted">Ģimenes māja</p>
                                </div>
                            </div>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-image">
                                            <img width="200" height="200" class="rounded-circle img-fluid" src="/images/about/1.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>2009</h4>
                                                <h4 class="subheading">Sertifikātu iegūšana</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Uzņēmums tika izveidots 2008.gadā un jau 2009.gadā mēs ieguvām visus sertifikātus un atļaujas, lai varētu strādāt ar projektiem!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image">
                                            <img width="200" height="200" class="rounded-circle img-fluid" src="/images/about/2.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>2012</h4>
                                                <h4 class="subheading">Pirmais lielais projekts</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Mūsu pirmais lielais projekts - mūsu galvenā mītne!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-image">
                                            <img class="rounded-circle img-fluid" src="/images/about/3.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>2015</h4>
                                                <h4 class="subheading">Komandas un pakalpojumu paplašināšana</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Darbinieku skaits tika palielināts līdz 250, sākām piedāvāt remonta un drošības sistēmu pakalpojumus.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image">
                                            <img class="rounded-circle img-fluid" src="/images/about/4.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>2018</h4>
                                                <h4 class="subheading">Filiāles ārzemēs</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Atvērām filiāles Francijā, Anglijā, Vācijā un Amerikā!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image">
                                            <h4>Esi
                                                <br>daļa no
                                                <br>mums!</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h2 class="text-uppercase">Biroju ēka</h2>
                                            <p class="item-intro text-muted">Dārzciema biroju centrs.</p>
                                            <img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/01-thumbnail.jpg" alt="">
                                            <p>Šī ir Dārzciema biroju centra ēka, kurā atrodas 5 biroji. Visi biroji ir aprīkoti ar mūsdienīgām tehnoloģijām. Tās platība ir 4200cm3.</p>
                                            <ul class="list-inline">
                                                <li>Datums: Janvāris 2014</li>
                                                <li>Pasūtītājs: SIA Dārzciema Biroji</li>
                                                <li>Kategorija: Celtniecība</li>
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

                <!-- Modal 2 -->
                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h2 class="text-uppercase">Bibliotēka</h2>
                                            <p class="item-intro text-muted">Vidzemes bibliotēka.</p>
                                            <img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/02-thumbnail.jpg" alt="">
                                            <p>Šī ir Vidzemes lielākā bibliotēka. Tās platība ir 5500cm3.</p>
                                            <ul class="list-inline">
                                                <li>Datums: Marts 2015</li>
                                                <li>Pasūtītājs: Valmieras pašvaldība</li>
                                                <li>Kategorija: Celtniecība</li>
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

                <!-- Modal 3 -->
                <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h2 class="text-uppercase">Uzņēmuma galvenā mītne</h2>
                                            <p class="item-intro text-muted">Rīga, Krišjāņa Valdemāra iela 1c.</p>
                                            <img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/03-thumbnail.jpg" alt="">
                                            <p>Šī ir mūsu galvenā mītne(HQ). Tā sastāv no 5 stāviem un tās kopējā platība ir 3500cm3.</p>
                                            <ul class="list-inline">
                                                <li>Datums: Jūnijs 2012</li>
                                                <li>Kategorija: Celtniecība</li>
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

                <!-- Modal 4 -->
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h2 class="text-uppercase">Guļbaļķu māja</h2>
                                            <p class="item-intro text-muted">Pirts un māja zem viena jumta.</p>
                                            <img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/04-thumbnail.jpg" alt="">
                                            <p>Šī ir ģimenes māja. Tā sastāv no pirts un dzīvojamajām telpām. Tās platība ir 1700cm3.</p>
                                            <ul class="list-inline">
                                                <li>Datums: Augusts 2010</li>
                                                <li>Pasūtītājs: Privātpersona</li>
                                                <li>Kategorija: Celtniecība</li>
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

                <!-- Modal 5 -->
                <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h2 class="text-uppercase">Dzīvokļu ēka</h2>
                                            <p class="item-intro text-muted">Valmiera, Skolas iela 2.</p>
                                            <img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/05-thumbnail.jpg" alt="">
                                            <p>Šī ir moderna dzīvokļu ēka Valmierā. Tās platība ir 5700cm3.</p>
                                            <ul class="list-inline">
                                                <li>Datums: Septembris 2018</li>
                                                <li>Pasūtītājs: Valmieras pašvaldība</li>
                                                <li>Kategorija: Celtniecība</li>
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

                <!-- Modal 6 -->
                <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <h2 class="text-uppercase">Privātmāja</h2>
                                            <p class="item-intro text-muted">Ģimenes māja.</p>
                                            <img width="400" height="300" class="img-fluid d-block mx-auto" src="/images/portfolio/06-thumbnail.jpg" alt="">
                                            <p>Šī ir pavisam vienkārša privātmāja. Tās platība ir 600cm3.</p>
                                            <ul class="list-inline">
                                                <li>Datums: Septembris 2009</li>
                                                <li>Pasūtītājs: Privātpersona</li>
                                                <li>Kategorija: Celtniecība</li>
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
                <!-- Footer -->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <span class="copyright">Visas tiesības paturam &copy; Būvnesis 2018</span>
                            </div>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <ul class="list-inline quicklinks">
                                    <li class="list-inline-item">
                                        <a href="#">Privātuma politika</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Lietošanas noteikumi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

@endsection
