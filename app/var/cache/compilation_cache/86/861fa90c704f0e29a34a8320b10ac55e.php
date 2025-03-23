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

/* register.html.twig */
class __TwigTemplate_2c467e097829d68ccd075850af8aa2cf extends Template
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
        $this->parent = $this->loadTemplate("base_auth.html.twig", "register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t";
        yield from $this->loadTemplate("navbar.html.twig", "register.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "\t<body>
\t\t<section class=\"gradient-custom\">
\t\t\t<div class=\"container py-5 \">
\t\t\t\t<div class=\"row justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col-12 col-lg-9 col-xl-7\">
\t\t\t\t\t\t<div class=\"card shadow-2-strong card-registration\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t\t<div class=\"card-body p-4 p-md-5\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"./img/images.png\" alt=\"Logo\" width=\"175\" height=\"100\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"mb-4 pb-2 pb-md-0 mb-md-5 justify-content-center\">Créer votre compte</h3>
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t";
        // line 21
        if (($context["msg"] ?? null)) {
            // line 22
            yield "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 27
        yield "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"firstName\">Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"Nom\" id=\"firstName\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"lastName\">Prénom</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"lastName\" name=\"Prenom\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4 pb-2\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"emailAddress\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"emailAddress\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4 pb-2\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"phoneNumber\">Numéro de téléphone</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phoneNumber\" name=\"NumeroTel\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"Adresse\">Adresse</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"Adresse\" id=\"Adresse\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-4 pt-2\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"register\" name=\"send\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t\t<footer>
\t\t\t\t\t";
        // line 91
        yield from $this->loadTemplate("footer.html.twig", "register.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "\t\t\t\t</footer>
\t\t\t</body>
\t\t</html>

\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "register.html.twig";
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
        return array (  159 => 92,  157 => 91,  91 => 27,  84 => 23,  81 => 22,  79 => 21,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base_auth.html.twig\" %}

{% block body %}
\t{% include \"navbar.html.twig\" %}
\t<body>
\t\t<section class=\"gradient-custom\">
\t\t\t<div class=\"container py-5 \">
\t\t\t\t<div class=\"row justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col-12 col-lg-9 col-xl-7\">
\t\t\t\t\t\t<div class=\"card shadow-2-strong card-registration\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t\t<div class=\"card-body p-4 p-md-5\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"./img/images.png\" alt=\"Logo\" width=\"175\" height=\"100\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"mb-4 pb-2 pb-md-0 mb-md-5 justify-content-center\">Créer votre compte</h3>
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t{% if msg %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t<div>{{msg}}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"firstName\">Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"Nom\" id=\"firstName\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"lastName\">Prénom</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"lastName\" name=\"Prenom\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4 pb-2\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"emailAddress\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"emailAddress\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 mb-4 pb-2\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"phoneNumber\">Numéro de téléphone</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phoneNumber\" name=\"NumeroTel\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"Adresse\">Adresse</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"Adresse\" id=\"Adresse\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control form-control-lg\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-4 pt-2\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"register\" name=\"send\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t\t<footer>
\t\t\t\t\t{% include \"footer.html.twig\" %}
\t\t\t\t</footer>
\t\t\t</body>
\t\t</html>

\t{% endblock %}

", "register.html.twig", "C:\\Users\\phanu\\Desktop\\projet_dev_opps-main\\app\\templates\\register.html.twig");
    }
}
