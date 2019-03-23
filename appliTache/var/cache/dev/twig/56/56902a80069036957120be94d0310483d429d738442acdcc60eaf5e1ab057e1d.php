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
        <br>
        ";
        // line 7
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
            // line 8
            echo "        <div class=\"col-lg-12 text-center\">
            <p> <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
            echo "\" class=\"btn btn-lg btn-info \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new project"), "html", null, true);
            echo "</a></p>
        </div>
        ";
        }
        // line 12
        echo "        <h1 class=\"text-center\" id=\"project\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects list"), "html", null, true);
        echo "</h1>
        <div class=\"container\">
            <div class=\"accordion\" id=\"accordionExample\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In progress project"), "html", null, true);
        echo "</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "project.progress")) {
                // line 26
                echo "                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</div>
                            <div class=\"card-body \">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>Id</b></p>
                                        <p><a>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 40
                echo "Description";
                echo "</b></p>
                                        <p>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 45
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 49
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                                    </div>
                                     <div class=\"col\">
                                      <p><b>";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                         ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 62
                    echo "                                                <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                        <p>
                                            <ul>
                                                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                                ";
                // line 70
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["project"], "idChefP", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 71
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-danger btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                                    <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                                ";
                }
                // line 74
                echo "                                            </ul>
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
        // line 81
        echo "            </div>

            <div class=\"card-header\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                        <h2>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Completed project"), "html", null, true);
        echo "</h2>
                    </button>
                </h5>
            </div>

            <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">

                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "project.completed")) {
                // line 94
                echo "                <div class=\"card bg-success mb-3\">
                    <div class=\"card-header\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</div>
                    <div class=\"card-body\">
                        <div id=\"ligne\" class=\"row\">
                            <div class=\"col\">
                                <p><b>Id</b></p>
                                <p><a>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 107
                echo "Description";
                echo "</b></p>
                                <p>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 112
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 116
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 129
                    echo "                                    <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                <p>
                                <ul>
                                        <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                    ";
                // line 137
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["project"], "idChefP", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 138
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-danger btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                        <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>

                                    ";
                }
                // line 142
                echo "
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
        // line 150
        echo "            </div>


            <div class=\"card-header\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
                       <h2>";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Aborted project"), "html", null, true);
        echo "</h2>
                    </button>
                </h5>
            </div>

            <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">


                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (($this->getAttribute($context["project"], "etatP", []) == "label.abort")) {
                // line 165
                echo "                 <div class=\"card bg-dark text-white mb-3\">
                    <div class=\"card-header\">";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</div>
                    <div class=\"card-body\">
                        <div id=\"ligne\" class=\"row\">
                            <div class=\"col\">
                                <p><b>Id</b></p>
                                <p><a>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "</a></p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 178
                echo "Description";
                echo "</b></p>
                                <p>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "descriptionP", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 183
                if ($this->getAttribute($context["project"], "dateDebutP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateDebutP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 187
                if ($this->getAttribute($context["project"], "dateFinP", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateFinP", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Client name"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomClient", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "idChefP", []), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "taches", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 200
                    echo "                                    <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "                            </div>
                            <div class=\"col\">
                                <p><b>";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                <ul>
                                        <a href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                    ";
                // line 207
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["project"], "idChefP", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 208
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-danger btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                        <a href=\"";
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 211
                echo "                                </ul>
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
        // line 217
        echo "            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 226
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
        return array (  604 => 226,  595 => 225,  580 => 217,  568 => 211,  561 => 209,  554 => 208,  552 => 207,  546 => 206,  541 => 204,  537 => 202,  528 => 200,  524 => 199,  520 => 198,  514 => 195,  510 => 194,  504 => 191,  500 => 190,  492 => 187,  488 => 186,  480 => 183,  476 => 182,  470 => 179,  466 => 178,  460 => 175,  456 => 174,  450 => 171,  442 => 166,  439 => 165,  434 => 164,  423 => 156,  415 => 150,  401 => 142,  393 => 139,  386 => 138,  384 => 137,  378 => 136,  372 => 133,  368 => 131,  359 => 129,  355 => 128,  351 => 127,  345 => 124,  341 => 123,  335 => 120,  331 => 119,  323 => 116,  319 => 115,  311 => 112,  307 => 111,  301 => 108,  297 => 107,  291 => 104,  287 => 103,  281 => 100,  273 => 95,  270 => 94,  265 => 93,  255 => 86,  248 => 81,  235 => 74,  228 => 72,  221 => 71,  219 => 70,  213 => 69,  207 => 66,  203 => 64,  194 => 62,  190 => 61,  186 => 60,  180 => 57,  176 => 56,  170 => 53,  166 => 52,  158 => 49,  154 => 48,  146 => 45,  142 => 44,  136 => 41,  132 => 40,  126 => 37,  122 => 36,  116 => 33,  107 => 27,  104 => 26,  99 => 25,  90 => 19,  79 => 12,  71 => 9,  68 => 8,  66 => 7,  61 => 4,  52 => 3,  22 => 1,);
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
        <br>
        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CHIEF') %}
        <div class=\"col-lg-12 text-center\">
            <p> <a href=\"{{ path('project_new') }}\" class=\"btn btn-lg btn-info \">{{ 'Create a new project'|trans }}</a></p>
        </div>
        {% endif %}
        <h1 class=\"text-center\" id=\"project\">{{ 'Projects list'|trans }}</h1>
        <div class=\"container\">
            <div class=\"accordion\" id=\"accordionExample\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                <h2>{{ 'In progress project'|trans }}</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                        {% for project in projects if project.etatP == 'project.progress' %}
                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\">{{ project.nomP }}</div>
                            <div class=\"card-body \">

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
                                                    <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                                {% if is_granted(\"ROLE_ADMIN\") or  project.idChefP == app.user  %}
                                                    <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
                                                    <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                                                {% endif %}
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
            </div>

            <div class=\"card-header\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                        <h2>{{ 'Completed project'|trans }}</h2>
                    </button>
                </h5>
            </div>

            <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">

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
                                        <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                    {% if is_granted(\"ROLE_ADMIN\") or  project.idChefP == app.user  %}
                                        <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
                                        <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>

                                    {% endif %}

                                </ul>
                                </p>
                            </div>
                        </div>
                     </div>
                </div>
                {% endfor %}
            </div>


            <div class=\"card-header\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
                       <h2>{{ 'Aborted project'|trans }}</h2>
                    </button>
                </h5>
            </div>

            <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">


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
                                        <a href=\"{{ path('project_show', { 'id': project.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                    {% if is_granted(\"ROLE_ADMIN\") or  project.idChefP == app.user  %}
                                        <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
                                        <a href=\"{{ path('project_edit', { 'id': project.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                     </div>
                 </div>
                {% endfor %}
            </div>
        </div>
    </div>


{% endblock %}


{% block stylesheets %}

{% endblock %}", "project/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/index.html.twig");
    }
}
