
@extends('layouts/app')
@section('title', 'Serves User')


@section('content')

<section class="service">
    <div class="service_card">
        <div class="service_img service_img--oil">
            <div class="service_dark"></div>                
        </div>
        <div class="service_info">
            <p class="service_info--icon">
                <i class="fa-solid fa-oil-can service_icon"></i>
            </p>
            <h3 class="service_info--title">oil change</h3>
            <p class="service_info--p">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="service_card">
        <div class="service_img service_img--supp">
            <div class="service_dark"></div>                
        </div>
        
        <div class="service_info">
            <p>
                <i class="fa-solid fa-car-burst service_icon"></i>
            </p>
            <h3 class="service_info--title">support</h3>
            <p class="service_info--p">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="service_card">
        <div class="service_img service_img--surs">
            <div class="service_dark"></div>                
        </div>
        
        <div class="service_info">
            <p>
                <i class="fa-solid fa-screwdriver-wrench service_icon"></i>
            </p>
            <h3 class="service_info--title">car insurence</h3>
            <p class="service_info--p">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="service_card">
        <div class="service_img service_img--repar">
            <div class="service_dark"></div>                
        </div>      
        <div class="service_info">
            <p>
                <i class="fa-solid fa-screwdriver-wrench service_icon"></i>
            </p>
            <h3 class="service_info--title">parts repaire</h3>
            <p class="service_info--p">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="service_card">
        <div class="service_img service_img--sell">
            <div class="service_dark"></div>                
        </div>
        <div class="service_info">
            <p>
                <i class="fa-solid fa-car service_icon"></i>
            </p>
            <h3 class="service_info--title">car selling</h3>
            <p class="service_info--p">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="service_card">
        <div class="service_img service_img--battery">
            <div class="service_dark"></div>                
        </div>
        
        <div class="service_info">
            <p>
                <i class="fa-solid fa-car-battery service_icon"></i>
            </p>
            <h3 class="service_info--title">battery replacement</h3>
            <p class="service_info--p">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    
</section>
@endsection