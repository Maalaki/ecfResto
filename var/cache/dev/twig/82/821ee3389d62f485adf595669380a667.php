<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_6c5f67fa7f73e63a493ff540e291f917 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link
            rel=\"stylesheet\"
            href=\"https://fonts.googleapis.com/css?family=Great+Vibes|Farsan|Hind\"
    />
    ";
        // line 11
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</head>

<body>

<!-- Navigation bar -->

<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand abs\" href=\"/\">Le Quai Antique</a>
        <button
                class=\"navbar-toggler\"
                role=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\"
        >
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a
                            class=\"nav-link navigation\"
                            aria-current=\"page\"
                            href=\"/menu\"
                    >Carte</a
                    >
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link navigation\" href=\"/formula\">Menus</a>
                </li>
            </ul>


            ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 55
            echo "                <a class=\"btn btn-light login\" role=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
            echo "\">
                    Se déconnecter
                </a>
                ";
            // line 58
            if (twig_in_filter("ROLE_ADMIN", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 58), "roles", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 58), "roles", [], "any", false, false, false, 58), "undefined")) : ("undefined")))) {
                // line 59
                echo "                <a class=\"btn btn-light login ms-3\" role=\"button\" href=\"/admin\">
                    Administration
                </a>
                ";
            }
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "                <a class=\"btn btn-light login\" role=\"button\" href=\"/connexion\">
                    Se connecter
                </a>
            ";
        }
        // line 68
        echo "


        </div>
    </div>
</nav>

";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
<!-- Footer with opening hours -->

<div class=\"container-fluid bg-dark text-light\">
    <footer>

        <div class=\"opening-hours mx-auto\">
            <h3 class=\"ohTitle text-center\">Nos horaires d'ouverture</h3>
            <table class=\"ohTableStructure\">
                <tr class=\"monday ohTable\">
                    <td><span>Lundi</span></td>
                    <td>Fermé</td>
                </tr>
                <tr class=\"tuesday ohTable\">
                    <td><span>Mardi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"wednesday ohTable\">
                    <td><span>Mercredi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"thursday ohTable\">
                    <td><span>Jeudi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"friday ohTable\">
                    <td><span>Vendredi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"saturday ohTable\">
                    <td><span>Samedi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"sunday ohTable\">
                    <td><span>Dimanche</span></td>
                    <td>12:00 - 14:00</td>
                    <td>Fermé</td>
                </tr>
            </table>
            <br/>
        </div>
    </footer>
</div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Le Quai Antique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 75,  257 => 16,  247 => 15,  234 => 12,  224 => 11,  205 => 5,  144 => 77,  142 => 75,  133 => 68,  127 => 64,  124 => 63,  118 => 59,  116 => 58,  109 => 55,  107 => 54,  69 => 18,  67 => 15,  64 => 14,  61 => 11,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Le Quai Antique{% endblock %}</title>
    <link
            rel=\"stylesheet\"
            href=\"https://fonts.googleapis.com/css?family=Great+Vibes|Farsan|Hind\"
    />
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</head>

<body>

<!-- Navigation bar -->

<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand abs\" href=\"/\">Le Quai Antique</a>
        <button
                class=\"navbar-toggler\"
                role=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\"
        >
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a
                            class=\"nav-link navigation\"
                            aria-current=\"page\"
                            href=\"/menu\"
                    >Carte</a
                    >
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link navigation\" href=\"/formula\">Menus</a>
                </li>
            </ul>


            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a class=\"btn btn-light login\" role=\"button\" href=\"{{ path('security.logout') }}\">
                    Se déconnecter
                </a>
                {% if 'ROLE_ADMIN' in app.user.roles|default('undefined') %}
                <a class=\"btn btn-light login ms-3\" role=\"button\" href=\"/admin\">
                    Administration
                </a>
                {% endif %}
            {% else %}
                <a class=\"btn btn-light login\" role=\"button\" href=\"/connexion\">
                    Se connecter
                </a>
            {% endif %}



        </div>
    </div>
</nav>

{% block body %}
{% endblock %}

<!-- Footer with opening hours -->

<div class=\"container-fluid bg-dark text-light\">
    <footer>

        <div class=\"opening-hours mx-auto\">
            <h3 class=\"ohTitle text-center\">Nos horaires d'ouverture</h3>
            <table class=\"ohTableStructure\">
                <tr class=\"monday ohTable\">
                    <td><span>Lundi</span></td>
                    <td>Fermé</td>
                </tr>
                <tr class=\"tuesday ohTable\">
                    <td><span>Mardi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"wednesday ohTable\">
                    <td><span>Mercredi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"thursday ohTable\">
                    <td><span>Jeudi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"friday ohTable\">
                    <td><span>Vendredi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"saturday ohTable\">
                    <td><span>Samedi</span></td>
                    <td>12:00 - 14:00</td>
                    <td>19:00 - 22:00</td>
                </tr>
                <tr class=\"sunday ohTable\">
                    <td><span>Dimanche</span></td>
                    <td>12:00 - 14:00</td>
                    <td>Fermé</td>
                </tr>
            </table>
            <br/>
        </div>
    </footer>
</div>

</body>
</html>
", "base.html.twig", "C:\\xampp\\apps\\resto\\templates\\base.html.twig");
    }
}
