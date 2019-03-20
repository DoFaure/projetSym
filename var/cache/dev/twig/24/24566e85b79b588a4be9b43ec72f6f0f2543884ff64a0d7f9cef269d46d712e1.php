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

/* task/index.html.twig */
class __TwigTemplate_7303025e9eebab7ec90a1a5dfd75eaf494a4bb031b2c69cbe16326293baade13 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

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
        echo "    <h1 class=\"text-center\">Tasks list</h1>

    <div class=\"container\">
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In progress tasks"), "html", null, true);
        echo "</h2>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.progress"))) {
                // line 9
                echo "
            <div id=\"ligne\" class=\"row\">
                <div class=\"col\">
                    <p><b>Id</b></p>
                    <p><a>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 20
                echo "Description";
                echo "</b></p>
                    <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 25
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 29
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                    <p>
                        <ul>
                                <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                        </ul>
                    </p>
                </div>
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <h2>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Completed tasks"), "html", null, true);
        echo "</h2>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == "label.completed")) {
                // line 53
                echo "
            <div id=\"ligne\" class=\"row\">
                <div class=\"col\">
                    <p><b>Id</b></p>
                    <p><a>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 64
                echo "Description";
                echo "</b></p>
                    <p>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 69
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 73
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                    <p>
                    <ul>
                            <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                            <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                    </ul>
                    </p>
                </div>
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        <h2>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Abort tasks"), "html", null, true);
        echo "</h2>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == "label.abort")) {
                // line 97
                echo "
            <div id=\"ligne\" class=\"row\">
                <div class=\"col\">
                    <p><b>Id</b></p>
                    <p><a>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 108
                echo "Description";
                echo "</b></p>
                    <p>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 113
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 117
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                    <p>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                </div>
                <div class=\"col\">
                    <p><b>";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                    <p>
                    <ul>

                            <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>

                            <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>

                    </ul>
                    </p>
                </div>
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </div>
    <div class=\"col-lg-12 text-center\">
        <p>   <a role=\"button\" href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new task"), "html", null, true);
        echo "</a></p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 149
        echo "    <style>
        #ligne { background-color: #868686 }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 149,  431 => 148,  415 => 143,  411 => 141,  395 => 134,  388 => 132,  381 => 128,  375 => 125,  371 => 124,  365 => 121,  361 => 120,  353 => 117,  349 => 116,  341 => 113,  337 => 112,  331 => 109,  327 => 108,  321 => 105,  317 => 104,  311 => 101,  305 => 97,  300 => 96,  296 => 95,  293 => 94,  278 => 88,  272 => 87,  266 => 84,  260 => 81,  256 => 80,  250 => 77,  246 => 76,  238 => 73,  234 => 72,  226 => 69,  222 => 68,  216 => 65,  212 => 64,  206 => 61,  202 => 60,  196 => 57,  190 => 53,  185 => 52,  181 => 51,  178 => 50,  163 => 44,  157 => 43,  151 => 40,  145 => 37,  141 => 36,  135 => 33,  131 => 32,  123 => 29,  119 => 28,  111 => 25,  107 => 24,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  81 => 13,  75 => 9,  70 => 8,  66 => 7,  61 => 4,  52 => 3,  22 => 1,);
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
    <h1 class=\"text-center\">Tasks list</h1>

    <div class=\"container\">
        <h2>{{ 'In progress tasks'|trans }}</h2>
        {% for task in tasks if task.etatT == 'label.progress'|trans %}

            <div id=\"ligne\" class=\"row\">
                <div class=\"col\">
                    <p><b>Id</b></p>
                    <p><a>{{ task.id }}</a></p>
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
                    <p><b>{{ 'Project'|trans }}</b></p>
                    <p>{{ task.idProjetT }}</p>
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
                                <a href=\"{{ path('task_edit', { 'id': task.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                        </ul>
                    </p>
                </div>
            </div>
        {% endfor %}

        <h2>{{ 'Completed tasks'|trans }}</h2>
        {% for task in tasks if task.etatT == 'label.completed' %}

            <div id=\"ligne\" class=\"row\">
                <div class=\"col\">
                    <p><b>Id</b></p>
                    <p><a>{{ task.id }}</a></p>
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
                    <p><b>{{ 'Project'|trans }}</b></p>
                    <p>{{ task.idProjetT }}</p>
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
                            <a href=\"{{ path('task_edit', { 'id': task.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                    </ul>
                    </p>
                </div>
            </div>
        {% endfor %}

        <h2>{{ 'Abort tasks'|trans }}</h2>
        {% for task in tasks if task.etatT == 'label.abort' %}

            <div id=\"ligne\" class=\"row\">
                <div class=\"col\">
                    <p><b>Id</b></p>
                    <p><a>{{ task.id }}</a></p>
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
                    <p><b>{{ 'Project'|trans }}</b></p>
                    <p>{{ task.idProjetT }}</p>
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

                            <a href=\"{{ path('task_edit', { 'id': task.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>

                    </ul>
                    </p>
                </div>
            </div>
        {% endfor %}
    </div>
    <div class=\"col-lg-12 text-center\">
        <p>   <a role=\"button\" href=\"{{ path('task_new') }}\" class=\"btn btn-lg btn-info \">{{'Create a new task'|trans}}</a></p>
    </div>

{% endblock %}

{% block stylesheets %}
    <style>
        #ligne { background-color: #868686 }

    </style>
{% endblock %}", "task/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/task/index.html.twig");
    }
}
