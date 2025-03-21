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

/* index.html.twig */
class __TwigTemplate_94a4bfa50941f1fb0376943d2f7b7188 extends Template
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
        $this->parent = $this->loadTemplate("base_auth.html.twig", "index.html.twig", 1);
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
        yield from $this->loadTemplate("navbar.html.twig", "index.html.twig", 4)->unwrap()->yield($context);
        yield "<body></body>
\t<body>
\t\t<div class=\"bg-light py-3 py-md-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t<div class=\"col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6\">
\t\t\t\t\t\t<div class=\"bg-white p-4 p-md-5 rounded shadow-sm\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"./img/images.png\" alt=\"Logo\" width=\"175\" height=\"100\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 21
        yield "\t\t\t\t\t\t\t";
        if (($context["msg"] ?? null)) {
            // line 22
            yield "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t<div>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 27
        yield "\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row gy-3 gy-md-4 overflow-hidden\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"entrez votre email\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de Passe
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-key\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"entrez votre mot de passe\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" name=\"send\" value=\"connect\">Connexion</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<hr class=\"mt-5 mb-4 border-secondary-subtle\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"register.php\" class=\"link-secondary text-decoration-none\">Vous n'avez pas de compte ?</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"pass_forgot.php\" class=\"link-secondary text-decoration-none\">Mot de passe oublié ?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 77
        yield from $this->loadTemplate("footer.html.twig", "index.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "\t</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  145 => 78,  143 => 77,  91 => 27,  84 => 23,  81 => 22,  78 => 21,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base_auth.html.twig\" %}

{% block body %}
\t{% include \"navbar.html.twig\" %}<body></body>
\t<body>
\t\t<div class=\"bg-light py-3 py-md-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-md-center\">
\t\t\t\t\t<div class=\"col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6\">
\t\t\t\t\t\t<div class=\"bg-white p-4 p-md-5 rounded shadow-sm\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"./img/images.png\" alt=\"Logo\" width=\"175\" height=\"100\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{# <h1 class=\"text-center\">Login</h1> #}
\t\t\t\t\t\t\t{% if msg %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t<div>{{msg}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row gy-3 gy-md-4 overflow-hidden\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"entrez votre email\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de Passe
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-key\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"entrez votre mot de passe\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" name=\"send\" value=\"connect\">Connexion</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<hr class=\"mt-5 mb-4 border-secondary-subtle\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"register.php\" class=\"link-secondary text-decoration-none\">Vous n'avez pas de compte ?</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"pass_forgot.php\" class=\"link-secondary text-decoration-none\">Mot de passe oublié ?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% include \"footer.html.twig\" %}
\t</body>
</html>{% endblock %}
", "index.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\index.html.twig");
    }
}
