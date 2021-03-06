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

/* base/base.html.twig */
class __TwigTemplate_568272ca22eee7dfb7aef8969c58c6a8cb5ddd0ed69d23caea14496cab423e16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'vue' => [$this, 'block_vue'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base/base-vide.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $this->parent = $this->loadTemplate("base/base-vide.html.twig", "base/base.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Uel Vente de pierre pr??cieuse";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/style_text.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "        </header>


        <div class=\"vue\">

                ";
        // line 55
        $this->displayBlock('vue', $context, $blocks);
        // line 76
        echo "        </div>


        <footer style=\"position: absolute;bottom: 0;left: 0;right: 0;\">
            ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "
        </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "        <header class=\"header\">
            ";
        // line 16
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "                <img style=\"width:100%\"  src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"anonymous\">

            ";
        } else {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "                    ";
                if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                    // line 22
                    echo "                        <img style=\"width:100%\"  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/admin.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                } elseif ((0 === twig_compare(                // line 24
$context["role"], "ROLE_CLIENT"))) {
                    // line 25
                    echo "                        <img style=\"width:100%\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/user.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                }
                // line 28
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        // line 30
        echo "                <nav class=\"nav\">
                    ";
        // line 32
        echo "                    <a style=\"font-size: 35px;line-height: 80px;padding: 0 100px;font-weight: bold;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\" >UEL</a>
                    <ul>
                        ";
        // line 35
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "
                            ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAnonyme"));
            echo "
                        ";
        } else {
            // line 39
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAdmin"));
            echo "
                            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeUtilisateur"));
            echo "

                            <li>
                                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">D??connexion</a>
                            </li>
                        ";
        }
        // line 46
        echo "
                    </ul>
                </nav>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 56
        echo "                    <h1>Bienvenue sur notre site de vente de pierre pr??cieuses !</h1>
                    ";
        // line 57
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "                        <br>
                        <span>SESSION ANONYME</span>
                        <p>Je vois que vous n'??tes pas connect?? sur notre site. N'h??sitez pas ?? vous inscrire ou vous connecter !</p>
                    ";
        } else {
            // line 62
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "roles", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 63
                echo "                        ";
                if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                    // line 64
                    echo "                            <br>
                            <span>SESSION ADMIN</span>
                            <p>Bonjour maitre, prenez soins de nos utilisateurs !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 68
$context["role"], "ROLE_CLIENT"))) {
                    // line 69
                    echo "                            <br>
                            <span>SESSION CLIENT</span>
                            <p> Salut, N'h??site pas ?? regarder nos produits peut ??tre que tu auras un coup de coeur !</p>
                        ";
                }
                // line 73
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    ";
        }
        // line 75
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 81
        echo "                <img style=\"width:100%\"  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/footer.jpg"), "html", null, true);
        echo "\" alt=\"anonymous\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 81,  319 => 80,  309 => 75,  306 => 74,  300 => 73,  294 => 69,  292 => 68,  286 => 64,  283 => 63,  278 => 62,  272 => 58,  270 => 57,  267 => 56,  257 => 55,  244 => 46,  238 => 43,  232 => 40,  227 => 39,  222 => 37,  219 => 36,  216 => 35,  210 => 32,  207 => 30,  204 => 29,  198 => 28,  191 => 25,  189 => 24,  183 => 22,  180 => 21,  175 => 20,  168 => 17,  165 => 16,  162 => 14,  152 => 13,  139 => 83,  137 => 80,  131 => 76,  129 => 55,  122 => 50,  119 => 13,  109 => 12,  97 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base/base-vide.html.twig' %}

{% block title %}Uel Vente de pierre pr??cieuse{% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('CSS/style.css') }}\" rel=\"stylesheet\" >
    <link href=\"{{ asset('CSS/style_text.css') }}\" rel=\"stylesheet\" >
{% endblock %}


{% block body %}
    {% block header %}
        <header class=\"header\">
            {# en fonction du role(client/admin) de l'utilisateur une image lui est donn??e de m??me pour ceux qui ne sont pas inscrit #}
            {% if not app.user %}
                <img style=\"width:100%\"  src=\"{{ asset('Images/anonymous.jpg') }}\" alt=\"anonymous\">

            {% else %}
                {% for role in app.user.roles %}
                    {% if role==\"ROLE_ADMIN\" %}
                        <img style=\"width:100%\"  src=\"{{ asset('Images/admin.jpg') }}\" alt=\"admin\">

                    {% elseif role==\"ROLE_CLIENT\" %}
                        <img style=\"width:100%\" src=\"{{ asset('Images/user.jpg') }}\" alt=\"admin\">

                    {% endif %}
                {% endfor %}
            {% endif %}
                <nav class=\"nav\">
                    {#Renvoie l'utilisateur ?? la page d'accueil#}
                    <a style=\"font-size: 35px;line-height: 80px;padding: 0 100px;font-weight: bold;\" href=\"{{ path('site') }}\" >UEL</a>
                    <ul>
                        {#en fonction de si on est connect?? ou non, un menu s'affiche pour l'utilisateur#}
                        {% if not app.user %}

                            {{ render(controller('App\\\\Controller\\\\SiteController::routeAnonyme')) }}
                        {% else %}
                            {{ render(controller('App\\\\Controller\\\\SiteController::routeAdmin')) }}
                            {{ render(controller('App\\\\Controller\\\\SiteController::routeUtilisateur')) }}

                            <li>
                                <a href=\"{{ path('security_logout') }}\">D??connexion</a>
                            </li>
                        {% endif %}

                    </ul>
                </nav>
            {% endblock %}
        </header>


        <div class=\"vue\">

                {% block vue %}
                    <h1>Bienvenue sur notre site de vente de pierre pr??cieuses !</h1>
                    {% if not app.user %}
                        <br>
                        <span>SESSION ANONYME</span>
                        <p>Je vois que vous n'??tes pas connect?? sur notre site. N'h??sitez pas ?? vous inscrire ou vous connecter !</p>
                    {% else %}
                    {% for role in app.user.roles %}
                        {% if role==\"ROLE_ADMIN\" %}
                            <br>
                            <span>SESSION ADMIN</span>
                            <p>Bonjour maitre, prenez soins de nos utilisateurs !</p>

                        {% elseif role==\"ROLE_CLIENT\" %}
                            <br>
                            <span>SESSION CLIENT</span>
                            <p> Salut, N'h??site pas ?? regarder nos produits peut ??tre que tu auras un coup de coeur !</p>
                        {% endif %}
                    {% endfor %}
                    {% endif %}
                {% endblock %}
        </div>


        <footer style=\"position: absolute;bottom: 0;left: 0;right: 0;\">
            {% block footer %}
                <img style=\"width:100%\"  src=\"{{ asset('Images/footer.jpg') }}\" alt=\"anonymous\">
            {% endblock %}

        </footer>

{% endblock %}
", "base/base.html.twig", "C:\\wamp64\\www\\projet\\templates\\base\\base.html.twig");
    }
}
