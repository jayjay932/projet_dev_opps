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

/* base_auth.html.twig */
class __TwigTemplate_7568842f46f6d617206ad21f0297a6c8 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
   <head/>
  <body>

";
        // line 12
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 18
        yield "  </body>
  </html>";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
";
        // line 13
        yield from $this->loadTemplate("navbar.html.twig", "base_auth.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "<footer>
";
        // line 15
        yield from $this->loadTemplate("footer.html.twig", "base_auth.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_auth.html.twig";
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
        return array (  83 => 16,  81 => 15,  78 => 14,  76 => 13,  67 => 12,  61 => 18,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{{title}}</title>
   <head/>
  <body>

{% block body %} 
{% include \"navbar.html.twig\" %}
<footer>
{% include \"footer.html.twig\" %}
</footer>
{% endblock %}
  </body>
  </html>", "base_auth.html.twig", "C:\\Users\\phanu\\Desktop\\projet_dev_opps-main\\app\\templates\\base_auth.html.twig");
    }
}
