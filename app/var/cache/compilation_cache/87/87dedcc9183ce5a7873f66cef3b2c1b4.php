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

/* navbar.html.twig */
class __TwigTemplate_8bbebd48574d7b878b929318801cddbd extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\" />
    <title>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('h')->getCallable()(($context["title"] ?? null)), "html", null, true);
        yield "</title>
</head>

<body>
    <!-- Navbar -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container-fluid\">
            <!-- Logo -->
            <a class=\"navbar-brand\" href=\"";
        // line 22
        if ( !($context["userData"] ?? null)) {
            yield "index.php";
        } else {
            yield "profil.php";
        }
        yield "\">
                <img src=\"";
        // line 23
        yield "/img/images.png";
        yield "\" alt=\"Logo\" width=\"55\" height=\"40\" class=\"d-inline-block align-text-top\">
                AccordEnergie
            </a>
            ";
        // line 26
        if ( !($context["userData"] ?? null)) {
            // line 27
            yield "            <!-- Toggle button -->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/index.php\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"aboutUs.php\">A propos</a>
                    </li>
                </ul>
                
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"index.php\" class=\"nav-link\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"register.php\" class=\"nav-link btn btn-outline-primary\">Sign Up</a>
                    </li>
                </ul>
                ";
        } else {
            // line 50
            yield "                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/profile.php\">Profil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/calendrier.php\">Suivi</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"logout.php\" class=\"nav-link btn btn-outline-primary\">Log Out</a>
                    </li>
                    ";
            // line 60
            if (((($_v0 = ($context["userData"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Role"] ?? null) : null) == "Admin")) {
                // line 61
                yield "                    <li class=\"nav-item\">
                        <a href=\"dashboard_admin.php\" class=\"nav-link btn btn-outline-primary\">Dashboard</a>
                    </li>
                    ";
            }
            // line 65
            yield "                </ul>
                ";
        }
        // line 67
        yield "            </div>
        </div>
    </nav>
</body>

</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar.html.twig";
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
        return array (  133 => 67,  129 => 65,  123 => 61,  121 => 60,  109 => 50,  84 => 27,  82 => 26,  76 => 23,  68 => 22,  57 => 14,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\" />
    <title>{{ h(title)}}</title>
</head>

<body>
    <!-- Navbar -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container-fluid\">
            <!-- Logo -->
            <a class=\"navbar-brand\" href=\"{% if not userData %}index.php{% else %}profil.php{% endif %}\">
                <img src=\"{{'/img/images.png'}}\" alt=\"Logo\" width=\"55\" height=\"40\" class=\"d-inline-block align-text-top\">
                AccordEnergie
            </a>
            {% if not userData %}
            <!-- Toggle button -->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/index.php\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"aboutUs.php\">A propos</a>
                    </li>
                </ul>
                
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"index.php\" class=\"nav-link\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"register.php\" class=\"nav-link btn btn-outline-primary\">Sign Up</a>
                    </li>
                </ul>
                {% else %}
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/profile.php\">Profil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/calendrier.php\">Suivi</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"logout.php\" class=\"nav-link btn btn-outline-primary\">Log Out</a>
                    </li>
                    {% if userData['Role'] == 'Admin' %}
                    <li class=\"nav-item\">
                        <a href=\"dashboard_admin.php\" class=\"nav-link btn btn-outline-primary\">Dashboard</a>
                    </li>
                    {% endif %}
                </ul>
                {% endif %}
            </div>
        </div>
    </nav>
</body>

</html>
", "navbar.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\navbar.html.twig");
    }
}
