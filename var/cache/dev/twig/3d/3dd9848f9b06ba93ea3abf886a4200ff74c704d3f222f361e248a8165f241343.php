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
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("checklist.png"), "html", null, true);
        echo "\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                            <a class=\"dropdown-item\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                            <a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                        <!--    <a class=\"dropdown-item\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a> -->
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownStats\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stats"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownStats\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                            <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"#\" class=\" nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       <span class=\"glyphicon glyphicon-user\"></span>  ";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                        <a class=\"dropdown-item\" href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change Password"), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 94
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
            // line 100
            echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                        <!--    <a class=\"dropdown-item\" href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a> -->
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownStats\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stats"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownStats\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"";
            // line 161
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change Password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 163
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
            // line 169
            echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task"), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                                <!--    <a class=\"dropdown-item\" href=\"";
            // line 194
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
            echo "</a> -->
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownStats\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Stats
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownStats\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 211
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 218
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"";
            // line 229
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 230
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 231
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
            // line 237
            echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 245
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>

                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 252
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 253
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                            <a class=\"dropdown-item\" href=\"";
            // line 270
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 271
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 272
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
            // line 278
            echo "            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 286
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo "<span class=\"sr-only\">(current)</span></a>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "en"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"";
            // line 299
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", ["_locale" => "fr"]);
            echo "\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 300
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>

            </nav>
        ";
        }
        // line 307
        echo "    </head>
    <body>
        ";
        // line 309
        $this->displayBlock('body', $context, $blocks);
        // line 310
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 311
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
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

    // line 309
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 310
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
        return array (  695 => 310,  678 => 309,  659 => 9,  650 => 8,  632 => 7,  617 => 311,  614 => 310,  612 => 309,  608 => 307,  598 => 300,  594 => 299,  585 => 293,  581 => 292,  570 => 286,  560 => 278,  549 => 272,  543 => 271,  537 => 270,  531 => 267,  521 => 260,  517 => 259,  508 => 253,  504 => 252,  492 => 245,  482 => 237,  471 => 231,  465 => 230,  459 => 229,  453 => 226,  443 => 219,  439 => 218,  430 => 212,  426 => 211,  404 => 194,  398 => 193,  392 => 190,  382 => 185,  376 => 182,  366 => 177,  356 => 169,  345 => 163,  339 => 162,  333 => 161,  327 => 158,  317 => 151,  313 => 150,  304 => 144,  300 => 143,  285 => 131,  275 => 126,  269 => 125,  263 => 122,  253 => 117,  247 => 116,  241 => 113,  231 => 108,  221 => 100,  210 => 94,  204 => 93,  198 => 92,  192 => 89,  182 => 82,  178 => 81,  169 => 75,  165 => 74,  154 => 66,  148 => 65,  142 => 62,  129 => 52,  119 => 47,  113 => 46,  107 => 43,  97 => 38,  91 => 37,  85 => 34,  75 => 29,  65 => 21,  63 => 20,  60 => 19,  58 => 8,  54 => 7,  50 => 6,  43 => 2,  40 => 1,);
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

        {% if is_granted(\"ROLE_ADMIN\") %}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">{{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Project'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                            <a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('project_new') }}\">{{ 'Add'|trans }}</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Task'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                            <a class=\"dropdown-item\" href=\"{{ path('task_index') }}\">{{ 'Show'|trans }}</a>
                        <!--    <a class=\"dropdown-item\" href=\"{{ path('task_new') }}\">{{ 'Add'|trans }}</a> -->
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownStats\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Stats'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownStats\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownUser\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'User'|trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownUser\">
                            <a class=\"dropdown-item\" href=\"{{ path('user_index') }}\">{{ 'Show'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"\">{{ 'Add'|trans }}</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ 'English'|trans }}
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ 'French'|trans }}
                    </a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown dropdown-menu-right\">
                    <a href=\"#\" class=\" nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       <span class=\"glyphicon glyphicon-user\"></span>  {{ 'Profile'|trans }}
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
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">{{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'Project'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">{{ 'Show'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('project_new') }}\">{{ 'Add'|trans }}</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'Task'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"{{ path('task_index') }}\">{{ 'Show'|trans }}</a>
                        <!--    <a class=\"dropdown-item\" href=\"{{ path('task_new') }}\">{{ 'Add'|trans }}</a> -->
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownStats\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'Stats'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownStats\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Profile'|trans }}
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
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">{{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProject\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'Project'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownProject\">
                                <a class=\"dropdown-item\" href=\"{{ path('project_index') }}\">{{ 'Show'|trans }}</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTask\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'Task'|trans }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTask\">
                                <a class=\"dropdown-item\" href=\"{{ path('task_index') }}\">{{ 'Show'|trans }}</a>
                                <!--    <a class=\"dropdown-item\" href=\"{{ path('task_new') }}\">{{ 'Add'|trans }}</a> -->
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownStats\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Stats
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownStats\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Profile'|trans }}
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
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">{{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>

                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'French'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownProfile\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Profile'|trans }}
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
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"#\">AppliTache</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">{{ 'Home'|trans }}<span class=\"sr-only\">(current)</span></a>
                        </li>
                    </ul>
                </div>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'en'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'English'|trans }}
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown dropdown-menu-right\">
                        <a href=\"{{ path('homepage', {'_locale':'fr'}) }}\" class=\" nav-link \"  id=\"navbarDropdownProfile\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
