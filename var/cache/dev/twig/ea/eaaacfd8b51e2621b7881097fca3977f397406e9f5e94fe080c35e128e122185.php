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

/* security/login.html.twig */
class __TwigTemplate_277a19594233c4a983e97d1adb9053ad5c2725f284fdb8d6d21a96be6efe59d1 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "
<div class=\"login-container\">

    <div class=\"fdm-logo fdm-logo-login\">
    </div>

    <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method='POST'>
        ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 16
        echo "        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"username-input\" name=\"userName\">Username</span>
            </div>
            <input type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"User name\" required autofocus>
        </div>

        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"password-input\" name=\"_password\">Password</span>
            </div>
            <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >

        <div class=\"form-check login-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"remember-checkbox\" name=\"remember-me\">
            <label style=\"color:floralwhite\" class=\"form-check-label\" for=\"remember-checkbox\">Remember me</label>
        </div>

        <button type=\"submit\" class=\"btn btn-primary login-check\">Sign in</button>

        <div style=\"margin-left:16.5%\">
            <a href=\"#\" style=\"color: floralwhite\">Forgot password ?</a>
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"/homepage\" />
    </form>

</div>
    ";
        // line 48
        echo "        ";
        // line 49
        echo "            ";
        // line 50
        echo "
                ";
        // line 52
        echo "                    ";
        // line 53
        echo "                        ";
        // line 54
        echo "                    ";
        // line 55
        echo "
                    ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    ";
        // line 60
        echo "                    ";
        // line 61
        echo "
                    ";
        // line 63
        echo "                           ";
        // line 64
        echo "                    ";
        // line 65
        echo "
                    ";
        // line 67
        echo "                        ";
        // line 68
        echo "                    ";
        // line 69
        echo "                ";
        // line 70
        echo "
            ";
        // line 72
        echo "        ";
        // line 73
        echo "    ";
        // line 74
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 74,  188 => 73,  186 => 72,  183 => 70,  181 => 69,  179 => 68,  177 => 67,  174 => 65,  172 => 64,  170 => 63,  167 => 61,  165 => 60,  163 => 59,  161 => 58,  159 => 57,  156 => 55,  154 => 54,  152 => 53,  150 => 52,  147 => 50,  145 => 49,  143 => 48,  123 => 30,  110 => 20,  104 => 16,  98 => 14,  96 => 13,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}

<div class=\"login-container\">

    <div class=\"fdm-logo fdm-logo-login\">
    </div>

    <form action=\"{{ path('login') }}\" method='POST'>
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"username-input\" name=\"userName\">Username</span>
            </div>
            <input type=\"text\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"User name\" required autofocus>
        </div>

        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"password-input\" name=\"_password\">Password</span>
            </div>
            <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >

        <div class=\"form-check login-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"remember-checkbox\" name=\"remember-me\">
            <label style=\"color:floralwhite\" class=\"form-check-label\" for=\"remember-checkbox\">Remember me</label>
        </div>

        <button type=\"submit\" class=\"btn btn-primary login-check\">Sign in</button>

        <div style=\"margin-left:16.5%\">
            <a href=\"#\" style=\"color: floralwhite\">Forgot password ?</a>
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"/homepage\" />
    </form>

</div>
    {#<div class=\"row\" id=\"login-wrapper\">#}
        {#<div class=\"container-fluid\">#}
            {#<section class=\"form col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6\">#}

                {#<form method=\"post\">#}
                    {#{% if error %}#}
                        {#<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
                    {#{% endif %}#}

                    {#<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>#}
                    {#<label for=\"inputEmail\"  name=\"\" class=\"sr-only\">Email</label>#}
                    {#<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>#}
                    {#<label for=\"inputPassword\" class=\"sr-only\">Password</label>#}
                    {#<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>#}

                    {#<input type=\"hidden\" name=\"_csrf_token\"#}
                           {#value=\"{{ csrf_token('authenticate') }}\"#}
                    {#>#}

                    {#<button class=\"btn btn-lg btn-primary\" type=\"submit\">#}
                        {#Sign in#}
                    {#</button>#}
                {#</form>#}

            {#</section>#}
        {#</div>#}
    {#</div>#}


{% endblock %}
", "security/login.html.twig", "/Users/kabaljit/Desktop/Centaurus/templates/security/login.html.twig");
    }
}
