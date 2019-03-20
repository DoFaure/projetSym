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

/* task/show.html.twig */
class __TwigTemplate_3702bbee9370867fed58a2af54e8b4b9ae207a26f0a8897c85382672df509dd4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/show.html.twig"));

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
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task"), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", []), "html", null, true);
        echo "</h3>
    <div class=\"container\">


        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "nomT", []), "html", null, true);
        echo "</h2>
        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>";
        // line 12
        echo "Description";
        echo "</b></p>
                <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "descriptionT", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 17
        if ($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "dateDebutT", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "dateDebutT", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 21
        if ($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "dateFinT", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "dateFinT", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idDevT", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                <p>
                <ul>
                       <p> <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</a></p>
                       <p> <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_task", ["id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", [])]), "html", null, true);
        echo "\" class=\" btn btn-danger btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
        echo "</a></p>
                </ul>
                </p>
            </div>
        </div>


        <h2>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked project"), "html", null, true);
        echo "</h2>

        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "id", []), "html", null, true);
        echo "</a></p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "nomP", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 51
        echo "Description";
        echo "</b></p>
                <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "descriptionP", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "dateDebutP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "dateDebutP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "dateFinP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "dateFinP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "nomClient", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "idChefP", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                ";
        // line 72
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
            // line 73
            echo "
                <p>
                    <ul>

                            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idProjetT", []), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>

                    </ul>
                </p>
                ";
        }
        // line 82
        echo "            </div>
        </div>


        <h2>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
        echo "</h2>

        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idDevT", []), "id", []), "html", null, true);
        echo "</a></p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Firstname"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idDevT", []), "firstname", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 98
        echo "Lastname";
        echo "</b></p>
                <p>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idDevT", []), "lastname", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>

                <ul>
                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "idDevT", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
        echo "</a>
                </ul>

            </div>
        </div>

    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a></p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 118
        echo "    <style>
        #ligne { background-color: #868686 }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 118,  323 => 117,  308 => 113,  295 => 105,  289 => 102,  283 => 99,  279 => 98,  273 => 95,  269 => 94,  263 => 91,  255 => 86,  249 => 82,  239 => 77,  233 => 73,  231 => 72,  227 => 71,  221 => 68,  217 => 67,  211 => 64,  207 => 63,  199 => 60,  195 => 59,  187 => 56,  183 => 55,  177 => 52,  173 => 51,  167 => 48,  163 => 47,  157 => 44,  149 => 39,  137 => 32,  131 => 31,  125 => 28,  119 => 25,  115 => 24,  107 => 21,  103 => 20,  95 => 17,  91 => 16,  85 => 13,  81 => 12,  73 => 9,  64 => 5,  61 => 4,  52 => 3,  22 => 1,);
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

    <h3 class=\"text-center\">{{ 'Task'|trans }} n° {{ task.id }}</h3>
    <div class=\"container\">


        <h2>{{ 'Task'|trans }} {{ task.nomT }}</h2>
        <div id=\"ligne\" class=\"row\">
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
                <p><b>{{ 'Actions'|trans }}</b></p>
                <p>
                <ul>
                       <p> <a href=\"{{ path('task_edit', { 'id': task.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a></p>
                       <p> <a href=\"{{ path('delete_task', {'id': task.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a></p>
                </ul>
                </p>
            </div>
        </div>


        <h2>{{ 'Linked project'|trans }}</h2>

        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>{{ task.idProjetT.id }}</a></p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Name'|trans }}</b></p>
                <p>{{ task.idProjetT.nomP }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Description' }}</b></p>
                <p>{{ task.idProjetT.descriptionP }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Start Date'|trans }}</b></p>
                <p>{% if task.idProjetT.dateDebutP %}{{ task.idProjetT.dateDebutP|date('Y-m-d') }}{% endif %}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'End Date'|trans }}</b></p>
                <p>{% if task.idProjetT.dateFinP %}{{ task.idProjetT.dateFinP|date('Y-m-d') }}{% endif %}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Client name'|trans }}</b></p>
                <p>{{ task.idProjetT.nomClient }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Developer'|trans }}</b></p>
                <p>{{ task.idProjetT.idChefP }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Actions'|trans }}</b></p>
                {% if is_granted(\"ROLE_ADMIN\") or  is_granted(\"ROLE_CHIEF\")   %}

                <p>
                    <ul>

                            <a href=\"{{ path('project_show', { 'id': task.idProjetT.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>

                    </ul>
                </p>
                {% endif %}
            </div>
        </div>


        <h2>{{ 'Developer'|trans }}</h2>

        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>{{ task.idDevT.id }}</a></p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Firstname'|trans }}</b></p>
                <p>{{ task.idDevT.firstname }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Lastname' }}</b></p>
                <p>{{ task.idDevT.lastname }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Actions'|trans }}</b></p>

                <ul>
                        <a href=\"{{ path('user_show', { 'id': task.idDevT.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                </ul>

            </div>
        </div>

    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"{{ path('task_index') }}\" class=\"btn btn-lg btn-info \">{{ 'Back to the list'|trans }}</a></p>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        #ligne { background-color: #868686 }

    </style>
{% endblock %}", "task/show.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/task/show.html.twig");
    }
}
