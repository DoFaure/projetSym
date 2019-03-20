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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User list"), "html", null, true);
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
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 18
                echo "Email";
                echo "</b></p>
                        <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                        ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 32
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                    </div>

                    <div class=\"col\">
                        <p><b>";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 39
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>
                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            <h2>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project manager"), "html", null, true);
        echo "</h2>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((twig_in_filter("ROLE_CHIEF", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", [])))) {
                // line 56
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 63
                echo "Email";
                echo "</b></p>
                        <p>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                        ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 77
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                    </div>

                    <div class=\"col\">
                        <p><b>";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                        ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 84
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>
                            <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                            <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
            <h2>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer"), "html", null, true);
        echo "</h2>
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (((twig_in_filter("ROLE_DEV", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", []))) && !twig_in_filter("ROLE_CHIEF", $this->getAttribute(            // line 101
$context["user"], "roles", [])))) {
                // line 102
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 109
                echo "Email";
                echo "</b></p>
                        <p>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
                echo "</b></p>
                        ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projetU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 123
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                    </div>

                    <div class=\"col\">
                        <p><b>";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                        ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 130
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>
                            <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                            <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
            <h2>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OTHER"), "html", null, true);
        echo "</h2>
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((((twig_in_filter("ROLE_USER", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute(            // line 147
$context["user"], "roles", []))) && !twig_in_filter("ROLE_DEV", $this->getAttribute(            // line 148
$context["user"], "roles", []))) && !twig_in_filter("ROLE_CHIEF", $this->getAttribute(            // line 149
$context["user"], "roles", [])))) {
                // line 150
                echo "
                <div id=\"ligne\" class=\"row\">
                    <div class=\"col\">
                        <p><b>";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
                echo "</b></p>
                        <p>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                echo "</p>
                    </div>
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
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", ["id" => $this->getAttribute($context["project"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nomP", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                    </div>

                    <div class=\"col\">
                        <p><b>";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
                echo "</b></p>
                        ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "tacheU", []));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 178
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", ["id" => $this->getAttribute($context["task"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "nomT", []), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "                    </div>
                    <div class=\"col\">
                        <p><b>";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
                echo "</b></p>
                        <p>
                        <ul>
                            <a href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
                echo "</a>
                            <a href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
        </div>
    </div>

    <div class=\"col-lg-12 text-center\">

        <a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"  role=\"button\"  class=\"btn btn-lg btn-info \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new user"), "html", null, true);
        echo "</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 205
        echo "    <style>
        #ligne{background-color: #868686}



    </style>
";
        
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
        return array (  629 => 205,  620 => 204,  604 => 198,  596 => 192,  581 => 186,  575 => 185,  569 => 182,  565 => 180,  554 => 178,  550 => 177,  546 => 176,  541 => 173,  530 => 171,  526 => 170,  522 => 169,  516 => 166,  512 => 165,  506 => 162,  502 => 161,  496 => 158,  492 => 157,  486 => 154,  482 => 153,  477 => 150,  475 => 149,  474 => 148,  473 => 147,  469 => 146,  465 => 145,  462 => 144,  447 => 138,  441 => 137,  435 => 134,  431 => 132,  420 => 130,  416 => 129,  412 => 128,  407 => 125,  396 => 123,  392 => 122,  388 => 121,  382 => 118,  378 => 117,  372 => 114,  368 => 113,  362 => 110,  358 => 109,  352 => 106,  348 => 105,  343 => 102,  341 => 101,  337 => 100,  333 => 99,  330 => 98,  315 => 92,  309 => 91,  303 => 88,  299 => 86,  288 => 84,  284 => 83,  280 => 82,  275 => 79,  264 => 77,  260 => 76,  256 => 75,  250 => 72,  246 => 71,  240 => 68,  236 => 67,  230 => 64,  226 => 63,  220 => 60,  216 => 59,  211 => 56,  206 => 55,  202 => 54,  199 => 53,  184 => 47,  178 => 46,  172 => 43,  168 => 41,  157 => 39,  153 => 38,  149 => 37,  144 => 34,  133 => 32,  129 => 31,  125 => 30,  119 => 27,  115 => 26,  109 => 23,  105 => 22,  99 => 19,  95 => 18,  89 => 15,  85 => 14,  80 => 11,  75 => 10,  71 => 9,  64 => 5,  61 => 4,  52 => 3,  22 => 1,);
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
        <h1 class=\"text-center\" id=\"user\">{{ 'User list'|trans }}</h1>


        <div class=\"container\">
            <h2>{{ 'Administrator'|trans }}</h2>
            {% for user in users if 'ROLE_ADMIN' in user.roles %}

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
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
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
            {% endfor %}

            <h2>{{ 'Project manager'|trans }}</h2>
            {% for user in users if 'ROLE_CHIEF' in user.roles and 'ROLE_ADMIN' not in user.roles %}

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
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
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
            {% endfor %}

            <h2>{{ 'Developer'|trans }}</h2>
            {% for user in users if 'ROLE_DEV' in user.roles and 'ROLE_ADMIN' not in user.roles
                                                            and 'ROLE_CHIEF' not in user.roles %}

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
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
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
            {% endfor %}

            <h2>{{ 'OTHER'|trans }}</h2>
            {% for user in users if 'ROLE_USER' in user.roles
                                                and 'ROLE_ADMIN' not in user.roles
                                                and 'ROLE_DEV' not in user.roles
                                                and 'ROLE_CHIEF' not in user.roles %}

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
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.nomP }}</a>
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
            {% endfor %}

        </div>
    </div>

    <div class=\"col-lg-12 text-center\">

        <a href=\"{{ path('fos_user_registration_register') }}\"  role=\"button\"  class=\"btn btn-lg btn-info \">{{'Create a new user'|trans}}</a>
    </div>

{% endblock %}


{% block stylesheets %}
    <style>
        #ligne{background-color: #868686}



    </style>
{% endblock %}

", "user/index.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/user/index.html.twig");
    }
}
