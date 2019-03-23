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
        echo "    ";
        if (($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "etatP", []) == "project.progress")) {
            // line 5
            echo "        ";
            $context["cardcolorP"] = "bg-light";
            // line 6
            echo "        ";
            $context["cardtextP"] = "text-dark";
            // line 7
            echo "    ";
        } elseif (($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "etatP", []) == "project.completed")) {
            // line 8
            echo "        ";
            $context["cardcolorP"] = "bg-success";
            // line 9
            echo "        ";
            $context["cardtextP"] = "text-white";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["cardcolorP"] = "bg-dark";
            // line 12
            echo "        ";
            $context["cardtextP"] = "text-white";
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    <h3 class=\"text-center\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", []), "html", null, true);
        echo "</h3>
    <div class=\"container\">

        <div class=\"card ";
        // line 18
        echo twig_escape_filter($this->env, ($context["cardcolorP"] ?? $this->getContext($context, "cardcolorP")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["cardtextP"] ?? $this->getContext($context, "cardtextP")), "html", null, true);
        echo " mb-3\">

            <div class=\"card-header\"><h5><b> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "nomP", []), "html", null, true);
        echo "</b></h5></div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
        // line 25
        echo "Description";
        echo "</b></p>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "descriptionP", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 30
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End Date"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 34
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", []), "Y-m-d"), "html", null, true);
        }
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</b></p>
                        <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                        ";
        // line 42
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
            // line 43
            echo "
                        <p>
                            <ul>
                                <p> <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a></p>
                                ";
            // line 47
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])))) {
                // line 48
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_project", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
                echo "\" class=\" btn btn-danger btn-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 50
            echo "                            </ul>
                        </p>
                        ";
        }
        // line 53
        echo "                    </div>
                 </div>
            </div>
        </div>




        <h2>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</h2>
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5><b>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "firstname", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "lastname", []), "html", null, true);
        echo "</b></h5></div>
            <div class=\"card-body\">

                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>Id</b></p>
                        <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "id", []), "html", null, true);
        echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>email</b></p>
                        <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "email", []), "html", null, true);
        echo "</a></p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</b></p>
                        <ul>
                            <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
        echo "</a>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        ";
        // line 86
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DEV"))) {
            // line 87
            echo "        <div class=\"col-lg-12 text-center\">
            <p> <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_add", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add task"), "html", null, true);
            echo "</a> </p>
        </div>
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <h2>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked tasks"), "html", null, true);
            echo "</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    ";
        }
        // line 102
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "taches", []));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 103
            echo "                        ";
            if (($this->getAttribute($context["task"], "etatT", []) == "label.progress")) {
                // line 104
                echo "                            ";
                $context["cardcolorT"] = "bg-light";
                // line 105
                echo "                            ";
                $context["cardtextT"] = "text-dark";
                // line 106
                echo "                        ";
            } elseif (($this->getAttribute($context["task"], "etatT", []) == "label.completed")) {
                // line 107
                echo "                            ";
                $context["cardcolorT"] = "bg-success";
                // line 108
                echo "                            ";
                $context["cardtextT"] = "text-white";
                // line 109
                echo "                        ";
            } else {
                // line 110
                echo "                            ";
                $context["cardcolorT"] = "bg-dark";
                // line 111
                echo "                            ";
                $context["cardtextT"] = "text-white";
                // line 112
                echo "                        ";
            }
            // line 113
            echo "                        <div class=\"card ";
            echo twig_escape_filter($this->env, ($context["cardcolorT"] ?? $this->getContext($context, "cardcolorT")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["cardtextT"] ?? $this->getContext($context, "cardtextT")), "html", null, true);
            echo " mb-3\">

                            <div class=\"card-header\"><h5><b>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
            echo "</b></h5></div>
                            <div class=\"card-body\">
                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>Id</b></p>
                                        <p>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", []), "html", null, true);
            echo "</a></p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
            // line 123
            echo "Description";
            echo "</b></p>
                                        <p>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriptionT", []), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start Date"), "html", null, true);
            echo "</b></p>
                                        <p>";
            // line 128
            if ($this->getAttribute($context["task"], "dateDebutT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateDebutT", []), "Y-m-d"), "html", null, true);
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
            if ($this->getAttribute($context["task"], "dateFinT", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dateFinT", []), "Y-m-d"), "html", null, true);
            }
            echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
            echo "</b></p>
                                        <p>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "idDevT", []), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</b></p>
                                        <p>
                                        <ul>

                                            <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>

                                            ";
            // line 145
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["task"], "idDevT", []) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])))) {
                // line 146
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\" btn btn-info btn-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 148
            echo "                                            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])))) {
                // line 149
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_task", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                echo "\" class=\" btn btn-danger btn-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 151
            echo "

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
        // line 160
        echo "                </div>
            </div>
            <div class=\"col-lg-12 text-center\">
                <p> <a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
        echo "\" class=\"btn btn-lg btn-primary \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a></p>
            </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
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
        return array (  449 => 169,  432 => 163,  427 => 160,  413 => 151,  405 => 149,  402 => 148,  394 => 146,  392 => 145,  385 => 143,  378 => 139,  372 => 136,  368 => 135,  360 => 132,  356 => 131,  348 => 128,  344 => 127,  338 => 124,  334 => 123,  328 => 120,  320 => 115,  312 => 113,  309 => 112,  306 => 111,  303 => 110,  300 => 109,  297 => 108,  294 => 107,  291 => 106,  288 => 105,  285 => 104,  282 => 103,  277 => 102,  267 => 95,  255 => 88,  252 => 87,  250 => 86,  237 => 78,  232 => 76,  226 => 73,  219 => 69,  208 => 63,  203 => 61,  193 => 53,  188 => 50,  180 => 48,  178 => 47,  172 => 46,  167 => 43,  165 => 42,  161 => 41,  155 => 38,  151 => 37,  143 => 34,  139 => 33,  131 => 30,  127 => 29,  121 => 26,  117 => 25,  109 => 20,  102 => 18,  94 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  52 => 3,  22 => 1,);
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
    {% if  project.etatP == 'project.progress' %}
        {% set cardcolorP='bg-light' %}
        {% set cardtextP='text-dark' %}
    {% elseif project.etatP == 'project.completed' %}
        {% set cardcolorP='bg-success' %}
        {% set cardtextP='text-white' %}
    {% else %}
        {% set cardcolorP='bg-dark' %}
        {% set cardtextP='text-white' %}
    {% endif %}

    <h3 class=\"text-center\">{{ 'Project'|trans }} n° {{ project.id }}</h3>
    <div class=\"container\">

        <div class=\"card {{ cardcolorP }} {{ cardtextP }} mb-3\">

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
                                {% if is_granted(\"ROLE_ADMIN\") or  project.idChefP == user.id  %}
                                    <a href=\"{{ path('delete_project', {'id': project.id}) }}\" class=\" btn btn-danger btn-sm\">{{ 'Delete'|trans }}</a>
                                {% endif %}
                            </ul>
                        </p>
                        {% endif %}
                    </div>
                 </div>
            </div>
        </div>




        <h2>{{ 'Project manager'|trans }}</h2>
        <div class=\"card bg-light mb-3\">
            <div class=\"card-header\"><h5><b>{{ project.idChefP.firstname }} {{ project.idChefP.lastname }}</b></h5></div>
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
                            <a href=\"{{ path('user_show', { 'id': project.idChefP.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_CHIEF\") or is_granted(\"ROLE_DEV\") %}
        <div class=\"col-lg-12 text-center\">
            <p> <a href=\"{{ path('task_add', {'id': project.id})  }}\" class=\"btn btn-lg btn-primary\">{{ 'Add task'|trans }}</a> </p>
        </div>
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <h2>{{ 'Linked tasks'|trans }}</h2>
                        </button>
                    </h5>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                    {% endif %}
                    {% for task in project.taches %}
                        {% if  task.etatT == 'label.progress' %}
                            {% set cardcolorT='bg-light' %}
                            {% set cardtextT='text-dark' %}
                        {% elseif task.etatT == 'label.completed' %}
                            {% set cardcolorT='bg-success' %}
                            {% set cardtextT='text-white' %}
                        {% else %}
                            {% set cardcolorT='bg-dark' %}
                            {% set cardtextT='text-white' %}
                        {% endif %}
                        <div class=\"card {{ cardcolorT }} {{ cardtextT }} mb-3\">

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

                                            <a href=\"{{ path('task_show', { 'id': task.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>

                                            {% if is_granted(\"ROLE_ADMIN\")   or task.idDevT == user.id  %}
                                                <a href=\"{{ path('task_edit', {'id': task.id}) }}\" class=\" btn btn-info btn-sm\">{{ 'Edit'|trans }}</a>
                                            {% endif %}
                                            {% if is_granted(\"ROLE_ADMIN\") or  project.idChefP == user.id  %}
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
            <div class=\"col-lg-12 text-center\">
                <p> <a href=\"{{ path('project_index') }}\" class=\"btn btn-lg btn-primary \">{{ 'Back to the list'|trans }}</a></p>
            </div>

    </div>
{% endblock %}

{% block stylesheets %}
{% endblock %}", "project/show.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/show.html.twig");
    }
}
