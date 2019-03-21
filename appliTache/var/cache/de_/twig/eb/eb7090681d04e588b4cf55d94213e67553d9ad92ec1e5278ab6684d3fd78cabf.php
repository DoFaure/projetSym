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

/* user/show.html.twig */
class __TwigTemplate_acf7dca86df8c34da71ee0bee341c2f5e3b923a9fc7f77170eb6b4e0ed585fef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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
        echo "

    <h3 class=\"text-center\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []), "html", null, true);
        echo "</h3>
    <div class=\"container\">
         <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5 class=\"text-center\"><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "html", null, true);
        echo " </b></h5></div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
        // line 14
        echo "Email";
        echo "</b></p>
                        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Firstname"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lastname"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                        <p>
                            <ul>
                                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo " \" class=\"btn btn-sm btn-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</a>
                                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_user", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\" class=\" btn btn-danger btn-sm\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
        echo "</a>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h2>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked projects"), "html", null, true);
        echo "</h2>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "projetU", []));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 40
            echo "        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5 class=\"text-center\"><b>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
            echo "</b></h5></div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
            echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 49
            echo "Description";
            echo "</b></p>
                        <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 54
            if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 58
            if ($this->getAttribute($context["project"], "dateFinP", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</b></p>
                        <p>
                        <ul>

                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
        <h2>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked tasks"), "html", null, true);
        echo "</h2>

        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "tacheU", []));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 86
            echo "        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5 class=\"text-center\"><b>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
            echo " </b></h5></div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
            echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
            echo "</b></p>
                        <p></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 99
            echo "Description";
            echo "</b></p>
                        <p>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 104
            if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 108
            if ($this->getAttribute($context["task"], "dateFinT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</b></p>
                        <p>
                        <ul>

                            <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a></p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 140
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 140,  375 => 139,  360 => 135,  355 => 132,  338 => 123,  331 => 119,  325 => 116,  321 => 115,  315 => 112,  311 => 111,  303 => 108,  299 => 107,  291 => 104,  287 => 103,  281 => 100,  277 => 99,  270 => 95,  264 => 92,  256 => 87,  253 => 86,  249 => 85,  244 => 83,  241 => 82,  224 => 73,  217 => 69,  211 => 66,  207 => 65,  201 => 62,  197 => 61,  189 => 58,  185 => 57,  177 => 54,  173 => 53,  167 => 50,  163 => 49,  157 => 46,  149 => 41,  146 => 40,  142 => 39,  138 => 38,  125 => 30,  119 => 29,  113 => 26,  107 => 23,  103 => 22,  97 => 19,  93 => 18,  87 => 15,  83 => 14,  73 => 9,  65 => 6,  61 => 4,  52 => 3,  22 => 1,);
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


    <h3 class=\"text-center\">{{ 'User'|trans }} n° {{ user.id }}</h3>
    <div class=\"container\">
         <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5 class=\"text-center\"><b>{{ 'User'|trans }} {{ user.username }} </b></h5></div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>{{ 'Email' }}</b></p>
                        <p>{{ user.email }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Firstname'|trans }}</b></p>
                        <p>{{ user.firstname }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Lastname'|trans }}</b></p>
                        <p>{{ user.lastname }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <p>
                            <ul>
                                    <a href=\"{{ path('user_edit', { 'id': user.id }) }} \" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                                    <a href=\"{{ path('delete_user', {'id': user.id}) }}\" class=\" btn btn-danger btn-sm\"> {{ 'Delete'|trans }}</a>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h2>{{ 'Linked projects'|trans }}</h2>
        {% for project in user.projetU %}
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5 class=\"text-center\"><b>{{ project.nomP }}</b></h5></div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>{{ project.id }}</a></p>
                    </div>
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
                        <p><b>{{ 'Client name'|trans }}</b></p>
                        <p>{{ project.nomClient }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Developer'|trans }}</b></p>
                        <p>{{ project.idChefP }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <p>
                        <ul>

                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}

        <h2>{{ 'Linked tasks'|trans }}</h2>

        {% for task in user.tacheU %}
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5 class=\"text-center\"><b>{{ task.nomT }} </b></h5></div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>{{ task.id }}</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Name'|trans }}</b></p>
                        <p></p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Description' }}</b></p>
                        <p>{{ task.descriptionT }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Start Date'|trans }}</b></p>
                        <p>{% if task.dateDebutT %}{{ task.dateDebutT|date('Y-m-d') }}{% endif %}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'End Date'|trans }}</b></p>
                        <p>{% if task.dateFinT %}{{ task.dateFinT|date('Y-m-d') }}{% endif %}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Developer'|trans }}</b></p>
                        <p>{{ task.idDevT }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Project'|trans }}</b></p>
                        <p>{{ task.idProjetT }}</p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <p>
                        <ul>

                            <a href=\"{{ path('task_show', { 'id': task.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}

    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"{{ path('user_index') }}\" class=\"btn btn-lg btn-info \">{{ 'Back to the list'|trans }}</a></p>
    </div>
{% endblock %}

{% block stylesheets %}

{% endblock %}", "user/show.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/user/show.html.twig");
    }
}
