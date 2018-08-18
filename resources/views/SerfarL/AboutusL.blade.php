@extends('SerfarL.principal')

@section('title', '- About-us')

@section('content')
  <div class="container marketing">
    <div class="text-center title ">
      Quienes Somos
    </div>
    <hr class="style-eight">
    <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading">Nuestra Sede</h2>
        <p class="lead">
          Luego de 8 años de funcionamiento, construimos nuestra sede propia;
          con las normas de calidad más altas y exigidas por los entes de salud,
          garantizando así una logística oportuna y un almacenaje con el ambiente
          propicio para que todos nuestros productos se conserven correctamente.
        </p>
      </div>
      <div class="col-md-6">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="{{asset('images/areas/banner-nuestrasede.png')}}" data-holder-rendered="true">
      </div>
    </div>
    <hr class="style-eight margin-80">
    <h2 class="featurette-heading text-center">Historia</h2><br>
    <p class="lead text-center">
      SERFAR LTDA. inicia sus labores el 29 de junio de 2007, con cubrimiento
      inicial en la ciudad de Barranquilla, extendiéndose así en estos 8 años
      en los departamentos de Sucre, Córdoba, Magdalena, Cesar, La Guajira y
      Bolívar. Actualmente cuenta con 20 empleados. Somos una empresa privada,
      sólida, dedicada a la prestación de servicios de atención Farmacéutica,
      suministro, comercialización y distribución de medicamentos e Insumos
      hospitalarios a las entidades del sector de la salud, brindando apoyo
      clínico y administrativo de alta calidad, cuyo único fin es la promoción,
      prevención y recuperación de la salud individual y colectiva de nuestros
      usuarios basados en el uso racional de los medicamentos. Hemos tomado
      como base fundamental de nuestro desarrollo el factor humano, para que
      con cumplimiento y responsabilidad nuestros clientes puedan satisfacer
      sus necesidades buscando así el continuo progreso personal y profesional
      de quienes conforman la organización, con grandes capacidades de liderazgo
      en el mercado nacional, siendo la salud de los colombianos nuestro principal compromiso.
    </p>
    <div class="space-30">
      <h1 class="text-lead">Mision</h1><br>
      <!--<hr class="style-four"-->
      <blockquote class="blue">
        <p class="lead">
          Somos una empresa innovadora, reconocida por su compromiso integral con la
          comunidad y su equipo de trabajo; dedicada a la prestación de servicios 
          de atención farmacéutica, suministros, comercialización y distribución
          de medicamentos, insumos hospitalarios y odontológicos, contando con
          un servicio ágil, de calidad, eficaz y competitivo, comprometido a
          nuestros colaboradores, con los objetivos y valores de nuestra organización.
        </p>
      </blockquote>
    </div>
    <div class="space-30">
      <h1 class="text-lead">Vision</h1><br>
      <!--hr class="style-four"-->
    </div>
    <blockquote class="blue">
      <p class="lead">
        En 2027 seremos la empresa lider en la distribución y suministro de medicamentos genéricos,
        comerciales, material médico quirúrgico y odontológico de alta calidad, con valores agregados
        en asesorías permanentes a nuestros clientes y usuarios finales en todo el norte y centro del
        territorio Colombiano.
      </p>
    </blockquote>
    <div class="space-30">
      <h1 class="text-lead">Valores Corporativos</h1><br>
      <!--hr class="style-four"-->
    </div>
    <blockquote class="blue">
      <p class="lead">
        <strong>Etica: </strong>El comportamiento de nuestros colaboradores esta
        enmarcado, en toda circunstancia, dentro de los principios de integridad.
        <br><br>
        <strong>Compromiso: </strong>Nuestro trabajo en equipo, el amor por él,
        la lealtad, la transparencia, permite que los que laboran con nosotros
        enfoquen sus talentos con dedicación para alcanzar entre todos las metas propuestas.
        <br><br>
        <strong>Responsabilidad: </strong>La importancia de nuestra labor en el
        campo de la salud, trabajamos para garantizar tanto respuestas como entregas rápidas y acertadas.
        <br><br>
        <strong>Calidad: </strong>Nos caracterizamos por nuestra disposición al
        servicio, cumpliendo así las necesidades y expectativas de nuestros clientes,
        llevandolos a que se encuentren satisfechos, siendo nuestro servicio una excelencia total.
        <br><br>
        <strong>Respeto: </strong>Conociendo la necesidad de nuestros clientes,
        trabajamos en el desarrollo personal, estimulando la formación y aprendizaje
        permanente, garantizando la excelencia, la especialidad en cada área y en cada
        persona para así brindar a nuestros clientes programas de educación en medicamentos.
        <br><br>
        <strong>Competitividad: </strong>El éxito de nuestra organización se mide
        en el mercado, en donde la competitividad exige control de costos, altos
        estándares de calidad, satisfacción oportuna de las necesidades del cliente,
        lo que implica finalmente excelencia en la calidad y servicio.
      </p>
    </blockquote>
  </div>
  <script type="text/javascript">
    $("#li-qui").attr("class","active");
  </script>
@endsection()
