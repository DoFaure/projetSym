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
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                             <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In progress tasks"), "html", null, true);
        echo "</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">

                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == "label.progress")) {
                // line 20
                echo "                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-header\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</div>
                        <div class=\"card-body\">
                            <div id=\"ligne\" class=\"row\">
                                <div class=\"col\">
                                    <p><b>Id</b></p>
                                    <p><a>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 29
                echo "Description";
                echo "</b></p>
                                    <p>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 34
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 38
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                    <p>
                                        <ul>
                                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                            ";
                // line 53
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["task"], "idDevT", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 54
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-info btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                            ";
                }
                // line 56
                echo "                                            ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute($context["task"], "idProjetT", []), "idChefP", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 57
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_task", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-danger btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                            ";
                }
                // line 59
                echo "                                    </ul>
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
        // line 66
        echo "                </div>

                <div class=\"card-header\" id=\"headingOne\">
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                            <h2>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Completed tasks"), "html", null, true);
        echo "</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">

                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == "label.completed")) {
                // line 79
                echo "                    <div class=\"card bg-success mb-3\">
                        <div class=\"card-header\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</div>
                        <div class=\"card-body\">
                            <div id=\"ligne\" class=\"row\">
                                <div class=\"col\">
                                    <p><b>Id</b></p>
                                    <p><a>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 92
                echo "Description";
                echo "</b></p>
                                    <p>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 97
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 101
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                    <p>
                                    <ul>
                                            <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                        ";
                // line 116
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["task"], "idDevT", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 117
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-info btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 119
                echo "                                        ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute($context["task"], "idProjetT", []), "idChefP", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 120
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_task", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-danger btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 122
                echo "                                    </ul>
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
        // line 129
        echo "                </div>


                <div class=\"card-header\" id=\"headingOne\">
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
                          <h2>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Abort tasks"), "html", null, true);
        echo "</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">



                    ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if (($this->getAttribute($context["task"], "etatT", []) == "label.abort")) {
                // line 145
                echo "                    <div class=\"card bg-dark text-white mb-3\">
                        <div class=\"card-header\">";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</div>
                        <div class=\"card-body\">
                            <div id=\"ligne\" class=\"row\">
                                <div class=\"col\">
                                    <p><b>Id</b></p>
                                    <p><a>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
                echo "</a></p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 158
                echo "Description";
                echo "</b></p>
                                    <p>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 163
                if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 167
                if ($this->getAttribute($context["task"], "dateFinT", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
                }
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idProjetT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
                echo "</b></p>
                                    <p>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"col\">
                                    <p><b>";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                    <p>
                                    <ul>
                                        <a href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                        ";
                // line 182
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["task"], "idDevT", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 183
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-info btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 185
                echo "                                        ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute($context["task"], "idProjetT", []), "idChefP", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 186
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_task", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\" class=\" btn btn-danger btn-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 188
                echo "                                    </ul>
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
        // line 195
        echo "                </div>
            </div>
        </div>
    </div>
  <!--  <div class=\"col-lg-12 text-center\">
        <p>   <a role=\"button\" href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\" class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new task"), "html", null, true);
        echo "</a></p>
    </div> -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 206
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
        return array (  538 => 206,  529 => 205,  513 => 200,  506 => 195,  493 => 188,  485 => 186,  482 => 185,  474 => 183,  472 => 182,  466 => 181,  460 => 178,  454 => 175,  450 => 174,  444 => 171,  440 => 170,  432 => 167,  428 => 166,  420 => 163,  416 => 162,  410 => 159,  406 => 158,  400 => 155,  396 => 154,  390 => 151,  382 => 146,  379 => 145,  374 => 144,  362 => 135,  354 => 129,  341 => 122,  333 => 120,  330 => 119,  322 => 117,  320 => 116,  314 => 115,  308 => 112,  302 => 109,  298 => 108,  292 => 105,  288 => 104,  280 => 101,  276 => 100,  268 => 97,  264 => 96,  258 => 93,  254 => 92,  248 => 89,  244 => 88,  238 => 85,  230 => 80,  227 => 79,  222 => 78,  212 => 71,  205 => 66,  192 => 59,  184 => 57,  181 => 56,  173 => 54,  171 => 53,  165 => 52,  159 => 49,  153 => 46,  149 => 45,  143 => 42,  139 => 41,  131 => 38,  127 => 37,  119 => 34,  115 => 33,  109 => 30,  105 => 29,  99 => 26,  91 => 21,  88 => 20,  83 => 19,  73 => 12,  61 => 4,  52 => 3,  22 => 1,);
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
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                             <h2>{{ 'In progress tasks'|trans }}</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">

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
                                                <a href=\"{{ path('task_show', { 'id': task.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                            {% if is_granted(\"ROLE_ADMIN\")   or task.idDevT == app.user  %}
                                                <a href=\"{{ path('task_edit', {'id': task.id}) }}\" class=\" btn btn-info btn-sm\">{{ 'Edit'|trans }}</a>
                                            {% endif %}
                                            {% if is_granted(\"ROLE_ADMIN\") or  task.idProjetT.idChefP == app.user  %}
                                                <a href=\"{{ path('delete_task', {'id': task.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
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
                            <h2>{{ 'Completed tasks'|trans }}</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">

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
                                            <a href=\"{{ path('task_show', { 'id': task.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                        {% if is_granted(\"ROLE_ADMIN\")   or task.idDevT == app.user %}
                                            <a href=\"{{ path('task_edit', {'id': task.id}) }}\" class=\" btn btn-info btn-sm\">{{ 'Edit'|trans }}</a>
                                        {% endif %}
                                        {% if is_granted(\"ROLE_ADMIN\") or  task.idProjetT.idChefP == app.user  %}
                                            <a href=\"{{ path('delete_task', {'id': task.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
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
                          <h2>{{ 'Abort tasks'|trans }}</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">



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
                                        <a href=\"{{ path('task_show', { 'id': task.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                        {% if is_granted(\"ROLE_ADMIN\")   or task.idDevT == app.user  %}
                                            <a href=\"{{ path('task_edit', {'id': task.id}) }}\" class=\" btn btn-info btn-sm\">{{ 'Edit'|trans }}</a>
                                        {% endif %}
                                        {% if is_granted(\"ROLE_ADMIN\") or  task.idProjetT.idChefP == app.user  %}
                                            <a href=\"{{ path('delete_task', {'id': task.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
                                        {% endif %}
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
  <!--  <div class=\"col-lg-12 text-center\">
        <p>   <a role=\"button\" href=\"{{ path('task_new') }}\" class=\"btn btn-lg btn-info \">{{'Create a new task'|trans}}</a></p>
    </div> -->

{% endblock %}

{% block stylesheets %}

{% endblock %}", "task/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/task/index.html.twig");
    }
}
