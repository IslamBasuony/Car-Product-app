@extends('layouts/app')
@section('title', 'User Home')


@section('content')
    <section>
        <section class="gallary">
            <ul>
                <li class="gallary_app">
                    <div class="sec_fast--img">
                        <div class="info_fast">
                            <div class="info_fast_title">
                                <h2><b class="faster_title">KIA</b> easy and fast car to cairo</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, id.</p>
                                <a class="btn icon">read more</a>
                            </div>

                        </div>
                        <div class="imge_faster"></div>
                    </div>
                </li>
            </ul>

        </section>
        

    </section>

    <article class="">

        {{-- <div class="logos">
            <ul>
                <li class="{{ $activeTab == 'sedan' ? 'show' : '' }} tabs"><a href="#sedan"
                        onclick="showTab('sedan')">sedan</a></li>
                <li class="{{ $activeTab == 'suv' ? 'show' : '' }} tabs"><a href="#suv"
                        onclick="showTab('suv')">suv</a>
                </li>
                <li class="{{ $activeTab == 'premium' ? 'show' : '' }} tabs"><a href="#premium"
                        onclick="showTab('premium')">premium</a></li>
                <li class="{{ $activeTab == 'coupe' ? 'show' : '' }} tabs"><a href="#coupe"
                        onclick="showTab('coupe')">coupe</a></li>
                <li class="{{ $activeTab == 'hatchback' ? 'show' : '' }} tabs"><a href="#hatchback"
                        onclick="showTab('hatchback')">hatchback</a></li>
                <li class="{{ $activeTab == 'crossover' ? 'show' : '' }} tabs"><a href="#crossover"
                        onclick="showTab('crossover')">crossover</a></li>
            </ul>
            
            
        </div>
        <section class="">
            <div id="sedan" class="tab-content {{ $activeTab == 'sedan' ? 'show' : '' }}">
                @include('tab_content', ['body' => 'sedan'])
            </div>
            <div id="suv" class="tab-content {{ $activeTab == 'suv' ? 'show' : '' }}">
                @include('tab_content', ['body' => 'suv'])
            </div>
            <div id="premium" class="tab-content {{ $activeTab == 'premium' ? 'show' : '' }}">
                @include('tab_content', ['body' => 'premium'])
            </div>
            <div id="coupe" class="tab-content {{ $activeTab == 'coupe' ? 'show' : '' }}">
                @include('tab_content', ['body' => 'coupe'])
            </div>
            <div id="hatchback" class="tab-content {{ $activeTab == 'hatchback' ? 'show' : '' }}">
                @include('tab_content', ['body' => 'hatchback'])
            </div>
            <div id="crossover" class="tab-content {{ $activeTab == 'crossover' ? 'show' : '' }}">
                @include('tab_content', ['body' => 'crossover'])
            </div>
    </article> --}}


    <!-- start section -->
    <section class="sec_one">
        <div class="sec_one--img"></div>
        <div class="sec_one--info">
            <h3>kia k5</h3>
            <p>sports car by kia company The Kia Optima, the K5, is currently the best-selling
                sedan around the world within the Kia fleet of production cars,
                and the new generation of it has a very modern design with a youthful,
                sporty character.</p>
            <a class="btn icon">read more</a>
        </div>
        <div class="clear"></div>
    </section>
    <!-- start section benfit -->
    <section>
        <div class="benefits">
            <div class="benefits__us">
                <div class="benefits__us--info">
                    <div class="">
                        <h1>Car benefits</h1>
                        <p>The car is like that technical assistant that transports
                            a person from one place to another without making a little
                            effort, and without being exposed to the hardships and hardships
                            that he used to suffer in the past. This invention led to an
                            important qualitative leap in human life that made his life
                            turn upside down, but For the better, and made many of the things
                            that were seen as luxuries, the car made them among the necessities
                            without which life could not go on.
                        </p>
                        <a class="icon">read more</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- start section people -->
    <section>
        <div class="pepole">
            <div class="pepole_img">
                <img class="pepole_elonmask" src="./imges/imge_car/elonmask.jpg" alt="elonmask">
            </div>
            <div class="pepole_info">
                <h4>elon mask</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Facilis, nemo dicta? Ipsam quas cumque facilis impedit
                    ipsa recusandae omnis iusto iure, perferendis, natus a
                    ea voluptas est aspernatur consectetur exercitationem doloribus,
                    sapiente blanditiis aut? Modi laudantium adipisci aliquam harum ab molestiae quibusdam eveniet
                    repudiandae officiis exercitationem, iure accusantium porro facere.</p>
            </div>
            <div class="clear"></div>

        </div>
    </section>
    <!-- start section pest seller -->
    <section class="bg_blue">
        <h3 class="pest_title">pest seller</h3>
        <div class="pest_seller">
            <div class="pest">
                <div class="">
                    <img class="pest_img" src="./imges/imge_car/suv/Kia-Sportage-2023-1-transformed.png" alt="Kia-Sportage">
                </div>
                <div class="">
                    <h4>kia sportage 2023</h4>
                    <p>
                        Kia Sportage is the best-selling in the global market,
                        as Kia sold more than half a million cars in 2022
                    </p>
                    <p>
                        The 2023 Kia Sportage comes with a distinctive bold design and
                        wonderful colors, and this model is distinguished from the previous
                        model as it has increased in length by 7 inches. The Sportage comes
                        with a hybrid powertrain, which makes it better in terms of fuel
                        consumption, and it is a strong competitor to many cars, including
                        <b>Nissan Qashqai</b> and <b>Hyundai Tucson.</b> 2023, and the car provides its
                        driver with a smooth and comfortable drive in cities,
                        due to the fact that the car controls are easy to use.
                    </p>
                </div>
            </div>
            <div class="pest">
                <div class="">
                    <img class="pest_img" src="./imges/imge_car/suv/tucson-transformed.png" alt="tucson">
                </div>
                <div class="">
                    <h4>haundai tucson 2023</h4>
                    <p>
                        haundai tucson is the best-selling in the global market,
                        as haundai sold more than half a million cars in 2022
                    </p>
                    <p>
                        The 2023 Kia Sportage comes with a distinctive bold design and
                        wonderful colors, and this model is distinguished from the previous
                        model as it has increased in length by 7 inches. The Sportage comes
                        with a hybrid powertrain, which makes it better in terms of fuel
                        consumption, and it is a strong competitor to many cars, including
                        <b>Nissan Qashqai</b> and <b>Kia Sportage.</b> 2023, and the car provides its
                        driver with a smooth and comfortable drive in cities,
                        due to the fact that the car controls are easy to use.
                    </p>
                </div>
            </div>
        </div>
    </section>
    </section>

@endsection
