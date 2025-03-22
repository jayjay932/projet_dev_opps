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

/* dashboard_employe.html.twig */
class __TwigTemplate_88d316a22880a081ffc5732797e8f8d7 extends Template
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
        $this->parent = $this->loadTemplate("base_auth.html.twig", "dashboard_employe.html.twig", 1);
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
        yield from $this->loadTemplate("navbar.html.twig", "dashboard_employe.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
    <div class=\"container mt-5\">
        <h2 class=\"mb-4 text-primary fw-bold\">📌 Gestion des Tickets</h2>

        ";
        // line 9
        if (($context["msg"] ?? null)) {
            // line 10
            yield "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 15
        yield "
        <div class=\"table-responsive shadow-lg p-3 bg-white rounded\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                        <th>Employé</th>
                        <th>Technicien Assigné</th>
                        <th>Commentaires</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 32
            yield "                        <tr class=\"bg-light\">
                            <td><strong>#";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</strong></td>
                            <td class=\"fw-bold text-primary\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 37) == "Ouvert")) {
                // line 38
                yield "                                    <span class=\"badge bg-success\">Ouvert</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 39
$context["ticket"], "statut", [], "any", false, false, false, 39) == "En cours")) {
                // line 40
                yield "                                    <span class=\"badge bg-warning text-dark\">En cours</span>
                                ";
            } else {
                // line 42
                yield "                                    <span class=\"badge bg-danger\">Fermé</span>
                                ";
            }
            // line 44
            yield "                            </td>
                            <td>
                                ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 46) == "Haute")) {
                // line 47
                yield "                                    <span class=\"badge bg-danger\">🔥 Haute</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["ticket"], "priorite", [], "any", false, false, false, 48) == "Moyenne")) {
                // line 49
                yield "                                    <span class=\"badge bg-warning text-dark\">⚠️ Moyenne</span>
                                ";
            } else {
                // line 51
                yield "                                    <span class=\"badge bg-success\">🟢 Basse</span>
                                ";
            }
            // line 53
            yield "                            </td>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "nom_employe", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge bg-info text-dark\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "technicien_assigne", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                            </td>
                            <td>
                                <button class=\"btn btn-outline-primary btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#commentaires-";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                                    Voir les commentaires
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"8\">
                                <div class=\"collapse\" id=\"commentaires-";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
                                    <div class=\"card card-body bg-light border-0\">
                                        <strong>Commentaires :</strong>
                                        <ul class=\"list-group\">
                                            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["commentaires"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 70)] ?? null) : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 71
                yield "                                                <li class=\"list-group-item\">
                                                    <p class=\"mb-1\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 72), "html", null, true);
                yield "</p>
                                                    <small class=\"text-muted\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "date_creation", [], "any", false, false, false, 73), "html", null, true);
                yield "</small>
                                                </li>
                                            ";
                $context['_iterated'] = true;
            }
            // line 75
            if (!$context['_iterated']) {
                // line 76
                yield "                                                <li class=\"list-group-item text-muted\">Aucun commentaire</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "                        <tr>
                            <td colspan=\"8\" class=\"text-center text-muted\">Aucun ticket ouvert</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 93
        yield from $this->loadTemplate("footer.html.twig", "dashboard_employe.html.twig", 93)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard_employe.html.twig";
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
        return array (  238 => 93,  231 => 88,  222 => 84,  220 => 83,  211 => 78,  204 => 76,  202 => 75,  195 => 73,  191 => 72,  188 => 71,  183 => 70,  176 => 66,  166 => 59,  160 => 56,  155 => 54,  152 => 53,  148 => 51,  144 => 49,  142 => 48,  139 => 47,  137 => 46,  133 => 44,  129 => 42,  125 => 40,  123 => 39,  120 => 38,  118 => 37,  113 => 35,  109 => 34,  105 => 33,  102 => 32,  97 => 31,  79 => 15,  72 => 11,  69 => 10,  67 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base_auth.html.twig\" %}

{% block body %}
    {% include \"navbar.html.twig\" %}

    <div class=\"container mt-5\">
        <h2 class=\"mb-4 text-primary fw-bold\">📌 Gestion des Tickets</h2>

        {% if msg %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ msg }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endif %}

        <div class=\"table-responsive shadow-lg p-3 bg-white rounded\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                        <th>Employé</th>
                        <th>Technicien Assigné</th>
                        <th>Commentaires</th>
                    </tr>
                </thead>
                <tbody>
                    {% for ticket in tickets %}
                        <tr class=\"bg-light\">
                            <td><strong>#{{ ticket.id }}</strong></td>
                            <td class=\"fw-bold text-primary\">{{ ticket.titre }}</td>
                            <td>{{ ticket.description }}</td>
                            <td>
                                {% if ticket.statut == 'Ouvert' %}
                                    <span class=\"badge bg-success\">Ouvert</span>
                                {% elseif ticket.statut == 'En cours' %}
                                    <span class=\"badge bg-warning text-dark\">En cours</span>
                                {% else %}
                                    <span class=\"badge bg-danger\">Fermé</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if ticket.priorite == 'Haute' %}
                                    <span class=\"badge bg-danger\">🔥 Haute</span>
                                {% elseif ticket.priorite == 'Moyenne' %}
                                    <span class=\"badge bg-warning text-dark\">⚠️ Moyenne</span>
                                {% else %}
                                    <span class=\"badge bg-success\">🟢 Basse</span>
                                {% endif %}
                            </td>
                            <td>{{ ticket.nom_employe }}</td>
                            <td>
                                <span class=\"badge bg-info text-dark\">{{ ticket.technicien_assigne }}</span>
                            </td>
                            <td>
                                <button class=\"btn btn-outline-primary btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#commentaires-{{ ticket.id }}\">
                                    Voir les commentaires
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"8\">
                                <div class=\"collapse\" id=\"commentaires-{{ ticket.id }}\">
                                    <div class=\"card card-body bg-light border-0\">
                                        <strong>Commentaires :</strong>
                                        <ul class=\"list-group\">
                                            {% for commentaire in commentaires[ticket.id] %}
                                                <li class=\"list-group-item\">
                                                    <p class=\"mb-1\">{{ commentaire.commentaire }}</p>
                                                    <small class=\"text-muted\">{{ commentaire.date_creation }}</small>
                                                </li>
                                            {% else %}
                                                <li class=\"list-group-item text-muted\">Aucun commentaire</li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\" class=\"text-center text-muted\">Aucun ticket ouvert</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    {% include \"footer.html.twig\" %}
{% endblock %}
", "dashboard_employe.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\dashboard_employe.html.twig");
    }
}
