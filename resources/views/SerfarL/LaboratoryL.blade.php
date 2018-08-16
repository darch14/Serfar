@extends('SerfarL.principal')

@section('title', '- Laboratory')

@section('content')
  <div class="container marketing">
      <div class="text-center title ">
        Laboratorios
      </div>
      <hr class="style-eight">
      <div class="center">
        <br><p class="lead">
          Contamos con las mejores y las mas reconocidas marcas del pais, asi garantizamos la calidad de nuestros productos.
        </p><br>
      </div>





      <div class="row post center">
        @for ($i = 1; $i <= 67; $i++)

            <div class='span3 center'>
              <figure class='link-img'>
                <div class='img-rounded img-border'>
                  <div class='img-block'>
                    <img src='{{asset('images/labs/'$i'.jpg')}}' alt=''>
                  </div>
                </div>
              </figure>
            </div>

        @endfor

        <!--<div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/1.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/2.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/3.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/4.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/5.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/6.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/7.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/8.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/9.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/10.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/11.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/12.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/13.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/14.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/15.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/16.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/17.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/18.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/19.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/20.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/21.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/22.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/23.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/24.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/25.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/26.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/27.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/28.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/29.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/30.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/31.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/32.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/33.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/34.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/35.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/36.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/37.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/38.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/39.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/40.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/41.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/42.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/43.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/44.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/45.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/46.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/47.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/48.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/49.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/50.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/51.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/52.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/53.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/54.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/55.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/56.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/57.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/58.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/59.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/60.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/61.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/62.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/63.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/64.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/65.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/66.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/67.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>
      </div>-->

    </div>
    <div class="back-top up"><a href="#top"></a></div>

    <script type="text/javascript">
      $("#li-lab").attr("class","active");
    </script>
@endsection()
