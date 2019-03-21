<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/index.html.twig */
class __TwigTemplate_c4a69f856a97648d6c141c9e870431cb1af62fda66c5def9ad756f0f3c2f0836 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">

            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "        <div class=\"card bg-light mb-3\" id=\"container\">
            <div class=\"card-body\">
                <div id=\"welcome\" class=\"text-center\">
                    <h1><span>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome to the Task Management Application"), "html", null, true);
            echo "</span></h1>
                </div>
            </div>
        </div>
        <div>
        <div class=\"col-lg-12\">
                <div class=\"card-deck\">
               ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                if (($this->getAttribute($context["project"], "etatP", []) == "project.progress")) {
                    // line 18
                    echo "                    <div class=\"card border-dark mb-3\">
                        <div>

                            <div class=\"card-header\"><h5><b> ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>";
                    // line 26
                    echo "Description";
                    echo "</b></p>
                                        <p>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                    echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                    echo "</b></p>
                                        <p>";
                    // line 31
                    if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                    }
                    echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                    echo "</b></p>
                                        <p>";
                    // line 35
                    if ($this->getAttribute($context["project"], "dateFinP", [])) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                    }
                    echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
                    echo "</b></p>
                                        <p>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                    echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                    echo "</b></p>
                                        ";
                    // line 43
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
                        // line 44
                        echo "
                                            <p>
                                                <ul>
                                            <p> <a href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-info\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                        echo "</a></p>
                                            <p> <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-info\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                        echo "</a></p>
                                            <p> <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                        echo "\" class=\" btn btn-danger btn-sm\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                        echo "</a></p>
                                            </ul>
                                            </p>
                                        ";
                    } else {
                        // line 53
                        echo "                                            <p>
                                                <ul>
                                                    <p> <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-info\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                        echo "</a></p>
                                                </ul>
                                            </p>
                                        ";
                    }
                    // line 59
                    echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            </div>

        </div>
            ";
        } else {
            // line 70
            echo "                <div class=\"card bg-light mb-3\" id=\"container\">
                    <div class=\"card-body\">
                        <div id=\"welcome\" class=\"text-center\">
                            <h1><span>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome to the Task Management Application"), "html", null, true);
            echo "</span></h1>
                        </div>
                ";
            // line 75
            $context["menuConnexion"] = [0 => ["path" => "fos_user_registration_register", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register")], 1 => ["path" => "fos_user_security_login", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login")]];
            // line 79
            echo "                            <div class=\"row justify-content-md-center\">
                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menuConnexion"] ?? $this->getContext($context, "menuConnexion")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "                                <p>
                                    <a class=\"btn btn-dark btn-lg\" href=\"";
                // line 82
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "path", [], "array"));
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", [], "array"), "html", null, true);
                echo " </a>
                                </p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 90
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 95
        echo "<style>
    p { margin: 0 0 1em 0; }
    a { color: #eeeeee; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    .btn {color: #eeeeee}



</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 95,  260 => 94,  248 => 90,  241 => 85,  230 => 82,  227 => 81,  223 => 80,  220 => 79,  218 => 75,  213 => 73,  208 => 70,  202 => 66,  189 => 59,  180 => 55,  176 => 53,  167 => 49,  161 => 48,  155 => 47,  150 => 44,  148 => 43,  144 => 42,  138 => 39,  134 => 38,  126 => 35,  122 => 34,  114 => 31,  110 => 30,  104 => 27,  100 => 26,  92 => 21,  87 => 18,  82 => 17,  72 => 10,  67 => 7,  65 => 6,  61 => 4,  52 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">

            {% if  is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <div class=\"card bg-light mb-3\" id=\"container\">
            <div class=\"card-body\">
                <div id=\"welcome\" class=\"text-center\">
                    <h1><span>{{ 'Welcome to the Task Management Application'|trans }}</span></h1>
                </div>
            </div>
        </div>
        <div>
        <div class=\"col-lg-12\">
                <div class=\"card-deck\">
               {% for project in projects if project.etatP == 'project.progress' %}
                    <div class=\"card border-dark mb-3\">
                        <div>

                            <div class=\"card-header\"><h5><b> {{ project.nomP }}</b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>{{ 'Description' }}</b></p>
                                        <p>{{ project.descriptionP }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Start Date'|trans }}</b></p>
                                        <p>{% if project.dateDebutP %}{{ project.dateDebutP|date('Y-m-d') }}{% endif %}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'End Date'|trans }}</b></p>
                                        <p>{% if project.dateFinP %}{{ project.dateFinP|date('Y-m-d') }}{% endif %}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Project manager'|trans }}</b></p>
                                        <p>{{ project.idChefP }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Actions'|trans }}</b></p>
                                        {% if is_granted(\"ROLE_ADMIN\") or  is_granted(\"ROLE_CHIEF\")   %}

                                            <p>
                                                <ul>
                                            <p> <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a></p>
                                            <p> <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a></p>
                                            <p> <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a></p>
                                            </ul>
                                            </p>
                                        {% else %}
                                            <p>
                                                <ul>
                                                    <p> <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a></p>
                                                </ul>
                                            </p>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                {% endfor %}
            </div>

        </div>
            {% else %}
                <div class=\"card bg-light mb-3\" id=\"container\">
                    <div class=\"card-body\">
                        <div id=\"welcome\" class=\"text-center\">
                            <h1><span>{{ 'Welcome to the Task Management Application'|trans }}</span></h1>
                        </div>
                {% set menuConnexion = [
                    { 'path' : 'fos_user_registration_register', 'name' : 'Register'|trans  },
                    { 'path' : 'fos_user_security_login', 'name' : 'Login'|trans }
                    ] %}
                            <div class=\"row justify-content-md-center\">
                            {%  for item in menuConnexion %}
                                <p>
                                    <a class=\"btn btn-dark btn-lg\" href=\"{{ path(item['path']) }}\" role=\"button\">{{ item['name'] }} </a>
                                </p>
                            {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}

    </div>
{% endblock %}

{% block stylesheets %}
<style>
    p { margin: 0 0 1em 0; }
    a { color: #eeeeee; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    .btn {color: #eeeeee}



</style>
{% endblock %}
", "default/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/default/index.html.twig");
    }
}
