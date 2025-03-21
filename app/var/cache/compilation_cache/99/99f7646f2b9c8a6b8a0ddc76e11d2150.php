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

/* assign_technician_to_ticket.html.twig */
class __TwigTemplate_b86aa238fdbabfb9d593ed16865aab6e extends Template
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
        $this->parent = $this->loadTemplate("base_auth.html.twig", "assign_technician_to_ticket.html.twig", 1);
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
        yield "    ";
        yield from $this->loadTemplate("navbar.html.twig", "assign_technician_to_ticket.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
    <div class=\"container mt-4\">
        <h2 class=\"mb-4\">Gestion des Tickets</h2>

        ";
        // line 9
        if (($context["msg"] ?? null)) {
            // line 10
            yield "            <div class=\"alert alert-success\">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 14
        yield "
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Priorité</th>
                    <th>Employé</th>
                    <th>Technicien Assigné</th> <!-- Nouvelle colonne -->
                    <th>Attribuer Technicien</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 30
            yield "                    <tr>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "nom_employe", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "technicien_assigne", [], "any", false, false, false, 37), "html", null, true);
            yield "</td> <!-- Affichage du technicien assigné -->
                        <td>
                            <!-- Formulaire pour attribuer un technicien au ticket -->
                            <form action=\"\" method=\"POST\">
                                <input type=\"hidden\" name=\"ticket_id\" value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\">

                                <select name=\"technicien_id\" class=\"form-select\" required>
                                    <option value=\"\">Choisir un technicien</option>
                                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniciens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technicien"]) {
                // line 46
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "id", [], "any", false, false, false, 46), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "email", [], "any", false, false, false, 46), "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['technicien'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                                </select>

                                <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Attribuer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun ticket ouvert</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 63
        yield from $this->loadTemplate("footer.html.twig", "assign_technician_to_ticket.html.twig", 63)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "assign_technician_to_ticket.html.twig";
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
        return array (  183 => 63,  177 => 59,  168 => 55,  166 => 54,  156 => 48,  145 => 46,  141 => 45,  134 => 41,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  100 => 30,  95 => 29,  78 => 14,  72 => 11,  69 => 10,  67 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base_auth.html.twig\" %}

{% block body %}
    {% include \"navbar.html.twig\" %}

    <div class=\"container mt-4\">
        <h2 class=\"mb-4\">Gestion des Tickets</h2>

        {% if msg %}
            <div class=\"alert alert-success\">
                {{ msg }}
            </div>
        {% endif %}

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Priorité</th>
                    <th>Employé</th>
                    <th>Technicien Assigné</th> <!-- Nouvelle colonne -->
                    <th>Attribuer Technicien</th>
                </tr>
            </thead>
            <tbody>
                {% for ticket in tickets %}
                    <tr>
                        <td>{{ ticket.id }}</td>
                        <td>{{ ticket.titre }}</td>
                        <td>{{ ticket.description }}</td>
                        <td>{{ ticket.statut }}</td>
                        <td>{{ ticket.priorite }}</td>
                        <td>{{ ticket.nom_employe }}</td>
                        <td>{{ ticket.technicien_assigne }}</td> <!-- Affichage du technicien assigné -->
                        <td>
                            <!-- Formulaire pour attribuer un technicien au ticket -->
                            <form action=\"\" method=\"POST\">
                                <input type=\"hidden\" name=\"ticket_id\" value=\"{{ ticket.id }}\">

                                <select name=\"technicien_id\" class=\"form-select\" required>
                                    <option value=\"\">Choisir un technicien</option>
                                    {% for technicien in techniciens %}
                                        <option value=\"{{ technicien.id }}\">{{ technicien.email }}</option>
                                    {% endfor %}
                                </select>

                                <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Attribuer</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun ticket ouvert</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    {% include \"footer.html.twig\" %}
{% endblock %}
", "assign_technician_to_ticket.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\assign_technician_to_ticket.html.twig");
    }
}
