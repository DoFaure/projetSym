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
        echo "    <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks list"), "html", null, true);
        echo "</h1>

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
            if (($this->getAttribute($context["task"], "etatT", []) == "label.progress")) {
                // line 9
                echo "        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 18
                echo "Description";
                echo "</b></p>
                        <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 23
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 27
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                            <ul>
                                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
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
                echo "        <div class=\"card bg-success mb-3\">
            <div class=\"card-header\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 66
                echo "Description";
                echo "</b></p>
                        <p>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 71
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 75
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>
                                <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        <h2>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Abort tasks"), "html", null, true);
        echo "</h2>
        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == "label.abort")) {
                // line 101
                echo "        <div class=\"card bg-dark text-white mb-3\">
            <div class=\"card-header\">";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 114
                echo "Description";
                echo "</b></p>
                        <p>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 119
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 123
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>

                                <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>

                                <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "    </div>
  <!--  <div class=\"col-lg-12 text-center\">
        <p>   <a role=\"button\" href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new task"), "html", null, true);
        echo "</a></p>
    </div> -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 157
        echo "
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
        return array (  453 => 157,  444 => 156,  428 => 151,  424 => 149,  406 => 140,  399 => 138,  392 => 134,  386 => 131,  382 => 130,  376 => 127,  372 => 126,  364 => 123,  360 => 122,  352 => 119,  348 => 118,  342 => 115,  338 => 114,  332 => 111,  328 => 110,  322 => 107,  314 => 102,  311 => 101,  306 => 100,  302 => 99,  299 => 98,  282 => 90,  276 => 89,  270 => 86,  264 => 83,  260 => 82,  254 => 79,  250 => 78,  242 => 75,  238 => 74,  230 => 71,  226 => 70,  220 => 67,  216 => 66,  210 => 63,  206 => 62,  200 => 59,  192 => 54,  189 => 53,  184 => 52,  180 => 51,  177 => 50,  160 => 42,  154 => 41,  148 => 38,  142 => 35,  138 => 34,  132 => 31,  128 => 30,  120 => 27,  116 => 26,  108 => 23,  104 => 22,  98 => 19,  94 => 18,  88 => 15,  80 => 10,  77 => 9,  72 => 8,  68 => 7,  61 => 4,  52 => 3,  22 => 1,);
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
    <h1 class=\"text-center\">{{ 'Tasks list'|trans }}</h1>

    <div class=\"container\">
        <h2>{{ 'In progress tasks'|trans }}</h2>
        {% for task in tasks if task.etatT == 'label.progress' %}
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\">{{ task.nomT }}</div>
            <div class=\"card-body\">
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p><a>{{ task.id }}</a></p>
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
            </div>
        </div>
        {% endfor %}

        <h2>{{ 'Completed tasks'|trans }}</h2>
        {% for task in tasks if task.etatT == 'label.completed' %}
        <div class=\"card bg-success mb-3\">
            <div class=\"card-header\">{{ task.nomT }}</div>
            <div class=\"card-body\">
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
            </div>
        </div>
        {% endfor %}

        <h2>{{ 'Abort tasks'|trans }}</h2>
        {% for task in tasks if task.etatT == 'label.abort' %}
        <div class=\"card bg-dark text-white mb-3\">
            <div class=\"card-header\">{{ task.nomT }}</div>
            <div class=\"card-body\">
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
            </div>
        </div>
        {% endfor %}
    </div>
  <!--  <div class=\"col-lg-12 text-center\">
        <p>   <a role=\"button\" href=\"{{ path('task_new') }}\" class=\"btn btn-lg btn-info \">{{'Create a new task'|trans}}</a></p>
    </div> -->

{% endblock %}

{% block stylesheets %}

{% endblock %}", "task/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/task/index.html.twig");
    }
}
