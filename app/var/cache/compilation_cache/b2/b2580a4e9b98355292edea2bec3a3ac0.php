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
class __TwigTemplate_28fe525e0474e0d9f4b14a4e9354a0ee extends Template
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
                                <form action=\"dashboard_admin.php\" method=\"POST\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"ticket_id\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"assign_technician\" value=\"1\">

                                    <div class=\"d-flex flex-column\">
                                        <select name=\"technicien_id\" class=\"form-select form-select-sm mb-2\" required>
                                            <option value=\"\">Choisir un technicien</option>
                                            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniciens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technicien"]) {
                // line 69
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "id", [], "any", false, false, false, 69), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "technicien_assigne", [], "any", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "nom", [], "any", false, false, false, 69))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "nom", [], "any", false, false, false, 69), "html", null, true);
                yield "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['technicien'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                                        </select>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2 w-100\">Attribuer</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <button class=\"btn btn-outline-primary btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#commentaires-";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\">
                                    Voir les commentaires
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"9\">
                                <div class=\"collapse\" id=\"commentaires-";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\">
                                    <div class=\"card card-body bg-light border-0\">
                                        <strong>Commentaires :</strong>
                                        <ul class=\"list-group\">
                                            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["commentaires"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 88)] ?? null) : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 89
                yield "                                                <li class=\"list-group-item\">
                                                    <p class=\"mb-1\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 90), "html", null, true);
                yield "</p>
                                                    <small class=\"text-muted\">";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "date_creation", [], "any", false, false, false, 91), "html", null, true);
                yield "</small>
                                                </li>
                                            ";
                $context['_iterated'] = true;
            }
            // line 93
            if (!$context['_iterated']) {
                // line 94
                yield "                                                <li class=\"list-group-item text-muted\">Aucun commentaire</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 101
        if (!$context['_iterated']) {
            // line 102
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-center text-muted\">Aucun ticket ouvert</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                </tbody>
            </table>
        </div>

        <h2 class=\"mb-4 text-primary fw-bold mt-5\">👥 Gestion des Utilisateurs</h2>

        <!-- Bouton pour ouvrir le modal d'ajout d'utilisateur -->
        <button class=\"btn btn-success mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#addUserModal\">Ajouter un employé</button>

        <div class=\"table-responsive shadow-lg p-3 bg-white rounded\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Date d'inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 129
            yield "                        <tr class=\"bg-light\">
                            <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                            <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                            <td>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 132), "html", null, true);
            yield "</td>
                            <td>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 133), "html", null, true);
            yield "</td>
                            <td>";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "date_inscription", [], "any", false, false, false, 134), "html", null, true);
            yield "</td>
                            <td>
                                <form action=\"admin_users.php\" method=\"get\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"delete_id\" value=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 137), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                                <button class=\"btn btn-warning btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserModal";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 140), "html", null, true);
            yield "\">Modifier</button>
                            </td>
                        </tr>

                        <!-- Modal de modification -->
                        <div class=\"modal fade\" id=\"editUserModal";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 145), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editUserModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 145), "html", null, true);
            yield "\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"editUserModalLabel";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 149), "html", null, true);
            yield "\">Modifier Utilisateur</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <form method=\"POST\" action=\"admin_users.php\">
                                            <input type=\"hidden\" name=\"user_id\" value=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 154), "html", null, true);
            yield "\">
                                            <input type=\"text\" name=\"nom\" class=\"form-control mb-2\" value=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 155), "html", null, true);
            yield "\" required>
                                            <input type=\"email\" name=\"email\" class=\"form-control mb-2\" value=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 156), "html", null, true);
            yield "\" required>
                                            <select name=\"role\" class=\"form-control mb-2\">
                                                <option value=\"Employé\" ";
            // line 158
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 158) == "Employé")) {
                yield "selected";
            }
            yield ">Employé</option>
                                                <option value=\"Technicien\" ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 159) == "Technicien")) {
                yield "selected";
            }
            yield ">Technicien</option>
                                            </select>
                                            <button type=\"submit\" name=\"edit_user\" class=\"btn btn-warning\">Modifier</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                </tbody>
            </table>
        </div>

        <!-- Modal d'ajout d'utilisateur -->
        <div class=\"modal fade\" id=\"addUserModal\" tabindex=\"-1\" aria-labelledby=\"addUserModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addUserModalLabel\">Ajouter un employé</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" action=\"admin_users.php\">
                            <input type=\"text\" name=\"nom\" class=\"form-control mb-2\" placeholder=\"Nom\" required>
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2\" placeholder=\"Email\" required>
                            <input type=\"password\" name=\"password\" class=\"form-control mb-2\" placeholder=\"Mot de passe\" required>
                            <select name=\"role\" class=\"form-control mb-2\">
                                <option value=\"Employé\">Employé</option>
                                <option value=\"Technicien\">Technicien</option>
                            </select>
                            <button type=\"submit\" name=\"add_user\" class=\"btn btn-success\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class=\"mb-4 text-primary fw-bold mt-5\">📊 Statistiques</h2>
        <div class=\"stats-section\">
            <p>Nombre total de tickets ouverts : <span class=\"badge bg-info\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["statsTickets"] ?? null), "total_ouverts", [], "any", false, false, false, 198), "html", null, true);
        yield "</span></p>
            <p>Nombre total de tickets résolus : <span class=\"badge bg-success\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["statsTickets"] ?? null), "total_resolus", [], "any", false, false, false, 199), "html", null, true);
        yield "</span></p>

            <h3 class=\"mt-4\">Temps moyen de résolution par technicien</h3>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Technicien</th>
                        <th>Temps moyen de résolution (heures)</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tempsResolution"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["resolution"]) {
            // line 211
            yield "                    <tr>
                        <td>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["resolution"], "technicien", [], "any", false, false, false, 212), "html", null, true);
            yield "</td>
                        <td>";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["resolution"], "temps_moyen_resolution", [], "any", false, false, false, 213), "html", null, true);
            yield "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['resolution'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                </tbody>
            </table>

            <h3 class=\"mt-4\">Tickets critiques</h3>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ticketsCritiques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 232
            yield "                    <tr>
                        <td>";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 233), "html", null, true);
            yield "</td>
                        <td>";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 234), "html", null, true);
            yield "</td>
                        <td>";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 235), "html", null, true);
            yield "</td>
                        <td>";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 236), "html", null, true);
            yield "</td>
                        <td>";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorite", [], "any", false, false, false, 237), "html", null, true);
            yield "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                </tbody>
            </table>
        </div>
    </div>

<form method=\"POST\" action=\"dashboard_admin.php\">
    <h2>Attribuer un technicien à un ticket</h2>
    <div>
        <label for=\"ticket_id\">Sélectionner un ticket :</label>
        <select name=\"ticket_id\" id=\"ticket_id\" required>
            <option value=\"\">--Sélectionner un ticket--</option>
            ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 252
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 252), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "titre", [], "any", false, false, false, 252), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statut", [], "any", false, false, false, 252), "html", null, true);
            yield ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "        </select>
    </div>
    <div>
        <label for=\"technicien_id\">Sélectionner un technicien :</label>
        <select name=\"technicien_id\" id=\"technicien_id\" required>
            <option value=\"\">--Sélectionner un technicien--</option>
            ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["techniciens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["technicien"]) {
            // line 261
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "id", [], "any", false, false, false, 261), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technicien"], "nom", [], "any", false, false, false, 261), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['technicien'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "        </select>
    </div>
    <button type=\"submit\" name=\"assign_technician\">Attribuer le technicien</button>
</form>


    ";
        // line 269
        yield from $this->loadTemplate("footer.html.twig", "assign_technician_to_ticket.html.twig", 269)->unwrap()->yield($context);
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
        return array (  570 => 269,  562 => 263,  551 => 261,  547 => 260,  539 => 254,  526 => 252,  522 => 251,  509 => 240,  500 => 237,  496 => 236,  492 => 235,  488 => 234,  484 => 233,  481 => 232,  477 => 231,  460 => 216,  451 => 213,  447 => 212,  444 => 211,  440 => 210,  426 => 199,  422 => 198,  390 => 168,  373 => 159,  367 => 158,  362 => 156,  358 => 155,  354 => 154,  346 => 149,  337 => 145,  329 => 140,  323 => 137,  317 => 134,  313 => 133,  309 => 132,  305 => 131,  301 => 130,  298 => 129,  294 => 128,  270 => 106,  261 => 102,  259 => 101,  250 => 96,  243 => 94,  241 => 93,  234 => 91,  230 => 90,  227 => 89,  222 => 88,  215 => 84,  205 => 77,  197 => 71,  182 => 69,  178 => 68,  169 => 62,  161 => 57,  156 => 55,  153 => 54,  149 => 52,  145 => 50,  143 => 49,  140 => 48,  138 => 47,  134 => 45,  130 => 43,  126 => 41,  124 => 40,  121 => 39,  119 => 38,  114 => 36,  110 => 35,  106 => 34,  103 => 33,  98 => 32,  79 => 15,  72 => 11,  69 => 10,  67 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
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
                                <form action=\"dashboard_admin.php\" method=\"POST\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"ticket_id\" value=\"{{ ticket.id }}\">
                                    <input type=\"hidden\" name=\"assign_technician\" value=\"1\">

                                    <div class=\"d-flex flex-column\">
                                        <select name=\"technicien_id\" class=\"form-select form-select-sm mb-2\" required>
                                            <option value=\"\">Choisir un technicien</option>
                                            {% for technicien in techniciens %}
                                                <option value=\"{{ technicien.id }}\" {% if ticket.technicien_assigne == technicien.nom %}selected{% endif %}>{{ technicien.nom }}</option>
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

        <h2 class=\"mb-4 text-primary fw-bold mt-5\">👥 Gestion des Utilisateurs</h2>

        <!-- Bouton pour ouvrir le modal d'ajout d'utilisateur -->
        <button class=\"btn btn-success mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#addUserModal\">Ajouter un employé</button>

        <div class=\"table-responsive shadow-lg p-3 bg-white rounded\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Date d'inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                        <tr class=\"bg-light\">
                            <td>{{ user.id }}</td>
                            <td>{{ user.nom }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.role }}</td>
                            <td>{{ user.date_inscription }}</td>
                            <td>
                                <form action=\"admin_users.php\" method=\"get\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"delete_id\" value=\"{{ user.id }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                                <button class=\"btn btn-warning btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserModal{{ user.id }}\">Modifier</button>
                            </td>
                        </tr>

                        <!-- Modal de modification -->
                        <div class=\"modal fade\" id=\"editUserModal{{ user.id }}\" tabindex=\"-1\" aria-labelledby=\"editUserModalLabel{{ user.id }}\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"editUserModalLabel{{ user.id }}\">Modifier Utilisateur</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <form method=\"POST\" action=\"admin_users.php\">
                                            <input type=\"hidden\" name=\"user_id\" value=\"{{ user.id }}\">
                                            <input type=\"text\" name=\"nom\" class=\"form-control mb-2\" value=\"{{ user.nom }}\" required>
                                            <input type=\"email\" name=\"email\" class=\"form-control mb-2\" value=\"{{ user.email }}\" required>
                                            <select name=\"role\" class=\"form-control mb-2\">
                                                <option value=\"Employé\" {% if user.role == 'Employé' %}selected{% endif %}>Employé</option>
                                                <option value=\"Technicien\" {% if user.role == 'Technicien' %}selected{% endif %}>Technicien</option>
                                            </select>
                                            <button type=\"submit\" name=\"edit_user\" class=\"btn btn-warning\">Modifier</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Modal d'ajout d'utilisateur -->
        <div class=\"modal fade\" id=\"addUserModal\" tabindex=\"-1\" aria-labelledby=\"addUserModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addUserModalLabel\">Ajouter un employé</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" action=\"admin_users.php\">
                            <input type=\"text\" name=\"nom\" class=\"form-control mb-2\" placeholder=\"Nom\" required>
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2\" placeholder=\"Email\" required>
                            <input type=\"password\" name=\"password\" class=\"form-control mb-2\" placeholder=\"Mot de passe\" required>
                            <select name=\"role\" class=\"form-control mb-2\">
                                <option value=\"Employé\">Employé</option>
                                <option value=\"Technicien\">Technicien</option>
                            </select>
                            <button type=\"submit\" name=\"add_user\" class=\"btn btn-success\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class=\"mb-4 text-primary fw-bold mt-5\">📊 Statistiques</h2>
        <div class=\"stats-section\">
            <p>Nombre total de tickets ouverts : <span class=\"badge bg-info\">{{ statsTickets.total_ouverts }}</span></p>
            <p>Nombre total de tickets résolus : <span class=\"badge bg-success\">{{ statsTickets.total_resolus }}</span></p>

            <h3 class=\"mt-4\">Temps moyen de résolution par technicien</h3>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Technicien</th>
                        <th>Temps moyen de résolution (heures)</th>
                    </tr>
                </thead>
                <tbody>
                    {% for resolution in tempsResolution %}
                    <tr>
                        <td>{{ resolution.technicien }}</td>
                        <td>{{ resolution.temps_moyen_resolution }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>

            <h3 class=\"mt-4\">Tickets critiques</h3>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                    </tr>
                </thead>
                <tbody>
                    {% for ticket in ticketsCritiques %}
                    <tr>
                        <td>{{ ticket.id }}</td>
                        <td>{{ ticket.titre }}</td>
                        <td>{{ ticket.description }}</td>
                        <td>{{ ticket.statut }}</td>
                        <td>{{ ticket.priorite }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

<form method=\"POST\" action=\"dashboard_admin.php\">
    <h2>Attribuer un technicien à un ticket</h2>
    <div>
        <label for=\"ticket_id\">Sélectionner un ticket :</label>
        <select name=\"ticket_id\" id=\"ticket_id\" required>
            <option value=\"\">--Sélectionner un ticket--</option>
            {% for ticket in tickets %}
                <option value=\"{{ ticket.id }}\">{{ ticket.titre }} ({{ ticket.statut }})</option>
            {% endfor %}
        </select>
    </div>
    <div>
        <label for=\"technicien_id\">Sélectionner un technicien :</label>
        <select name=\"technicien_id\" id=\"technicien_id\" required>
            <option value=\"\">--Sélectionner un technicien--</option>
            {% for technicien in techniciens %}
                <option value=\"{{ technicien.id }}\">{{ technicien.nom }}</option>
            {% endfor %}
        </select>
    </div>
    <button type=\"submit\" name=\"assign_technician\">Attribuer le technicien</button>
</form>


    {% include \"footer.html.twig\" %}
{% endblock %}
", "assign_technician_to_ticket.html.twig", "C:\\Users\\phanu\\Desktop\\projet_dev_opps-main\\app\\templates\\assign_technician_to_ticket.html.twig");
    }
}
