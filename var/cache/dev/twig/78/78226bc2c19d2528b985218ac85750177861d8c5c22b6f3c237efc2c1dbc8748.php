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
            echo "            <div class=\"timesheet-row-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                <div class=\"timesheet-block timesheet-user\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 23), "html", null, true);
            echo "
                </div>

                <div class=\"timesheet-block\">
                    <div class=\"approval-hours\">
                        ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "totalWeeklyHourWorked", [], "any", false, false, false, 28) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "totalWeeklyHourWorked", [], "any", false, false, false, 28), "html", null, true);
                echo " ";
            } else {
                echo "0 ";
            }
            echo "/40 HR
                    </div>
                    <div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\"
                                 style=\"width:";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "totalWeeklyHourWorked", [], "any", false, false, false, 33) / 40) * 100), "html", null, true);
            echo "%;\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "totalWeeklyHourWorked", [], "any", false, false, false, 33) / 40) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                </div>


                <div class=\"timesheet-block\">
                    <div class=\"approval-buttons\">
                        <button class=\"btn btn-info\" onclick=\"toogleDetails(";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo ")\">Details</button>
                        <span class=\"approval-buttons-action\">
                            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "weeklyTimesheet", [], "any", false, false, false, 43) == "approved")) {
                // line 44
                echo "                                <span>Approved</span>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["user"], "weeklyTimesheet", [], "any", false, false, false, 45) == "rejected")) {
                // line 46
                echo "                                <span>Rejected</span>
                            ";
            } else {
                // line 48
                echo "                                <button class=\"btn btn-success\" onclick=\"approveTimesheet(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "')\">Approve</button>
                                <button class=\"btn btn-danger\" onclick=\"declineTimesheet(";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "')\">Decline</button>
                            ";
            }
            // line 51
            echo "                        </span>
                    </div>
                </div>
            </div>


                <div class=\"timesheet-worklog\"  style=\"display: none;\">
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
                        <tbody>
                        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "timesheets", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["timesheet"]) {
                // line 70
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["timesheet"], "worklogs", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
                    // line 71
                    echo "                                        <tr id=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 71), "html", null, true);
                    echo "\">
                                            <td id=\"worklog-";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 72), "html", null, true);
                    echo "-date\" name=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["timesheet"], "date", [], "any", false, false, false, 72), "format", [0 => "Y-m-d"], "method", false, false, false, 72), "html", null, true);
                    echo "-issue\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["timesheet"], "date", [], "any", false, false, false, 72), "format", [0 => "Y-m-d"], "method", false, false, false, 72), "html", null, true);
                    echo "</td>
                                            <td id=\"worklog-";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "-issue\" name=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "-issue\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "issue", [], "any", false, false, false, 73), "html", null, true);
                    echo "</td>
                                            <td id=\"worklog-";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "-start\" name=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "-start\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "start", [], "any", false, false, false, 74), "html", null, true);
                    echo "</td>
                                            <td id=\"worklog-";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "-end\" name=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "-end\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "end", [], "any", false, false, false, 75), "html", null, true);
                    echo "</td>
                                            <td id=\"worklog-";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "-duration\" name=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "-duration\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "duration", [], "any", false, false, false, 76), "html", null, true);
                    echo "</td>
                                            <td id=\"worklog-";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "-description\" name=\"worklog-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "-description\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "description", [], "any", false, false, false, 77), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
                        </tbody>
                    </table>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return array (  263 => 87,  252 => 81,  246 => 80,  233 => 77,  225 => 76,  217 => 75,  209 => 74,  201 => 73,  193 => 72,  188 => 71,  183 => 70,  179 => 69,  159 => 51,  152 => 49,  145 => 48,  141 => 46,  139 => 45,  136 => 44,  134 => 43,  129 => 41,  116 => 33,  103 => 28,  93 => 23,  87 => 21,  83 => 20,  65 => 4,  56 => 3,  34 => 1,);
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
            <div class=\"timesheet-row-{{ user.id }}\">
                <div class=\"timesheet-block timesheet-user\">
                    {{ user.name }} {{ user.surname}}
                </div>

                <div class=\"timesheet-block\">
                    <div class=\"approval-hours\">
                        {% if user.totalWeeklyHourWorked >0 %}{{ user.totalWeeklyHourWorked }} {% else %}0 {% endif %}/40 HR
                    </div>
                    <div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\"
                                 style=\"width:{{ user.totalWeeklyHourWorked /40*100 }}%;\" aria-valuenow=\"{{ user.totalWeeklyHourWorked /40*100 }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                </div>


                <div class=\"timesheet-block\">
                    <div class=\"approval-buttons\">
                        <button class=\"btn btn-info\" onclick=\"toogleDetails({{ user.id }})\">Details</button>
                        <span class=\"approval-buttons-action\">
                            {% if user.weeklyTimesheet == 'approved' %}
                                <span>Approved</span>
                            {% elseif user.weeklyTimesheet == 'rejected' %}
                                <span>Rejected</span>
                            {% else %}
                                <button class=\"btn btn-success\" onclick=\"approveTimesheet({{ user.id }}, '{{ date }}')\">Approve</button>
                                <button class=\"btn btn-danger\" onclick=\"declineTimesheet({{ user.id }}, '{{ date }}')\">Decline</button>
                            {% endif %}
                        </span>
                    </div>
                </div>
            </div>


                <div class=\"timesheet-worklog\"  style=\"display: none;\">
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
                        <tbody>
                        {% for timesheet in user.timesheets %}
                                    {% for work  in timesheet.worklogs %}
                                        <tr id=\"worklog-{{ work.id }}\">
                                            <td id=\"worklog-{{ work.id }}-date\" name=\"worklog-{{ timesheet.date.format('Y-m-d')}}-issue\">{{ timesheet.date.format('Y-m-d') }}</td>
                                            <td id=\"worklog-{{ work.id }}-issue\" name=\"worklog-{{ work.id }}-issue\">{{ work.issue }}</td>
                                            <td id=\"worklog-{{ work.id }}-start\" name=\"worklog-{{ work.id }}-start\">{{ work.start }}</td>
                                            <td id=\"worklog-{{ work.id }}-end\" name=\"worklog-{{ work.id }}-end\">{{ work.end }}</td>
                                            <td id=\"worklog-{{ work.id }}-duration\" name=\"worklog-{{ work.id }}-duration\">{{ work.duration }}</td>
                                            <td id=\"worklog-{{ work.id }}-description\" name=\"worklog-{{ work.id }}-description\">{{ work.description}}</td>
                                        </tr>
                                    {% endfor %}
                        {% endfor %}

                        </tbody>
                    </table>
                </div>

            {% endfor %}


        </div>
    </div>
{% endblock %}", "timesheet/approve.html.twig", "/Users/kabaljit/Desktop/Centaurus/templates/timesheet/approve.html.twig");
    }
}
