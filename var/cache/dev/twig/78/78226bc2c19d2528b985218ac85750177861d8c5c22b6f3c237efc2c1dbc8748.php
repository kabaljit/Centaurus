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

/* timesheet/approve.html.twig */
class __TwigTemplate_1b8ef8971e79cfe6db5a58114916af3734e842dac724871a5ded15c0a326da53 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/approve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timesheet/approve.html.twig"));

        $this->parent = $this->loadTemplate("admin-layout.html.twig", "timesheet/approve.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"main-content\">

        <div class=\"approval-dating\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">Select week</span>
                </div>
                <select class=\"form-control\">
                    <option selected>Week 17: 22-28 April</option>
                    <option>Week 18: 29 April-5 May</option>
                </select>
            </div>
        </div>

        <div class=\"timesheet-approvals\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "            <div class=\"timesheet-row\">
                <div class=\"timesheet-block timesheet-user\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "total_weekly_hour_worked", [], "any", false, false, false, 23), "html", null, true);
            echo "
                </div>

                <div class=\"timesheet-block\">
                    <div class=\"approval-hours\">
                        40/40 HR
                    </div>
                    <div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\"
                                 style=\"width:100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"timesheet-block\">
                    <div class=\"approval-buttons\">
                        <button class=\"btn btn-info\">Details</button>
                        <button class=\"btn btn-success\">Approve</button>
                        <button class=\"btn btn-danger\">Decline</button>
                    </div>
                </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "timesheet/approve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  91 => 23,  87 => 21,  83 => 20,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin-layout.html.twig' %}

{% block body %}

    <div class=\"main-content\">

        <div class=\"approval-dating\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">Select week</span>
                </div>
                <select class=\"form-control\">
                    <option selected>Week 17: 22-28 April</option>
                    <option>Week 18: 29 April-5 May</option>
                </select>
            </div>
        </div>

        <div class=\"timesheet-approvals\">
        {% for user in users %}
            <div class=\"timesheet-row\">
                <div class=\"timesheet-block timesheet-user\">
                    {{ user.total_weekly_hour_worked }}
                </div>

                <div class=\"timesheet-block\">
                    <div class=\"approval-hours\">
                        40/40 HR
                    </div>
                    <div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\"
                                 style=\"width:100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"timesheet-block\">
                    <div class=\"approval-buttons\">
                        <button class=\"btn btn-info\">Details</button>
                        <button class=\"btn btn-success\">Approve</button>
                        <button class=\"btn btn-danger\">Decline</button>
                    </div>
                </div>
            </div>

            {% endfor %}


        </div>
    </div>
{% endblock %}", "timesheet/approve.html.twig", "/Users/kabaljit/Documents/htdocs /web/uni/centaurus/templates/timesheet/approve.html.twig");
    }
}
