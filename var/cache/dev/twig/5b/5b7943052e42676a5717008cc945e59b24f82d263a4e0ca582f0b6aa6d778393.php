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

/* project/show.html.twig */
class __TwigTemplate_882240508ea4e0745e26c0858340445a911db509f129907b49fa44454c282e06 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

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
        echo "    <h3 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", []), "html", null, true);
        echo "</h3>
    <div class=\"container\">


        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "nomP", []), "html", null, true);
        echo "</h2>
        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>";
        // line 11
        echo "Description";
        echo "</b></p>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "descriptionP", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 16
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 20
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                ";
        // line 28
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
            // line 29
            echo "
                <p>
                    <ul>
                        <p> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a></p>
                        <p> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
            echo "\" class=\" btn btn-danger btn-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
            echo "</a></p>
                    </ul>
                </p>
                ";
        }
        // line 37
        echo "            </div>
        </div>


        <h2>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked tasks"), "html", null, true);
        echo "</h2>

        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "taches", []));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 44
            echo "        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
            echo "</a></p>
            </div>
            <div class=\"col\">
                <p><b>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
            echo "</b></p>
                <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
            // line 54
            echo "Description";
            echo "</b></p>
                <p>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
            echo "</b></p>
                <p>";
            // line 59
            if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
            echo "</b></p>
                <p>";
            // line 63
            if ($this->getAttribute($context["task"], "dateFinT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
            echo "</b></p>
                <p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</b></p>
                <p>
                <ul>

                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>

                </ul>
                </p>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "

        <h2>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</h2>

        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "id", []), "html", null, true);
        echo "</a></p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Firstname"), "html", null, true);
        echo "</b></p>
                <p>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "firstname", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 95
        echo "Lastname";
        echo "</b></p>
                <p>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "lastname", []), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col\">
                <p><b>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                <ul>
                    <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
        echo "</a>
                </ul>

            </div>
        </div>

    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a></p>
        <p> <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_add", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add task"), "html", null, true);
        echo "</a> </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 115
        echo "    <style>
        #ligne { background-color: #868686 }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 115,  328 => 114,  313 => 110,  307 => 109,  294 => 101,  289 => 99,  283 => 96,  279 => 95,  273 => 92,  269 => 91,  263 => 88,  255 => 83,  251 => 81,  236 => 74,  229 => 70,  223 => 67,  219 => 66,  211 => 63,  207 => 62,  199 => 59,  195 => 58,  189 => 55,  185 => 54,  179 => 51,  175 => 50,  169 => 47,  164 => 44,  160 => 43,  155 => 41,  149 => 37,  140 => 33,  134 => 32,  129 => 29,  127 => 28,  123 => 27,  117 => 24,  113 => 23,  105 => 20,  101 => 19,  93 => 16,  89 => 15,  83 => 12,  79 => 11,  71 => 8,  61 => 4,  52 => 3,  22 => 1,);
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
    <h3 class=\"text-center\">{{ 'Project'|trans }} n° {{ project.id }}</h3>
    <div class=\"container\">


        <h2>{{ 'Project'|trans }} {{ project.nomP }}</h2>
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
                        <p> <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a></p>
                        <p> <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a></p>
                    </ul>
                </p>
                {% endif %}
            </div>
        </div>


        <h2>{{ 'Linked tasks'|trans }}</h2>

        {% for task in project.taches %}
        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>{{ task.id }}</a></p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Name'|trans }}</b></p>
                <p>{{ task.nomT }}</p>
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
                <p><b>{{ 'Actions'|trans }}</b></p>
                <p>
                <ul>

                    <a href=\"{{ path('task_show', { 'id': task.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>

                </ul>
                </p>
            </div>
        </div>
        {% endfor %}


        <h2>{{ 'Project manager'|trans }}</h2>

        <div id=\"ligne\" class=\"row\">
            <div class=\"col\">
                <p><b>Id</b></p>
                <p>{{ project.idChefP.id }}</a></p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Firstname'|trans }}</b></p>
                <p>{{ project.idChefP.firstname }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Lastname' }}</b></p>
                <p>{{ project.idChefP.lastname }}</p>
            </div>
            <div class=\"col\">
                <p><b>{{ 'Actions'|trans }}</b></p>
                <ul>
                    <a href=\"{{ path('user_show', { 'id': project.idChefP.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                </ul>

            </div>
        </div>

    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"{{ path('user_index') }}\" class=\"btn btn-lg btn-info \">{{ 'Back to the list'|trans }}</a></p>
        <p> <a href=\"{{ path('task_add', {'id': project.id})  }}\" class=\"btn btn-lg btn-primary\">{{ 'Add task'|trans }}</a> </p>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        #ligne { background-color: #868686 }

    </style>
{% endblock %}", "project/show.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/show.html.twig");
    }
}
