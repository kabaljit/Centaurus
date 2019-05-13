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

/* login/loginUser.html.twig */
class __TwigTemplate_52cbb37c4feb128fb5dfe3065933dada263b05cabef8c7aa636de2e163e0fcaa extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'browserTitle' => [$this, 'block_browserTitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/loginUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/loginUser.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('browserTitle', $context, $blocks);
        echo "</title>

</head>
<body>

";
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "
<div class=\"login-container\">

    <div class=\"fdm-logo fdm-logo-login\">
    </div>

    <form>

        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"username-input\" name=\"username\">Username</span>
            </div>
            <input type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        </div>

        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"password-input\" name=\"password\">Password</span>
            </div>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 40
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

    </form>

</div>
    ";
        // line 58
        echo "        ";
        // line 59
        echo "            ";
        // line 60
        echo "
                ";
        // line 62
        echo "                    ";
        // line 63
        echo "                        ";
        // line 64
        echo "                    ";
        // line 65
        echo "
                    ";
        // line 67
        echo "                    ";
        // line 68
        echo "                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                    ";
        // line 71
        echo "
                    ";
        // line 73
        echo "                           ";
        // line 74
        echo "                    ";
        // line 75
        echo "
                    ";
        // line 77
        echo "                        ";
        // line 78
        echo "                    ";
        // line 79
        echo "                ";
        // line 80
        echo "
            ";
        // line 82
        echo "        ";
        // line 83
        echo "    ";
        // line 84
        echo "


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_browserTitle($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "browserTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "browserTitle"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/loginUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 8,  164 => 84,  162 => 83,  160 => 82,  157 => 80,  155 => 79,  153 => 78,  151 => 77,  148 => 75,  146 => 74,  144 => 73,  141 => 71,  139 => 70,  137 => 69,  135 => 68,  133 => 67,  130 => 65,  128 => 64,  126 => 63,  124 => 62,  121 => 60,  119 => 59,  117 => 58,  97 => 40,  84 => 30,  70 => 18,  64 => 16,  62 => 15,  59 => 14,  51 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block browserTitle %} {% endblock %}</title>

</head>
<body>

{# Content #}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

<div class=\"login-container\">

    <div class=\"fdm-logo fdm-logo-login\">
    </div>

    <form>

        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"username-input\" name=\"username\">Username</span>
            </div>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        </div>

        <div class=\"input-group login-input\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"password-input\" name=\"password\">Password</span>
            </div>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
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



</body>
</html>", "login/loginUser.html.twig", "/Users/developer/Desktop/Centaurus/templates/login/loginUser.html.twig");
    }
}
