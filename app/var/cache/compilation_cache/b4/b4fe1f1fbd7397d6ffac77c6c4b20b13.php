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

/* create_ticket.html.twig */
class __TwigTemplate_63d03e521a239ceec8f6927f96bbdfe5 extends Template
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
        $this->parent = $this->loadTemplate("base_auth.html.twig", "create_ticket.html.twig", 1);
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
        yield from $this->loadTemplate("navbar.html.twig", "create_ticket.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
\t<div class=\"bg-light py-3 py-md-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t<div class=\"col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6\">
\t\t\t\t\t<div class=\"bg-white p-4 p-md-5 rounded shadow-sm\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t\t\t<a href=\"/index.php\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/images.png\" alt=\"Logo\" width=\"175\" height=\"100\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h1 class=\"text-center\">Créer un Ticket</h1>

\t\t\t\t\t\t";
        // line 23
        if (($context["msg"] ?? null)) {
            // line 24
            yield "\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
            yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 28
        yield "
\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"row gy-3 gy-md-4 overflow-hidden\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label for=\"titre\" class=\"form-label\">Titre <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"titre\" id=\"titre\" placeholder=\"Titre du ticket\" required>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label for=\"description\" class=\"form-label\">Description <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"description\" id=\"description\" rows=\"4\" placeholder=\"Décrivez votre problème\" required></textarea>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label for=\"priorite\" class=\"form-label\">Priorité <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"priorite\" id=\"priorite\" required>
\t\t\t\t\t\t\t\t\t\t<option value=\"Faible\">Faible</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Moyenne\" selected>Moyenne</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Élevée\">Élevée</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Critique\">Critique</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" name=\"send\">Créer le Ticket</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<hr class=\"mt-5 mb-4 border-secondary-subtle\">
\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center\">
\t\t\t\t\t\t\t\t\t<a href=\"dashboard.php\" class=\"link-secondary text-decoration-none\">Retour au tableau de bord</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 73
        yield from $this->loadTemplate("footer.html.twig", "create_ticket.html.twig", 73)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "create_ticket.html.twig";
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
        return array (  139 => 73,  92 => 28,  86 => 25,  83 => 24,  81 => 23,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base_auth.html.twig\" %}

{% block body %}
\t{% include \"navbar.html.twig\" %}

\t<div class=\"bg-light py-3 py-md-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t<div class=\"col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6\">
\t\t\t\t\t<div class=\"bg-white p-4 p-md-5 rounded shadow-sm\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t\t\t<a href=\"/index.php\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/images.png\" alt=\"Logo\" width=\"175\" height=\"100\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h1 class=\"text-center\">Créer un Ticket</h1>

\t\t\t\t\t\t{% if msg %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t{{ msg }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"row gy-3 gy-md-4 overflow-hidden\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label for=\"titre\" class=\"form-label\">Titre <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"titre\" id=\"titre\" placeholder=\"Titre du ticket\" required>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label for=\"description\" class=\"form-label\">Description <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"description\" id=\"description\" rows=\"4\" placeholder=\"Décrivez votre problème\" required></textarea>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<label for=\"priorite\" class=\"form-label\">Priorité <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"priorite\" id=\"priorite\" required>
\t\t\t\t\t\t\t\t\t\t<option value=\"Faible\">Faible</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Moyenne\" selected>Moyenne</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Élevée\">Élevée</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Critique\">Critique</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" name=\"send\">Créer le Ticket</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<hr class=\"mt-5 mb-4 border-secondary-subtle\">
\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center\">
\t\t\t\t\t\t\t\t\t<a href=\"dashboard.php\" class=\"link-secondary text-decoration-none\">Retour au tableau de bord</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{% include \"footer.html.twig\" %}
{% endblock %}
", "create_ticket.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\create_ticket.html.twig");
    }
}
