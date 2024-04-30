
@extends('layouts/app')
@section('title', 'About User')


@section('content')

<section>
    <div class="about">
      <div class="about_img">
        <img class="about_img--photo" src="../imges/about/sddefault.jpg" alt="elonmask">
      </div>
      <div class="about_info">
        <div class="about_info--reset">
          <h3>company of selling cars</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Magnam deserunt suscipit libero earum repellat architecto 
             fugiat harum dolores iusto a temporibus ut quae repellendus 
             aperiam veniam asperiores veritatis, ab laborum rerum odit ratione,
             doloribus est exercitationem. Obcaecati magni natus perferendis
             a debitis sapiente eius voluptate quae non. Officiis, fuga officia.</p>
        </div>

      </div>
    </div>
  </section>
  <section class="about_us" >
    <div class="sec_one--info">
      <h3>maneger</h3>
      <p>sports car by kia company The Kia Optima, the K5, is currently the best-selling 
        sedan around the world within the Kia fleet of production cars, 
        and the new generation of it has a very modern design with a youthful,
        sporty character.</p>
        <a class="btn icon">read more</a>
      </div>
      <div class="about_maneger">
        <img class="about_maneger--people" src="../imges/about/download (1).jpeg" alt="people">
      </div>
      <div class="clear"></div>
  </section>
  <section>
    <div class="about_people">
      <div class="about_people--us">
        <img src="../imges/about/download (1).jpeg" alt="people">
        <div class="about_people--info">
          <h4>elon</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sapiente.</p>
        </div>
      </div>
      <div class="about_people--us">
        <img src="../imges/about/download (2).jpeg" alt="people">
        <div class="about_people--info">
          <h4>elen</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sapiente.</p>
        </div>
      </div>
      <div class="about_people--us">
        <img src="../imges/about/download.jpeg" alt="people">
        <div class="about_people--info">
          <h4>ahmed</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sapiente.</p>
        </div>
      </div>
    </div>
  </section>

  @endsection