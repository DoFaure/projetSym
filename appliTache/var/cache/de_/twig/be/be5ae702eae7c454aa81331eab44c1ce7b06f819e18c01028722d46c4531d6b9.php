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
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrator"), "html", null, true);
        echo "</h2>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", []))) {
                // line 11
                echo "            <div class=\"card bg-light mb-3\">
                <div class=\"card-header\"><h5><b>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                <div class=\"card-body\">

                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>";
                // line 17
                echo "Email";
                echo "</b></p>
                            <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 31
                    echo "                                <ul>
                                    <li>
                                        <a href=\"";
                    // line 33
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
                // line 37
                echo "                        </div>

                        <div class=\"col\">
                            <p><b>";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 42
                    echo "                                <ul>
                                    <li>
                                        <a href=\"";
                    // line 44
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
                // line 48
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <p>
                            <ul>
                                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
            <h2>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</h2>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((twig_in_filter("ROLE_CHIEF", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", [])))) {
                // line 65
                echo "            <div class=\"card bg-light mb-3\">
                <div class=\"card-header\"><h5><b>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                <div class=\"card-body\">

                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>";
                // line 71
                echo "Email";
                echo "</b></p>
                            <p>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                            ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 85
                    echo "                                <ul>
                                    <li>
                                        <a href=\"";
                    // line 87
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
                // line 91
                echo "                        </div>

                        <div class=\"col\">
                            <p><b>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 96
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <p>
                            <ul>
                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
            <h2>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
        echo "</h2>
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (((twig_in_filter("ROLE_DEV", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", []))) && !twig_in_filter("ROLE_CHIEF", $this->getAttribute(            // line 115
$context["user"], "roles", [])))) {
                // line 116
                echo "
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header\"><h5><b>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                <div class=\"card-body\">

                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>";
                // line 123
                echo "Email";
                echo "</b></p>
                            <p>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                            ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 137
                    echo "                             <ul>
                                 <li>
                                     <a href=\"";
                    // line 139
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
                // line 143
                echo "                        </div>

                        <div class=\"col\">
                            <p><b>";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                            ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 148
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <p>
                            <ul>
                                <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "
            <h2>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OTHER"), "html", null, true);
        echo "</h2>
            ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((((twig_in_filter("ROLE_USER", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute(            // line 167
$context["user"], "roles", []))) && !twig_in_filter("ROLE_DEV", $this->getAttribute(            // line 168
$context["user"], "roles", []))) && !twig_in_filter("ROLE_CHIEF", $this->getAttribute(            // line 169
$context["user"], "roles", [])))) {
                // line 170
                echo "
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header\"><h5><b>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo " </b></h5></div>
                <div class=\"card-body\">
                    <div id=\"ligne\" class=\"row\">
                        <div class=\"col\">
                            <p><b>";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 180
                echo "Email";
                echo "</b></p>
                            <p>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                            <p>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                            ";
                // line 193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 194
                    echo "                                <ul>
                                    <li>
                                        <a href=\"";
                    // line 196
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
                // line 200
                echo "                        </div>

                        <div class=\"col\">
                            <p><b>";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                            ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 205
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "                        </div>
                        <div class=\"col\">
                            <p><b>";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                            <p>
                            <ul>
                                <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "
        </div>
    </div>

    <div class=\"col-lg-12 text-center\">

        <a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"  role=\"button\"  class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new user"), "html", null, true);
        echo "</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
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
        return array (  648 => 233,  632 => 227,  624 => 221,  607 => 213,  601 => 212,  595 => 209,  591 => 207,  580 => 205,  576 => 204,  572 => 203,  567 => 200,  555 => 196,  551 => 194,  547 => 193,  543 => 192,  537 => 189,  533 => 188,  527 => 185,  523 => 184,  517 => 181,  513 => 180,  507 => 177,  503 => 176,  496 => 172,  492 => 170,  490 => 169,  489 => 168,  488 => 167,  484 => 166,  480 => 165,  477 => 164,  460 => 156,  454 => 155,  448 => 152,  444 => 150,  433 => 148,  429 => 147,  425 => 146,  420 => 143,  408 => 139,  404 => 137,  400 => 136,  396 => 135,  390 => 132,  386 => 131,  380 => 128,  376 => 127,  370 => 124,  366 => 123,  358 => 118,  354 => 116,  352 => 115,  348 => 114,  344 => 113,  341 => 112,  324 => 104,  318 => 103,  312 => 100,  308 => 98,  297 => 96,  293 => 95,  289 => 94,  284 => 91,  272 => 87,  268 => 85,  264 => 84,  260 => 83,  254 => 80,  250 => 79,  244 => 76,  240 => 75,  234 => 72,  230 => 71,  222 => 66,  219 => 65,  214 => 64,  210 => 63,  207 => 62,  190 => 54,  184 => 53,  178 => 50,  174 => 48,  162 => 44,  158 => 42,  154 => 41,  150 => 40,  145 => 37,  133 => 33,  129 => 31,  125 => 30,  121 => 29,  115 => 26,  111 => 25,  105 => 22,  101 => 21,  95 => 18,  91 => 17,  83 => 12,  80 => 11,  75 => 10,  71 => 9,  64 => 5,  61 => 4,  52 => 3,  22 => 1,);
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
            <h2>{{ 'Administrator'|trans }}</h2>
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
                                <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}

            <h2>{{ 'Project manager'|trans }}</h2>
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
                                <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                            {% endfor %}
                        </div>
                        <div class=\"col\">
                            <p><b>{{ 'Actions'|trans }}</b></p>
                            <p>
                            <ul>
                                <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}

            <h2>{{ 'Developer'|trans }}</h2>
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
                                <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                            {% endfor %}
                        </div>
                        <div class=\"col\">
                            <p><b>{{ 'Actions'|trans }}</b></p>
                            <p>
                            <ul>
                                <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}

            <h2>{{ 'OTHER'|trans }}</h2>
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
                                <a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.nomT }}</a>
                            {% endfor %}
                        </div>
                        <div class=\"col\">
                            <p><b>{{ 'Actions'|trans }}</b></p>
                            <p>
                            <ul>
                                <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Show'|trans }}</a>
                                <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-sm btn-info\">{{ 'Edit'|trans }}</a>
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

        <a href=\"{{ path('fos_user_registration_register') }}\"  role=\"button\"  class=\"btn btn-lg btn-info \">{{'Create a new user'|trans}}</a>
    </div>

{% endblock %}


{% block stylesheets %}
{% endblock %}

", "user/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/user/index.html.twig");
    }
}
