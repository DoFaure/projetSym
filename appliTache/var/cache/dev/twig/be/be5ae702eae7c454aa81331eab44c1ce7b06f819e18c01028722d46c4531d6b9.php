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

/* user/index.html.twig */
class __TwigTemplate_7f91b81b9ee4a0d33a2f25da715e21bec2c71cd768fd8ef094a4198d51288ba3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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
        echo "    <div class=\"container-fluid height-full\">
        <h1 class=\"text-center\" id=\"user\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users list"), "html", null, true);
        echo "</h1>


        <div class=\"container\">
            <div class=\"accordion\" id=\"accordionExample\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrator"), "html", null, true);
        echo "</h2>
                            </button>
                        </h5>
                    </div>


                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", []))) {
                // line 22
                echo "                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>";
                // line 28
                echo "Email";
                echo "</b></p>
                                        <p>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 42
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                    </div>

                                    <div class=\"col\">
                                        <p><b>";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 53
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                          <!--  <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a> -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </div>
                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                                <h2>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">

                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((twig_in_filter("ROLE_CHIEF", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", [])))) {
                // line 85
                echo "                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>";
                // line 91
                echo "Email";
                echo "</b></p>
                                        <p>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 105
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                                    </div>

                                    <div class=\"col\">
                                        <p><b>";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 116
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                          <!--  <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a> -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                    </div>

                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
                                <h2>";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
        echo "</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">

                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (((twig_in_filter("ROLE_DEV", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", []))) && !twig_in_filter("ROLE_CHIEF", $this->getAttribute(            // line 149
$context["user"], "roles", [])))) {
                // line 150
                echo "
                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>";
                // line 157
                echo "Email";
                echo "</b></p>
                                        <p>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 171
                    echo "                                         <ul>
                                             <li>
                                                 <a href=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                                             </li>
                                         </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                                    </div>

                                    <div class=\"col\">
                                        <p><b>";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 182
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 184
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                          <!--  <a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a> -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                    </div>

                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseFourth\" aria-expanded=\"true\" aria-controls=\"collapseFourth\">
                                <h2>";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Other"), "html", null, true);
        echo "</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseFourth\" class=\"collapse show\" aria-labelledby=\"headingFourth\" data-parent=\"#accordionExample\">

                        ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((((twig_in_filter("ROLE_USER", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute(            // line 215
$context["user"], "roles", []))) && !twig_in_filter("ROLE_DEV", $this->getAttribute(            // line 216
$context["user"], "roles", []))) && !twig_in_filter("ROLE_CHIEF", $this->getAttribute(            // line 217
$context["user"], "roles", [])))) {
                // line 218
                echo "
                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                            <div class=\"card-body\">
                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>";
                // line 224
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 228
                echo "Email";
                echo "</b></p>
                                        <p>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 232
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                                        <p>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 240
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 241
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 242
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 244
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                echo "                                    </div>

                                    <div class=\"col\">
                                        <p><b>";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                                        ";
                // line 252
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 253
                    echo "                                            <ul>
                                                <li>
                                                    <a href=\"";
                    // line 255
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                                                </li>
                                            </ul>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "                                    </div>
                                    <div class=\"col\">
                                        <p><b>";
                // line 261
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                      <!--      <a href=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>  -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"col-lg-12 text-center\">

       <!-- <a href=\"";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"  role=\"button\"  class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new user"), "html", null, true);
        echo "</a> -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 288
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 288,  690 => 282,  679 => 273,  662 => 265,  656 => 264,  650 => 261,  646 => 259,  634 => 255,  630 => 253,  626 => 252,  622 => 251,  617 => 248,  605 => 244,  601 => 242,  597 => 241,  593 => 240,  587 => 237,  583 => 236,  577 => 233,  573 => 232,  567 => 229,  563 => 228,  557 => 225,  553 => 224,  546 => 220,  542 => 218,  540 => 217,  539 => 216,  538 => 215,  534 => 214,  524 => 207,  517 => 202,  500 => 194,  494 => 193,  488 => 190,  484 => 188,  472 => 184,  468 => 182,  464 => 181,  460 => 180,  455 => 177,  443 => 173,  439 => 171,  435 => 170,  431 => 169,  425 => 166,  421 => 165,  415 => 162,  411 => 161,  405 => 158,  401 => 157,  393 => 152,  389 => 150,  387 => 149,  383 => 148,  373 => 141,  366 => 136,  349 => 128,  343 => 127,  337 => 124,  333 => 122,  321 => 118,  317 => 116,  313 => 115,  309 => 114,  304 => 111,  292 => 107,  288 => 105,  284 => 104,  280 => 103,  274 => 100,  270 => 99,  264 => 96,  260 => 95,  254 => 92,  250 => 91,  242 => 86,  239 => 85,  234 => 84,  224 => 77,  218 => 73,  201 => 65,  195 => 64,  189 => 61,  185 => 59,  173 => 55,  169 => 53,  165 => 52,  161 => 51,  156 => 48,  144 => 44,  140 => 42,  136 => 41,  132 => 40,  126 => 37,  122 => 36,  116 => 33,  112 => 32,  106 => 29,  102 => 28,  94 => 23,  91 => 22,  86 => 21,  76 => 14,  64 => 5,  61 => 4,  52 => 3,  22 => 1,);
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
        <h1 class=\"text-center\" id=\"user\">{{ 'Users list'|trans }}</h1>


        <div class=\"container\">
            <div class=\"accordion\" id=\"accordionExample\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"headingOne\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                <h2>{{ 'Administrator'|trans }}</h2>
                            </button>
                        </h5>
                    </div>


                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                        {% for user in users if 'ROLE_ADMIN' in user.roles %}
                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>{{ user.username }} </b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>{{ 'Email' }}</b></p>
                                        <p>{{ user.email }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'First name'|trans }}</b></p>
                                        <p>{{ user.firstname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Last name'|trans }}</b></p>
                                        <p>{{ user.lastname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Projects'|trans }}</b></p>
                                        {% for project in user.projetU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>

                                    <div class=\"col\">
                                        <p><b>{{ 'Tasks'|trans }}</b></p>
                                        {% for task in user.tacheU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Actions'|trans }}</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                          <!--  <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a> -->
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
                                <h2>{{ 'Project manager'|trans }}</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">

                        {% for user in users if 'ROLE_CHIEF' in user.roles and 'ROLE_ADMIN' not in user.roles %}
                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>{{ user.username }} </b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>{{ 'Email' }}</b></p>
                                        <p>{{ user.email }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'First name'|trans }}</b></p>
                                        <p>{{ user.firstname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Last name'|trans }}</b></p>
                                        <p>{{ user.lastname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Projects'|trans }}</b></p>
                                        {% for project in user.projetU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>

                                    <div class=\"col\">
                                        <p><b>{{ 'Tasks'|trans }}</b></p>
                                        {% for task in user.tacheU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Actions'|trans }}</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                          <!--  <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a> -->
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
                                <h2>{{ 'Developer'|trans }}</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">

                        {% for user in users if 'ROLE_DEV' in user.roles and 'ROLE_ADMIN' not in user.roles
                                                                        and 'ROLE_CHIEF' not in user.roles %}

                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>{{ user.username }} </b></h5></div>
                            <div class=\"card-body\">

                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>{{ 'Email' }}</b></p>
                                        <p>{{ user.email }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'First name'|trans }}</b></p>
                                        <p>{{ user.firstname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Last name'|trans }}</b></p>
                                        <p>{{ user.lastname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Projects'|trans }}</b></p>
                                        {% for project in user.projetU %}
                                         <ul>
                                             <li>
                                                 <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
                                             </li>
                                         </ul>
                                        {% endfor %}
                                    </div>

                                    <div class=\"col\">
                                        <p><b>{{ 'Tasks'|trans }}</b></p>
                                        {% for task in user.tacheU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Actions'|trans }}</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                          <!--  <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a> -->
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
                            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseFourth\" aria-expanded=\"true\" aria-controls=\"collapseFourth\">
                                <h2>{{ 'Other'|trans }}</h2>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseFourth\" class=\"collapse show\" aria-labelledby=\"headingFourth\" data-parent=\"#accordionExample\">

                        {% for user in users if 'ROLE_USER' in user.roles
                                                            and 'ROLE_ADMIN' not in user.roles
                                                            and 'ROLE_DEV' not in user.roles
                                                            and 'ROLE_CHIEF' not in user.roles %}

                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-header\"><h5><b>{{ user.username }} </b></h5></div>
                            <div class=\"card-body\">
                                <div id=\"ligne\" class=\"row\">
                                    <div class=\"col\">
                                        <p><b>{{ 'Username'|trans }}</b></p>
                                        <p>{{ user.username }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Email' }}</b></p>
                                        <p>{{ user.email }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'First name'|trans }}</b></p>
                                        <p>{{ user.firstname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Last name'|trans }}</b></p>
                                        <p>{{ user.lastname }}</p>
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Projects'|trans }}</b></p>
                                        {% for project in user.projetU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>

                                    <div class=\"col\">
                                        <p><b>{{ 'Tasks'|trans }}</b></p>
                                        {% for task in user.tacheU %}
                                            <ul>
                                                <li>
                                                    <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                                                </li>
                                            </ul>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col\">
                                        <p><b>{{ 'Actions'|trans }}</b></p>
                                        <p>
                                        <ul>
                                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-primary\">{{ 'Show'|trans }}</a>
                                      <!--      <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>  -->
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
    </div>

    <div class=\"col-lg-12 text-center\">

       <!-- <a href=\"{{ path('fos_user_registration_register') }}\"  role=\"button\"  class=\"btn btn-lg btn-info \">{{'Create a new user'|trans}}</a> -->
    </div>

{% endblock %}


{% block stylesheets %}
{% endblock %}

", "user/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/user/index.html.twig");
    }
}
