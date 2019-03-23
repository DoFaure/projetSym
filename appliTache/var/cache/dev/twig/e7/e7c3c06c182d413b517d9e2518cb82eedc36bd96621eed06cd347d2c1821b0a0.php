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

/* user/managerAvailable.html.twig */
class __TwigTemplate_049c6e898615edefaa53f121671ee32ccc172846bee9dc2368e6b1644e426c3d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/managerAvailable.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/managerAvailable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/managerAvailable.html.twig"));

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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project Manager available"), "html", null, true);
        echo "</h1>
        <div class=\"container\">
            <div>
                <table class=\"table\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">";
        // line 14
        echo "Username";
        echo "</th>
                            <th scope=\"col\">";
        // line 15
        echo "Email";
        echo "</th>
                            <th scope=\"col\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Firstname"), "html", null, true);
        echo "</th>
                            <th scope=\"col\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lastname"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((twig_in_filter("ROLE_CHIEF", $this->getAttribute($context["user"], "roles", [])) && !twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", [])))) {
                // line 22
                echo "                    ";
                if (twig_test_empty($this->getAttribute($context["user"], "projetU", []))) {
                    // line 23
                    echo "



                                <tr>
                                    <th scope=\"row\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", []), "html", null, true);
                    echo "</th>
                                    <td>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", []), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", []), "html", null, true);
                    echo "</td>

                                </tr>



                ";
                }
                // line 39
                echo "           ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/managerAvailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  135 => 39,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  102 => 23,  99 => 22,  94 => 21,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  65 => 7,  60 => 4,  51 => 3,  22 => 1,);
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

        <h1 class=\"text-center\" id=\"project\">{{ 'Project Manager available'|trans }}</h1>
        <div class=\"container\">
            <div>
                <table class=\"table\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">{{ \"Username\" }}</th>
                            <th scope=\"col\">{{ 'Email' }}</th>
                            <th scope=\"col\">{{ 'Firstname'|trans }}</th>
                            <th scope=\"col\">{{ 'Lastname'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users if 'ROLE_CHIEF' in user.roles and 'ROLE_ADMIN' not in user.roles %}
                    {% if user.projetU is empty %}




                                <tr>
                                    <th scope=\"row\">{{ user.id }}</th>
                                    <td>{{ user.username }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.firstname }}</td>
                                    <td>{{ user.lastname }}</td>

                                </tr>



                {% endif %}
           {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "user/managerAvailable.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/user/managerAvailable.html.twig");
    }
}
