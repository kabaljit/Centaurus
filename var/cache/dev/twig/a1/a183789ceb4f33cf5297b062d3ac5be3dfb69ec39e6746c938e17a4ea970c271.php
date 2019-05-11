<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* worklog/edit.html.twig */
class __TwigTemplate_dd6a28f3acbaddda7d3ccba0e61284db65355c5689bfb896d2ef645837c298b2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "worklog/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "worklog/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin-layout.html.twig", "worklog/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Worklog!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"timesheet-worklog\" id=\"new-worklog\" style=\"margin-top: 2%; ";
        echo " display: none; ";
        echo "\">
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Issue</th>
            <th scope=\"col\">Start</th>
            <th scope=\"col\">End</th>
            <th scope=\"col\">Duration</th>
            <th scope=\"col\">Description</th>
        </tr>
        </thead>
        <tbody class=\"worklogs\" data-prototype=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "worklogs", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "prototype", [], "any", false, false, false, 17), 'widget'), "html_attr");
        echo "\">
        <tr><td></td></tr>
        <tr >
            <td>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["worklog"]) || array_key_exists("worklog", $context) ? $context["worklog"] : (function () { throw new RuntimeError('Variable "worklog" does not exist.', 21, $this->source); })()), "issue", [], "any", false, false, false, 21), 'row');
        echo "
            </td>
            <td>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["worklog"]) || array_key_exists("worklog", $context) ? $context["worklog"] : (function () { throw new RuntimeError('Variable "worklog" does not exist.', 24, $this->source); })()), "start", [], "any", false, false, false, 24), 'row');
        echo "
            </td>
            <td>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["worklog"]) || array_key_exists("worklog", $context) ? $context["worklog"] : (function () { throw new RuntimeError('Variable "worklog" does not exist.', 27, $this->source); })()), "end", [], "any", false, false, false, 27), 'row');
        echo "
            </td>
            <td>
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["worklog"]) || array_key_exists("worklog", $context) ? $context["worklog"] : (function () { throw new RuntimeError('Variable "worklog" does not exist.', 30, $this->source); })()), "duration", [], "any", false, false, false, 30), 'row');
        echo "
            </td>
            <td>
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["worklog"]) || array_key_exists("worklog", $context) ? $context["worklog"] : (function () { throw new RuntimeError('Variable "worklog" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'row');
        echo "
            </td>

        </tr>
        </tbody>
    </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "worklog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  124 => 30,  118 => 27,  112 => 24,  106 => 21,  99 => 17,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin-layout.html.twig' %}

{% block title %}Edit Worklog!{% endblock %}

{% block body %}
<div class=\"timesheet-worklog\" id=\"new-worklog\" style=\"margin-top: 2%; {#% if editId %} {% else %#} display: none; {#% endif %#}\">
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Issue</th>
            <th scope=\"col\">Start</th>
            <th scope=\"col\">End</th>
            <th scope=\"col\">Duration</th>
            <th scope=\"col\">Description</th>
        </tr>
        </thead>
        <tbody class=\"worklogs\" data-prototype=\"{{ form_widget(form.worklogs.vars.prototype)|e('html_attr') }}\">
        <tr><td></td></tr>
        <tr >
            <td>
                {{ form_row(worklog.issue) }}
            </td>
            <td>
                {{ form_row(worklog.start) }}
            </td>
            <td>
                {{ form_row(worklog.end) }}
            </td>
            <td>
                {{ form_row(worklog.duration) }}
            </td>
            <td>
                {{ form_row(worklog.description) }}
            </td>

        </tr>
        </tbody>
    </table>
</div>

{% endblock %}
", "worklog/edit.html.twig", "/Users/kabaljit/Documents/htdocs /web/uni/centaurus/templates/worklog/edit.html.twig");
    }
}
