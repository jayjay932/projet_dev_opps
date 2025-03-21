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

/* tickets_technicien.html.twig */
class __TwigTemplate_4d5dfac5e4bb04b74ac360e43be35b1f extends Template
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
        $this->parent = $this->loadTemplate("base_auth.html.twig", "tickets_technicien.html.twig", 1);
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
        yield from $this->loadTemplate("navbar.html.twig", "tickets_technicien.html.twig", 4)->unwrap()->yield($context);
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
                    <th>Actions</th>
                    <th>Commentaires</th>

                </tr>
            </thead>
            <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 31
            yield "                    <tr>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "nom_employe", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        <td>
                            <form action=\"update_ticket.php\" method=\"post\">
                                <input type=\"hidden\" name=\"ticket_id\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                                
                                <button type=\"submit\" name=\"statut\" value=\"En cours\" class=\"btn btn-warning btn-sm\">En cours</button>
                                <button type=\"submit\" name=\"statut\" value=\"Résolu\" class=\"btn btn-success btn-sm\">Résolu</button>
                                <button type=\"submit\" name=\"statut\" value=\"Fermé\" class=\"btn btn-danger btn-sm\">Fermé</button>
                            </form>
                        </td>


                        <td>
                            <!-- Formulaire pour ajouter un commentaire -->
                            <form action=\"tickets_technicien.php\" method=\"post\">
                                <input type=\"hidden\" name=\"ticket_id\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\">
                                <textarea name=\"commentaire\" class=\"form-control\" rows=\"3\" placeholder=\"Ajouter un commentaire\"></textarea>
                                <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Ajouter Commentaire</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun ticket ouvert</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 67
        yield from $this->loadTemplate("footer.html.twig", "tickets_technicien.html.twig", 67)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tickets_technicien.html.twig";
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
        return array (  173 => 67,  167 => 63,  158 => 59,  156 => 58,  145 => 52,  130 => 40,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  101 => 31,  96 => 30,  78 => 14,  72 => 11,  69 => 10,  67 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
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
                    <th>Actions</th>
                    <th>Commentaires</th>

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
                        <td>
                            <form action=\"update_ticket.php\" method=\"post\">
                                <input type=\"hidden\" name=\"ticket_id\" value=\"{{ ticket.id }}\">
                                
                                <button type=\"submit\" name=\"statut\" value=\"En cours\" class=\"btn btn-warning btn-sm\">En cours</button>
                                <button type=\"submit\" name=\"statut\" value=\"Résolu\" class=\"btn btn-success btn-sm\">Résolu</button>
                                <button type=\"submit\" name=\"statut\" value=\"Fermé\" class=\"btn btn-danger btn-sm\">Fermé</button>
                            </form>
                        </td>


                        <td>
                            <!-- Formulaire pour ajouter un commentaire -->
                            <form action=\"tickets_technicien.php\" method=\"post\">
                                <input type=\"hidden\" name=\"ticket_id\" value=\"{{ ticket.id }}\">
                                <textarea name=\"commentaire\" class=\"form-control\" rows=\"3\" placeholder=\"Ajouter un commentaire\"></textarea>
                                <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Ajouter Commentaire</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun ticket ouvert</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    {% include \"footer.html.twig\" %}
{% endblock %}
", "tickets_technicien.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\tickets_technicien.html.twig");
    }
}
