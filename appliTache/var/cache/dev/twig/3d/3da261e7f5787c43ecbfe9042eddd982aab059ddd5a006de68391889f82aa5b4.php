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

/* task/edit.html.twig */
class __TwigTemplate_84c3914a0cbbb1b624642b50fd8bfa2b9e077fe6d17f8254fbbb8db2dd3bd75a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

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
        echo "<div id=\"wrapper\">
    <div id=\"container\">
        <div class=\"col-lg-12 text-center\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task edit"), "html", null, true);
        echo "</h1>
            <br>
            <div class=\"form-group\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomT", []), 'row');
        echo " </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\">   ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descriptionT", []), 'row');
        echo " </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\">  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dateDebutT", []), 'row');
        echo " </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\"> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dateFinT", []), 'row');
        echo " </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\"> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etatT", []), 'row');
        echo " </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\"> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "idDevT", []), 'row');
        echo "</div>
                </div>
                <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "\" />
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-lg-12 text-center\">
            <ul>
                <a class=\"btn btn-info\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  115 => 30,  111 => 29,  106 => 27,  100 => 24,  94 => 21,  88 => 18,  82 => 15,  76 => 12,  71 => 10,  65 => 7,  60 => 4,  51 => 3,  22 => 1,);
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
<div id=\"wrapper\">
    <div id=\"container\">
        <div class=\"col-lg-12 text-center\">
            <h1>{{ 'Task edit'|trans }}</h1>
            <br>
            <div class=\"form-group\">
                {{ form_start(edit_form) }}
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\">{{ form_row(edit_form.nomT) }} </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\">   {{ form_row(edit_form.descriptionT) }} </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\">  {{ form_row(edit_form.dateDebutT) }} </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\"> {{ form_row(edit_form.dateFinT) }} </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\"> {{ form_row(edit_form.etatT) }} </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12\"> {{ form_row(edit_form.idDevT) }}</div>
                </div>
                <input type=\"submit\" class=\"btn btn-success\" value=\"{{ 'Edit'|trans }}\" />
                {{ form_end(edit_form) }}
            </div>
        </div>
        <div class=\"col-lg-12 text-center\">
            <ul>
                <a class=\"btn btn-info\" href=\"{{ path('task_index') }}\">{{'Back to the list'|trans}}</a>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "task/edit.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/task/edit.html.twig");
    }
}
