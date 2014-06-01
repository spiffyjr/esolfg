<?php

/* layout/layout.twig */
class __TwigTemplate_45aa5b9cfbe23c6c0d9a23d7c79dcfabdfba59a81eb8608b690426b75ee4aefd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>SpiffyFramework</title>

    <!-- Bootstrap -->
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ed11c06_0"
            $context["asset_url"] = "css/ed11c06_bootstrap_1.css";
            // line 15
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
            // asset "ed11c06_1"
            $context["asset_url"] = "css/ed11c06_bootstrap-theme_2.css";
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        } else {
            // asset "ed11c06"
            $context["asset_url"] = "css/ed11c06.css";
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
    <style>body { padding-top: 50px; }</style>
</head>
<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">SpiffyFramework</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class=\"container\">
    ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "</div><!-- /.container -->


";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "522b2b9_0"
            $context["asset_url"] = "js/522b2b9_jquery.min_1.js";
            // line 53
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "522b2b9_1"
            $context["asset_url"] = "js/522b2b9_bootstrap.min_2.js";
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "522b2b9"
            $context["asset_url"] = "js/522b2b9.js";
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 55
        echo "</body>
</html>
";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  115 => 55,  95 => 53,  91 => 48,  86 => 45,  84 => 44,  55 => 17,  35 => 15,  31 => 10,  20 => 1,);
    }
}
