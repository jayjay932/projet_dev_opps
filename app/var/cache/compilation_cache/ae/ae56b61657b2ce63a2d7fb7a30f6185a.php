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

/* footer.html.twig */
class __TwigTemplate_a53e5e90eb4e765e2fe935a517311a9b extends Template
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
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<!--    Bootstrap CSS   -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
<!--    Bootstrap JS   -->
<script
        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\">
</script>
<!-- Footer -->
<footer class=\"text-center bg-body-tertiary\">
    <!-- Grid container -->
    <div class=\"container pt-4\">
        <!-- Section: Social media -->
        <section class=\"mb-4\">
            <!-- Github -->
            <a
                    data-mdb-ripple-init
                    class=\"btn btn-link btn-floating btn-lg text-body m-1\"
                    href=\"#!\"
                    role=\"button\"
                    data-mdb-ripple-color=\"dark\"
            ><i class=\"fab fa-github\"></i
            ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
        © 2024 Copyright:
        <a class=\"text-body\" href=\"#\">Projet Dev Web</a>
    </div>
    <!-- Copyright -->
</footer>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<!--    Bootstrap CSS   -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
<!--    Bootstrap JS   -->
<script
        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\">
</script>
<!-- Footer -->
<footer class=\"text-center bg-body-tertiary\">
    <!-- Grid container -->
    <div class=\"container pt-4\">
        <!-- Section: Social media -->
        <section class=\"mb-4\">
            <!-- Github -->
            <a
                    data-mdb-ripple-init
                    class=\"btn btn-link btn-floating btn-lg text-body m-1\"
                    href=\"#!\"
                    role=\"button\"
                    data-mdb-ripple-color=\"dark\"
            ><i class=\"fab fa-github\"></i
            ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
        © 2024 Copyright:
        <a class=\"text-body\" href=\"#\">Projet Dev Web</a>
    </div>
    <!-- Copyright -->
</footer>
</html>", "footer.html.twig", "C:\\Users\\phanu\\Desktop\\projet_dev_opps-main\\app\\templates\\footer.html.twig");
    }
}
