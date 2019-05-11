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

/* timesheet/timesheet.html.twig */
class __TwigTemplate_f58e0ef931c3c68469fb3ef66d2aaf57c33fdd6aa9b03214577b9a6cdda7b29c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "admin-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/timesheet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/timesheet.html.twig"));

        $this->parent = $this->loadTemplate("admin-layout.html.twig", "timesheet/timesheet.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"main-content\">  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

            <div style=\"margin-top: 10px;\">
                <div class=\"timesheet-dating\">
                    <input type=\"date\" id=\"input-timesheetDate\">
                    <span>
                           ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["timesheet"]) || array_key_exists("timesheet", $context) ? $context["timesheet"] : (function () { throw new RuntimeError('Variable "timesheet" does not exist.', 14, $this->source); })()), "hoursWorked", [], "any", false, false, false, 14), "html", null, true);
        echo " /8 HR
                        </span>
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\"
                             style=\"width:";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["timesheet"]) || array_key_exists("timesheet", $context) ? $context["timesheet"] : (function () { throw new RuntimeError('Variable "timesheet" does not exist.', 18, $this->source); })()), "hoursWorked", [], "any", false, false, false, 18) / 8) * 100), "html", null, true);
        echo "%;\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["timesheet"]) || array_key_exists("timesheet", $context) ? $context["timesheet"] : (function () { throw new RuntimeError('Variable "timesheet" does not exist.', 18, $this->source); })()), "hoursWorked", [], "any", false, false, false, 18) / 8) * 100), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                </div>
                <div class=\"timesheet-switch\">
                    <button class=\"btn btn-info\" >Switch to approver </button>
                </div>
            </div>

            <div class=\"timesheet-worklog\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Issue</th>
                        <th scope=\"col\">Start</th>
                        <th scope=\"col\">End</th>
                        <th scope=\"col\">Duration</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["saveWorklogs"]) || array_key_exists("saveWorklogs", $context) ? $context["saveWorklogs"] : (function () { throw new RuntimeError('Variable "saveWorklogs" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 40
            echo "                        <tr id=\"worklog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                            <td id=\"worklog-";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "-issue\" name=\"worklog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "-issue\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "issue", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td id=\"worklog-";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "-start\" name=\"worklog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "-start\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "start", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td id=\"worklog-";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "-end\" name=\"worklog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "-end\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "end", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td id=\"worklog-";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "-duration\" name=\"worklog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "-duration\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "duration", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td id=\"worklog-";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "-description\" name=\"worklog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "-description\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"timesheet-action\">
                                            <span>
                                              <a href=\"/editWorklog/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">  <i onclick=\"/editWorklog/ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Edit\" class=\"fas fa-pencil-alt\"></i></a>
                                            </span>
                                    <span>
                                                <i id=\"removeWorklog\" onclick=\"removeWorklog(";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "timesheet", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo ")\" data-timesheet=\"work\" data-toggle=\"tooltip\" title=\"Remove\" class=\"fas fa-trash\"></i>
                                            </span>
                                    <span>
                                                <i onclick=\"copyWorklog(";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo ")\" data-toggle=\"tooltip\" title=\"Copy\" class=\"fas fa-copy\"></i>
                                            </span>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "

                    </tbody>
                </table>

                <button onclick=\"newWorklog()\" type=\"button\" class=\"btn add_tag_link btn-secondary\">Add new worklog</button>

            </div>

            <div class=\"timesheet-newWorklog\" id=\"new-worklog\" style=\"margin-top: 2%; ";
        // line 70
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
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody class=\"worklogs\" data-prototype=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "worklogs", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "prototype", [], "any", false, false, false, 82), 'widget'), "html_attr");
        echo "\">
    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "worklogs", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["worklog"]) {
            // line 84
            echo "        ";
            if (false) {
                // line 85
                echo "                    <tr >
                        <td>
                            ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "issue", [], "any", false, false, false, 87), 'row');
                echo "
                        </td>
                        <td>
                            ";
                // line 90
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "start", [], "any", false, false, false, 90), 'row');
                echo "
                        </td>
                        <td>
                            ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "end", [], "any", false, false, false, 93), 'row');
                echo "
                        </td>
                        <td>
                            ";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "duration", [], "any", false, false, false, 96), 'row');
                echo "
                        </td>
                        <td>
                            ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "description", [], "any", false, false, false, 99), 'row');
                echo "
                        </td>
                        <td>
                            <div class=\"timesheet-action\">
                                <span>
                                    <i onclick=\"addWorklog()\" data-toggle=\"tooltip\" title=\"Add to logged\" class=\"fas fa-plus-square\"></i>
                                </span>
                            </div>
                        </td>
                    </tr>
          ";
            } else {
                // line 110
                echo "            <tr style=\"display: none\" class=\"form-worklog-\">
                <td >
                    ";
                // line 112
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "issue", [], "any", false, false, false, 112), 'row');
                echo "
                </td>
                <td>
                    ";
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "start", [], "any", false, false, false, 115), 'row');
                echo "
                </td>
                <td>
                    ";
                // line 118
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "end", [], "any", false, false, false, 118), 'row');
                echo "
                </td>
                <td>
                    ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "duration", [], "any", false, false, false, 121), 'row');
                echo "
                </td>
                <td>
                    ";
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["worklog"], "description", [], "any", false, false, false, 124), 'row');
                echo "
                </td>
                <td>
                    <div class=\"timesheet-action\">
                                    <span>
                                        <i onclick=\"addWorklog()\" data-toggle=\"tooltip\" title=\"Add to logged\" class=\"fas fa-plus-square\"></i>
                                    </span>
                    </div>
                </td>
            </tr>
        ";
            }
            // line 135
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worklog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                    </tbody>
                </table>

            </div>

            <div class=\"submit-worklog\">
                <input type=\"submit\" class=\"btn btn-info\">
            </div>
    ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        echo "

    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "<script>

";
        // line 159
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "timesheet/timesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 159,  375 => 156,  366 => 155,  348 => 145,  337 => 136,  331 => 135,  317 => 124,  311 => 121,  305 => 118,  299 => 115,  293 => 112,  289 => 110,  275 => 99,  269 => 96,  263 => 93,  257 => 90,  251 => 87,  247 => 85,  244 => 84,  240 => 83,  236 => 82,  221 => 70,  210 => 61,  198 => 55,  190 => 52,  182 => 49,  171 => 45,  163 => 44,  155 => 43,  147 => 42,  139 => 41,  134 => 40,  130 => 39,  104 => 18,  97 => 14,  88 => 8,  85 => 7,  76 => 6,  58 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'admin-layout.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}

    <div class=\"main-content\">  {{ form_start(form) }}

            <div style=\"margin-top: 10px;\">
                <div class=\"timesheet-dating\">
                    <input type=\"date\" id=\"input-timesheetDate\">
                    <span>
                           {{ timesheet.hoursWorked }} /8 HR
                        </span>
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\"
                             style=\"width:{{ (timesheet.hoursWorked /8)*100  }}%;\" aria-valuenow=\"{{ (timesheet.hoursWorked /8)*100  }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                </div>
                <div class=\"timesheet-switch\">
                    <button class=\"btn btn-info\" >Switch to approver </button>
                </div>
            </div>

            <div class=\"timesheet-worklog\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Issue</th>
                        <th scope=\"col\">Start</th>
                        <th scope=\"col\">End</th>
                        <th scope=\"col\">Duration</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for work  in saveWorklogs %}
                        <tr id=\"worklog-{{ work.id }}\">
                            <td id=\"worklog-{{ work.id }}-issue\" name=\"worklog-{{ work.id }}-issue\">{{ work.issue }}</td>
                            <td id=\"worklog-{{ work.id }}-start\" name=\"worklog-{{ work.id }}-start\">{{ work.start }}</td>
                            <td id=\"worklog-{{ work.id }}-end\" name=\"worklog-{{ work.id }}-end\">{{ work.end }}</td>
                            <td id=\"worklog-{{ work.id }}-duration\" name=\"worklog-{{ work.id }}-duration\">{{ work.duration }}</td>
                            <td id=\"worklog-{{ work.id }}-description\" name=\"worklog-{{ work.id }}-description\">{{ work.description}}</td>
                            <td>
                                <div class=\"timesheet-action\">
                                            <span>
                                              <a href=\"/editWorklog/{{ work.id }}\">  <i onclick=\"/editWorklog/ {{ work.id }}\" data-toggle=\"tooltip\" title=\"Edit\" class=\"fas fa-pencil-alt\"></i></a>
                                            </span>
                                    <span>
                                                <i id=\"removeWorklog\" onclick=\"removeWorklog({{ work.timesheet.id }}, {{ work.id  }})\" data-timesheet=\"work\" data-toggle=\"tooltip\" title=\"Remove\" class=\"fas fa-trash\"></i>
                                            </span>
                                    <span>
                                                <i onclick=\"copyWorklog({{ work.id }})\" data-toggle=\"tooltip\" title=\"Copy\" class=\"fas fa-copy\"></i>
                                            </span>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}


                    </tbody>
                </table>

                <button onclick=\"newWorklog()\" type=\"button\" class=\"btn add_tag_link btn-secondary\">Add new worklog</button>

            </div>

            <div class=\"timesheet-newWorklog\" id=\"new-worklog\" style=\"margin-top: 2%; {#% if editId %} {% else %#} display: none; {#% endif %#}\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Issue</th>
                        <th scope=\"col\">Start</th>
                        <th scope=\"col\">End</th>
                        <th scope=\"col\">Duration</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody class=\"worklogs\" data-prototype=\"{{ form_widget(form.worklogs.vars.prototype)|e('html_attr') }}\">
    {% for worklog in form.worklogs %}
        {% if false %}
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
                        <td>
                            <div class=\"timesheet-action\">
                                <span>
                                    <i onclick=\"addWorklog()\" data-toggle=\"tooltip\" title=\"Add to logged\" class=\"fas fa-plus-square\"></i>
                                </span>
                            </div>
                        </td>
                    </tr>
          {% else %}
            <tr style=\"display: none\" class=\"form-worklog-\">
                <td >
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
                <td>
                    <div class=\"timesheet-action\">
                                    <span>
                                        <i onclick=\"addWorklog()\" data-toggle=\"tooltip\" title=\"Add to logged\" class=\"fas fa-plus-square\"></i>
                                    </span>
                    </div>
                </td>
            </tr>
        {% endif %}
    {% endfor %}

                    </tbody>
                </table>

            </div>

            <div class=\"submit-worklog\">
                <input type=\"submit\" class=\"btn btn-info\">
            </div>
    {{ form_end(form) }}

    </div>




{% endblock %}


{% block javascripts %}
<script>

{#</script>#}
    </script>
{% endblock %}", "timesheet/timesheet.html.twig", "/Users/kabaljit/Documents/htdocs /web/uni/centaurus/templates/timesheet/timesheet.html.twig");
    }
}
