<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dashboard.html.twig */
class __TwigTemplate_95be83ca094e2cd0a08490cf888828c1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_auth.html.twig", "dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
";
        // line 4
        yield from $this->loadTemplate("navbar.html.twig", "dashboard.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
<aside class=\"sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left\" id=\"show-side-navigation1\">
  <i class=\"uil-bars close-aside d-md-none d-lg-none\" data-close=\"show-side-navigation1\"></i>
  <div class=\"sidebar-header d-flex justify-content-center align-items-center px-3 py-4\">
    <img
         class=\"rounded-pill img-fluid\"
         width=\"65\"
         src=\"https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance\"
         alt=\"\">
    <div class=\"ms-2\">
      <h5 class=\"fs-6 mb-0\">
      <img src=\"img/1054744.png\" alt=\"Modify\" width='34' height=\"34\"></i>

        <a class=\"text-decoration-none\" href=\"#\">  ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["userData"] ?? null), "Nom", [], "any", false, false, false, 18), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["userData"] ?? null), "Prenom", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
      </h5>
      <p class=\"mt-1 mb-0\">Is connected.</p>
    </div>
  </div>
  
  <div class=\"search position-relative text-center px-4 py-3 mt-2\">
    <input type=\"text\" class=\"form-control w-100 border-0 bg-transparent\" placeholder=\"Search here\">
    <i class=\"fa fa-search position-absolute d-block fs-6\"></i>
  </div>

  <ul class=\"categories list-unstyled\">
    <li class=\"has-dropdown\">
      <i class=\"uil-estate fa-fw\"></i><a href=\"#\"> Utilisateurs </a>
      <ul class=\"sidebar-dropdown list-unstyled\">
        <li><button onclick=\"window.location.href='add_personel.php'\"> Ajouter des utilisateurs </button></li>
        <li><button onclick=\"window.location.href='viewuser.php'\"> Voir la liste des utilisateurs </button></li>
        <li><button onclick=\"window.location.href='admin_users.php'\"> Gérer les utilisateurs </button></li> <!-- Ajout du lien -->
      </ul>
    </li>
    <li class=\"has-dropdown\">
      <i class=\"uil-calendar-alt\"></i><a href=\"#\"> Intervention</a>
      <ul class=\"sidebar-dropdown list-unstyled\">
         <li><button onclick=\"window.location.href='get_intervention_admin.php'\"> Ajouter une intervention </button></li>
         
      </ul>
    </li>
 
    <li class=\"has-dropdown\">
      <i class=\"uil-shopping-cart-alt\"></i><a href=\"\">calendrier</a>
      <ul class=\"sidebar-dropdown list-styled\">
        <li><button onclick=\"window.location.href='calendrier.php'\">Calendrier d'Intervention </button></li>
      </ul>
    </li>
    
  </ul>
</aside>

<section id=\"wrapper\">
  <nav class=\"navbar navbar-expand-md\">
    <div class=\"container-fluid mx-2\">
      <div class=\"navbar-header\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#toggle-navbar\" aria-controls=\"toggle-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"uil-bars text-white\"></i>
        </button>
        <a class=\"navbar-brand\" href=\"dashboard_admin.php\"><span class=\"main-color\">Dashboard</span></a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"toggle-navbar\">
        <ul class=\"navbar-nav ms-auto\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              
            </a>
            
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i data-show=\"show-side-navigation1\" class=\"uil-bars show-side-btn\"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=\"p-4\">
    

    <section class=\"statistics mt-4\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <div class=\"box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3\">
             <img src=\"/img/recevoir-du-courrier.png\" alt=\"Modify\" width='34' height=\"34\">
            <div class=\"ms-3\">
              <div class=\"d-flex align-items-center\">
                <h3 class=\"mb-0\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalMail"] ?? null), "html", null, true);
        yield "</h3> <span class=\"d-block ms-2\">Emails</span>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"col-lg-4\">
          <div class=\"box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3\">
            <img src=\"/img/resolution-de-conflit.png\" alt=\"Modify\" width='34' height=\"34\"></i>
            <div class=\"ms-3\">
              <div class=\"d-flex align-items-center\">
                <h3 class=\"mb-0\"></h3> <span class=\"d-block ms-2\">intervention</span>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"col-lg-4\">
          <div class=\"box d-flex rounded-2 align-items-center p-3\">
            <img src=\"/img/user-interface .png\" alt=\"Modify\" width='34' height=\"34\"></i>
            <div class=\"ms-3\">
              <div class=\"d-flex align-items-center\">
                <h3 class=\"mb-0\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalUsers"] ?? null), "html", null, true);
        yield "</h3> <span class=\"d-block ms-2\">Users</span>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ajout de la section Administrateurs -->
    <section class=\"administrateurs mt-4\">
      <h3>Administrateurs</h3>
      <ul>
        <li>Peuvent gérer les utilisateurs (ajouter/supprimer des techniciens et employés).</li>
        <li>Peuvent attribuer un technicien manuellement à un ticket.</li>
        <li>Ont accès à un tableau de bord pour suivre les statistiques :</li>
        <ul>
          <li>Nombre total de tickets ouverts/résolus.</li>
          <li>Temps moyen de résolution par technicien.</li>
          <li>Priorisation des tickets critiques.</li>
        </ul>
      </ul>
    </section>
  </div>
</section>

<style>
@import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet';

:root {
\t--dk-gray-100: #F3F4F6;
\t--dk-gray-200: #E5E7EB;
\t--dk-gray-300: #D1D5DB;
\t--dk-gray-400: #9CA3AF;
\t--dk-gray-500: #6B7280;
\t--dk-gray-600: #4B5563;
\t--dk-gray-700: #374151;
\t--dk-gray-800: #1F2937;
\t--dk-gray-900: #111827;
\t--dk-dark-bg: #313348;
\t--dk-darker-bg: #2a2b3d;
\t--navbar-bg-color: #6f6486;
\t--sidebar-bg-color: #252636;
\t--sidebar-width: 250px;
}

* {
\tmargin: 0;
\tpadding: 0;
\tbox-sizing: border-box;
}

body {
\tfont-family: 'Inter', sans-serif;
\tbackground-color: var(--dk-darker-bg);
\tfont-size: .925rem;
}

#wrapper {
\tmargin-left: var(--sidebar-width);
\ttransition: all .3s ease-in-out;
}

#wrapper.fullwidth {
\tmargin-left: 0;
}



/** --------------------------------
 -- Sidebar
-------------------------------- */
.sidebar {
\tbackground-color: var(--sidebar-bg-color);
\twidth: var(--sidebar-width);
\ttransition: all .3s ease-in-out;
\ttransform: translateX(0);
\tz-index: 9999999
}

.sidebar .close-aside {
\tposition: absolute;
\ttop: 7px;
\tright: 7px;
\tcursor: pointer;
\tcolor: #EEE;
}

.sidebar .sidebar-header {
\tborder-bottom: 1px solid #2a2b3c
}

.sidebar .sidebar-header h5 a {
\tcolor: var(--dk-gray-300)
}

.sidebar .sidebar-header p {
\tcolor: var(--dk-gray-400);
\tfont-size: .825rem;
}

.sidebar .search .form-control ~ i {
\tcolor: #2b2f3a;
\tright: 40px;
\ttop: 22px;
}

.has-dropdown button {
    display: block;
    width: 100%;
    text-align: left;
    padding: 10px 15px;
    border: none;
    background-color: #000; /* Fond en noir */
    color: #fff; /* Couleur du texte en blanc */
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.has-dropdown button:hover {
    background-color: #333; /* Couleur de fond au survol */
}


.sidebar > ul > li {
\tpadding: .7rem 1.75rem;
}

.sidebar ul > li > a {
\tcolor: var(--dk-gray-400);
\ttext-decoration: none;
}

/* Start numbers */
.sidebar ul > li > a > .num {
\tline-height: 0;
\tborder-radius: 3px;
\tfont-size: 14px;
\tpadding: 0px 5px
}

.sidebar ul > li > i {
\tfont-size: 18px;
\tmargin-right: .7rem;
\tcolor: var(--dk-gray-500);
}

.sidebar ul > li.has-dropdown > a:after {
\tcontent: '\\eb3a';
\tfont-family: unicons-line;
\tfont-size: 1rem;
\tline-height: 1.8;
\tfloat: right;
\tcolor: var(--dk-gray-500);
\ttransition: all .3s ease-in-out;
}

.sidebar ul .opened > a:after {
\ttransform: rotate(-90deg);
}

/* Start dropdown menu */
.sidebar ul .sidebar-dropdown {
\tpadding-top: 10px;
\tpadding-left: 30px;
\tdisplay: none;
}
.sidebar ul .sidebar-dropdown.active {
\tdisplay: block;
}

.sidebar ul .sidebar-dropdown > li > a {
  font-size: .85rem;
\tpadding: .5rem 0;
\tdisplay: block;
}
/* End dropdown menu */

.show-sidebar {
\ttransform: translateX(-270px);
}

@media (max-width: 767px) {
\t.sidebar ul > li {
\t\tpadding-top: 12px;
\t\tpadding-bottom: 12px;
\t}

\t.sidebar .search {
\t\tpadding: 10px 0 10px 30px
\t}
}




/** --------------------------------
 -- welcome
-------------------------------- */
.welcome {
\tcolor: var(--dk-gray-300);
}

.welcome .content {
\tbackground-color: var(--dk-dark-bg);
}

.welcome p {
\tcolor: var(--dk-gray-400);
}




/** --------------------------------
 -- Statistics
-------------------------------- */
.statistics {
\tcolor: var(--dk-gray-200);
}

.statistics .box {
\tbackground-color: var(--dk-dark-bg);
}

.statistics .box i {
\twidth: 60px;
\theight: 60px;
\tline-height: 60px;
}

.statistics .box p {
\tcolor: var(--dk-gray-400);
}




/** --------------------------------
 -- Charts
-------------------------------- */
.charts .chart-container {
\tbackground-color: var(--dk-dark-bg);
}

.charts .chart-container h3 {
\tcolor: var(--dk-gray-400)
}




/** --------------------------------
 -- users
-------------------------------- */
.admins .box .admin {
\tbackground-color: var(--dk-dark-bg);
}

.admins .box h3 {
\tcolor: var(--dk-gray-300);
}

.admins .box p {
\tcolor: var(--dk-gray-400)
}




/** --------------------------------
 -- statis
-------------------------------- */
.statis {
\tcolor: var(--dk-gray-100);
}

.statis .box {
\tposition: relative;
\toverflow: hidden;
\tborder-radius: 3px;
}

.statis .box h3:after {
\tcontent: \"\";
\theight: 2px;
\twidth: 70%;
\tmargin: auto;
\tbackground-color: rgba(255, 255, 255, 0.12);
\tdisplay: block;
\tmargin-top: 10px;
}

.statis .box i {
\tposition: absolute;
\theight: 70px;
\twidth: 70px;
\tfont-size: 22px;
\tpadding: 15px;
\ttop: -25px;
\tleft: -25px;
\tbackground-color: rgba(255, 255, 255, 0.15);
\tline-height: 60px;
\ttext-align: right;
\tborder-radius: 50%;
}





.main-color {
\tcolor: #ffc107
}

/** --------------------------------
 -- Please don't do that in real-world projects!
 -- overwrite Bootstrap variables instead.
-------------------------------- */

.navbar {
\tbackground-color: var(--navbar-bg-color) !important;
\tborder: none !important;
}
.navbar .dropdown-menu {
\tright: auto !important;
\tleft: 0 !important;
}
.navbar .navbar-nav>li>a {
\tcolor: #EEE !important;
\tline-height: 55px !important;
\tpadding: 0 10px !important;
}
.navbar .navbar-brand {color:#FFF !important}
.navbar .navbar-nav>li>a:focus,
.navbar .navbar-nav>li>a:hover {color: #EEE !important}

.navbar .navbar-nav>.open>a,
.navbar .navbar-nav>.open>a:focus,
.navbar .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

.navbar .navbar-brand {line-height: 55px !important; padding: 0 !important}
.navbar .navbar-brand:focus,
.navbar .navbar-brand:hover {color: #FFF !important}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
@media (max-width: 767px) {
\t.navbar>.container-fluid .navbar-brand {
\t\tmargin-left: 15px !important;
\t}
\t.navbar .navbar-nav>li>a {
\t\tpadding-left: 0 !important;
\t}
\t.navbar-nav {
\t\tmargin: 0 !important;
\t}
\t.navbar .navbar-collapse,
\t.navbar .navbar-form {
\t\tborder: none !important;
\t}
}

.navbar .navbar-nav>li>a {
\tfloat: left !important;
}
.navbar .navbar-nav>li>a>span:not(.caret) {
\tbackground-color: #e74c3c !important;
\tborder-radius: 50% !important;
\theight: 25px !important;
\twidth: 25px !important;
\tpadding: 2px !important;
\tfont-size: 11px !important;
\tposition: relative !important;
\ttop: -10px !important;
\tright: 5px !important
}
.dropdown-menu>li>a {
\tpadding-top: 5px !important;
\tpadding-right: 5px !important;
}
.navbar .navbar-nav>li>a>i {
\tfont-size: 18px !important;
}




/* Start media query */

@media (max-width: 767px) {
\t#wrapper {
\t\tmargin: 0 !important
\t}
\t.statistics .box {
\t\tmargin-bottom: 25px !important;
\t}
\t.navbar .navbar-nav .open .dropdown-menu>li>a {
\t\tcolor: #CCC !important
\t}
\t.navbar .navbar-nav .open .dropdown-menu>li>a:hover {
\t\tcolor: #FFF !important
\t}
\t.navbar .navbar-toggle{
\t\tborder:none !important;
\t\tcolor: #EEE !important;
\t\tfont-size: 18px !important;
\t}
\t.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {background-color: transparent !important}
}


::-webkit-scrollbar {
\tbackground: transparent;
\twidth: 5px;
\theight: 5px;
}

::-webkit-scrollbar-thumb {
\tbackground-color: #3c3f58;
}

::-webkit-scrollbar-thumb:hover {
\tbackground-color: rgba(0, 0, 0, 0.3);
}

</style>
<script>
// Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Navbar: https://codepen.io/themustafaomar/pen/VKbQyZ

'use strict'

function \$(selector) {
  return document.querySelector(selector)
}

function find(el, selector) {
  let finded
  return (finded = el.querySelector(selector)) ? finded : null
}

function siblings(el) {
  const siblings = []
  for (let sibling of el.parentNode.children) {
    if (sibling !== el) {
      siblings.push(sibling)
    }
  }
  return siblings
}

const showAsideBtn = \$('.show-side-btn')
const sidebar = \$('.sidebar')
const wrapper = \$('#wrapper')

showAsideBtn.addEventListener('click', function () {
  \$(`#\${this.dataset.show}`).classList.toggle('show-sidebar')
  wrapper.classList.toggle('fullwidth')
})

if (window.innerWidth < 767) {
  sidebar.classList.add('show-sidebar');
}

window.addEventListener('resize', function () {
  if (window.innerWidth > 767) {
    sidebar.classList.remove('show-sidebar')
  }
})

// dropdown menu in the side nav
var slideNavDropdown = \$('.sidebar-dropdown');

\$('.sidebar .categories').addEventListener('click', function (event) {
  event.preventDefault()

  const item = event.target.closest('.has-dropdown')

  if (! item) {
    return
  }

  item.classList.toggle('opened')

  siblings(item).forEach(sibling => {
    sibling.classList.remove('opened')
  })

  if (item.classList.contains('opened')) {
    const toOpen = find(item, '.sidebar-dropdown')

    if (toOpen) {
      toOpen.classList.add('active')
    }

    siblings(item).forEach(sibling => {
      const toClose = find(sibling, '.sidebar-dropdown')

      if (toClose) {
        toClose.classList.remove('active')
      }
    })
  } else {
    find(item, '.sidebar-dropdown').classList.toggle('active')
  }
})

\$('.sidebar .close-aside').addEventListener('click', function () {
  \$(`#\${this.dataset.close}`).classList.add('show-sidebar')
  wrapper.classList.remove('margin')
})


// Global defaults
Chart.defaults.global.animation.duration = 2000; // Animation duration
Chart.defaults.global.title.display = false; // Remove title
Chart.defaults.global.defaultFontColor = '#71748c'; // Font color
Chart.defaults.global.defaultFontSize = 13; // Font size for every label

// Tooltip global resets
Chart.defaults.global.tooltips.backgroundColor = '#111827'
Chart.defaults.global.tooltips.borderColor = 'blue'

// Gridlines global resets
Chart.defaults.scale.gridLines.zeroLineColor = '#3b3d56'
Chart.defaults.scale.gridLines.color = '#3b3d56'
Chart.defaults.scale.gridLines.drawBorder = false

// Legend global resets
Chart.defaults.global.legend.labels.padding = 0;
Chart.defaults.global.legend.display = false;

// Ticks global resets
Chart.defaults.scale.ticks.fontSize = 12
Chart.defaults.scale.ticks.fontColor = '#71748c'
Chart.defaults.scale.ticks.beginAtZero = false
Chart.defaults.scale.ticks.padding = 10

// Elements globals
Chart.defaults.global.elements.point.radius = 0

// Responsivess
Chart.defaults.global.responsive = true
Chart.defaults.global.maintainAspectRatio = false

// The bar chart
var myChart = new Chart(document.getElementById('myChart'), {
  type: 'bar',
  data: {
    labels: [\"January\", \"February\", \"March\", \"April\", 'May', 'June', 'August', 'September'],
    datasets: [{
      label: \"Lost\",
      data: [45, 25, 40, 20, 60, 20, 35, 25],
      backgroundColor: \"#0d6efd\",
      borderColor: 'transparent',
      borderWidth: 2.5,
      barPercentage: 0.4,
    }, {
      label: \"Succes\",
      startAngle: 2,
      data: [20, 40, 20, 50, 25, 40, 25, 10],
      backgroundColor: \"#dc3545\",
      borderColor: 'transparent',
      borderWidth: 2.5,
      barPercentage: 0.4,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {},
        ticks: {
          stepSize: 15,
        },
      }],
      xAxes: [{
        gridLines: {
          display: false,
        }
      }]
    }
  }
})

// The line chart
var chart = new Chart(document.getElementById('myChart2'), {
  type: 'line',
  data: {
    labels: [\"January\", \"February\", \"March\", \"April\", 'May', 'June', 'August', 'September'],
    datasets: [{
      label: \"My First dataset\",
      data: [4, 20, 5, 20, 5, 25, 9, 18],
      backgroundColor: 'transparent',
      borderColor: '#0d6efd',
      lineTension: .4,
      borderWidth: 1.5,
    }, {
      label: \"Month\",
      data: [11, 25, 10, 25, 10, 30, 14, 23],
      backgroundColor: 'transparent',
      borderColor: '#dc3545',
      lineTension: .4,
      borderWidth: 1.5,
    }, {
      label: \"Month\",
      data: [16, 30, 16, 30, 16, 36, 21, 35],
      backgroundColor: 'transparent',
      borderColor: '#f0ad4e',
      lineTension: .4,
      borderWidth: 1.5,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
          stepSize: 12,
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        },
      }]
    }
  }
})

var chart = document.getElementById('chart3');
var myChart = new Chart(chart, {
  type: 'line',
  data: {
    labels: [\"One\", \"Two\", \"Three\", \"Four\", \"Five\", 'Six', \"Seven\", \"Eight\"],
    datasets: [{
      label: \"Lost\",
      lineTension: 0.2,
      borderColor: '#d9534f',
      borderWidth: 1.5,
      showLine: true,
      data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
      backgroundColor: 'transparent'
    }, {
      label: \"Lost\",
      lineTension: 0.2,
      borderColor: '#5cb85c',
      borderWidth: 1.5,
      data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
      backgroundColor: 'transparent'
    },
               {
                 label: \"Lost\",
                 lineTension: 0.2,
                 borderColor: '#f0ad4e',
                 borderWidth: 1.5,
                 data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
                 backgroundColor: 'transparent'
               },
               {
                 label: \"Lost\",
                 lineTension: 0.2,
                 borderColor: '#337ab7',
                 borderWidth: 1.5,
                 data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
                 backgroundColor: 'transparent'
               }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
          stepSize: 12
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        },
      }],
    }
  }
})

</script>
    

";
        // line 808
        yield from $this->loadTemplate("footer.html.twig", "dashboard.html.twig", 808)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  878 => 808,  183 => 116,  158 => 94,  77 => 18,  62 => 5,  60 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base_auth.html.twig\" %}

{% block body %} 
{% include \"navbar.html.twig\" %}

<aside class=\"sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left\" id=\"show-side-navigation1\">
  <i class=\"uil-bars close-aside d-md-none d-lg-none\" data-close=\"show-side-navigation1\"></i>
  <div class=\"sidebar-header d-flex justify-content-center align-items-center px-3 py-4\">
    <img
         class=\"rounded-pill img-fluid\"
         width=\"65\"
         src=\"https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance\"
         alt=\"\">
    <div class=\"ms-2\">
      <h5 class=\"fs-6 mb-0\">
      <img src=\"img/1054744.png\" alt=\"Modify\" width='34' height=\"34\"></i>

        <a class=\"text-decoration-none\" href=\"#\">  {{userData.Nom}} {{userData.Prenom}}</a>
      </h5>
      <p class=\"mt-1 mb-0\">Is connected.</p>
    </div>
  </div>
  
  <div class=\"search position-relative text-center px-4 py-3 mt-2\">
    <input type=\"text\" class=\"form-control w-100 border-0 bg-transparent\" placeholder=\"Search here\">
    <i class=\"fa fa-search position-absolute d-block fs-6\"></i>
  </div>

  <ul class=\"categories list-unstyled\">
    <li class=\"has-dropdown\">
      <i class=\"uil-estate fa-fw\"></i><a href=\"#\"> Utilisateurs </a>
      <ul class=\"sidebar-dropdown list-unstyled\">
        <li><button onclick=\"window.location.href='add_personel.php'\"> Ajouter des utilisateurs </button></li>
        <li><button onclick=\"window.location.href='viewuser.php'\"> Voir la liste des utilisateurs </button></li>
        <li><button onclick=\"window.location.href='admin_users.php'\"> Gérer les utilisateurs </button></li> <!-- Ajout du lien -->
      </ul>
    </li>
    <li class=\"has-dropdown\">
      <i class=\"uil-calendar-alt\"></i><a href=\"#\"> Intervention</a>
      <ul class=\"sidebar-dropdown list-unstyled\">
         <li><button onclick=\"window.location.href='get_intervention_admin.php'\"> Ajouter une intervention </button></li>
         
      </ul>
    </li>
 
    <li class=\"has-dropdown\">
      <i class=\"uil-shopping-cart-alt\"></i><a href=\"\">calendrier</a>
      <ul class=\"sidebar-dropdown list-styled\">
        <li><button onclick=\"window.location.href='calendrier.php'\">Calendrier d'Intervention </button></li>
      </ul>
    </li>
    
  </ul>
</aside>

<section id=\"wrapper\">
  <nav class=\"navbar navbar-expand-md\">
    <div class=\"container-fluid mx-2\">
      <div class=\"navbar-header\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#toggle-navbar\" aria-controls=\"toggle-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"uil-bars text-white\"></i>
        </button>
        <a class=\"navbar-brand\" href=\"dashboard_admin.php\"><span class=\"main-color\">Dashboard</span></a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"toggle-navbar\">
        <ul class=\"navbar-nav ms-auto\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              
            </a>
            
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i data-show=\"show-side-navigation1\" class=\"uil-bars show-side-btn\"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=\"p-4\">
    

    <section class=\"statistics mt-4\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <div class=\"box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3\">
             <img src=\"/img/recevoir-du-courrier.png\" alt=\"Modify\" width='34' height=\"34\">
            <div class=\"ms-3\">
              <div class=\"d-flex align-items-center\">
                <h3 class=\"mb-0\">{{ totalMail }}</h3> <span class=\"d-block ms-2\">Emails</span>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"col-lg-4\">
          <div class=\"box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3\">
            <img src=\"/img/resolution-de-conflit.png\" alt=\"Modify\" width='34' height=\"34\"></i>
            <div class=\"ms-3\">
              <div class=\"d-flex align-items-center\">
                <h3 class=\"mb-0\"></h3> <span class=\"d-block ms-2\">intervention</span>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"col-lg-4\">
          <div class=\"box d-flex rounded-2 align-items-center p-3\">
            <img src=\"/img/user-interface .png\" alt=\"Modify\" width='34' height=\"34\"></i>
            <div class=\"ms-3\">
              <div class=\"d-flex align-items-center\">
                <h3 class=\"mb-0\">{{ totalUsers }}</h3> <span class=\"d-block ms-2\">Users</span>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ajout de la section Administrateurs -->
    <section class=\"administrateurs mt-4\">
      <h3>Administrateurs</h3>
      <ul>
        <li>Peuvent gérer les utilisateurs (ajouter/supprimer des techniciens et employés).</li>
        <li>Peuvent attribuer un technicien manuellement à un ticket.</li>
        <li>Ont accès à un tableau de bord pour suivre les statistiques :</li>
        <ul>
          <li>Nombre total de tickets ouverts/résolus.</li>
          <li>Temps moyen de résolution par technicien.</li>
          <li>Priorisation des tickets critiques.</li>
        </ul>
      </ul>
    </section>
  </div>
</section>

<style>
@import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap\" rel=\"stylesheet';

:root {
\t--dk-gray-100: #F3F4F6;
\t--dk-gray-200: #E5E7EB;
\t--dk-gray-300: #D1D5DB;
\t--dk-gray-400: #9CA3AF;
\t--dk-gray-500: #6B7280;
\t--dk-gray-600: #4B5563;
\t--dk-gray-700: #374151;
\t--dk-gray-800: #1F2937;
\t--dk-gray-900: #111827;
\t--dk-dark-bg: #313348;
\t--dk-darker-bg: #2a2b3d;
\t--navbar-bg-color: #6f6486;
\t--sidebar-bg-color: #252636;
\t--sidebar-width: 250px;
}

* {
\tmargin: 0;
\tpadding: 0;
\tbox-sizing: border-box;
}

body {
\tfont-family: 'Inter', sans-serif;
\tbackground-color: var(--dk-darker-bg);
\tfont-size: .925rem;
}

#wrapper {
\tmargin-left: var(--sidebar-width);
\ttransition: all .3s ease-in-out;
}

#wrapper.fullwidth {
\tmargin-left: 0;
}



/** --------------------------------
 -- Sidebar
-------------------------------- */
.sidebar {
\tbackground-color: var(--sidebar-bg-color);
\twidth: var(--sidebar-width);
\ttransition: all .3s ease-in-out;
\ttransform: translateX(0);
\tz-index: 9999999
}

.sidebar .close-aside {
\tposition: absolute;
\ttop: 7px;
\tright: 7px;
\tcursor: pointer;
\tcolor: #EEE;
}

.sidebar .sidebar-header {
\tborder-bottom: 1px solid #2a2b3c
}

.sidebar .sidebar-header h5 a {
\tcolor: var(--dk-gray-300)
}

.sidebar .sidebar-header p {
\tcolor: var(--dk-gray-400);
\tfont-size: .825rem;
}

.sidebar .search .form-control ~ i {
\tcolor: #2b2f3a;
\tright: 40px;
\ttop: 22px;
}

.has-dropdown button {
    display: block;
    width: 100%;
    text-align: left;
    padding: 10px 15px;
    border: none;
    background-color: #000; /* Fond en noir */
    color: #fff; /* Couleur du texte en blanc */
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.has-dropdown button:hover {
    background-color: #333; /* Couleur de fond au survol */
}


.sidebar > ul > li {
\tpadding: .7rem 1.75rem;
}

.sidebar ul > li > a {
\tcolor: var(--dk-gray-400);
\ttext-decoration: none;
}

/* Start numbers */
.sidebar ul > li > a > .num {
\tline-height: 0;
\tborder-radius: 3px;
\tfont-size: 14px;
\tpadding: 0px 5px
}

.sidebar ul > li > i {
\tfont-size: 18px;
\tmargin-right: .7rem;
\tcolor: var(--dk-gray-500);
}

.sidebar ul > li.has-dropdown > a:after {
\tcontent: '\\eb3a';
\tfont-family: unicons-line;
\tfont-size: 1rem;
\tline-height: 1.8;
\tfloat: right;
\tcolor: var(--dk-gray-500);
\ttransition: all .3s ease-in-out;
}

.sidebar ul .opened > a:after {
\ttransform: rotate(-90deg);
}

/* Start dropdown menu */
.sidebar ul .sidebar-dropdown {
\tpadding-top: 10px;
\tpadding-left: 30px;
\tdisplay: none;
}
.sidebar ul .sidebar-dropdown.active {
\tdisplay: block;
}

.sidebar ul .sidebar-dropdown > li > a {
  font-size: .85rem;
\tpadding: .5rem 0;
\tdisplay: block;
}
/* End dropdown menu */

.show-sidebar {
\ttransform: translateX(-270px);
}

@media (max-width: 767px) {
\t.sidebar ul > li {
\t\tpadding-top: 12px;
\t\tpadding-bottom: 12px;
\t}

\t.sidebar .search {
\t\tpadding: 10px 0 10px 30px
\t}
}




/** --------------------------------
 -- welcome
-------------------------------- */
.welcome {
\tcolor: var(--dk-gray-300);
}

.welcome .content {
\tbackground-color: var(--dk-dark-bg);
}

.welcome p {
\tcolor: var(--dk-gray-400);
}




/** --------------------------------
 -- Statistics
-------------------------------- */
.statistics {
\tcolor: var(--dk-gray-200);
}

.statistics .box {
\tbackground-color: var(--dk-dark-bg);
}

.statistics .box i {
\twidth: 60px;
\theight: 60px;
\tline-height: 60px;
}

.statistics .box p {
\tcolor: var(--dk-gray-400);
}




/** --------------------------------
 -- Charts
-------------------------------- */
.charts .chart-container {
\tbackground-color: var(--dk-dark-bg);
}

.charts .chart-container h3 {
\tcolor: var(--dk-gray-400)
}




/** --------------------------------
 -- users
-------------------------------- */
.admins .box .admin {
\tbackground-color: var(--dk-dark-bg);
}

.admins .box h3 {
\tcolor: var(--dk-gray-300);
}

.admins .box p {
\tcolor: var(--dk-gray-400)
}




/** --------------------------------
 -- statis
-------------------------------- */
.statis {
\tcolor: var(--dk-gray-100);
}

.statis .box {
\tposition: relative;
\toverflow: hidden;
\tborder-radius: 3px;
}

.statis .box h3:after {
\tcontent: \"\";
\theight: 2px;
\twidth: 70%;
\tmargin: auto;
\tbackground-color: rgba(255, 255, 255, 0.12);
\tdisplay: block;
\tmargin-top: 10px;
}

.statis .box i {
\tposition: absolute;
\theight: 70px;
\twidth: 70px;
\tfont-size: 22px;
\tpadding: 15px;
\ttop: -25px;
\tleft: -25px;
\tbackground-color: rgba(255, 255, 255, 0.15);
\tline-height: 60px;
\ttext-align: right;
\tborder-radius: 50%;
}





.main-color {
\tcolor: #ffc107
}

/** --------------------------------
 -- Please don't do that in real-world projects!
 -- overwrite Bootstrap variables instead.
-------------------------------- */

.navbar {
\tbackground-color: var(--navbar-bg-color) !important;
\tborder: none !important;
}
.navbar .dropdown-menu {
\tright: auto !important;
\tleft: 0 !important;
}
.navbar .navbar-nav>li>a {
\tcolor: #EEE !important;
\tline-height: 55px !important;
\tpadding: 0 10px !important;
}
.navbar .navbar-brand {color:#FFF !important}
.navbar .navbar-nav>li>a:focus,
.navbar .navbar-nav>li>a:hover {color: #EEE !important}

.navbar .navbar-nav>.open>a,
.navbar .navbar-nav>.open>a:focus,
.navbar .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

.navbar .navbar-brand {line-height: 55px !important; padding: 0 !important}
.navbar .navbar-brand:focus,
.navbar .navbar-brand:hover {color: #FFF !important}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
@media (max-width: 767px) {
\t.navbar>.container-fluid .navbar-brand {
\t\tmargin-left: 15px !important;
\t}
\t.navbar .navbar-nav>li>a {
\t\tpadding-left: 0 !important;
\t}
\t.navbar-nav {
\t\tmargin: 0 !important;
\t}
\t.navbar .navbar-collapse,
\t.navbar .navbar-form {
\t\tborder: none !important;
\t}
}

.navbar .navbar-nav>li>a {
\tfloat: left !important;
}
.navbar .navbar-nav>li>a>span:not(.caret) {
\tbackground-color: #e74c3c !important;
\tborder-radius: 50% !important;
\theight: 25px !important;
\twidth: 25px !important;
\tpadding: 2px !important;
\tfont-size: 11px !important;
\tposition: relative !important;
\ttop: -10px !important;
\tright: 5px !important
}
.dropdown-menu>li>a {
\tpadding-top: 5px !important;
\tpadding-right: 5px !important;
}
.navbar .navbar-nav>li>a>i {
\tfont-size: 18px !important;
}




/* Start media query */

@media (max-width: 767px) {
\t#wrapper {
\t\tmargin: 0 !important
\t}
\t.statistics .box {
\t\tmargin-bottom: 25px !important;
\t}
\t.navbar .navbar-nav .open .dropdown-menu>li>a {
\t\tcolor: #CCC !important
\t}
\t.navbar .navbar-nav .open .dropdown-menu>li>a:hover {
\t\tcolor: #FFF !important
\t}
\t.navbar .navbar-toggle{
\t\tborder:none !important;
\t\tcolor: #EEE !important;
\t\tfont-size: 18px !important;
\t}
\t.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {background-color: transparent !important}
}


::-webkit-scrollbar {
\tbackground: transparent;
\twidth: 5px;
\theight: 5px;
}

::-webkit-scrollbar-thumb {
\tbackground-color: #3c3f58;
}

::-webkit-scrollbar-thumb:hover {
\tbackground-color: rgba(0, 0, 0, 0.3);
}

</style>
<script>
// Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Navbar: https://codepen.io/themustafaomar/pen/VKbQyZ

'use strict'

function \$(selector) {
  return document.querySelector(selector)
}

function find(el, selector) {
  let finded
  return (finded = el.querySelector(selector)) ? finded : null
}

function siblings(el) {
  const siblings = []
  for (let sibling of el.parentNode.children) {
    if (sibling !== el) {
      siblings.push(sibling)
    }
  }
  return siblings
}

const showAsideBtn = \$('.show-side-btn')
const sidebar = \$('.sidebar')
const wrapper = \$('#wrapper')

showAsideBtn.addEventListener('click', function () {
  \$(`#\${this.dataset.show}`).classList.toggle('show-sidebar')
  wrapper.classList.toggle('fullwidth')
})

if (window.innerWidth < 767) {
  sidebar.classList.add('show-sidebar');
}

window.addEventListener('resize', function () {
  if (window.innerWidth > 767) {
    sidebar.classList.remove('show-sidebar')
  }
})

// dropdown menu in the side nav
var slideNavDropdown = \$('.sidebar-dropdown');

\$('.sidebar .categories').addEventListener('click', function (event) {
  event.preventDefault()

  const item = event.target.closest('.has-dropdown')

  if (! item) {
    return
  }

  item.classList.toggle('opened')

  siblings(item).forEach(sibling => {
    sibling.classList.remove('opened')
  })

  if (item.classList.contains('opened')) {
    const toOpen = find(item, '.sidebar-dropdown')

    if (toOpen) {
      toOpen.classList.add('active')
    }

    siblings(item).forEach(sibling => {
      const toClose = find(sibling, '.sidebar-dropdown')

      if (toClose) {
        toClose.classList.remove('active')
      }
    })
  } else {
    find(item, '.sidebar-dropdown').classList.toggle('active')
  }
})

\$('.sidebar .close-aside').addEventListener('click', function () {
  \$(`#\${this.dataset.close}`).classList.add('show-sidebar')
  wrapper.classList.remove('margin')
})


// Global defaults
Chart.defaults.global.animation.duration = 2000; // Animation duration
Chart.defaults.global.title.display = false; // Remove title
Chart.defaults.global.defaultFontColor = '#71748c'; // Font color
Chart.defaults.global.defaultFontSize = 13; // Font size for every label

// Tooltip global resets
Chart.defaults.global.tooltips.backgroundColor = '#111827'
Chart.defaults.global.tooltips.borderColor = 'blue'

// Gridlines global resets
Chart.defaults.scale.gridLines.zeroLineColor = '#3b3d56'
Chart.defaults.scale.gridLines.color = '#3b3d56'
Chart.defaults.scale.gridLines.drawBorder = false

// Legend global resets
Chart.defaults.global.legend.labels.padding = 0;
Chart.defaults.global.legend.display = false;

// Ticks global resets
Chart.defaults.scale.ticks.fontSize = 12
Chart.defaults.scale.ticks.fontColor = '#71748c'
Chart.defaults.scale.ticks.beginAtZero = false
Chart.defaults.scale.ticks.padding = 10

// Elements globals
Chart.defaults.global.elements.point.radius = 0

// Responsivess
Chart.defaults.global.responsive = true
Chart.defaults.global.maintainAspectRatio = false

// The bar chart
var myChart = new Chart(document.getElementById('myChart'), {
  type: 'bar',
  data: {
    labels: [\"January\", \"February\", \"March\", \"April\", 'May', 'June', 'August', 'September'],
    datasets: [{
      label: \"Lost\",
      data: [45, 25, 40, 20, 60, 20, 35, 25],
      backgroundColor: \"#0d6efd\",
      borderColor: 'transparent',
      borderWidth: 2.5,
      barPercentage: 0.4,
    }, {
      label: \"Succes\",
      startAngle: 2,
      data: [20, 40, 20, 50, 25, 40, 25, 10],
      backgroundColor: \"#dc3545\",
      borderColor: 'transparent',
      borderWidth: 2.5,
      barPercentage: 0.4,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {},
        ticks: {
          stepSize: 15,
        },
      }],
      xAxes: [{
        gridLines: {
          display: false,
        }
      }]
    }
  }
})

// The line chart
var chart = new Chart(document.getElementById('myChart2'), {
  type: 'line',
  data: {
    labels: [\"January\", \"February\", \"March\", \"April\", 'May', 'June', 'August', 'September'],
    datasets: [{
      label: \"My First dataset\",
      data: [4, 20, 5, 20, 5, 25, 9, 18],
      backgroundColor: 'transparent',
      borderColor: '#0d6efd',
      lineTension: .4,
      borderWidth: 1.5,
    }, {
      label: \"Month\",
      data: [11, 25, 10, 25, 10, 30, 14, 23],
      backgroundColor: 'transparent',
      borderColor: '#dc3545',
      lineTension: .4,
      borderWidth: 1.5,
    }, {
      label: \"Month\",
      data: [16, 30, 16, 30, 16, 36, 21, 35],
      backgroundColor: 'transparent',
      borderColor: '#f0ad4e',
      lineTension: .4,
      borderWidth: 1.5,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
          stepSize: 12,
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        },
      }]
    }
  }
})

var chart = document.getElementById('chart3');
var myChart = new Chart(chart, {
  type: 'line',
  data: {
    labels: [\"One\", \"Two\", \"Three\", \"Four\", \"Five\", 'Six', \"Seven\", \"Eight\"],
    datasets: [{
      label: \"Lost\",
      lineTension: 0.2,
      borderColor: '#d9534f',
      borderWidth: 1.5,
      showLine: true,
      data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
      backgroundColor: 'transparent'
    }, {
      label: \"Lost\",
      lineTension: 0.2,
      borderColor: '#5cb85c',
      borderWidth: 1.5,
      data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
      backgroundColor: 'transparent'
    },
               {
                 label: \"Lost\",
                 lineTension: 0.2,
                 borderColor: '#f0ad4e',
                 borderWidth: 1.5,
                 data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
                 backgroundColor: 'transparent'
               },
               {
                 label: \"Lost\",
                 lineTension: 0.2,
                 borderColor: '#337ab7',
                 borderWidth: 1.5,
                 data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
                 backgroundColor: 'transparent'
               }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
          stepSize: 12
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        },
      }],
    }
  }
})

</script>
    

{% include \"footer.html.twig\" %}
{% endblock %}", "dashboard.html.twig", "C:\\Users\\phanu\\Desktop\\projet_dev_opps-main\\app\\templates\\dashboard.html.twig");
    }
}
