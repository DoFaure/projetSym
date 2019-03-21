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

        <div class=\"card bg-light mb-3\">

            <div class=\"card-header\"><h5><b> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "nomP", []), "html", null, true);
        echo "</b></h5></div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
        // line 14
        echo "Description";
        echo "</b></p>
                        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "descriptionP", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 19
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 23
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                        ";
        // line 31
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
            // line 32
            echo "
                        <p>
                            <ul>
                                <p> <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a></p>
                                <p> <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
            echo "\" class=\" btn btn-danger btn-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
            echo "</a></p>
                            </ul>
                        </p>
                        ";
        }
        // line 40
        echo "                    </div>
                 </div>
            </div>
        </div>


        <h2>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked tasks"), "html", null, true);
        echo "</h2>

        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "taches", []));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 49
            echo "        <div class=\"card bg-light mb-3\">

            <div class=\"card-header\"><h5><b>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
            echo "</b></h5></div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
            echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 59
            echo "Description";
            echo "</b></p>
                        <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 64
            if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 68
            if ($this->getAttribute($context["task"], "dateFinT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
            echo "</b></p>
                        <p>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</b></p>
                        <p>
                        <ul>

                            <a href=\"";
            // line 79
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
        // line 88
        echo "

        <h2>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</h2>
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "firstname", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "lastname", []), "html", null, true);
        echo "</div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "id", []), "html", null, true);
        echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>email</b></p>
                        <p>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "email", []), "html", null, true);
        echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                        <ul>
                            <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
        echo "</a>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
            <div class=\"col-lg-12 text-center\">
                <p> <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a></p>
                <p> <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_add", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add task"), "html", null, true);
        echo "</a> </p>
            </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
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
        return array (  327 => 122,  310 => 116,  304 => 115,  291 => 107,  286 => 105,  280 => 102,  273 => 98,  262 => 92,  257 => 90,  253 => 88,  236 => 79,  229 => 75,  223 => 72,  219 => 71,  211 => 68,  207 => 67,  199 => 64,  195 => 63,  189 => 60,  185 => 59,  179 => 56,  171 => 51,  167 => 49,  163 => 48,  158 => 46,  150 => 40,  141 => 36,  135 => 35,  130 => 32,  128 => 31,  124 => 30,  118 => 27,  114 => 26,  106 => 23,  102 => 22,  94 => 19,  90 => 18,  84 => 15,  80 => 14,  72 => 9,  61 => 4,  52 => 3,  22 => 1,);
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

        <div class=\"card bg-light mb-3\">

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
                                <p> <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a></p>
                                <p> <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a></p>
                            </ul>
                        </p>
                        {% endif %}
                    </div>
                 </div>
            </div>
        </div>


        <h2>{{ 'Linked tasks'|trans }}</h2>

        {% for task in project.taches %}
        <div class=\"card bg-light mb-3\">

            <div class=\"card-header\"><h5><b>{{ task.nomT }}</b></h5></div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>{{ task.id }}</a></p>
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
             </div>
        </div>
        {% endfor %}


        <h2>{{ 'Project manager'|trans }}</h2>
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\">{{ project.idChefP.firstname }} {{ project.idChefP.lastname }}</div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>{{ project.idChefP.id }}</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>email</b></p>
                        <p>{{ project.idChefP.email }}</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <ul>
                            <a href=\"{{ path('project_show', { 'id': project.idChefP.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
            <div class=\"col-lg-12 text-center\">
                <p> <a href=\"{{ path('user_index') }}\" class=\"btn btn-lg btn-info \">{{ 'Back to the list'|trans }}</a></p>
                <p> <a href=\"{{ path('task_add', {'id': project.id})  }}\" class=\"btn btn-lg btn-primary\">{{ 'Add task'|trans }}</a> </p>
            </div>

    </div>
{% endblock %}

{% block stylesheets %}
{% endblock %}", "project/show.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/show.html.twig");
    }
}
