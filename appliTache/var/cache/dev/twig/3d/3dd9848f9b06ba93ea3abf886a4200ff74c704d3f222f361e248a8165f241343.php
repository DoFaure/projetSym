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

/* base.html.twig */
class __TwigTemplate_8bc47115be7aa1775b3756e0daa83d0c55d5349c5d338de5203afbbb7038d694 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html  lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("checklist.png"), "html", null, true);
        echo "\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF"))) {
            // line 22
            echo "            ";
            $context["navColor"] = "navbar-dark bg-dark";
            // line 23
            echo "            ";
            $context["navtext"] = "text-white";
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "            ";
            $context["navColor"] = "navbar-light bg-light";
            // line 26
            echo "            ";
            $context["navtext"] = "text-black";
            // line 27
            echo "        ";
        }
        // line 28
        echo "

        ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "        <nav class=\"navbar navbar-expand-lg ";
            echo twig_escape_filter($this->env, ($context["navColor"] ?? $this->getContext($context, "navColor")), "html", null, true);
            echo " \">
            <a class=\"navbar-brand\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">AppliTache</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav \">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link ";
            // line 39
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
                            <i class=\"fas fa-home\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>



                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 48
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-project-diagram\"></i>
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                            <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a>

                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 59
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-tasks\"></i>
                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                            <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                        <!--    <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a> -->
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 69
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-users\"></i>
                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                            <a class=\"dropdown-item\" href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_dev_available");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer available"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_manager_available");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project Manager available"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"#\" class=\" nav-link dropdown-toggle ";
            // line 97
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" data-toggle=\"dropdown\" id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"far fa-user\"></i>
                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account"), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                        <a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change Password"), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a>
                    </div>
                </li>
            </ul>
        </nav>
        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CHIEF")) {
            // line 110
            echo "            <nav class=\"navbar navbar-expand-lg ";
            echo twig_escape_filter($this->env, ($context["navColor"] ?? $this->getContext($context, "navColor")), "html", null, true);
            echo "\">
                <a class=\"navbar-brand\" href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link ";
            // line 118
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
                                <i class=\"fas fa-home\"></i>
                                ";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ";
            // line 124
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-project-diagram\"></i>
                                ";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ";
            // line 134
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-tasks\"></i>
                                ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                        <!--    <a class=\"dropdown-item\" href=\"";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a> -->
                            </div>
                        </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 144
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-users\"></i>
                            ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                            <a class=\"dropdown-item\" href=\"";
            // line 149
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_dev_available");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer available"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_manager_available");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project Manager available"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 164
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 171
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"far fa-user\"></i>
                            ";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"";
            // line 176
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change Password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 178
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                </ul>
            </nav>
        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DEV")) {
            // line 184
            echo "            <nav class=\"navbar navbar-expand-lg ";
            echo twig_escape_filter($this->env, ($context["navColor"] ?? $this->getContext($context, "navColor")), "html", null, true);
            echo "\">
                <a class=\"navbar-brand\" href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link ";
            // line 192
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
                                <i class=\"fas fa-home\"></i>
                                ";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ";
            // line 198
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-project-diagram\"></i>
                                ";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"";
            // line 203
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ";
            // line 207
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-tasks\"></i>
                                ";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"";
            // line 212
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                                <!--    <a class=\"dropdown-item\" href=\"";
            // line 213
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a> -->
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ";
            // line 217
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-users\"></i>
                                ";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                                <a class=\"dropdown-item\" href=\"";
            // line 222
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_dev_available");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Developer available"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_manager_available");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project Manager available"), "html", null, true);
            echo "</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 230
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 244
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"far fa-user\"></i>
                            ";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 250
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 251
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                </ul>
            </nav>
        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 257
            echo "            <nav class=\"navbar navbar-expand-lg ";
            echo twig_escape_filter($this->env, ($context["navColor"] ?? $this->getContext($context, "navColor")), "html", null, true);
            echo "\">
                <a class=\"navbar-brand\" href=\"";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link ";
            // line 265
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
                                <i class=\"fas fa-home\"></i>
                                ";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>

                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 275
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 281
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle ";
            // line 288
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"far fa-user\"></i>
                            ";
            // line 290
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"";
            // line 293
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 294
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 295
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                </ul>
            </nav>
        ";
        } else {
            // line 301
            echo "            <nav class=\"navbar navbar-expand-lg ";
            echo twig_escape_filter($this->env, ($context["navColor"] ?? $this->getContext($context, "navColor")), "html", null, true);
            echo "\">
                <a class=\"navbar-brand\" href=\"";
            // line 302
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 308
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link ";
            echo twig_escape_filter($this->env, ($context["navtext"] ?? $this->getContext($context, "navtext")), "html", null, true);
            echo "\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 316
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
            </nav>
        ";
        }
        // line 322
        echo "    </head>
    <body>
        ";
        // line 324
        $this->displayBlock('body', $context, $blocks);
        // line 325
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 326
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task Application"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <style>
                .dropdown-menu-right {
                    float: right;
                }
                #navbarDropdownProfile {
                    float: right;
                }

            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 324
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 325
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  843 => 325,  826 => 324,  807 => 10,  798 => 9,  780 => 8,  765 => 326,  762 => 325,  760 => 324,  756 => 322,  747 => 316,  741 => 315,  732 => 309,  726 => 308,  717 => 302,  712 => 301,  701 => 295,  695 => 294,  689 => 293,  683 => 290,  678 => 288,  669 => 282,  663 => 281,  654 => 275,  648 => 274,  638 => 267,  631 => 265,  621 => 258,  616 => 257,  605 => 251,  599 => 250,  593 => 249,  587 => 246,  582 => 244,  573 => 238,  567 => 237,  558 => 231,  552 => 230,  540 => 223,  534 => 222,  528 => 219,  523 => 217,  514 => 213,  508 => 212,  502 => 209,  497 => 207,  488 => 203,  482 => 200,  477 => 198,  470 => 194,  463 => 192,  453 => 185,  448 => 184,  437 => 178,  431 => 177,  425 => 176,  419 => 173,  414 => 171,  405 => 165,  399 => 164,  390 => 158,  384 => 157,  372 => 150,  366 => 149,  360 => 146,  355 => 144,  346 => 140,  340 => 139,  334 => 136,  329 => 134,  320 => 130,  314 => 129,  308 => 126,  303 => 124,  296 => 120,  289 => 118,  279 => 111,  274 => 110,  263 => 104,  257 => 103,  251 => 102,  245 => 99,  240 => 97,  231 => 91,  225 => 90,  216 => 84,  210 => 83,  198 => 76,  192 => 75,  186 => 74,  180 => 71,  175 => 69,  166 => 65,  160 => 64,  154 => 61,  149 => 59,  139 => 54,  133 => 53,  127 => 50,  122 => 48,  112 => 41,  105 => 39,  95 => 32,  90 => 31,  88 => 30,  84 => 28,  81 => 27,  78 => 26,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  64 => 21,  61 => 20,  59 => 9,  55 => 8,  51 => 7,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html  lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('checklist.png') }}\" />
        <title>{% block title %}{{ 'Task Application'|trans }}{% endblock %}</title>
        {% block stylesheets %}
            <style>
                .dropdown-menu-right {
                    float: right;
                }
                #navbarDropdownProfile {
                    float: right;
                }

            </style>
        {% endblock %}

        {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_CHIEF\")  %}
            {% set navColor='navbar-dark bg-dark' %}
            {% set navtext='text-white' %}
        {% else %}
            {% set navColor='navbar-light bg-light' %}
            {% set navtext='text-black' %}
        {% endif %}


        {% if is_granted(\"ROLE_ADMIN\") %}
        <nav class=\"navbar navbar-expand-lg {{ navColor }} \">
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">AppliTache</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav \">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link {{ navtext }}\" href=\"{{ path('homepage') }}\">
                            <i class=\"fas fa-home\"></i>
                            {{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>



                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-project-diagram\"></i>
                            {{ 'Projects'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                            <a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('project_new',  { 'id': app.user.id } ) }}\">{{ 'Add'|trans }}</a>

                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-tasks\"></i>
                            {{ 'Tasks'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                            <a class=\"dropdown-item\" href=\"{{ path('task_index') }}\">{{ 'Show'|trans }}</a>
                        <!--    <a class=\"dropdown-item\" href=\"{{ path('task_new') }}\">{{ 'Add'|trans }}</a> -->
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-users\"></i>
                            {{ 'Users'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                            <a class=\"dropdown-item\" href=\"{{ path('user_index') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('user_dev_available') }}\">{{ 'Developer available'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('user_manager_available') }}\">{{ 'Project Manager available'|trans }}</a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ 'English'|trans }}
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ 'French'|trans }}
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"#\" class=\" nav-link dropdown-toggle {{ navtext }}\" data-toggle=\"dropdown\" id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"far fa-user\"></i>
                        {{ 'Account'|trans }}
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                        <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">{{ 'Change Password'|trans }}</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">{{ 'Show'|trans }}</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a>
                    </div>
                </li>
            </ul>
        </nav>
        {% elseif is_granted(\"ROLE_CHIEF\") %}
            <nav class=\"navbar navbar-expand-lg {{ navColor }}\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link {{ navtext }}\" href=\"{{ path('homepage') }}\">
                                <i class=\"fas fa-home\"></i>
                                {{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-project-diagram\"></i>
                                {{ 'Projects'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">{{ 'Show'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('project_new',  { 'id': app.user.id } ) }}\">{{ 'Add'|trans }}</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-tasks\"></i>
                                {{ 'Tasks'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"{{ path('task_index') }}\">{{ 'Show'|trans }}</a>
                        <!--    <a class=\"dropdown-item\" href=\"{{ path('task_new') }}\">{{ 'Add'|trans }}</a> -->
                            </div>
                        </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-users\"></i>
                            {{ 'Users'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                            <a class=\"dropdown-item\" href=\"{{ path('user_dev_available') }}\">{{ 'Developer available'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('user_manager_available') }}\">{{ 'Project Manager available'|trans }}</a>
                        </div>
                    </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"far fa-user\"></i>
                            {{ 'Account'|trans }}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">{{ 'Change Password'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a>
                        </div>
                    </li>
                </ul>
            </nav>
        {% elseif is_granted(\"ROLE_DEV\") %}
            <nav class=\"navbar navbar-expand-lg {{ navColor }}\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link {{ navtext }}\" href=\"{{ path('homepage') }}\">
                                <i class=\"fas fa-home\"></i>
                                {{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-project-diagram\"></i>
                                {{ 'Projects'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">{{ 'Show'|trans }}</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-tasks\"></i>
                                {{ 'Tasks'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"{{ path('task_index') }}\">{{ 'Show'|trans }}</a>
                                <!--    <a class=\"dropdown-item\" href=\"{{ path('task_new') }}\">{{ 'Add'|trans }}</a> -->
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-users\"></i>
                                {{ 'Users'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                                <a class=\"dropdown-item\" href=\"{{ path('user_dev_available') }}\">{{ 'Developer available'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('user_manager_available') }}\">{{ 'Project Manager available'|trans }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"far fa-user\"></i>
                            {{ 'Account'|trans }}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">{{ 'Change password'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a>
                        </div>
                    </li>
                </ul>
            </nav>
        {% elseif is_granted(\"ROLE_USER\") %}
            <nav class=\"navbar navbar-expand-lg {{ navColor }}\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link {{ navtext }}\" href=\"{{ path('homepage') }}\">
                                <i class=\"fas fa-home\"></i>
                                {{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>

                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle {{ navtext }}\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"far fa-user\"></i>
                            {{ 'Account'|trans }}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">{{ 'Change password'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a>
                        </div>
                    </li>
                </ul>
            </nav>
        {% else %}
            <nav class=\"navbar navbar-expand-lg {{ navColor }}\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link {{ navtext }}\"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
            </nav>
        {% endif %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/base.html.twig");
    }
}
