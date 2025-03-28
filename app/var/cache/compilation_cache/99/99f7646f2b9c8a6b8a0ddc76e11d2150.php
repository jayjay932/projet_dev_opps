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
                        <th>Assignation</th>
                        <th>Commentaires</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 33
            yield "                        <tr class=\"bg-light\">
                            <td><strong>#";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</strong></td>
                            <td class=\"fw-bold text-primary\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                            <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 38) == "Ouvert")) {
                // line 39
                yield "                                    <span class=\"badge bg-success\">Ouvert</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 40
$context["ticket"], "statut", [], "any", false, false, false, 40) == "En cours")) {
                // line 41
                yield "                                    <span class=\"badge bg-warning text-dark\">En cours</span>
                                ";
            } else {
                // line 43
                yield "                                    <span class=\"badge bg-danger\">Fermé</span>
                                ";
            }
            // line 45
            yield "                            </td>
                            <td>
                                ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 47) == "Haute")) {
                // line 48
                yield "                                    <span class=\"badge bg-danger\">🔥 Haute</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["ticket"], "priorite", [], "any", false, false, false, 49) == "Moyenne")) {
                // line 50
                yield "                                    <span class=\"badge bg-warning text-dark\">⚠️ Moyenne</span>
                                ";
            } else {
                // line 52
                yield "                                    <span class=\"badge bg-success\">🟢 Basse</span>
                                ";
            }
            // line 54
            yield "                            </td>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "nom_employe", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge bg-info text-dark\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "technicien_assigne", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
                            </td>
                            <td>
                                <!-- Formulaire d'assignation du technicien -->
                                <form action=\"\" method=\"POST\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"ticket_id\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\">

                                    <div class=\"d-flex flex-column\">
                                        <select name=\"technicien_id\" class=\"form-select form-select-sm mb-2\" required>
                                            <option value=\"\">Choisir un technicien</option>
                                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniciens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technicien"]) {
                // line 68
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "id", [], "any", false, false, false, 68), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "technicien_assigne", [], "any", false, false, false, 68) == CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "email", [], "any", false, false, false, 68))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "email", [], "any", false, false, false, 68), "html", null, true);
                yield "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['technicien'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                                        </select>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2 w-100\">Attribuer</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <button class=\"btn btn-outline-primary btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#commentaires-";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\">
                                    Voir les commentaires
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"9\">
                                <div class=\"collapse\" id=\"commentaires-";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\">
                                    <div class=\"card card-body bg-light border-0\">
                                        <strong>Commentaires :</strong>
                                        <ul class=\"list-group\">
                                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["commentaires"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 87)] ?? null) : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 88
                yield "                                                <li class=\"list-group-item\">
                                                    <p class=\"mb-1\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 89), "html", null, true);
                yield "</p>
                                                    <small class=\"text-muted\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "date_creation", [], "any", false, false, false, 90), "html", null, true);
                yield "</small>
                                                </li>
                                            ";
                $context['_iterated'] = true;
            }
            // line 92
            if (!$context['_iterated']) {
                // line 93
                yield "                                                <li class=\"list-group-item text-muted\">Aucun commentaire</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 100
        if (!$context['_iterated']) {
            // line 101
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-center text-muted\">Aucun ticket ouvert</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 110
        yield from $this->loadTemplate("footer.html.twig", "assign_technician_to_ticket.html.twig", 110)->unwrap()->yield($context);
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
        return array (  276 => 110,  269 => 105,  260 => 101,  258 => 100,  249 => 95,  242 => 93,  240 => 92,  233 => 90,  229 => 89,  226 => 88,  221 => 87,  214 => 83,  204 => 76,  196 => 70,  181 => 68,  177 => 67,  169 => 62,  161 => 57,  156 => 55,  153 => 54,  149 => 52,  145 => 50,  143 => 49,  140 => 48,  138 => 47,  134 => 45,  130 => 43,  126 => 41,  124 => 40,  121 => 39,  119 => 38,  114 => 36,  110 => 35,  106 => 34,  103 => 33,  98 => 32,  79 => 15,  72 => 11,  69 => 10,  67 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
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
                        <th>Assignation</th>
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
                                <!-- Formulaire d'assignation du technicien -->
                                <form action=\"\" method=\"POST\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"ticket_id\" value=\"{{ ticket.id }}\">

                                    <div class=\"d-flex flex-column\">
                                        <select name=\"technicien_id\" class=\"form-select form-select-sm mb-2\" required>
                                            <option value=\"\">Choisir un technicien</option>
                                            {% for technicien in techniciens %}
                                                <option value=\"{{ technicien.id }}\" {% if ticket.technicien_assigne == technicien.email %}selected{% endif %}>{{ technicien.email }}</option>
                                            {% endfor %}
                                        </select>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2 w-100\">Attribuer</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <button class=\"btn btn-outline-primary btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#commentaires-{{ ticket.id }}\">
                                    Voir les commentaires
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"9\">
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
                            <td colspan=\"9\" class=\"text-center text-muted\">Aucun ticket ouvert</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    {% include \"footer.html.twig\" %}
{% endblock %}
", "assign_technician_to_ticket.html.twig", "C:\\Users\\jason\\Downloads\\projet_devops_mampouya_kone_b3\\app\\templates\\assign_technician_to_ticket.html.twig");
    }
}
