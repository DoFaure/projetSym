<?php

/* project/show.html.twig */
class __TwigTemplate_520f58a8175eacd32d52595ab3030a7e48d1d4253ba78385ef64581c09a816b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomp</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "nomP", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionp</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "descriptionP", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebutp</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateDebutP", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datefinp</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "dateFinP", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etatp</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "etatP", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomclient</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "nomClient", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idchefp</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "idChefP", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taches</th>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "taches", []));
        foreach ($context['_seq'] as $context["_key"] => $context["Task"]) {
            // line 43
            echo "                    <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $context["Task"]);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", ["id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
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
        return array (  155 => 59,  150 => 57,  144 => 54,  138 => 51,  130 => 45,  121 => 43,  117 => 42,  110 => 38,  103 => 34,  96 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Project</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ project.id }}</td>
            </tr>
            <tr>
                <th>Nomp</th>
                <td>{{ project.nomP }}</td>
            </tr>
            <tr>
                <th>Descriptionp</th>
                <td>{{ project.descriptionP }}</td>
            </tr>
            <tr>
                <th>Datedebutp</th>
                <td>{% if project.dateDebutP %}{{ project.dateDebutP|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datefinp</th>
                <td>{% if project.dateFinP %}{{ project.dateFinP|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Etatp</th>
                <td>{{ project.etatP }}</td>
            </tr>
            <tr>
                <th>Nomclient</th>
                <td>{{ project.nomClient }}</td>
            </tr>
            <tr>
                <th>Idchefp</th>
                <td>{{ project.idChefP }}</td>
            </tr>
            <tr>
                <th>Taches</th>
                {%  for Task in project.taches %}
                    <td>{{ dump(Task) }}</td>
                {% endfor %}
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('project_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('project_edit', { 'id': project.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "project/show.html.twig", "/home/vagrant/code/appliTache/app/Resources/views/project/show.html.twig");
    }
}
