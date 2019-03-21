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
                echo "            <div class=\"card bg-light mb-3\">
                <div class=\"card-header\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</div>
                <div class=\"card-body\">

                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>Id</b></p>
                            <p><a>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                        </div>
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                        </div>
                         <div class=\"col\">
                          <p><b>";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                             ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 48
                    echo "                                    <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <p>
                                <ul>
                                        <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                                </ul>
                            </p>
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
        // line 64
        echo "
            <h2>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Completed project"), "html", null, true);
        echo "</h2>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "project.completed")) {
                // line 67
                echo "            <div class=\"card bg-success mb-3\">
                <div class=\"card-header\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</div>
                <div class=\"card-body\">
                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>Id</b></p>
                            <p><a>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 80
                echo "Description";
                echo "</b></p>
                            <p>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 85
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 89
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                            ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 102
                    echo "                                <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <p>
                            <ul>
                                    <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                            </ul>
                            </p>
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
        // line 118
        echo "
            <h2>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aborted project"), "html", null, true);
        echo "</h2>
            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "label.abort")) {
                // line 121
                echo "             <div class=\"card bg-dark text-white mb-3\">
                <div class=\"card-header\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</div>
                <div class=\"card-body\">
                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>Id</b></p>
                            <p><a>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 134
                echo "Description";
                echo "</b></p>
                            <p>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 139
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 143
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                            ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 156
                    echo "                                <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <ul>
                                    <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                            </ul>
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
        // line 170
        echo "
        </div>
    </div>
    <div class=\"col-lg-12 text-center\">
        <p> <a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new project"), "html", null, true);
        echo "</a></p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 181
        echo "
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
        return array (  528 => 181,  519 => 180,  503 => 174,  497 => 170,  481 => 163,  475 => 162,  470 => 160,  466 => 158,  457 => 156,  453 => 155,  449 => 154,  443 => 151,  439 => 150,  433 => 147,  429 => 146,  421 => 143,  417 => 142,  409 => 139,  405 => 138,  399 => 135,  395 => 134,  389 => 131,  385 => 130,  379 => 127,  371 => 122,  368 => 121,  363 => 120,  359 => 119,  356 => 118,  339 => 110,  333 => 109,  327 => 106,  323 => 104,  314 => 102,  310 => 101,  306 => 100,  300 => 97,  296 => 96,  290 => 93,  286 => 92,  278 => 89,  274 => 88,  266 => 85,  262 => 84,  256 => 81,  252 => 80,  246 => 77,  242 => 76,  236 => 73,  228 => 68,  225 => 67,  220 => 66,  216 => 65,  213 => 64,  196 => 56,  190 => 55,  184 => 52,  180 => 50,  171 => 48,  167 => 47,  163 => 46,  157 => 43,  153 => 42,  147 => 39,  143 => 38,  135 => 35,  131 => 34,  123 => 31,  119 => 30,  113 => 27,  109 => 26,  103 => 23,  99 => 22,  93 => 19,  84 => 13,  81 => 12,  76 => 11,  72 => 10,  65 => 6,  61 => 4,  52 => 3,  22 => 1,);
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
        <h1 class=\"text-center\" id=\"project\">{{ 'Projects list'|trans }}</h1>


        <div class=\"container\">
            <h2>{{ 'In progress project'|trans }}</h2>
            {% for project in projects if project.etatP == 'project.progress' %}
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header\">{{ project.nomP }}</div>
                <div class=\"card-body\">

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
                </div>
            </div>
            {% endfor %}

            <h2>{{ 'Completed project'|trans }}</h2>
            {% for project in projects if project.etatP == 'project.completed' %}
            <div class=\"card bg-success mb-3\">
                <div class=\"card-header\">{{ project.nomP }}</div>
                <div class=\"card-body\">
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
                 </div>
            </div>
            {% endfor %}

            <h2>{{ 'Aborted project'|trans }}</h2>
            {% for project in projects if project.etatP == 'label.abort' %}
             <div class=\"card bg-dark text-white mb-3\">
                <div class=\"card-header\">{{ project.nomP }}</div>
                <div class=\"card-body\">
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

{% endblock %}", "project/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/index.html.twig");
    }
}
