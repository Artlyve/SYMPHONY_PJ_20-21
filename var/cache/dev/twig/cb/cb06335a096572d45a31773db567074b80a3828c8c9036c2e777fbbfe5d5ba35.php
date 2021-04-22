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

/* user/panier.html.twig */
class __TwigTemplate_63cb21d7fda85783d0236e2656ec6ee187d1b942787fcb26269ec356baced978 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/panier.html.twig"));

        $this->parent = $this->loadTemplate("base/base.html.twig", "user/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 4
        echo "
<h1>Votre Panier</h1>
    <table class=\"table\" style=\"border-spacing: 75px 1rem\">
        <thead>
            <th>Libelle</th>
            <th>prix unitaire</th>
            <th>Quantite</th>
            <th>prix total</th>
            <th>Action</th>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 16
            echo "                 <tr>
                     <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 17), "libelle", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                     <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 18), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo " €</td>
                     <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                     <td>";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 20), "prix", [], "any", false, false, false, 20) * twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 20)), "html", null, true);
            echo " €</td>
                     <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_product", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo " \">Supprimer</a></td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

                 </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>
                        ";
        // line 30
        $context["quantiteTT"] = 0;
        // line 31
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 32
            echo "                            ";
            $context["quantiteTT"] = ((isset($context["quantiteTT"]) || array_key_exists("quantiteTT", $context) ? $context["quantiteTT"] : (function () { throw new RuntimeError('Variable "quantiteTT" does not exist.', 32, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 32));
            // line 33
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        ";
        echo twig_escape_filter($this->env, (isset($context["quantiteTT"]) || array_key_exists("quantiteTT", $context) ? $context["quantiteTT"] : (function () { throw new RuntimeError('Variable "quantiteTT" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "
                    </td>

                    <td>
                        ";
        // line 38
        $context["prixTT"] = 0;
        // line 39
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 40
            echo "                            ";
            $context["quantiteTT"] = ((isset($context["quantiteTT"]) || array_key_exists("quantiteTT", $context) ? $context["quantiteTT"] : (function () { throw new RuntimeError('Variable "quantiteTT" does not exist.', 40, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 40), "prix", [], "any", false, false, false, 40) * twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 40)));
            // line 41
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        ";
        echo twig_escape_filter($this->env, (isset($context["quantiteTT"]) || array_key_exists("quantiteTT", $context) ? $context["quantiteTT"] : (function () { throw new RuntimeError('Variable "quantiteTT" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " €
                    </td>
                </tr>
        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  155 => 41,  152 => 40,  147 => 39,  145 => 38,  137 => 34,  131 => 33,  128 => 32,  123 => 31,  121 => 30,  112 => 23,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base/base.html.twig' %}

{% block vue %}

<h1>Votre Panier</h1>
    <table class=\"table\" style=\"border-spacing: 75px 1rem\">
        <thead>
            <th>Libelle</th>
            <th>prix unitaire</th>
            <th>Quantite</th>
            <th>prix total</th>
            <th>Action</th>
        </thead>
        <tbody>
            {% for panier in paniers %}
                 <tr>
                     <td>{{ panier.produit.libelle }}</td>
                     <td>{{ panier.produit.prix }} €</td>
                     <td>{{ panier.quantite }}</td>
                     <td>{{ panier.produit.prix * panier.quantite }} €</td>
                     <td><a href=\"{{ path('user_delete_product', {'id' : app.user.id})  }} \">Supprimer</a></td>
            {% endfor %}


                 </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>
                        {% set quantiteTT = 0 %}
                            {% for panier in paniers %}
                            {% set quantiteTT = quantiteTT + panier.quantite %}
                        {% endfor %}
                        {{ quantiteTT }}
                    </td>

                    <td>
                        {% set prixTT = 0 %}
                        {% for panier in paniers %}
                            {% set quantiteTT = quantiteTT + (panier.produit.prix * panier.quantite) %}
                        {% endfor %}
                        {{ quantiteTT }} €
                    </td>
                </tr>
        </tbody>
    </table>
{% endblock %}", "user/panier.html.twig", "C:\\wamp64\\www\\projet\\templates\\user\\panier.html.twig");
    }
}
