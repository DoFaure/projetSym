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

/* project/edit.html.twig */
class __TwigTemplate_a17461b4825b599c32fe5fb33f953c8b9586eec068634f0646272c811e4efd42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

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


    <div id=\"wrapper\">
        <div id=\"container\">
            <div class=\"col-lg-12 text-center\">
                <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Project edit"), "html", null, true);
        echo "</h1>
                <br>
                <div class=\"form-group\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomP", []), 'row');
        echo " </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">   ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descriptionP", []), 'row');
        echo " </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">  ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dateDebutP", []), 'row');
        echo " </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\"> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dateFinP", []), 'row');
        echo " </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\"> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etatP", []), 'row');
        echo " </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomClient", []), 'row');
        echo "</div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-lg-12\"> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "idChefP", []), 'row');
        echo "</div>
                    </div>
                    <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "\" />
                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
                </div>
            </div>
            <div class=\"col-lg-12 text-center\">
                <ul>
                    <a class=\"btn btn-info\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
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
        return "project/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  124 => 36,  120 => 35,  115 => 33,  109 => 30,  103 => 27,  97 => 24,  91 => 21,  85 => 18,  79 => 15,  74 => 13,  68 => 10,  60 => 4,  51 => 3,  22 => 1,);
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
                <h1>{{ 'Project edit'|trans }}</h1>
                <br>
                <div class=\"form-group\">
                    {{ form_start(edit_form) }}
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">{{ form_row(edit_form.nomP) }} </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">   {{ form_row(edit_form.descriptionP) }} </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">  {{ form_row(edit_form.dateDebutP) }} </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\"> {{ form_row(edit_form.dateFinP) }} </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\"> {{ form_row(edit_form.etatP) }} </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-sm-12\">  {{ form_row(edit_form.nomClient) }}</div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-lg-12\"> {{ form_row(edit_form.idChefP) }}</div>
                    </div>
                    <input type=\"submit\" class=\"btn btn-success\" value=\"{{ 'Edit'|trans }}\" />
                    {{ form_end(edit_form) }}
                </div>
            </div>
            <div class=\"col-lg-12 text-center\">
                <ul>
                    <a class=\"btn btn-info\" href=\"{{ path('project_index') }}\">{{'Back to the list'|trans}}</a>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}


", "project/edit.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/edit.html.twig");
    }
}
