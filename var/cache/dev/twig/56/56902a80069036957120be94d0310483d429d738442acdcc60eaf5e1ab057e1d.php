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

/* project/index.html.twig */
class __TwigTemplate_6675ae0b047f7206ab68f77f4a40340738eabac7f8d9bf8af5122fad887cc90e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

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
    <div class=\"container-fluid height-full\">
        <h1 class=\"text-center\" id=\"project\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects list"), "html", null, true);
        echo "</h1>


        <div class=\"container\">
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In progress project"), "html", null, true);
        echo "</h2>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "project.progress")) {
                // line 12
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 23
                echo "Description";
                echo "</b></p>
                        <p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 28
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 32
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                    </div>
                     <div class=\"col\">
                      <p><b>";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                         ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 45
                    echo "                                <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                            <ul>
                                    <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
            <h2>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Completed project"), "html", null, true);
        echo "</h2>
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "project.completed")) {
                // line 62
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 73
                echo "Description";
                echo "</b></p>
                        <p>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 78
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 82
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                        ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 95
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>
                                <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
            <h2>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aborted project"), "html", null, true);
        echo "</h2>
            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "label.abort")) {
                // line 112
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 123
                echo "Description";
                echo "</b></p>
                        <p>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 128
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 132
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                        ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 145
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <ul>
                                <a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                        </ul>
                    </div>
                </div>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "
        </div>
    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new project"), "html", null, true);
        echo "</a></p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 168
        echo "    <style>
        #ligne{background-color: #868686}



    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 168,  497 => 167,  481 => 161,  475 => 157,  461 => 152,  455 => 151,  450 => 149,  446 => 147,  437 => 145,  433 => 144,  429 => 143,  423 => 140,  419 => 139,  413 => 136,  409 => 135,  401 => 132,  397 => 131,  389 => 128,  385 => 127,  379 => 124,  375 => 123,  369 => 120,  365 => 119,  359 => 116,  353 => 112,  348 => 111,  344 => 110,  341 => 109,  326 => 103,  320 => 102,  314 => 99,  310 => 97,  301 => 95,  297 => 94,  293 => 93,  287 => 90,  283 => 89,  277 => 86,  273 => 85,  265 => 82,  261 => 81,  253 => 78,  249 => 77,  243 => 74,  239 => 73,  233 => 70,  229 => 69,  223 => 66,  217 => 62,  212 => 61,  208 => 60,  205 => 59,  190 => 53,  184 => 52,  178 => 49,  174 => 47,  165 => 45,  161 => 44,  157 => 43,  151 => 40,  147 => 39,  141 => 36,  137 => 35,  129 => 32,  125 => 31,  117 => 28,  113 => 27,  107 => 24,  103 => 23,  97 => 20,  93 => 19,  87 => 16,  81 => 12,  76 => 11,  72 => 10,  65 => 6,  61 => 4,  52 => 3,  22 => 1,);
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

    <div class=\"container-fluid height-full\">
        <h1 class=\"text-center\" id=\"project\">{{'Projects list'|trans}}</h1>


        <div class=\"container\">
            <h2>{{ 'In progress project'|trans }}</h2>
            {% for project in projects if project.etatP == 'project.progress' %}

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>{{ project.id }}</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Name'|trans }}</b></p>
                        <p>{{ project.nomP }}</p>
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
                      <p><b>{{ 'Tasks'|trans }}</b></p>
                         {%  for task in project.taches %}
                                <p>{{ task.nomT }}</p>
                            {% endfor %}
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <p>
                            <ul>
                                    <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                    <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                            </ul>
                        </p>
                    </div>
                </div>
            {% endfor %}

            <h2>{{ 'Completed project'|trans }}</h2>
            {% for project in projects if project.etatP == 'project.completed' %}

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>{{ project.id }}</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Name'|trans }}</b></p>
                        <p>{{ project.nomP }}</p>
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
                        <p><b>{{ 'Tasks'|trans }}</b></p>
                        {%  for task in project.taches %}
                            <p>{{ task.nomT }}</p>
                        {% endfor %}
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <p>
                        <ul>
                                <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                        </ul>
                        </p>
                    </div>
                </div>
            {% endfor %}

            <h2>{{ 'Aborted project'|trans }}</h2>
            {% for project in projects if project.etatP == 'label.abort' %}

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>{{ project.id }}</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Name'|trans }}</b></p>
                        <p>{{ project.nomP }}</p>
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
                        <p><b>{{ 'Tasks'|trans }}</b></p>
                        {%  for task in project.taches %}
                            <p>{{ task.nomT }}</p>
                        {% endfor %}
                    </div>
                    <div class=\"col\">
                        <p><b>{{ 'Actions'|trans }}</b></p>
                        <ul>
                                <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                        </ul>
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"{{ path('project_new') }}\" class=\"btn btn-lg btn-info \">{{ 'Create a new project'|trans }}</a></p>
    </div>

{% endblock %}


{% block stylesheets %}
    <style>
        #ligne{background-color: #868686}



    </style>
{% endblock %}", "project/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/index.html.twig");
    }
}
